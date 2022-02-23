<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::find(1);
        // $role = Role::create(['name' => 'super-admin']);
        // $users->assignrole($role);
        $users = User::all();
        return view('users.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idEdit = false;
        $roles = role::all();
        return view('users.create', compact('idEdit', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|unique:users,email|email',
            'password'  => 'required|min:9|confirmed',
            'roles'      => 'required',
        ]);
        $input              = $request->only('name','email');
        $input['password']  = Hash::make($request->password);
        $user = User::create($input);
        $user->syncRoles($request->input('roles'));
        return redirect( route('user.index'))->with('status', "Successfully Inserted");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idEdit = true;
        $user   = user::where('id', $id)->get();
        $roles  = role::all();
        return view('users.create', compact('idEdit', 'user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'roles'     => 'required',
        ]);
        $input              = $request->only('name','email');
        $user->update($input);
        $user->syncRoles($request->input('roles'));
        return redirect( route('user.index'))->with('status', "Successfully Inserted");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id;
    }
}
