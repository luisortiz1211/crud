@extends('layouts.app')
@section('titulo')
        Registrar
@endsection
@section('contenido')
    <div >
<div>
    <form action="{{route('register.store')}}" method="POST" novalidate>
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Nombre" value="{{old('name')}}">
        @error('name')
           <span >{{$message}} </span>
        @enderror
        </div>
<div>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Email" value="{{old('email')}}">
    @error('email')
           <span>{{$message}} </span>
        @enderror
</div>
<div>
    <label for="password">Contraseña</label>
    <input type="password" id="password" name="password" placeholder="Contraseña">
    @error('password')
           <span>{{$message}} </span>
        @enderror
</div>
<div>
    <label for="password_confirmation">Confirmar contraseña</label>
    <input type="password"id="password_confirmation" name="password_confirmation" placeholder="Confirmar">
</div>

<button type="submit">Registrar</button>
   </form>
</div>
    </div>
@endsection