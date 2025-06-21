<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'principal';
        echo view('front/head_view', $data);
        echo view('front/nav_view', $data);
        echo view('front/principal', $data);
        echo view('front/footer_view', $data); 
    }

    public function quienes_somos()
    {
        $data['titulo'] = '¿Quiénes Somos?';
        echo view('front/head_view',$data);
        echo view('front/nav_view', $data);
        echo view('front/quienes_somos', $data);
        echo view('front/footer_view', $data);
    }

    public function acerca_de()
    {
        $data['titulo'] = 'Acerca de';
        echo view('front/head_view',$data);
        echo view('front/nav_view', $data);
        echo view('front/acerca_de', $data);
        echo view('front/footer_view', $data);
    }

    public function registro()
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view',$data);
        echo view('front/nav_view', $data);
        echo view('front/registro', $data);
        echo view('front/footer_view', $data);
    }

    public function login()
    {
        $data['titulo'] = 'Login';
        echo view('front/head_view',$data);
        echo view('front/nav_view', $data);
        echo view('front/login', $data);
        echo view('front/footer_view', $data);
    }
}