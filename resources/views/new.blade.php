@extends('layout')

@section('content1')
 diffeerent Files
@stop

@section('content')
        @foreach($read as $reads)
              {{ $reads -> todo}} <br>
        @endforeach
@stop