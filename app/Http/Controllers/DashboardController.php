<?php

namespace App\Http\Controllers;

use App\Models\KepalaSurat;
use Illuminate\Http\Request;
use App\Models\ModelSatu;
use App\Models\ModelDua;
use App\Models\SuratKeluar;
use App\Models\Users;

class DashboardController extends Controller
{
    public function index()
    {
        $users = Users::all();
        $kepalaSurat = KepalaSurat::all();
        $suratKeluar = SuratKeluar::all();

        return view('dashboard', compact('dataSatu', 'dataDua', 'suratKeluar'));
    }
}
