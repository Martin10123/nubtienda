<script setup>
import AppIcon from "@/Components/AppIcon.vue";
</script>

<template>
    <button
        class="w-full flex items-center gap-2 p-2 text-red-600 rounded-lg shadow-sm bg-red-100 hover:bg-red-300 transition-colors duration-200 lg:w-auto"
    >
        <AppIcon class="size-5" name="log-out" />

        Cerrar sesión
    </button>
</template>
