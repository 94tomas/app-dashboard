@extends('layouts.auth')

@section('content')

<v-row class="align-center justify-center flex-column py-10">
    <v-col
        cols="12"
        sm="8"
        md="4"
    >
        @if (session('status'))
            <v-alert
                dense
                text
                type="success"
                class="mb-10"
            >
                {{ session('status') }}
                {{-- ¡Hemos enviado su enlace de restablecimiento de contraseña por correo electrónico! --}}
            </v-alert>
        @endif
        <v-card class="t-card elevation-24">
            <v-card-title>
                <v-sheet
                    color="primary"
                    dark
                    elevation="6"
                    rounded
                    width="100%"
                    class="mt-n9 transition-swing text-center text-h5 font-weight-bold pa-5"
                >
                    Restablecer contraseña
                </v-sheet>
            </v-card-title>
            <v-form method="POST" action="{{ route('password.email') }}">
                @csrf
                <v-card-text>
                    <v-text-field
                        label="Correo electrónico"
                        prepend-icon="mdi-at"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        autofocus
                        color="primary"
                        :error="@error('email') true @else false @enderror"
                        error-messages="@error('email') {{ $message }} @enderror"
                    ></v-text-field>
                    <div class="font-weight-regular text-center text-caption" style="color: #9b9b9b">Ingresa tú correo electrónico y te enviaremos un enlace de restablecimiento de contraseña</div>
                </v-card-text>
                <v-card-actions class="px-10 pb-8 justify-center">
                    <div>
                        <v-btn color="secondary" dark type="submit" rounded block>Enviar enlace</v-btn>
                    </div>
                </v-card-actions>
            </v-form>
        </v-card>
    </v-col>
</v-row>

@endsection
