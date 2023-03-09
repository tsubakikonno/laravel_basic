<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use Carbon\Carbon;


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
          Todo::find($todos->id)->delete();
          return redirect('/');
          
        }

        public function edit (Request $todos)
        {
         
          return view('index');
        }




        public function update(TodoRequest $request)
        {

          $form = $request->all();
    unset($form['_token']);
    Author::where('id', $request->id)->update($form);
    return redirect('/');
         
        }
}