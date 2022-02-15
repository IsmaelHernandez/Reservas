@extends('layouts.template')
 
@section('content')
<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('posts.create') }}">Crear Nuevo Post</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th width="280px">Accion</th>
    </tr>
    @foreach ($data as $key => $value)
    <tr>
        <td>{{ $value->id }}</td>
        <td>{{ $value->title }}</td>
        <td>{{ \Str::limit($value->description, 100) }}</td>
        <td>
            <form action="{{ route('posts.destroy',$value->id) }}" method="POST">   
                {{-- <a class="btn btn-info" href="{{ route('posts.show',$value->id) }}">Show</a>     --}}
                <a class="btn btn-primary" href="{{ route('posts.edit',$value->id) }}">Edit</a>   
                @csrf
                @method('DELETE')      
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>  
{!! $data->links() !!}      
@endsection