@extends('layouts.layout')
@section('body')
    @livewire('todos', ['lazy' => true])
    @livewire('makeTodo')
@endsection
