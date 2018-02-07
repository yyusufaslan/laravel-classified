<?php

namespace App\Http\Controllers;
use App\Ad;
use App\AdCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $adCategories = Ad::orderBy('created_at', 'desc')->get();
        return view('dashboard',['adCategories'=> $adCategories]);
    }

}
