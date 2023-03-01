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



<form action="/create" method="post">
@csrf
  <table>
    <tr>
      <th>name</th> </tr>
      <td><input type="text" name="content" ></td>
      @foreach ($content as $contents)
      <td>{{$contents->$contents}}</td>
   
    @endforeach
    
      <td><button>送信</button></td>
    
  </table>
</form>
@endsection