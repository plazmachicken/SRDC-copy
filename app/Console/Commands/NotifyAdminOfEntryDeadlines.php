<?php

namespace App\Console\Commands;

use App\Models\copyinfo;
use App\Models\geoinfo;
use App\Models\Indust;
use App\Models\info;
use App\Models\Patinfo;
use App\Models\User;
use App\Models\UtilInfo;
use App\Notifications\EntryDeadlineNotification;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class NotifyAdminOfEntryDeadlines extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:entry-deadlines';

    protected $description = 'Notify admin users of entries nearing their deadlines';
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $entries = copyinfo::all();

        foreach ($entries as $entry) {
            $deadline = Carbon::parse($entry->created_at)->addDays(14);
            $entry->remaining_days = Carbon::now()->diffInDays($deadline, false);

            if ($entry->remaining_days <= 5) {
                $admins = User::where('role', 1)->get();
                Notification::send($admins, new EntryDeadlineNotification($entry));
            }
        }

        $entries = info::all();

        foreach ($entries as $entry) {
            $deadline = Carbon::parse($entry->created_at)->addDays(14);
            $entry->remaining_days = Carbon::now()->diffInDays($deadline, false);

            if ($entry->remaining_days <= 5) {
                $admins = User::where('role', 1)->get();
                Notification::send($admins, new EntryDeadlineNotification($entry));
            }
        }

        $entries = Indust::all();

        foreach ($entries as $entry) {
            $deadline = Carbon::parse($entry->created_at)->addDays(14);
            $entry->remaining_days = Carbon::now()->diffInDays($deadline, false);

            if ($entry->remaining_days <= 5) {
                $admins = User::where('role', 1)->get();
                Notification::send($admins, new EntryDeadlineNotification($entry));
            }
        }

        $entries = geoinfo::all();

        foreach ($entries as $entry) {
            $deadline = Carbon::parse($entry->created_at)->addDays(14);
            $entry->remaining_days = Carbon::now()->diffInDays($deadline, false);

            if ($entry->remaining_days <= 5) {
                $admins = User::where('role', 1)->get();
                Notification::send($admins, new EntryDeadlineNotification($entry));
            }
        }


        $entries = Patinfo::all();

        foreach ($entries as $entry) {
            $deadline = Carbon::parse($entry->created_at)->addDays(14);
            $entry->remaining_days = Carbon::now()->diffInDays($deadline, false);

            if ($entry->remaining_days <= 5) {
                $admins = User::where('role', 1)->get();
                Notification::send($admins, new EntryDeadlineNotification($entry));
            }
        }

        $entries = UtilInfo::all();

        foreach ($entries as $entry) {
            $deadline = Carbon::parse($entry->created_at)->addDays(14);
            $entry->remaining_days = Carbon::now()->diffInDays($deadline, false);

            if ($entry->remaining_days <= 5) {
                $admins = User::where('role', 1)->get();
                Notification::send($admins, new EntryDeadlineNotification($entry));
            }
        }

        return 0;


    }
}
