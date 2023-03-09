@extends('layouts.default')
<style>
  table {
    background-color: #ffffff;
    color: white;
    margin:0 auto;
    width: 900px;
    height: auto;
  }
  
  tr{
   
  }

  


  
  td {
    
    background-color: #ffffff;
    
  }
</style>


@section('content')
 
<table>
@section('title', 'Todo List')



   <form action="/create" method="post">
        @csrf
        
     <tr><td><input type="text" size="100px," name="content"></td>
     <td><button style="background-color:#ffffff; border-color:#bf7fff; color:#bf7fff;">追加</button></tr>
     <tr><td><h1>作成日</h1></td></td><td><h2>タスク名</h2></td><td><h3>削除</h3></td><td><h4>更新</h4></td></tr>
</form></td>




      <tr><td>@foreach ($todos as $todo)</td></tr>
     <td><tr> <form action="/delete" method="post"></tr></td>
     @csrf
     
      <td><input type="hidden" name="id" value="{{$todo}}"></td>
      <td><button style="background-color:#ffffff; border-color:#7fffbf; color:#7fffbf;">削除</button></td>

      
</form>
      
    <td><form action="/update" method="get">
      @csrf
      <input type="hidden" name="id" value="content"></td>
      <td><button style="background-color:#ffffff; border-color:#ff7f7f; color:#ff7f7f;" >更新</button></td>
      </form>

      <form action="/edit" method="post">
        @csrf
      <td><input type ="text" name="id" value="{{$todo->content}}">
   
<tr><td>{{ $todo->created_at }}</td></tr>
</form>


@endforeach
     

      
  </table>

@endsection
