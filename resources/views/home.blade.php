@extends('layouts.app')

@section('title', 'Laravel 11')

@push('css')
    <style>
        body {
            background-color: #9aaafa
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <x-alert2 type="danger" class="mb-4">
            <x-slot name="title">
                Titulo de la alerta
            </x-slot>

            Contenido de la alerta!
        </x-alert2>

        <p>Hola Mundo</p>
    </div>
@endsection
