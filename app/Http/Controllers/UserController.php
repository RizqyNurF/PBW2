<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $users = User::all();
    //     return view("user.daftarPengguna", compact('users'));
    // }

    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('user.daftarPengguna');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user.registrasi");
    }

    /**
     * Store a newly created resource in storag
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:100'],
            'fullname' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => ['required', 'string', 'max:1000'],
            'birthdate' => ['required', 'date',],
            'phoneNumber' => ['required', 'string', 'max:20'],
            'jenis_kelamin' => ['required', 'numeric', 'in:0,1'],
        ]);

        DB::beginTransaction();

        try {
            User::create([
                'username' => $request->username,
                'fullname' => $request->fullname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'address' => $request->address,
                'birthdate' => $request->birthdate,
                'phoneNumber' => $request->phoneNumber,
                'jenis_kelamin' => $request->jenis_kelamin,
            ]);

            DB::commit();

            return redirect()->route("user.daftarPengguna")->with('success', "Added user successfully");
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route("user.daftarPengguna")->with('error', "Added user failed");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

        return view('user.infoPengguna', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view("user.editPengguna", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                "username" => ["required"],
                "fullname" => ["required"],
                "email" => ["required"],
                "address" => ["required"],
                "birthdate" => ["required"],
                "phoneNumber" => ["required"],
                "jenis_kelamin" => ["required"],
            ]);

            $user = User::findOrFail($request->id)->update([
                "username" => $request->username,
                "fullname" => $request->fullname,
                "email" => $request->email,
                "address" => $request->address,
                "birthdate" => $request->birthdate,
                "phoneNumber" => $request->phoneNumber,
                "jenis_kelamin" => $request->jenis_kelamin,
            ]);

            DB::commit();

            return redirect()->route("user.daftarPengguna")->with('success', "Updated user successfully");
        } catch (\Exception $e) {
            dd($e);

            DB::rollBack();
            return redirect()->route("user.daftarPengguna")->with('error', "Updated user failed");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

// Rizqy Nurfauzella 6706223074 D3 IF 46-04
