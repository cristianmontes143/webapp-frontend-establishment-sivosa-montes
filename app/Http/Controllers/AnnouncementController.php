<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index() {
        $announcements = Announcement::all();
        return view('dashboard.pages.table-announcement', ['data' => $announcements]);
    }

    public function form() {
        $announcements = Announcement::paginate();
        return view('dashboard.announcement.add', [

            'id'

        ]);
    }
    public function store(Request $request) {

        $request->validate([
            'header' => ['required', 'string', 'max:255'],
            'sub_header' => ['required', 'string', 'max:255'],  
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        Announcement::create([
            'header' => $request->header,
            'sub_header' => $request->sub_header,
            'image' => $imageName,
            'description' => $request->description,
            'user_id' => 1,
        ]);

        session()->flash('status', 'Announcement added');

        return redirect('dashboard/announcement');
    }

    public function show($id) {
        $announcements = Announcement::find($id);
        return view('dashboard.announcement.update', [

            'header' => 'Update Header',
            'sub_header' => 'Update Sub_header',
            'image' => 'Update Image',
            'description' => 'Update Description',
            'announcement' => $announcements,
        ]);
    }
    public function update(Request $request, $id) {
        $announcements = Announcement::find($id);
        if ($request->hasFile('image') && $request->file('image')->isValid()  ) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('images', $imageName);
        } else {
            $imageName = $announcements->image;
        }
        $announcements->update([
            'header' => $request->header,
            'sub_header' => $request->sub_header,
            'image' => $imageName,
            'description' => $request->description,

        ]);
        return redirect('dashboard/announcement'); 
    }



    public function delete($id) {
        $announcements =Announcement::find($id);
        return view('dashboard.announcement.delete', [
            
            'announcement' => $announcements,
        ]);
    }


    public function destroy($id)
    {
        $announcements = Announcement::findOrFail($id);
        $announcements->delete();

        return redirect('dashboard/announcement');
    }

}
