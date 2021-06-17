<template>
    <v-app>
        <v-navigation-drawer
            v-model="drawer"
            app
            dark
            :permanent="($vuetify.breakpoint.mdAndUp) ? perDrawer : false"
            color="secondary"
        >
            <!-- :permanent="$vuetify.breakpoint.mdAndUp" -->
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
                                    src="/images/user.png"
                                    alt="admin"
                                >
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title>{{ userName }}</v-list-item-title>
                                <v-list-item-subtitle>Administrador</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </v-img>
                <v-list-item>
                    <v-list-item-content>
                        <v-list-item-title>Menu de navegación</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item link href="/mi-panel" :class="[(path == '/dashboard') ? 'active' : '']">
                    <v-list-item-icon>
                        <v-icon>mdi-view-dashboard</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>Mi panel</v-list-item-title>
                </v-list-item>
                <!-- list menu -->
                <v-list-group
                    v-for="item in items"
                    :key="item.title"
                    v-model="item.active"
                    :prepend-icon="item.action"
                    no-action
                >
                    <template v-slot:activator>
                    <v-list-item-content>
                        <v-list-item-title v-text="item.title"></v-list-item-title>
                    </v-list-item-content>
                    </template>

                    <v-list-item
                        v-for="child in item.items"
                        :key="child.title"
                        link
                        :href="child.url"
                        :class="[(path == child.url) ? 'active' : '']"
                    >
                        <v-list-item-content>
                            <v-list-item-title v-text="child.title"></v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </v-list-group>
                <!-- end list menu -->
                <!-- <v-list-item link href="/mi-cuenta" :class="[(path == '/mi-cuenta') ? 'active' : '']">
                    <v-list-item-action>
                        <v-icon>mdi-account-circle</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>Mi cuenta</v-list-item-title>
                    </v-list-item-content>
                </v-list-item> -->
            </v-list>
        </v-navigation-drawer>

        <v-app-bar
            app
        >
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

            <!-- <v-btn icon>
                <v-icon>mdi-bell</v-icon>
            </v-btn> -->
            <!-- menu account -->
            <v-menu offset-y>
                <template v-slot:activator="{ on, attrs }">
                    <v-btn
                        icon
                        v-bind="attrs"
                        v-on="on"
                        class="mr-0"
                        color="primary"
                    >
                        <v-icon>mdi-account-circle</v-icon>
                    </v-btn>
                </template>
                <v-list dense min-width="200px">
                    <v-list-item href="/mi-panel">
                        <v-icon>mdi-view-dashboard</v-icon>
                        <v-list-item-title>Mi panel</v-list-item-title>
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
        </v-app-bar>

        <v-main class="grey lighten-3">
            <slot/>
        </v-main>

        <v-footer
            app
            inset
        >
            <span>Edson Tomas &copy; {{ new Date().getFullYear() }}</span>
        </v-footer>
    </v-app>
</template>

<script>
export default {
    data() {
        return {
            overlay: false,
            perDrawer: true,
            drawer: null,
            path: '/',
            items: [
                {
                    icon: 'mdi-view-dashboard',
                    title: 'Mi panel',
                    subItems: []
                },
                {
                    icon: 'mdi-briefcase',
                    title: 'Administración',
                    subItems: [
                        { title: 'Tiendas (sucursales)', link: '/tiendas' },
                        { title: 'Cajas', link: '/cajas' },
                    ]
                }
                // {
                //     action: 'mdi-briefcase',
                //     items: [
                //         { title: 'Tiendas (sucursales)', url: '/tiendas' },
                //         { title: 'Cajas', url: '/cajas' },
                //         { title: 'Proveedores', url: '/proveedores' },
                //         { title: 'Empleados', url: '/empleados' },
                //         { title: 'Clientes', url: '/clientes' },
                //     ],
                //     title: 'Administración',
                // },
                // {
                //     action: 'mdi-store',
                //     items: [
                //         { title: 'Categorías', url: '/categorias' },
                //         { title: 'Presentaciones', url: '/presentaciones' },
                //         { title: 'Marcas', url: '/marcas' },
                //         { title: 'Productos', url: '/productos' },
                //     ],
                //     title: 'Almacén',
                // },
                // {
                //     action: 'mdi-cart',
                //     items: [
                //         { title: 'Nueva compra', url: '/compras' },
                //         { title: 'Compras realizadas', url: '/lista-compras' },
                //     ],
                //     title: 'Compras',
                // },
                // {
                //     action: 'mdi-cash',
                //     items: [
                //         { title: 'Realizar venta', url: '/ventas' },
                //         { title: 'ventas realizadas', url: '/lista-ventas' },
                //     ],
                //     title: 'Ventas',
                // },
                // {
                //     action: 'mdi-point-of-sale',
                //     items: [
                //         { title: 'Generar cotización', url: '/cotizacion' },
                //         { title: 'Ver cotizaciones', url: '/lista-cotizacion' },
                //     ],
                //     title: 'Cotizaciones',
                // },
                // {
                //     action: 'mdi-printer-pos',
                //     items: [
                //         { title: 'Nuevo movimiento', url: '/movimiento-caja' },
                //         { title: 'Movimientos realizadas', url: '/lista-movimientos' },
                //     ],
                //     title: 'Movimientos en cajas',
                // },
                // {
                //     action: 'mdi-warehouse',
                //     items: [
                //         { title: 'Inventario general', url: '/kardex' }
                //     ],
                //     title: 'Inventario',
                // },
                // {
                //     action: 'mdi-chart-bar',
                //     items: [
                //         { title: 'Reportes de ventas', url: '/reporte-ventas' }
                //     ],
                //     title: 'Reportes',
                // },
                // {
                //     action: 'mdi-cog',
                //     items: [
                //         { title: 'Datos de la empresa', url: '/mi-empresa' },
                //         { title: 'Mi cuenta', url: '/mi-cuenta' },
                //     ],
                //     title: 'Configuraciones',
                // },
            ],
        }
    },
    props: ['userName'],
    created() {
        this.path = window.location.pathname;
        this.findActivePath()
    },
    methods: {
        findActivePath () {
            this.items.forEach(element => {
                for (let i = 0; i < element.items.length; i++) {
                    if (element.items[i].url === this.path) {
                        element.active = true
                        break
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
