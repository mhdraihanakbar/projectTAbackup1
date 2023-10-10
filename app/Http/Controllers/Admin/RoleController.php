<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function read()
    {
        $role = DB::table('roles')->orderBy('id', 'ASC')->get();
        return view('dashboard.role.index', ['role' => $role]);
    }
}
