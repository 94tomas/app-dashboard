@extends('layouts.dash')

@section('content')

<v-container class="py-10">

    <div class="mb-15">
        <v-alert
            type="info"
        >
            I'm a dense alert with a <strong>type</strong> of info
        </v-alert>
        <v-alert
            text
            type="success"
        >
            I'm a dense alert with the <strong>text</strong> prop and a <strong>type</strong> of success
        </v-alert>
        <v-alert
            type="warning"
        >
            I'm a dense alert with the <strong>border</strong> prop and a <strong>type</strong> of warning
        </v-alert>
        <v-alert
            dense
            outlined
            type="error"
        >
            I'm a dense alert with the <strong>outlined</strong> prop and a <strong>type</strong> of error
        </v-alert>
    </div>

    <div class="pt-15 text-right">
        <v-btn text href="https://vuetifyjs.com/en/components/alerts/" target="_blank">
            Ver más <v-icon>mdi-open-in-new</v-icon>
        </v-btn>
    </div>

</v-container>

@endsection
