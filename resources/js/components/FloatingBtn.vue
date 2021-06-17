<template>
    <v-speed-dial
        v-model="fab"
        top
        left
        direction="bottom"
        transition="scale-transition"
        absolute
    >
        <template v-slot:activator>
            <v-btn
                v-model="fab"
                color="primary"
                dark
                fab
            >
                <v-icon v-if="fab">
                    mdi-close
                </v-icon>
                <v-icon v-else>
                    mdi-dots-vertical
                </v-icon>
            </v-btn>
        </template>
        <v-tooltip right>
            <template v-slot:activator="{ on, attrs }">
                <v-btn
                    fab
                    dark
                    small
                    color="green"
                    v-bind="attrs"
                    v-on="on"
                    href="/"
                >
                    <v-icon>mdi-home</v-icon>
                </v-btn>
            </template>
            <span>Inicio</span>
        </v-tooltip>
        <v-tooltip right>
            <template v-slot:activator="{ on, attrs }">
                <v-btn
                    fab
                    dark
                    small
                    color="indigo"
                    v-bind="attrs"
                    v-on="on"
                    href="/login"
                >
                    <v-icon>mdi-account</v-icon>
                </v-btn>
            </template>
            <span>Iniciar sesión</span>
        </v-tooltip>
        <v-tooltip right>
            <template v-slot:activator="{ on, attrs }">
                <v-btn
                    fab
                    dark
                    small
                    color="indigo"
                    v-bind="attrs"
                    v-on="on"
                    href="/register"
                >
                    <v-icon>mdi-account-edit</v-icon>
                </v-btn>
            </template>
            <span>Registrarme</span>
        </v-tooltip>
    </v-speed-dial>
</template>
<script>
export default {
    data() {
        return {
            fab: false,
        }
    },
}
</script>
