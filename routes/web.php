<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllIPController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\custdashcontroller;
use App\Http\Controllers\ForgetPasswordManager;
use App\Http\Controllers\GeoController;
use App\Http\Controllers\Industcontroller;
use App\Http\Controllers\IPStatusController;
use App\Http\Controllers\Patcontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\tradecontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Utilcontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use App\Models\copyinfo;
use App\Models\geoinfo;
use App\Models\Indust;
use App\Models\info;
use App\Models\Patinfo;
use App\Models\Post;
use App\Models\User;
use App\Models\UtilInfo;


//Comment
Route::get('/', [AuthController::class, 'index'])->name('welcome'); // Route to welcome page

Route::get('/help', [AuthController::class, 'help'])->name('help'); // Route to welcome page

Route::get('/pdf', function () {
    return view('pdf');
});

Route::get('/register', [AuthController::class, 'loadRegister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'loadLogin'])->name('login-page');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// ********** Super Admin Routes *********
Route::group(['prefix' => 'super-admin', 'middleware' => ['web', 'auth', 'admin.access']], function () {
    Route::get('/dashboard', [SuperAdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/users', [SuperAdminController::class, 'users'])->name('superAdminUsers');
    Route::get('/manage-role', [SuperAdminController::class, 'manageRole'])->name('manageRole');
    Route::post('/update-role', [SuperAdminController::class, 'updateRole'])->name('updateRole');
    // Superadmin profile edit routes
    Route::get('/profile/edit/{user}', [SuperAdminController::class, 'profile'])->name('superadmin.profile.edit');
    // Superadmin user edit routes
    Route::get('/profile/user/show/{id}', [SuperAdminController::class, 'UserProfile'])->name('superadmin.profile.user');
    // Superadmin user index routes
    Route::get('/profile/user/', [SuperAdminController::class, 'UserIndex'])->name('superadmin.user.index');
    // Superadmin user edit role
    Route::get('/user/role/', [SuperAdminController::class, 'UserRole'])->name('superadmin.user.role');
    Route::post('/user/role/', [SuperAdminController::class, 'UseRroleStore'])->name('superadmin.user.role.store');
    // Superadmin user create
    Route::get('/user/creat/', [SuperAdminController::class, 'UserCreate'])->name('superadmin.user.create');
    Route::post('/user/create/', [SuperAdminController::class, 'UserRegister'])->name('superadmin.user.store');
    // Superadmin user edit role destroy
    Route::post('/users/search/', [SuperAdminController::class, 'UserSearch'])->name('superadmin.user.search');
    // Superadmin user destroy
    Route::delete('/users/delete/{id}', [SuperAdminController::class, 'destroy'])->name('superadmin.user.delete');

    // Superadmin profile edit routes
    Route::post('/profile/edit/{user}', [SuperAdminController::class, 'ProfileUpdate'])->name('superadmin.profile.update');
    // Categories routes
    Route::resource('categories', CategoryController::class);
    Route::post('/category/search/', [CategoryController::class, 'CategorySearch'])->name('superadmin.category.search');

    // Tags routes
    Route::resource('tags', TagController::class);
    Route::post('/tags/search/', [TagController::class, 'TagSearch'])->name('superadmin.tag.search');
    // Posts routes
    Route::resource('posts', PostController::class);
    // Superadmin post activation
    Route::get('/posts/{post}/activate', [PostController::class, 'activate'])->name('posts.activate');

    // Superadmin post detail show
    Route::get('/posts/{id}/show', [PostController::class, 'PostShow'])->name('posts.detail');

    // Superadmin  Mark unread notifications as read
    Route::get('/notifications', [SuperAdminController::class, 'showUnreadNotifications'])->name('superadmin.markasread');
    // logs
    Route::get('/logs', [SuperAdminController::class, 'showLogs'])->name('logs.index');

    Route::get('/download-logs', function () {
        $logPath = storage_path('logs/laravel.log');

        if (file_exists($logPath)) {
            return response()->download($logPath, 'logs_' . date('Y-m-d') . '.txt', ['Content-Type' => 'text/plain']);
        }

        return response()->json(['message' => 'Log file not found.'], 404);
    })->name('download-logs');

    Route::group(['middleware' => ['web', 'auth']], function () {
        // Superadmin AllIp routes
        Route::get('/All-Ip/all/', [SuperAdminController::class, 'AllIP'])->name('superadmin.ip.all');
        Route::get('/All-Ip/deadline/', [SuperAdminController::class, 'DeadlineIP'])->name('superadmin.ip.deadline');
        Route::get('/All-Ip/Approved/', [SuperAdminController::class, 'ApproveIP'])->name('superadmin.ip.approved');
        Route::get('/All-Ip/Pending/', [SuperAdminController::class, 'PendingIP'])->name('superadmin.ip.pending');
        Route::get('/All-Ip/Denied/', [SuperAdminController::class, 'DeniedIP'])->name('superadmin.ip.denied');

        Route::get('/All-Ip/approve/{id}/{formtype}', [SuperAdminController::class, 'approve'])->name('superadmin.entry.approve');
        Route::get('/All-Ip/Denied/{id}/{formtype}', [SuperAdminController::class, 'deny'])->name('superadmin.entry.deny');
        // <!-- Route::post('/change-status/{entry}',  [SuperAdminController::class, 'changeStatus'])->name('change-status'); -->
        Route::post('/All-Ip/get-analytics-data', [AllIPController::class, 'getData'])->name('analytics.data');
        Route::post('/All-Ip/get-analytics-data/post', [AllIPController::class, 'getDataPost'])->name('analytics.data.post');
        Route::post('/All-Ip/get-analytics-data/line', [AllIPController::class, 'liner'])->name('analytics.data.line');
        Route::post('/All-Ip/get-analytics-data/mostpopular', [AllIPController::class, 'mostpopular'])->name('analytics.data.mostpopular');


        // liner
        Route::get('/All-Ip/analytical', function () {
            return view('admin.analytics.index');
        })->name('analytica.page');

        Route::put('/entry/update-status/{id}/{formType}', [SuperAdminController::class, 'updateStatus'])->name('entry.update-status');
        Route::get('/entry/show/{id}/{form}', [SuperAdminController::class, 'EntryShow'])->name('superadmin.forms.show');
        Route::get('entry/geo/download/{formId}/{type}', [GeoController::class, 'download'])->name('geo.file.download');
        Route::get('entry/trade/download/{formId}/{type}', [tradecontroller::class, 'download'])->name('tread.file.download');
        Route::get('/ipstatus/{formType}/{id}', [IPStatusController::class, 'show'])->name('superadmin.ips.show');
        Route::post('/entry/search/', [AllIPController::class, 'Search'])->name('superadmin.entries.search');
        Route::post('/entry/comment/', [AllIPController::class, 'Comment'])->name('superadmin.entries.comment');
    });
});

// ********** Sub Admin Routes *********
Route::group(['prefix' => 'sub-admin', 'middleware' => ['web', 'admin.access']], function () {
    Route::get('/dashboard', [SuperAdminController::class, 'dashboard'])->name('dashboard');
});

// ********** Admin Routes *********
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'isAdmin']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);

});

