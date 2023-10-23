<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function showView() : View {
        $users = [
            'firstName' => 'Janusz',
            'lastName' => 'Nowak',
            'city' => 'Poznań',
            'hobby' => [
                'siatkowka',
                'skoki narciarskie',
                'żużel',
                'piłka ręczna'
            ]
        ];

        return view('users',$users);
    }
    public function showArray() : View {
        $users = [
            'firstName' => 'Janusz',
            'lastName' => 'Nowak',
            'city' => 'Poznań',
            'hobby' => [
                'siatkowka',
                'skoki narciarskie',
                'żużel',
                'piłka ręczna'
            ]
        ];

        return view('usersarray',['users' => $users]);
    }
}
