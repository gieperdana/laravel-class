@extends('app')

<!-- Title -->
@section('title', 'Page Title')

<!-- Component Sidebar -->
@section('sidebar')
    @parent

    <p>This is appended to the master sidebarssss.</p>
@endsection
<!-- Component Section -->
@section('content')
    <p>This is my body content.</p>
@endsection