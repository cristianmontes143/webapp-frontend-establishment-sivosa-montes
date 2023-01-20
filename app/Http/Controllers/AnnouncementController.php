<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index() {
        $announcements = Announcement::paginate();
        // return new AnnouncementCollection(announcement::paginate());
        return view('dashboard.pages.table-announcement', ['data' => $announcements]);
    }
}
