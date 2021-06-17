<template>
    <v-app>
        <v-navigation-drawer
            v-model="drawer"
            app
            dark
            :permanent="($vuetify.breakpoint.mdAndUp) ? perDrawer : false"
            color="secondary"
        >

            <!-- main list -->
            <v-list class="pt-0" dense>
                <v-img
                    src="/images/bg-common.jpg"
                    height="120px"
                    class="align-end"
                    gradient="to bottom, rgba(100,115,201,.33), rgba(25,32,72,.7)"
                >
                    <v-list>
                        <v-list-item>
                            <v-list-item-avatar>
                                <img
                                    src="/images/user.jpg"
                                    alt="admin"
                                    style="object-fit:cover; object-position:center;"
                                >
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title>{{ userName }}</v-list-item-title>
                                <v-list-item-subtitle>Administrador</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </v-img>

                <!-- main menu -->
                <template v-for="(item, index) in items">

                    <v-list-item :key="index" v-if="item.header">
                        <v-list-item-content>
                            <v-list-item-title>{{ item.title }}</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>

                    <v-list-item
                        :key="index"
                        link
                        :href="item.path"
                        :class="[(path == item.path) ? 'active' : '']"
                        v-if="!item.header && !item.subItems"
                    >
                        <v-list-item-icon>
                            <v-icon>mdi-{{ item.icon }}</v-icon>
                        </v-list-item-icon>
                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                    </v-list-item>

                    <v-list-group
                        :key="index"
                        v-model="item.active"
                        :prepend-icon="`mdi-${item.icon}`"
                        no-action
                        v-if="!item.header && item.subItems"
                    >
                        <template v-slot:activator>
                        <v-list-item-content>
                            <v-list-item-title v-text="item.title"></v-list-item-title>
                        </v-list-item-content>
                        </template>

                        <v-list-item
                            v-for="child in item.subItems"
                            :key="child.title"
                            link
                            :href="child.path"
                            :class="[(path == child.path) ? 'active' : '']"
                        >
                            <v-list-item-content>
                                <v-list-item-title v-text="child.title"></v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list-group>

                </template>
                <!-- end main menu -->

            </v-list>
            <!-- end main list -->

        </v-navigation-drawer>

        <!-- main appbar -->
        <v-app-bar
            app
        >
            <!-- btn drawer -->
            <v-app-bar-nav-icon color="primary" @click.stop="drawer = !drawer" v-show="!$vuetify.breakpoint.mdAndUp"></v-app-bar-nav-icon>
            <v-btn
                class="mr-0"
                @click.stop="perDrawer = !perDrawer"
                icon
                color="primary"
                v-show="$vuetify.breakpoint.mdAndUp"
            >
                <v-icon>mdi-menu</v-icon>
            </v-btn>
            <v-spacer></v-spacer>

            <!-- btns header -->
            <!-- menu notify -->
            <v-menu offset-y content-class="white">
                <template v-slot:activator="{ on, attrs }">
                    <v-btn
                        icon
                        v-bind="attrs"
                        v-on="on"
                    >
                        <v-badge
                            content="6"
                            color="red"
                            overlap
                        >
                            <v-icon>mdi-bell</v-icon>
                        </v-badge>
                    </v-btn>
                </template>
                <v-list dense min-width="300px" max-width="300px" max-height="200px">
                    <v-list-item>
                        <v-list-item-avatar>
                            <v-icon>mdi-bell-ring</v-icon>
                        </v-list-item-avatar>
                        <v-list-item-content>
                            <v-list-item-title>6 Notificaciones nuevas</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item two-line href="#" v-for="(notify, i) in 6" :key="i">
                        <v-list-item-content>
                            <v-list-item-title>Lorem ipsum dolor</v-list-item-title>
                            <v-list-item-subtitle>Lorem ipsum dolor sit amet consectetur adipisicing elit.</v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                </v-list>
            </v-menu>
            <!-- end menu notify -->

            <!-- menu account -->
            <v-menu offset-y>
                <template v-slot:activator="{ on, attrs }">
                    <v-btn
                        icon
                        v-bind="attrs"
                        v-on="on"
                        class="mr-0"
                    >
                        <v-icon>mdi-account-circle</v-icon>
                    </v-btn>
                </template>
                <v-list dense min-width="250px" max-height="250px">
                    <v-list-item>
                        <v-list-item-avatar>
                            <img
                                src="/images/user.jpg"
                                alt="admin"
                                style="object-fit:cover; object-position:center;"
                            >
                        </v-list-item-avatar>
                        <v-list-item-content>
                            <v-list-item-title>{{ userName }}</v-list-item-title>
                            <v-list-item-subtitle>Administrador</v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item href="/mi-cuenta">
                        <v-icon>mdi-account-edit</v-icon>
                        <v-list-item-title>Mi cuenta</v-list-item-title>
                    </v-list-item>
                    <v-divider></v-divider>
                    <v-list-item href="/logout" @click.prevent="logout">
                        <v-icon>mdi-logout</v-icon>
                        <v-list-item-title>Cerrar sesión</v-list-item-title>
                    </v-list-item>
                </v-list>
            </v-menu>
            <!-- end menu account -->

        </v-app-bar>
        <!-- end main appbar -->

        <v-main class="grey lighten-3">
            <slot/>
        </v-main>

        <v-footer
            app
            inset
        >
            <span>Edson Tomas &copy; {{ new Date().getFullYear() }}</span>
        </v-footer>

        <!-- overlay -->
        <v-overlay :value="overlay" opacity=".9" z-index="10">
            <v-progress-circular
                indeterminate
                size="64"
                color="primary"
            ></v-progress-circular>
        </v-overlay>
    </v-app>
