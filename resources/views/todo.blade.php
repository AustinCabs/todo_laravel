@extends('layout')

@section('content1')
    <div>
        <form action="/crud/insert" method="post">
            {{csrf_field()}}
            <input type="text" name="insert_data" class="form-control" placeholder="Enter to Save">
        </form>
    </div>
   practice laravel!!
@stop

@section('content')
    <table class="thead-dark">
        <thead>
            <th>Data</th>
            <th>Action</th>            
        </thead>
        <tbody>
            @foreach($todos as $todo)
                <tr>
                    <td>{{ $todo -> todo}} </td>
                    <td> <a href="{{route('crud.delete',['id'=> $todo->id])}}" class="btn btn-danger btn-sm">delete</a> </td>
                    <td> <a href="{{route('crud.update',['id'=> $todo->id])}}" class="btn btn-primary btn-sm">update</a> </td>
                    @if(!$todo->completed)
                        <td><a href="{{route('mark.completed',['id'=> $todo->id])}}" class="btn btn-success btn-sm">Mark as Completed</a></td>
                    @else
                        <td>Completed</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
      
@stop