// ********** User Routes *********
Route::group(['middleware' => ['web', 'isUser']], function () {
    Route::get('/dashboard', [UserController::class, 'dashboard']);
        // Route to download the generated certificate
Route::get('user/download-certificate/{filename}', [UserController::class, 'downloadCertificate'])->name('download.certificate');

});
// *********Forget Password Routes********
Route::get("/forget-password", [ForgetPasswordManager::class, "forgetPassword"])
    ->name("forget.password");
Route::post("/forget-password", [ForgetPasswordManager::class, "forgetPasswordPost"])
    ->name("forget.password.post");
Route::get("/reset.password/{token}", [ForgetPasswordManager::class, "resetPassword"])
    ->name("reset.password");
Route::post("/reset-password", [ForgetPasswordManager::class, "resetPasswordPost"])
    ->name("reset.password.post");

//****** Routes to different pages from welcome page *******/

// Route::get('/customerdash', function () {
//     return view('customerdash');
// })->name('customerdash');

Route::get('/notification', function () {
    return view('notification');
})->name('notification');

Route::get('/iplist', function () {
    return view('iplist');
})->name('iplist');

// --------------------- new route  ---------------------//

Route::get('/admin-layout', function () {
    return view('admin.test');
});

// Route::get('/admin-dashboard', function () {
//     return view('admin.dashboard');
// })->name('dashboard');

