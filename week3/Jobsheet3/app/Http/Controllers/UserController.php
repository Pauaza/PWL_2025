<?php
namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //tambah data user dengan eloquent model
        $data = [

            'nama' => 'Pelanggan Pertama',

        ];
        UserModel::where('username', 'customer-1')->update($data); //update data user

        //coba akses model UserModel
        $user = UserModel::all(); //ambil data dari tabel m_user
        return view('user',['data' => $user]);
    }
}