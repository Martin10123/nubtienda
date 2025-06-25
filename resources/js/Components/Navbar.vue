<script setup>
import NavigationMenu from "@/Components/NavigationMenu.vue";
import { ref } from "vue";
import LogoutButton from "./LogoutButton.vue";
import AppIcon from "@/Components/AppIcon.vue";
import { Link } from "@inertiajs/vue3";

defineProps({ title: String });

const openMenu = ref(false);
</script>

<template>
    <header class="shadow-md p-2">
        <nav class="container px-4 mx-auto flex items-center justify-between">
            <Link href="/dashboard">
                <img
                    class="size-14 rounded-full cursor-pointer"
                    src="/images/logoApp.webp"
                    alt="Logo"
                />
            </Link>

            <div>
                <button
                    class="bg-gray-200 p-1 rounded-lg shadow-sm cursor-pointer hover:bg-gray-300 transition-colors lg:hidden"
                    @click="openMenu = !openMenu"
                >
                    <AppIcon class="size-5" name="menu" />
                </button>

                <NavigationMenu :openMenu="openMenu" />
            </div>

            <LogoutButton class="hidden lg:flex" />
        </nav>
    </header>
</template>
