<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    $user = User::paginate(10);
    return view('admin.users.list')->with('users', $user);
  }

  public function create()
  {
    return view('admin.users.form');
  }

  public function store(Request $request)
  {
    $user = new User();
    $user->name = $request->name;
    $user->save();
    return redirect(route('user.list'));
  }

  public function edit($id)
  {
    $user = User::findOrFail($id);
    return view('admin.users.form')->with('user', $user);
  }

  public function update(Request $request, $id)
  {
    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->save();
    return redirect(route('user.list'));
  }

  public function destroy($id)
  {
    User::destroy($id);
    return redirect(route('user.list'));
  }
}