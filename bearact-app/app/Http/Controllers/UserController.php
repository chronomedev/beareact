<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
                ->get();
        return view('pages.backend.user.index', compact('users'));
    }

    public function create()
    {
        return view('pages.backend.user.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users,email|max:255',
            'password' => 'required|max:255',
            'role' => 'required|max:60',
        ]);

        $users = User::Create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'created_at' => DB::raw('now()'),
        ]);

        // dd($user);

        return redirect('user')->with('status', 'User was successfully created!');
    }

    public function show($id)
    {   
        $users = DB::table('users')
                ->where('id', $id)
                ->first();
        return view('pages.backend.user.show', compact('users'));
    }

    public function edit($id)
    {   
        $users = DB::table('users')
                ->where('id', $id)
                ->first();
        return view('pages.backend.user.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {   
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required',
            'email' => 'required|max:255',
            'role' => 'required|max:60',
        ]);

        $user = DB::table('users')->where('id', $id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role,
            'updated_at' => DB::raw('now()'),
        ]);
        
        return redirect('user')->with('status', 'User was successfully updated!');
    }

    public function editPasswordProcess(Request $request)
    {
        $users = DB::table('users')->where('id', $request->id)->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect('user')->with('status', 'Password successfully updated!');
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        
        return redirect('user')->with('status', 'User was successfully deleted!');
    }
}
