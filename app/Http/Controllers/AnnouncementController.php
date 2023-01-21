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

    public function form() {
        $announcements = Announcement::paginate();
        return view('dashboard.announcement.add', [

            'id'

        ]);
    }
    public function store(Request $request) {

        Announcement::create([
            'header' => $request->header,
            'sub_header' => $request->sub_header,
            'image' => $request->image,
            'description' => $request->description,
            'user_id' => 1,
        ]);
    }

}
