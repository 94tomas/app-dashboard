@extends('layouts.auth')

@section('content')

<v-row class="align-center justify-center flex-column py-10">
    <v-col
        cols="12"
        sm="8"
        md="4"
    >
        @if (session('erro_login'))
            <v-alert
                dense
                text
                type="error"
                class="mb-10"
            >
                Su cuenta esta inactiva, por favor comuníquese con el administrador del sistema
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
                    Iniciar sesión
                </v-sheet>
            </v-card-title>

            <v-form method="POST" action="{{ route('login') }}">
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
                    <v-text-field
                        label="Contraseña"
                        prepend-icon="mdi-lock"
                        type="password"
                        name="password"
                        color="secondary"
                        :error="@error('password') true @else false @enderror"
                        error-messages="@error('password') {{ $message }} @enderror"
                    ></v-text-field>
                </v-card-text>
                <v-card-actions class="px-10 pb-5 justify-center">
                    <div>
                        <v-btn color="secondary" dark type="submit" rounded block>Ingresar</v-btn>

                        @if (Route::has('password.request'))
                        <div class="text-center mt-5">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a>
                        </div>
                        @endif
                    </div>
                </v-card-actions>
            </v-form>

        </v-card>
    </v-col>
</v-row>

@endsection
