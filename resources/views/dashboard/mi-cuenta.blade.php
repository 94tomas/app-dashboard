@extends('layouts.dash')

@section('content')

<v-container class="py-10">

    <v-card class="elevation-2 mt-5">
        <v-card-title>
            <v-sheet
                color="primary"
                elevation="6"
                rounded
                height="80"
                width="80"
                class="mr-4 mt-n9 transition-swing d-flex justify-center"
            >
                <v-icon size="40px" color="white">mdi-account-circle</v-icon>
            </v-sheet>
            Mi cuenta
        </v-card-title>

        <v-card-text>
            <form>
                <v-row>
                    <v-col cols="12" sm="6">
                        <h5>Mi cuenta</h5>
                        <v-divider class="mb-4"></v-divider>
                        <v-text-field
                            label="Nombre completo *"
                            dense
                            outlined
                        ></v-text-field>
                        <v-text-field
                            label="Correo eléctronico *"
                            dense
                            outlined
                            type="email"
                        ></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="6">
                        <h5>Cambiar contraseña</h5>
                        <v-divider class="mb-4"></v-divider>
                        <v-text-field
                            label="Contraseña actual*"
                            hint="Mínimo 8 caracteres"
                            counter
                            dense
                            outlined
                        ></v-text-field>
                        <v-text-field
                            label="Contraseña nueva *"
                            hint="Mínimo 8 caracteres"
                            counter
                            dense
                            outlined
                        ></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="12" class="text-center">
                        <v-btn type="submit" color="primary">
                            Actualizar
                        </v-btn>
                    </v-col>
                </v-row>
            </form>
        </v-card-text>
    </v-card>

</v-container>

@endsection
