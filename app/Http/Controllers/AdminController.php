<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Logika untuk halaman dashboard admin
        return view('layouts.index');
    }

    public function manageUsers()
    {
        // Logika untuk mengelola pengguna (contoh: lihat, tambah, edit, hapus pengguna)
        return view('admin.manage_users');
    }

    public function managePosts()
    {
        // Logika untuk mengelola postingan (contoh: lihat, tambah, edit, hapus postingan)
        return view('admin.manage_posts');
    }
}
