<?php

namespace App\Http\Controllers;


use App\DeleteImage;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    private $no_picture;

    public function __construct()
    {
        $this->no_picture = 'NO_PICTURE.png';
    }

    public function index()
    {
        if (Auth::user()->role == "Admin") {
            $user = User::paginate(10);
        }
//        if (Auth::user()->role == "Agency") {
//            $user = User::ListUserForAgency(Auth::user()->getAuthIdentifier());
//        }
        else {
            $user = User::ListUserForAgency(Auth::user()->getAuthIdentifier());
        }
        return view('admin.users.list')->with('users', $user);
    }

    public function create()
    {
        $roles = Role::getKeys();
        return view('admin.users.form')->with('roles', $roles);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('pages.agency')->with('user', $user);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = new User();
        $user->full_name = $request->full_name;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->role = Auth::user()->role == "Agency" ? "Customer" : $request->role;
        $user->added_by = Auth::user()->getAuthIdentifier();

        $picture = $request->file('picture');
        if ($picture && in_array($picture->getClientMimeType(), array('image/jpeg', 'image/jpg', 'image/png'))) {
            $imageName = 'UP-' . $request->phone_number . '-' . time() . '.' . $picture->getClientOriginalExtension();
            $user->picture = $imageName;
            $picture->move(public_path('/uploads/profiles'), $imageName);
            $img = Image::make(public_path('/uploads/profiles/' . $imageName));
            $img->resize(100, 100);
            $img->save(public_path('/uploads/profiles/' . $imageName));
        } else {
            $user->picture = $this->no_picture;
        }

        $user->save();
        Session::flash('alert-success', 'Successfully saved');
        return redirect(route('user.index'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::getKeys();
        return view('admin.users.form')->with(['user' => $user, 'roles' => $roles]);
    }

    protected function validatorUpdate(array $data)
    {
        return Validator::make($data, [
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:10',
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validatorUpdate($request->all())->validate();

        $user = User::findOrFail($id);
        $user->full_name = $request->full_name;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->role = $request->role;

        $picture = $request->file('picture');
        if ($picture && in_array($picture->getClientMimeType(), array('image/jpeg', 'image/jpg', 'image/png'))) {
            $imageName = 'UP-' . $request->phone_number . '-' . time() . '.' . $picture->getClientOriginalExtension();
            $user->picture = $imageName;
            $picture->move(public_path('/uploads/profiles/'), $imageName);

            $img = Image::make(public_path('/uploads/profiles/' . $imageName));
            $img->resize(100, 100);
            $img->save(public_path('/uploads/profiles/' . $imageName));
            if ($request->old_picture != $this->no_picture) {
                $deleteFile = new DeleteImage();
                $deleteFile->deleteImage(public_path('/uploads/profiles/'), $request->old_picture);
            }
        } else {
            $user->picture = $request->old_picture;
        }

        $user->save();
        Session::flash('alert-success', 'Successfully updated');
        return redirect(route('user.index'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user->picture != $this->no_picture) {
            $deleteFile = new DeleteImage();
            $deleteFile->deleteImage(public_path('/uploads/profiles/'), $user->picture);
        }
        $user->destroy($id);
        Session::flash('alert-success', 'Successfully deleted');
        return redirect(route('user.index'));
    }
}