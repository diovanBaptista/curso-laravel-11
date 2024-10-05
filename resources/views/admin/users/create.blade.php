@extends('admin.layouts.app')

@section('title', 'Cadastrar Usuario')
@section('content')

    <h1>Dio code e foda</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    <form action="{{ route('users.store') }}" method="post">
        @csrf()
        <input type="text" name="name" placeholder="Nome" value="{{old('name')}}">
        <input type="email" name="email" placeholder="E-mail"  value="{{old('email')}}">
        <input type="password" name="password" placeholder="Password">
        <button type="submit"> Enviar</button>
    </form>



    @endsection