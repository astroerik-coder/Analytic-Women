@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
 <x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"><a href=""></a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('eventos')
            </div>
        </div>
    </div>
</x-app-layout>

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
    <script>
        document.addEventListener('livewire:load', function () {
            console.log('¡Estoy aquí!');
        });
    </script>
@stop
