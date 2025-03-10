<?php
namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        $user = UserModel::with('level')->get();
        //dd($user);
        return view('user', ['data' => $user]);
    //     $user = UserModel::create([
    //         'username' => 'manager11',
    //         'nama' => 'Manager11',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 2,
    //     ]);

    //     $user->username = 'manager12';

    //     $user->save();

    //     $user->wasChanged();
    //     $user->wasChanged('useername');
    //     $user->wasChanged(['username', 'level_id']);
    //     $user->wasChanged('nama');
    //     dd($user->wasChange(['nama', 'username']));
     }
     public function tambah()
     {
        return view('user_tambah');
     }

     public function tambah_simpan(Request $request)
     {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make('$request->password'),
            'level_id' => $request->level_id
        ]);
     }

     public function ubah($id)
     {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
     }

     public function ubah_simpan($id, Request $request)
     {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request->level_id;

        $user->save();

        return redirect('/user');
     }

     public function hapus($id)
     {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
     }
}
