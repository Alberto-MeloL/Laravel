@extends('layouts.app')

@section('content')

<div>
    <form method="POST" action="{{route('usuarios.logout')}}">
        @csrf
        <input type="submit" value="sair">
    </form>

    @if (Auth::check())
        <span>voce esta logado</span>
    @endif
</div>
