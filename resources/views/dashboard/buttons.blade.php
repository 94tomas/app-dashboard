@extends('layouts.dash')

@section('content')

<v-container class="py-10">

    <div class="mb-15">
        <v-row
            align="center"
            justify="space-around"
        >
            <v-btn depressed>
                Normal
            </v-btn>
            <v-btn
                depressed
                color="primary"
            >
                Primary
            </v-btn>
            <v-btn
                depressed
                color="error"
            >
                Error
            </v-btn>
            <v-btn
                depressed
                disabled
            >
                Disabled
            </v-btn>
        </v-row>

        <div class="text-center py-15">
            <v-btn
                class="mx-2"
                fab
                dark
                small
                color="primary"
            >
                <v-icon dark>
                    mdi-minus
                </v-icon>
            </v-btn>

            <v-btn
                class="mx-2"
                fab
                dark
                small
                color="pink"
            >
                <v-icon dark>
                    mdi-heart
                </v-icon>
            </v-btn>

            <v-btn
                class="mx-2"
                fab
                dark
                color="indigo"
            >
                <v-icon dark>
                    mdi-plus
                </v-icon>
            </v-btn>

            <v-btn
                class="mx-2"
                fab
                dark
                color="teal"
            >
                <v-icon dark>
                    mdi-format-list-bulleted-square
                </v-icon>
            </v-btn>

            <v-btn
                class="mx-2"
                fab
                dark
                large
                color="cyan"
            >
                <v-icon dark>
                    mdi-pencil
                </v-icon>
            </v-btn>

            <v-btn
                class="mx-2"
                fab
                dark
                large
                color="purple"
            >
                <v-icon dark>
                    mdi-android
                </v-icon>
            </v-btn>
        </div>
    </div>

    <div class="pt-15 text-right">
        <v-btn text href="https://vuetifyjs.com/en/components/buttons/" target="_blank">
            Ver más <v-icon>mdi-open-in-new</v-icon>
        </v-btn>
    </div>

</v-container>

@endsection
