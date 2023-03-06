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
          <tr><th>name</th>
      <tr><td><input type="text" name="content"></td></tr>
      @foreach ($todos as $todo)
      <form action="/delete" method="get">
@csrf
@method('delete')
<input type="submit" value="削除">
</form>

@endforeach<
  </table>

@endsection