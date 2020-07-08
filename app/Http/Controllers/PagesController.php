<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Muartis;
use App\link;

class PagesController extends Controller
{

    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact(Request $request)
    {
        // dd($request->all());
        if ($request->has('search')) {
            $mua = Muartis::where('nama', 'LIKE', '%' . $request->search . '%')->paginate();
        } else {
            // $mua = Muartis::all();
            $mua = Muartis::paginate(9);
        }
        return view('home.contact', compact('mua'));
    }

    // public function search(Request $request)
    // {
    //     $mua = Muartis::when($request->q, function ($query) use ($request) {
    //         $query->where('nama', 'LIKE', "%{$request->q}%")
    //             ->orWhere('instagram', 'LIKE', "%{$request->q}%");
    //     })->get();
    //     return view('home.search', compact('mua'));
    // }

    public function service()
    {
        return view('home.service');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        return view('backend.index');
    }

    public function makeupartist()
    {
        return view('Muartis.index');
    }
}
