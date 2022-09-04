@extends('layout.app')
@section('title', 'Inicio')
@section('content')
    <div>
{{--        @dd(\Illuminate\Support\Facades\Auth::check())--}}
        <div class="grid grid-cols-12  mt-20">
            <div class="col-end-12">
                <x-button url="adm.config.index">Cadastrar</x-button>
                <a href="{{ route('logout') }}">LogOut</a>
            </div>
            <div class="col-span-12">

            </div>
        </div>
    </div>
@endsection
