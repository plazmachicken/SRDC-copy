<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\copyinfo;
use App\Models\geoinfo;
use App\Models\Indust;
use App\Models\info;
use App\Models\Patinfo;
use App\Models\Post;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use App\Models\UtilInfo;
use App\Notifications\CommentFormNotification;
use App\Notifications\EntryDeadlineNotification;
use App\Notifications\UpdateFormNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Log;
use setasign\Fpdi\Fpdi;
use App\Notifications\CertificateApproved;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('isSuperAdmin')->only(['UserRole', 'UseRroleStore', 'UserRegister', 'showLogs']); // Apply auth middleware to all methods except publicMethod

    }
    public function dashboard()
    {
        // return view('super-admin.dashboard');
        $user = User::all()->count();
        $tag = Tag::all()->count();
        $post = Post::all()->count();
        $category = Category::all()->count();



        $utilEntries = UtilInfo::all()->count();
        $patEntries = Patinfo::all()->count();
        $patEntries = geoinfo::all()->count();
        $industEntries = Indust::all()->count();
        $tradeEntries = info::all()->count();
        $copyEntries = copyinfo::all()->count();

        $allIp = $utilEntries + $patEntries + $patEntries + $industEntries + $tradeEntries + $copyEntries;


        return view('admin.dashboard', compact('user', 'tag', 'category', 'post', 'allIp'));
    }

    public function users()
    {
        $users = User::with('roles')->where('role', '!=', 1)->get();
        return view('super-admin.users', compact('users'));
    }

    public function manageRole()
    {
        $users = User::where('role', '!=', 1)->get();
        $roles = Role::all();
        return view('super-admin.manage-role', compact(['users', 'roles']));
    }

    public function updateRole(Request $request)
    {
        User::where('id', $request->user_id)->update([
            'role' => $request->role_id
        ]);
        return redirect()->back();
    }

    public function profile(User $user)
    {
        return view('admin.profile', compact('user'));
    }

    public function ProfileUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);
        // dd($user);
        if (Auth::user()->id != $user->id && Auth::user()->role == '2') {
            return redirect()->route('superadmin.profile.edit', $user)
                ->with('error', 'You dont have access to this privilage!');
        }
        if ($request->type == 'info') {

            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'mobile' => 'required|string',
                'address' => 'required|string',
            ]);

            if (!is_null($request->image)) {
                $request->validate([
                    'image' => 'image|mimes:jpeg,png,PNJ,jpg,JPG,gif|max:2048', // validate image upload
                ]);

                if ($request->hasFile('image')) {
                    if ($user->image) {
                        // Delete the old image
                        Storage::delete('public/images/profile' . $user->image);
                    }

                    $image = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images/profile'), $imageName);
                    $user->image = $imageName;
                }
            }

            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->address = $request->address;

            $user->save();

            // Log the user update
            Log::info('User Update', [
                'user_email' => $user->email,
                'user_id' => $user->id,
            ]);

            if (Auth::user()->role == '1') {
                return redirect()->route('superadmin.profile.edit', $user)
                    ->with('success', 'Profile updated successfully');
            } elseif (Auth::user()->role == '2') {
                return redirect()->route('superadmin.profile.edit', $user)
                    ->with('success', 'Profile updated successfully');
            } else {
                return redirect()->route('user.profile', $user)
                    ->with('success', 'Profile updated successfully');
            }


        } elseif ($request->type == 'password') {
            if (!is_null($request->password)) {
                $request->validate([
                    'password' => 'required|string|min:8|confirmed',
                    'current_password' => 'required|string|min:8',
                ]);

                if (!Hash::check($request->current_password, $user->password)) {

                    return back()->withErrors(['current_password' => 'The provided password does not match your current password.']);
                }

                $user->password = Hash::make($request->password);
                $user->save();

                if (Auth::user()->role == '1' || Auth::user()->role == '2') {
                    return redirect()->route('superadmin.profile.edit', $user)
                        ->with('success', 'Password updated successfully');
                } else {
                    return redirect()->route('user.profile', $user)
                        ->with('success', 'Password updated successfully');
                }
            }
        }




    }

    public function UserProfile(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.show', compact('user'));

    }

    public function UserIndex()
    {
        $users = User::paginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function UserCreate()
    {
        return view('admin.user.add');
    }

    public function UserRegister(Request $request)
    {
        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|max:100|unique:users',
            'password' => 'string|required|confirmed|min:6'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Log the user creation
        Log::info('User Created', [
            'user_email' => $user->email,
            'user_id' => $user->id,
        ]);

        return back()->with('success', 'Your Registration has been successful.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        // Log the user delete
        Log::info('User Deleted', [
            'user_email' => $user->email,
            'user_id' => $user->id,
        ]);

        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully');
    }

    public function UserRole()
    {
        $users = User::all();
        return view('admin.user.role', compact('users'));
    }

    public function UseRroleStore(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'role' => 'required',
        ]);
        $user = User::findOrFail($request->user);
        $user->role = $request->role;

        // Log the user delete
        Log::info('User Role Updated', [
            'user_email' => $user->email,
            'user_id' => $user->id,
            'role' => $user->role == 1 ? 'Super Admin' : ($user->role == 2 ? 'Admin' : 'User'),
        ]);

        $user->save();
        return redirect()->back()->with('success', 'User role updated successfully');
    }

    // user search
    public function UserSearch(Request $request)
    {
        // Get the search query parameters
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->email;

        // Query users based on the search parameters
        $users = User::query();

        if (!empty($id)) {
            $users->where('id', $id);
        }

        if (!empty($name)) {
            $users->where('name', 'like', '%' . $name . '%');
        }

        if (!empty($email)) {
            $users->where('email', 'like', '%' . $email . '%');
        }

        // Fetch the users based on the search criteria
        $users = $users->paginate(10);

        // Return the view with search results

        return view('admin.user.index', compact('users'));

    }

    public function showUnreadNotifications()
    {
        // Retrieve unread notifications for the authenticated user
        $unreadNotifications = auth()->user()->unreadNotifications;

        // Mark unread notifications as read
        auth()->user()->unreadNotifications->markAsRead();

        // You can now pass $unreadNotifications to your view or process them as needed
        return redirect()->back();
        // return view('notifications.show', ['unreadNotifications' => $unreadNotifications]);
    }

    public function PendingIP()
    {
        $utilEntries = UtilInfo::take(10000)->get();
        $patEntries = Patinfo::take(10000)->get();
        $geoEntries = geoinfo::take(10000)->get();
        $industEntries = Indust::take(10000)->get();
        $tradeEntries = info::take(10000)->get();
        $copyEntries = copyinfo::take(10000)->get();
        $allEntries = collect();
        $allEntries = $allEntries->merge($utilEntries)
            ->merge($patEntries)
            ->merge($geoEntries)
            ->merge($industEntries)
            ->merge($tradeEntries)
            ->merge($copyEntries)
            ->sortByDesc('created_at')
            ->where('is_complete', 'Pending')
            ->take(100000);
        return view('admin.allip.pending', ['allEntries' => $allEntries]);

    }

    public function AllIP()
    {
        $utilEntries = UtilInfo::where('is_complete', 'Pending')->get();
        $patEntries = Patinfo::where('is_complete', 'Pending')->get();
        $geoEntries = geoinfo::where('is_complete', 'Pending')->get();
        $industEntries = Indust::where('is_complete', 'Pending')->get();
        $tradeEntries = info::where('is_complete', 'Pending')->get();
        $copyEntries = copyinfo::where('is_complete', 'Pending')->get();



        return view('admin.allip.all', compact('utilEntries', 'patEntries', 'geoEntries', 'industEntries', 'tradeEntries', 'copyEntries'));

    }
    public function DeadlineIP()
    {
        $utilEntries = UtilInfo::where('is_complete', 'Pending')->get();
        $patEntries = Patinfo::where('is_complete', 'Pending')->get();
        $geoEntries = geoinfo::where('is_complete', 'Pending')->get();
        $industEntries = Indust::where('is_complete', 'Pending')->get();
        $tradeEntries = info::where('is_complete', 'Pending')->get();
        $copyEntries = copyinfo::where('is_complete', 'Pending')->get();


        foreach ($copyEntries as $entry) {
            $deadline = Carbon::parse($entry->created_at)->addDays(14);
            $entry->remaining_days = Carbon::now()->diffInDays($deadline, false);

        }
        foreach ($tradeEntries as $entry) {
            $deadline = Carbon::parse($entry->created_at)->addDays(14);
            $entry->remaining_days = Carbon::now()->diffInDays($deadline, false);

        }
        foreach ($industEntries as $entry) {
            $deadline = Carbon::parse($entry->created_at)->addDays(14);
            $entry->remaining_days = Carbon::now()->diffInDays($deadline, false);

        }
        foreach ($geoEntries as $entry) {
            $deadline = Carbon::parse($entry->created_at)->addDays(14);
            $entry->remaining_days = Carbon::now()->diffInDays($deadline, false);

        }
        foreach ($patEntries as $entry) {
            $deadline = Carbon::parse($entry->created_at)->addDays(14);
            $entry->remaining_days = Carbon::now()->diffInDays($deadline, false);

        }
        foreach ($utilEntries as $entry) {
            $deadline = Carbon::parse($entry->created_at)->addDays(14);
            $entry->remaining_days = Carbon::now()->diffInDays($deadline, false);

        }
        return view('admin.allip.deadline', compact('utilEntries', 'patEntries', 'geoEntries', 'industEntries', 'tradeEntries', 'copyEntries'));

    }
    public function ApproveIP()
    {
        $utilEntries = UtilInfo::take(10000)->get();
        $patEntries = Patinfo::take(10000)->get();
        $geoEntries = geoinfo::take(10000)->get();
        $industEntries = Indust::take(10000)->get();
        $tradeEntries = info::take(10000)->get();
        $copyEntries = copyinfo::take(10000)->get();

        $allEntries = collect();
        $allEntries = $allEntries->merge($utilEntries)
            ->merge($patEntries)
            ->merge($geoEntries)
            ->merge($industEntries)
            ->merge($tradeEntries)
            ->merge($copyEntries)
            ->sortByDesc('created_at')
            ->where('is_complete', 'approved')
            ->take(100000);

        return view('admin.allip.approved', ['allEntries' => $allEntries]);

    }

    public function DeniedIP()
    {
        $utilEntries = UtilInfo::take(10000)->get();
        $patEntries = Patinfo::take(10000)->get();
        $geoEntries = geoinfo::take(10000)->get();
        $industEntries = Indust::take(10000)->get();
        $tradeEntries = info::take(10000)->get();
        $copyEntries = copyinfo::take(10000)->get();

        $allEntries = collect();
        $allEntries = $allEntries->merge($utilEntries)
            ->merge($patEntries)
            ->merge($geoEntries)
            ->merge($industEntries)
            ->merge($tradeEntries)
            ->merge($copyEntries)
            ->sortByDesc('created_at')
            ->where('is_complete', 'denied')
            ->take(100000);



        return view('admin.allip.denied', ['allEntries' => $allEntries]);

    }

    public function updateStatus(Request $request, $id, $formid)
    {
        // approved
        // denied
        try {
            switch ($formid) {
                case 1:
                    $entry = geoinfo::findOrFail($id);
                    break;
                case 2:
                    $entry = info::findOrFail($id);
                    break;
                case 3:
                    $entry = copyinfo::findOrFail($id);
                    break;
                case 4:
                    $entry = Indust::findOrFail($id);
                    break;
                case 5:
                    $entry = Patinfo::findOrFail($id);
                    break;
                case 6:
                    $entry = UtilInfo::findOrFail($id);
                    break;
                default:
                    // Handle default case or throw an error
                    break;
            }
            $entry->is_complete = $request->status;


            if (!is_null($request->content)) {
                $entry->comment = $request->content;
                // Get aplicant of the form
                $aplicant = User::findOrFail($entry->user_id);
                // Send notification to users
                $aplicant->notify(new CommentFormNotification($entry));
            }
            $entry->approved_date =  now()->format('Y-m-d');
            $entry->save();
            $aplicant = User::findOrFail($entry->user_id);
            $inventiontitle =  $entry->inventiontitle;

            if ($request->status === 'approved') {
                $this->generateCertificate($aplicant->name, $aplicant, $inventiontitle);
            }
            // Get aplicant of the form
            $aplicant = User::findOrFail($entry->user_id);
            // Send notification to users
            $aplicant->notify(new UpdateFormNotification($entry));
            return response()->json(data: ['message' => 'Status updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }
    public function EntryShow($id, $form)
    {
        // dd($id, $form);
        switch ($form) {
            case 1:
                $entry = geoinfo::where('id', $id)->where('formType', $form)->first();
                break;
            case 2:
                $entry = info::where('id', $id)->where('formType', $form)->first();
                break;
            case 3:
                $entry = copyinfo::where('id', $id)->where('formType', $form)->first();
                break;
            case 4:
                $entry = Indust::where('id', $id)->where('formType', $form)->first();
                break;
            case 5:
                $entry = Patinfo::where('id', $id)->where('formType', $form)->first();
                break;
            case 6:
                $entry = UtilInfo::where('id', $id)->where('formType', $form)->first();
                break;
            default:
                // Handle default case or throw an error
                break;

        }

        // dd( $entry );

        $allEntries = collect();
        $allEntries = $allEntries->merge($entry);
        return view('admin.allip.show', ['entry' => $entry, 'formType' => $form]);
    }

    //show logs
    public function showLogs()
    {
        // // Read log entries from the log file
        // $logs = file(storage_path('logs/laravel.log'));

        // // Optionally, reverse the log entries to show the latest ones first
        // $logs = array_reverse($logs);

        // return view('admin.logs', compact('logs'));

        // Define the log types you want to filter
        $logTypes = [
            'User Created',
            'User Updated',
            'User Deleted',
            'Post Create',
            'Post Updated',
            'Post Deleted',
            'Tag Created',
            'Tag Updated',
            'Tag Deleted',
            'Category Created',
            'Category Updated',
            'Category Deleted',
            'User Logged In',
            'User Logged Out'
        ];

        // Read log entries from the log file
        $logs = file(storage_path('logs/laravel.log'));

        // Filter logs based on the defined log types
        $logs = array_filter($logs, function ($log) use ($logTypes) {
            foreach ($logTypes as $type) {
                if (stripos($log, $type) !== false) {
                    return true;
                }
            }
            return false;
        });

        // Optionally, reverse the log entries to show the latest ones first
        $logs = array_reverse($logs);

        return view('admin.logs', compact('logs'));
    }

    function generateCertificate($name, $user, $inventiontitle)
    {
        // Get the current date in YYYY-MM-DD format
        $date = date('Y-m-d');

        $certificatePath = public_path('assets/img/certificate.pdf');

        if (!file_exists($certificatePath)) {
            return response()->json(['error' => 'Certificate file not found'], 404);
        }

        // Load the PDF
        $pdf = new Fpdi();

        // Add a new page in portrait orientation
        $pdf->AddPage('L', 'A4'); // 'P' for portrait, 'A4' for the size

        $pdf->setSourceFile($certificatePath);
        $tplIdx = $pdf->importPage(1);
        $pdf->useTemplate($tplIdx);

        // Set the font for the name and date
        $pdf->SetFont('Helvetica', 'B', 24);
        $pdf->SetTextColor(0, 0, 0);

        // Add the recipient's name to the certificate
        $pdf->SetXY(20, 100); // Adjust X and Y coordinates as needed
        $pdf->Cell(0, 10, $name, 0, 1, 'C');

        // Add the date to the certificate
        $pdf->SetFont('Helvetica', '', 16);
        $pdf->SetXY(145, 160); // Adjust X and Y coordinates as needed
        $pdf->Cell(0, 10, $date, 0, 1, 'C');

        // Add the name to the certificate
        $pdf->SetFont('Helvetica', '', 16);
        $pdf->SetXY(60, 117); // Adjust X and Y coordinates as needed
        $pdf->Cell(0, 10, $inventiontitle, 0, 1, 'C');

        // Define the path to save the new certificate
        $outputDir = public_path('assets/certificate');
        // Format the output filename to include both the name and date
        $outputPath = $outputDir . '/certificate_' . $name . '_' . $date . '.pdf';


        // Prepare the download link
        $downloadLink = route('download.certificate', ['filename' => basename($outputPath)]);
        // Send the notification
        $user->notify(new CertificateApproved($downloadLink));

        // Create the directory if it does not exist
        if (!file_exists($outputDir)) {
            mkdir($outputDir, 0777, true);
        }


        $pdf->Output('F', $outputPath);

        return response()->json(['success' => 'Certificate generated successfully', 'path' => $outputPath]);
    }


}
