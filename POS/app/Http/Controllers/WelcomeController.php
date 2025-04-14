<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;
use App\Models\KategoriModel;
use App\Models\LevelModel;
use App\Models\StokModel;
use App\Models\BarangModel;

class WelcomeController extends Controller
{
    public function index()
    {
        // Hitung jumlah data
        $jumlahUser = UserModel::count();
        $jumlahKategori = KategoriModel::count();
        $jumlahLevel = LevelModel::count();
        $jumlahStok = StokModel::count(); // Atau sum('jumlah') tergantung struktur
        $jumlahBarang = BarangModel::count();
    
        // Aktifkan menu 'welcome'
        $activeMenu = 'welcome';
    
        // Breadcrumb dinamis
        $breadcrumb = (object)[
            'title' => 'Selamat datang, ' . Auth::user()->username,  // Menggunakan nama user
            'list' => ['Home', 'Dashboard']  // Sesuaikan dengan bagian menu yang diinginkan
        ];
    
        // Ambil nama user yang sedang login
        $namaUser = Auth::user()->username ?? 'User';
    
        // Kirim ke view
        return view('welcome', compact(
            'jumlahUser',
            'jumlahKategori',
            'jumlahLevel',
            'jumlahStok',
            'jumlahBarang',
            'activeMenu',
            'breadcrumb',
            'namaUser'
        ));
    }
    
}
