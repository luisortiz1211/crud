@extends('layouts.app')
@section('titulo')
        Inicio de sesiòn
@endsection
@section('contenido')
    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
        @if (session('mensaje'))
        <span><{{session('mensaje')}}/span>
        @endif
<div>
    <form action="{{route('login')}}" method="POST" novalidate>
        @csrf
<div>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email">
    @error('email')
           <span >{{$message}} </span>
        @enderror
</div>
<div>
    <label for="password">Contraseña</label>
    <input type="password" id="password" name="password" placeholder="Contraseña">
    @error('password')
           <span >{{$message}} </span>
        @enderror
</div>
<button type="submit">Ingresar</button>
   </form>

   <a href="{{route('register.index')}}"> Crear Cuenta</a>
</div>
    </div>
@endsection