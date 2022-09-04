@extends('layout.app')
@section('title', 'Users')
@section('content')
    <div>
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                @livewire('adm.users.form',['id' => $id])
            </div>
        </div>
    </div>
@endsection
