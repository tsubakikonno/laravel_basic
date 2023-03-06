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
          return view('index', ['todos' => $todos]);
        }
        


        public function create(TodoRequest $request)
  {
    $form = $request->all();
    Todo::create($form);
    return redirect('/');
        }

        public function delete(Request $todos)
        {
          Todo::all('content'->$todos)->delete();
          return redirect('/');
          
        }
        public function update(TodoRequest $request)
        {
          $form = $request->all();
          unset($form['_token']);
          Todo::where('content', $request->content)->update($form);
          return redirect('/');
        }
}