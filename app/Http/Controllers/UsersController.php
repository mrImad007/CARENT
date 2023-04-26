<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class UsersController extends Controller
{
    public function create() {
        return view('register');
    }

    // store register data
    public function store(Request $request) {

        $formField = $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email' , Rule::unique('Users', 'email')],
            'password' => ['required', 'min:6'],
            'adress' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'image' => 'required '
        ]);

        $photo = Cloudinary::uploadFile($request->file('image')->getRealPath(),[
            'folder' => 'UsersPhotos'
        ])->getSecurePath();
        // hash password
        $encPassword = bcrypt($formField['password']);
        // create user 
        $user = User::create([
            'name' => $request->name,
            'image' => $photo,
            'email' => $request->email,
            'password' => $encPassword,
            'adress' => $request->adress,
            'phone' => $request->phone,
            'role' => $request->role,
            
        ]);
        // login
        auth()->login($user);
        return redirect('/')->with('message', 'Registed and logged in, Welcome '.auth()->user()->name);
    }

    // show login form
    public function login() {
        return view('login');
    }

    public function authentification(Request $request) {
        $formField = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);
        if (auth()->attempt($formField)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('message', 'Hello ' . auth()->user()->name);
        }
        return back()->withErrors(['email' => 'User not found, try again'])->onlyInput('email');
    }

    public function editProfile(){
        return view('user-profile');
    }

    public function saveEditProfile(Request $request, User $user){
        $formField = $request->validate([
            'name' => '',
            'email' => '',
            'password' => '',
            'adress' => '',
            'phone' => '',
        ]);
        
        $formField = [
            'name' => $request->name,
            'email' => $request->email,
            'adress' => $request->adress,
            'phone' => $request->phone,
        ];

       

        if($request->hasFile('image')){
            $uploadImage = Cloudinary::uploadFile($request->file('image')->getRealPath(),[
                'folder' => 'UsersPhotos'
            ])->getSecurePath();
            $formField['image'] = $uploadImage;
        }
        $user->update($formField);

        return redirect('/edit-profile')->with('message', 'user informations updated');
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function deleteAccount(){
        
    }
}
