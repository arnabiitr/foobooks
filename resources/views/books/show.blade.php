@extends('layouts.master')

@section('title')
    {{ $book->title }}
@endsection

@push('head')
    <link href='/css/books/show.css' rel='stylesheet'>
    <link href='/css/books/_book.css' rel='stylesheet'>
@endpush

@section('content')
    <h1>{{ $book->title }}</h1>

    {{-- TODO: Refactor to not use the subview and display full details of the book --}}
    @include('books._book')
@endsection








