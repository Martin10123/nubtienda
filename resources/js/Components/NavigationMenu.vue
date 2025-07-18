<script setup>
import AppIcon from "./AppIcon.vue";
import LogoutButton from "./LogoutButton.vue";
import { Link } from "@inertiajs/vue3";

defineProps({ openMenu: Boolean });

const menuItems = [
    { label: "Inicio", icon: "house", route: "/dashboard" },
    { label: "Empresa", icon: "building-2", route: "/business" },
    { label: "Tienda", icon: "store", route: "/store" },
    { label: "Productos", icon: "gallery-vertical-end", route: "/products" },
    { label: "Inventario", icon: "warehouse", route: "/inventory" },
    { label: "Perfil", icon: "user", route: "/profile" },
];
</script>

<template>
    <ul class="absolute right-2 top-20 bg-white shadow-lg rounded-lg z-[999] p-4 w-[23.5rem] duration-300 lg:relative lg:z-0 lg:top-0 lg:right-0 lg:w-auto lg:p-0 lg:shadow-none lg:flex lg:items-center lg:gap-4"
        :class="{
            'opacity-0 pointer-events-none lg:opacity-100 lg:pointer-events-auto':
                !openMenu,
        }">
        <li v-for="item in menuItems" :key="item.label">
            <Link :href="item.route"
                class="flex items-center gap-2 px-2 py-3 rounded-lg text-gray-500 hover:bg-gray-100 transition-colors duration-200 cursor-pointer border-b lg:border-none"
                :class="{
                    '!text-black bg-gray-200 font-semibold':
                        $page.url === item.route,
                }">
            <AppIcon class="size-5" :name="item.icon" />
            {{ item.label }}
            </Link>
        </li>

        <LogoutButton class="lg:hidden" />
    </ul>
</template>
