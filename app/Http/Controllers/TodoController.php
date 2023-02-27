<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    
        public function index()
        {
          $todos = Todo::all();
          return view('index', ['content' => $todos]);
        }
        


        public function create(TodoRequest $request)
  {
    $form = $request->all();
    Todo::create($form);
    return redirect('/');
        }

          
}