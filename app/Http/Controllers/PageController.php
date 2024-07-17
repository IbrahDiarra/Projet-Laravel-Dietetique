<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('page.home');
    }

    public function categorie()
    {
        return view('page.categorie');
    }

    public function aliment()
    {
        return view('page.aliments');
    }

    public function constituant()
    {
        return view('page.composant');
    }

    public function aliments()
    {
        return view('page.alimentConstituant');
    }

    public function constituants()
    {
        return view('page.ConstituantNutriment');
    }

    public function nutriment()
    {
        return view('page.nutriment');
    }

    public function alimcompose()
    {
        return view('page.AlimentCompose');
    }

    public function loginForm()
    {
        return view('page.Login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if ($email == 'smartdiet@gmail.com' && $password == '123456') {
            return redirect()->route('home');
        } else {
            return redirect()->route('login.form')->withErrors(['message' => 'Email ou mot de passe incorrect.']);
        }
    }
}
