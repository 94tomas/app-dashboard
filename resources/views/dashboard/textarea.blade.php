@extends('layouts.dash')

@section('content')

<v-container class="py-10">

    <div class="mb-15">
        <v-row>
            <v-col
                cols="12"
                md="6"
            >
                <v-textarea
                    name="input-7-1"
                    label="Default style"
                    value="The Woodman set to work at once, and so sharp was his axe that the tree was soon chopped nearly through."
                    hint="Hint text"
                ></v-textarea>
            </v-col>
            <v-col
                cols="12"
                md="6"
            >
                <v-textarea
                    solo
                    name="input-7-4"
                    label="Solo textarea"
                ></v-textarea>
            </v-col>
            <v-col
                cols="12"
                md="6"
            >
                <v-textarea
                    filled
                    name="input-7-4"
                    label="Filled textarea"
                    value="The Woodman set to work at once, and so sharp was his axe that the tree was soon chopped nearly through."
                ></v-textarea>
            </v-col>
            <v-col
                cols="12"
                md="6"
            >
                <v-textarea
                    outlined
                    name="input-7-4"
                    label="Outlined textarea"
                    value="The Woodman set to work at once, and so sharp was his axe that the tree was soon chopped nearly through."
                ></v-textarea>
            </v-col>
        </v-row>
    </div>

    <div class="pt-15 text-right">
        <v-btn text href="https://vuetifyjs.com/en/components/textareas/" target="_blank">
            Ver más <v-icon>mdi-open-in-new</v-icon>
        </v-btn>
    </div>

</v-container>

@endsection