Route::get('/admin-category-new', function () {
    return view('admin.category.add');
})->name('category.add');

Route::get('/admin-category-edit', function () {
    return view('admin.category.edit');
})->name('category.edit');

Route::get('/admin-category-index', function () {
    return view('admin.category.index');
})->name('category.index');




Route::get('/admin-post-new', function () {
    return view('admin.post.add');
})->name('post.add');

Route::get('/admin-post-edit', function () {
    return view('admin.post.edit');
})->name('post.edit');

Route::get('/admin-post-index', function () {
    return view('admin.post.index');
})->name('post.index');

Route::get('/admin-post-show', function () {
    return view('admin.post.index');
})->name('post.show');



Route::get('/admin-user-index', function () {
    return view('admin.user.index');
})->name('user.index');



Route::get('/admin-profile', function () {
    return view('admin.profile');
})->name('admin.profile');


// Route::get('/user-forum', function () {
//     return view('user.forum');
// })->name('user.forum');

// user post detail show
Route::get('/user-forum', [PostController::class, 'Forum'])->name('user.forum');
// user post detail show
Route::get('/posts/{id}/show', [PostController::class, 'UserPostShow'])->name('user.posts.detail');
// user post like
Route::get('/posts/{post}/like', [PostController::class, 'like'])->name('posts.like');
// user post unlike
Route::get('/posts/{post}/unlike', [PostController::class, 'unlike'])->name('posts.unlike');
// user post comment
Route::post('/posts/{post}/comments', [PostController::class, 'comment'])->name('posts.comment');
// user post comment
Route::get('/posts/create', [PostController::class, 'UserPostcreate'])->name('user.posts.create');
Route::post('/posts/create', [PostController::class, 'Store'])->name('user.posts.store');
// user my post
Route::get('/user/{user}/my-post', [PostController::class, 'UserMyPost'])->name('user.mypost');
// user my post edit
Route::get('/user/my-post/{post}/edit', [PostController::class, 'edit'])->name('user.posts.edit');
Route::put('/user/my-post/{post}/update', [PostController::class, 'update'])->name('user.posts.update');
Route::get('/user/my-post/{post}/delete', [PostController::class, 'destroy'])->name('user.posts.destroy');
// user search post by title
Route::post('/posts/search', [PostController::class, 'UserPostSearch'])->name('user.posts.search');
// user search post by category
Route::get('/posts/search/category/{category}', [PostController::class, 'UserPostSearchByCategory'])->name('user.posts.category');
// user profilfe
Route::get('/user/profile/{id}', [UserController::class, 'UserProfile'])->name('user.profile');
// user profile edit routes
Route::post('/user/profile//{id}', [SuperAdminController::class, 'ProfileUpdate'])->name('user.profile.update');
// user Mark unread notifications as read
Route::get('/notifications', [SuperAdminController::class, 'showUnreadNotifications'])->name('user.markasread');


