@extends('layouts.dash')

@section('content')

<v-container class="py-10">

    <div class="mb-15">
        <v-parallax src="{{ asset('../images/bg-common.jpg') }}"></v-parallax>
    </div>

    <div class="pt-15 text-right">
        <v-btn text href="https://vuetifyjs.com/en/components/parallax/" target="_blank">
            Ver más <v-icon>mdi-open-in-new</v-icon>
        </v-btn>
    </div>

</v-container>

@endsection
