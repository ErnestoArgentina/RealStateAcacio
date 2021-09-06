<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Curso;
use App\Models\Docente;
use App\Models\Estudante;
use App\Models\Igreja;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $igrejas=Igreja::count();
        $agendamentos=Agendamento::count();
//        $docentes=Docente::count();
        return view('admin.index',compact('igrejas','agendamentos'));
    }
}
