<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $data = [
            'nama' => 'Pelanggan pertama',
        ];
        UserModel::where('username', 'customer-1')->update($data); // tambahkan data ke tabel m_user
            
            // // coba akses model UserModel
            // $user = UserModel :: all(); // ambil semua data dari tabel m_user
            // return view('user', ['data' => $user]);
            
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
