@extends('layouts.app')
@section('titulo')
    Post
@endsection
@section('contenido')
<div>
<h2>Post --</h2>
</div>
<div>
    <div>
        <h2>Publicaciones</h2>
    </div>
    <div>
        @if (session('mensaje'))
            <span>{{session('mensaje')}}</span>
        @endif
        <form action="">
            @csrf
            <div>
            <label for="post">Publicaciòn</label>
            <input type="text" id="post" name="post" placeholder="Ingresar comentario" value="{{old('post')}}">
            @error('post')
            <span >{{$message}} </span>
         @enderror
        </div>
            <button type="submit">Agregar</button>
        </form>
    </div>
</div>
    
@endsection