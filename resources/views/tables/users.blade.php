@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   
@stop

@section('content')
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('users')
            </div>
        </div>
    </div>
</x-app-layout>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <link rel="stylesheet" href="/js/app.js">
    <link rel="stylesheet" href="/js/alpine.js">
    <script> console.log('Estoy aquiii!'); </script>
@stop
