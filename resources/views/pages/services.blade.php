@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Main</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.services')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Main</li>
        </ol>
        <h2> This is Service </h2>
    </div>
</main>

@endsection
                