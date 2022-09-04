@extends('layout.app')
@section('title', 'Cargos')
@section('content')
    <div>
        <div class="grid grid-cols-12 mt-20">
            <div class="col-end-12">
                <x-button url="adm.position.create">Cadastrar</x-button>
            </div>
            <div class="col-span-12">
                @livewire('adm.positions.table')
            </div>
        </div>
    </div>
@endsection
