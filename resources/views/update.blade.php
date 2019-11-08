@extends('layout')

@section('content1')
    <div>
    	Update With Laravel
        <form action="{{route('crud.save',['id' => $data->id])}}" method="post">
            {{csrf_field()}}
            <input type="text" name="update_data" class="form-control" value="{{$data->todo}}" >
            <small>Enter to Save</small>

        </form>
    </div>
   
@stop