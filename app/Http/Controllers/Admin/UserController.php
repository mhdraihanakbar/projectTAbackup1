<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.user.index');
    }

    public function read()
    {
        $user = DB::table('users')->orderBy('id', 'DESC')->get();
        return view('dashboard.user.index', ['user' => $user]);
    }

    public function add()
    {

        $role = DB::table('roles')->get();

        return view('dashboard.user.tambah', ['role' => $role]);
    }

    public function create(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'id_role' => $request->id_role,
        ]);

        return redirect('/admin/user')->with("success", "Data Berhasil Ditambah !");
    }
}