</template>

<script>
export default {
    data() {
        return {
            overlay: true,
            perDrawer: true,
            drawer: null,
            path: '/',
            items: [
                {
                    header: true,
                    title: 'Menú de navegación'
                },
                {
                    header: false,
                    icon: 'view-dashboard',
                    title: 'Mi panel',
                    path: '/dashboard'
                },
                {
                    header: false,
                    icon: 'alert',
                    title: 'Alertas',
                    path: '/alertas'
                },
                {
                    header: false,
                    icon: 'card',
                    title: 'Botones',
                    path: '/botones'
                },
                {
                    header: false,
                    icon: 'form-select',
                    title: 'Formularios',
                    subItems: [
                        { title: 'Campos de texto', path: '/campos-de-texto' },
                        { title: 'TextArea', path: '/textarea' },
                    ],
                },
                {
                    header: false,
                    icon: 'image',
                    title: 'Parallax',
                    path: '/parallax'
                },
                {
                    header: true,
                    title: 'Menú de Configuración'
                },
                {
                    header: false,
                    icon: 'cog',
                    title: 'Configuración',
                    path: '/configuracion'
                },
                {
                    header: false,
                    icon: 'account-edit',
                    title: 'Mi cuenta',
                    path: '/mi-cuenta'
                },
            ],
        }
    },
    props: ['userName'],
    created() {
        this.path = window.location.pathname;
        this.findActivePath()
    },
    mounted() {
        setTimeout(() => {
            this.overlay = false
        }, 800);
    },
    methods: {
        findActivePath () {
            this.items.forEach(element => {
                if (!element.header && element.subItems) {
                    for (let i = 0; i < element.subItems.length; i++) {
                        if (element.subItems[i].path === this.path) {
                            element.active = true
                            break
                        }
                    }
                }
            });
        },
        async logout () {
            await axios.post(`/logout`)
            .then((response) => {
                if (response.status === 204) {
                    location.reload();
                }
            })
            .catch((error) => {
                console.log(error);
            })
        }
    },
}
</script>
<style lang="scss">
    .v-list-item.active {
        &::before {
            opacity: 0.2;
        }
    }
</style>
