@extends('layouts.app')
@section('content')
    @component('components.navbar')
    @endcomponent
    <div class="my-12">
        <h1 class="text-3xl text-center">Hai, {{ $name }}. ID mu adalah {{ $id }}</h1>
        <h1 class="text-sm text-center">(coba untuk merubah url)</h1>
    </div>
@endsection
