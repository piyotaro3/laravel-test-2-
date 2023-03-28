<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;
use App\Models\Form;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create(Request $request )
    {
        $form = $request->all();
        Form::create($form);
        return view('thanks');
    }
}
