@extends('layouts.app')

@section('content')

<v-container class="text-center py-15">
    <v-btn color="primary" href="{{ route('dashboard') }}">Ir a dashboard</v-btn>
</v-container>

@endsection
