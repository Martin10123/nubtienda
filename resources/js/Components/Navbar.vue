<script setup>
import NavigationMenu from "@/Components/NavigationMenu.vue";
import { ref } from "vue";
import LogoutButton from "./LogoutButton.vue";

defineProps({ title: String });

const openMenu = ref(false);
</script>

<template>
    <header class="shadow-md p-2">
        <nav class="container px-4 mx-auto flex items-center justify-between">
            <img
                class="size-14 rounded-full cursor-pointer"
                src="/images/logoApp.webp"
                alt="Logo"
            />

            <div>
                <button
                    class="bg-blue-200 p-1 rounded-lg shadow-sm cursor-pointer hover:bg-gray-400 transition-colors duration-200 lg:hidden"
                    @click="openMenu = !openMenu"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                        />
                    </svg>
                </button>

                <NavigationMenu :openMenu="openMenu" />
            </div>

            <LogoutButton class="hidden lg:flex" />
        </nav>
    </header>
</template>
