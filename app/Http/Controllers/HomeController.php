<?php

namespace App\Http\Controllers;

use App\Models\Expedisi;
use App\Models\Mobil;
use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontaks = Kontak::where('id', 1)->get();
        $mobils = Mobil::all();
        $jumlahData = Mobil::count();
        return view('frontend.homepage', compact('mobils', 'jumlahData', 'kontaks'));
    }
    public function cars(Request $request)
    {
        $kontaks = Kontak::where('id', 1)->get();
        if ($request->has('search')) {
            $data = Mobil::where('merk', 'LIKE', '%' . $request->search . '%')->paginate(9);
        } else {
            $data = Mobil::select('foto', 'merk', 'id', 'jenis', 'harga', 'slug')->paginate(9);
        }
        Paginator::useBootstrap();
        return view('frontend.cars', compact('data', 'kontaks'));
    }
    public function pricing()
    {
        $kontaks = Kontak::where('id', 1)->get();
        $data = Mobil::paginate(2);
        return view('frontend.pricing', compact('data', 'kontaks'));
    }
    public function detail($slug)
    {
        $kontaks = Kontak::where('id', 1)->get();
        $data = Mobil::where('slug', $slug)->first();
        return view('frontend.detail', compact('data', 'kontaks'));
    }
    public function contact()
    {
        $kontaks = Kontak::get();
        return view('frontend.contact', compact('kontaks'));
    }
    public function navbar()
    {
        $kontaks = Kontak::get();
        return view('frontend.layouts.navbar', compact('kontaks'));
    }

    public function expedisi($slug)
    {
        $expedisi = Expedisi::where('slug', $slug)->select('judul', 'deskripsi')->first();
        $kontaks = Kontak::get();
        return view('frontend.expedisi', compact('expedisi', 'kontaks'));
    }
}
