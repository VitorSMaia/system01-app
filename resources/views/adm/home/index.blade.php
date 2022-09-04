@extends('layout.app')
@section('title', 'Users')
@section('content')
    <div>
        <div class="grid grid-cols-12">
{{--            <div class="col-end-12">--}}
{{--                <x-button url="adm.config.index">Cadastrar</x-button>--}}
{{--            </div>--}}
            @php
                $u = [1,2,3,4,5,6]
            @endphp
            <div class="col-span-12">
                <div class="grid grid-cols-12">
                    @foreach($u as $i)
                    <div class="col-span-4">
                        <x-card></x-card>
                    </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
@endsection
