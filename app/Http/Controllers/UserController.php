<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function index() {
        $users = User::paginate();
        return view('dashboard.pages.usertable', ['data' => $users]);
    }

    public function form() {
        $users = User::paginate();
        return view('dashboard.user.add', [

            'id'
        ]);
    }
    public function store(Request $request) {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'],
        ]);    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'  =>  Hash::make($request->password),

        ]);
        return redirect('dashboard/user');
    }

    public function show($id) {
        $user = User::find($id);

        return view('dashboard.user.update', [
                'name'    => 'Update Name',
                'user'      => $user
            ]); 
    }
    public function update(Request $request, $id) {
    
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255']

        ]);
        $user = User::find($id);

        $user->update(['name' => $request->name,
                       'email' =>$request->email]);

        session()->flash('status', 'User Updated');
        return redirect('dashboard/user'); 

    }

    public function delete($id) {
        $users = User::find($id);
        return view('dashboard.user.delete', [
            
            'user' => $users,


        ]);
    }

    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('dashboard/user');
    }

}
