@extends('layout.app')
@section('title', 'Users')
@section('content')
    <div>
        <div class="grid grid-cols-12">
{{--            <div class="col-end-12">--}}
{{--                <x-button url="welcome">Cadastrar</x-button>--}}
{{--            </div>--}}
            <div class="col-span-12">
                @livewire('adm.positions.form')
            </div>
        </div>
    </div>
@endsection
