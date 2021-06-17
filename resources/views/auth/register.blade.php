@extends('layouts.auth')

@section('content')

<v-row class="align-center justify-center flex-column py-10">
    <v-col
        cols="12"
        sm="8"
        md="4"
    >
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
                    Registrarse
                </v-sheet>
            </v-card-title>

            <v-form method="POST" action="{{ route('register') }}">
                @csrf
                <v-card-text>
                    <v-text-field
                        label="Nombre"
                        prepend-icon="mdi-briefcase-account"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        autofocus
                        :error="@error('name') true @else false @enderror"
                        error-messages="@error('name') {{ $message }} @enderror"
                    ></v-text-field>
                    <v-text-field
                        label="Correo electrónico"
                        prepend-icon="mdi-at"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        :error="@error('email') true @else false @enderror"
                        error-messages="@error('email') {{ $message }} @enderror"
                    ></v-text-field>
                    <v-text-field
                        label="Contraseña"
                        prepend-icon="mdi-lock"
                        type="password"
                        name="password"
                        :error="@error('password') true @else false @enderror"
                        error-messages="@error('password') {{ $message }} @enderror"
                    ></v-text-field>
                    <v-text-field
                        label="Contraseña"
                        prepend-icon="mdi-lock-check"
                        type="password"
                        name="password_confirmation"
                        autocomplete="new-password"
                    ></v-text-field>
                </v-card-text>
                <v-card-actions class="px-10 pb-5 justify-center">
                    <div>
                        <v-btn color="secondary" dark type="submit" rounded block>Registrarse</v-btn>
                    </div>
                </v-card-actions>
            </v-form>

        </v-card>
    </v-col>
</v-row>

@endsection