// ********** new info pages *********//

    Route::get('/patentinfo', function () {
        return view('patentinfo');
    })->name('patentinfo');

    Route::get('/trademarkinfo', function () {
        return view('trademarkinfo');
    })->name('trademarkinfo');

    Route::get('/geographicalinfo', function () {
        return view('geographicalinfo');
    })->name('geographicalinfo');

    Route::get('/industrialinfo', function () {
        return view('industrialinfo');
    })->name('industrialinfo');

    Route::get('/copyrightinfo', function () {
        return view('copyrightinfo');
    })->name('copyrightinfo');

    Route::get('/utilityinfo', function () {
        return view('utilityinfo');
    })->name('utilityinfo');

    Route::get('/contactus', function () {
        return view('contactus');
    })->name('contactus');


//-----------------Start::new file routes-----------------
Route::group(['prefix' => 'user'], function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [custdashcontroller::class, 'index'])->name('custdash');
        Route::get('/AllIPs', [AllIPController::class, 'index'])->name('AllIPs');
        Route::get('/ipstatus/{formType}/{id}', [IPStatusController::class, 'Show'])->name('ipstatus.show');

        Route::get('/ip-edit/{formType}/{id}', [IPStatusController::class, 'Edit'])->name('ipstatus.edit');

    });





    Route::get('/AllIps', function () {
        return view('AllIps');
    })->name('AllIps');

    Route::get('/about-us', function () {
        return view('about-us');
    })->name('about-us');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/geographic', function () {
            return view('geographic');
        })->name('geographic');

        Route::get('/copyform', function () {
            return view('copyform');
        })->name('copyform');

        Route::get('/trade', function () {
            return view('trade');
        })->name('trade');

        Route::get('/utility', function () {
            return view('utility');
        })->name('utility');

        Route::get('/patent', function () {
            return view('patent');
        })->name('patent');

        Route::get('/industrialForm', function () {
            return view('industrialForm');
        })->name('industrialForm');
    });


    Route::get('/thankyou', function () {
        return view('thankyou');
    })->name('thankyou');
    


    // ********** Admin Routes *********
    Route::group(['middleware' => ['web', 'auth']], function () {
        Route::post('/saveItemRoutetrade', [tradecontroller::class, 'saveItemtrade'])->name('saveItemtrade');
        Route::post('/saveItemRoute', [GeoController::class, 'saveItem'])->name('saveItem');
        Route::post('/saveItemRouteUtil', [Utilcontroller::class, 'saveItemUtil'])->name('saveItemUtil');
        Route::post('/saveItemRoutePatent', [Patcontroller::class, 'saveItemPatent'])->name('saveItemPatent');
        Route::post('/saveItemRouteIndust', [Industcontroller::class, 'saveItemIndust'])->name('saveItemIndust');
        Route::post('/saveItemRouteCopy', [CopyController::class, 'saveItemCopy'])->name('saveItemCopy');
        // ********** Update  *********
        Route::put('/saveItemRoutetrade-edit/{formType}/{id}', [tradecontroller::class, 'Update'])->name('saveItemtrade.update');
        Route::put('/saveItemRoute-edit/{formType}/{id}', [GeoController::class, 'Update'])->name('saveItem.update');
        Route::put('/saveItemRouteUtil-edit/{formType}/{id}', [Utilcontroller::class, 'Update'])->name('saveItemUtil.update');
        Route::put('/saveItemRoutePatent-edit/{formType}/{id}', [Patcontroller::class, 'Update'])->name('saveItemPatent.update');
        Route::put('/saveItemRouteIndust-edit/{formType}/{id}', [Industcontroller::class, 'Update'])->name('saveItemIndust.update');
        Route::put('/saveItemRouteCopy-edit/{formType}/{id}', [CopyController::class, 'Update'])->name('saveItemCopy.update');

    });

     // --------------------- Route to switch language---------------------//

     Route::get('lang/{locale}', function ($locale) {
        if(in_array($locale, ['en', 'ms'])) {
            session(['locale' => $locale]);
        }
        return redirect ()->back();
    })->name('lang.switch');

    Route::post('/translate-content', [PostController::class, 'translateContent'])->name('translate.content');



});
//-----------------End::new file routes-----------------
