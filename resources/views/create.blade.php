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
  button {
    padding: 10px 20px;
    background-color: #289ADC;
    border: none;
    color: white;
  }
</style>
@section('title', 'create')

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
<form action="/" method="get" action="">
<form action="/delete" method="get" action="create">
  <table>
  @csrf
    <tr>
      <th>name</th>
      <td><input type="text" name="content"></td>
    </tr>
   
      <th></th>
      <td><button>送信</button></td>
    </tr>
  </table>
</form>
@endsection