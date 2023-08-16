<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EsentiallController extends Controller
{
    public function welcome() {
           return view ('welcome');
}

public function about() {
       return view ('about');
}

public function contact() {
       return view ('contact');
}

public function create() {
       return view ('Datas.create');

}
public function edit($id) {
       return view ('Datas.edit');

}

}