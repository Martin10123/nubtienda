<script setup>
import { ref } from "vue";
import { Head } from "@inertiajs/vue3";
import Navbar from "@/Components/Navbar.vue";

defineProps({
    title: String,
});

const openMenu = ref(false);
</script>

<template>
    <Head :title="title" />

    <Navbar />

    <main
        class="container mx-auto lg:my-6 before:content before:fixed before:top-0 before:left-0 before:w-full before:h-full before:bg-white before:opacity-50 before:z-[-1]"
    >
        <slot />
    </main>
</template>
