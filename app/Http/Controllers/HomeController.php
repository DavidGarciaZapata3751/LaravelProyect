<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function about(): View
    {
        $viewData = [];
        $viewData['title'] = 'About us - Online Store';
        $viewData['subtitle'] = 'About us';
        $viewData['number'] = '212-555-1234';
        $viewData['author'] = 'David García Zapata';

        return view('home.about')->with('viewData', $viewData);
    }

    public function contact(): View
    {
        $viewData = [];
        $viewData['title'] = 'Contact us - Online Store';
        $viewData['subtitle'] = 'Contact us';
        $viewData['number'] = '212-555-1234';
        $viewData['address'] = '123 Main St, Anytown, USA';
        $viewData['description'] = 'If you have any questions, please contact us using the information below.';
        $viewData['author'] = 'David García Zapata';

        return view('home.contact')->with('viewData', $viewData);
    }
}
