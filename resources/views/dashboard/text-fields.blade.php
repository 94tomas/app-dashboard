@extends('layouts.dash')

@section('content')

<v-container class="py-10">

    <div class="mb-15">
        <v-form>
            <v-container>
                <v-row>
                    <v-col
                        cols="12"
                        sm="6"
                        md="3"
                    >
                        <v-text-field
                            label="Regular"
                        ></v-text-field>
                    </v-col>

                    <v-col
                        cols="12"
                        sm="6"
                        md="3"
                    >
                        <v-text-field
                            label="Regular"
                            placeholder="Placeholder"
                        ></v-text-field>
                    </v-col>

                    <v-col
                        cols="12"
                        sm="6"
                        md="3"
                    >
                        <v-text-field
                            label="Solo"
                            solo
                        ></v-text-field>
                    </v-col>

                    <v-col
                        cols="12"
                        sm="6"
                        md="3"
                    >
                        <v-text-field
                            label="Solo"
                            placeholder="Placeholder"
                            solo
                        ></v-text-field>
                    </v-col>

                    <v-col
                        cols="12"
                        sm="6"
                        md="3"
                    >
                        <v-text-field
                            label="Filled"
                            filled
                        ></v-text-field>
                    </v-col>

                    <v-col
                        cols="12"
                        sm="6"
                        md="3"
                    >
                        <v-text-field
                            label="Filled"
                            placeholder="Placeholder"
                            filled
                        ></v-text-field>
                    </v-col>

                    <v-col
                        cols="12"
                        sm="6"
                        md="3"
                    >
                        <v-text-field
                            label="Outlined"
                            outlined
                        ></v-text-field>
                    </v-col>

                    <v-col
                        cols="12"
                        sm="6"
                        md="3"
                    >
                        <v-text-field
                            label="Outlined"
                            placeholder="Placeholder"
                            outlined
                        ></v-text-field>
                    </v-col>
                </v-row>
            </v-container>
        </v-form>
    </div>

    <div class="pt-15 text-right">
        <v-btn text href="https://vuetifyjs.com/en/components/text-fields/" target="_blank">
            Ver más <v-icon>mdi-open-in-new</v-icon>
        </v-btn>
    </div>

</v-container>

@endsection
