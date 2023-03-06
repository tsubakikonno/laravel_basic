@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
@section('title', 'index.blade.php')

@section('content')
 
<table>
   <form action="/create" method="post">
        @csrf
      
      <th>name</th> 
      <td><input type="text" name="content"></td>
     <button class="A">送信</button>
</form>
      <td><tr>@foreach ($todos as $todo)</td></tr>
     <td> <form action="/delete" method="get"></td>
     @csrf
      <td><input type="submit" name="delete"></td>
      <td><button class="B">削除</button></td>
</form>
      
    <form action="/update" method="get">
      @csrf
      <td><input type="submit" name="update"></td>
      <td><button class="c">更新</button></td>
      </form>
<td>{{$todo->content}}</td>
@endforeach
    
      
  </table>

@endsection
