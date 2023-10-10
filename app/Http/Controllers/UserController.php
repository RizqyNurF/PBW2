<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users  = User::all();
        return view('user.daftarPengguna', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.registrasi");
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
            'username'      => ['required', 'string', 'max:100'],
            'fullname'      => ['required', 'string', 'max:100'],
            'email'         => ['required', 'string', 'email', 'max:255'],
            'password'      => ['required', 'confirmed', Rules\Password::defaults()],
            'address'       => ['required', 'string', 'max:10000'],
            'birthDate'     => ['required', 'date',],
            'phoneNumber'   => ['required', 'string', 'max:20'],
            'agama'         => ['required', 'string', 'max:20'],
            'jenisKelamin'  => ['required', 'numeric', 'in:0,1']
        ]);
        $user = User::create([
            'username'      => $request->username,
            'fullname'      => $request->fullname,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'address'       => $request->address,
            'birthDate'     => $request->birthDate,
            'phoneNumber'   => $request->phoneNumber,
            'agama'         => $request->agama,
            'jenisKelamin'  => $request->jenisKelamin
        ]);
        return redirect()->route("user.DaftarPengguna");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view("user.infoPengguna", compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
// Rizqy Nurfauzella 6706223074 D3 IF 46-04//
}
