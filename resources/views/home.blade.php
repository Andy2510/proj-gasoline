@extends('base')

@section('content')
<h2>Aikštelės paieška</h2>
<form action="{{ url('degalines') }}" method="post">
  <input type="text" name="search" />
  <input type="submit" name="search_submit" value=" Ieškoti " />
</form>
@endsection