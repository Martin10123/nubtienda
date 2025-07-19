<script setup>
import AppIcon from "@/Components/AppIcon.vue";
</script>

<template>
    <div class="w-max mt-6 grid grid-cols-2 lg:grid-cols-4 gap-2">
        <button
            class="filter-button bg-gradient-to-r from-blue-500 to-purple-600 text-white hover:from-blue-600 hover:to-purple-700">
            <AppIcon class="size-4" name="store" />
            <p>Destacar mi tienda</p>
        </button>
        <button class="filter-button hover:bg-gray-100">
            <AppIcon class="size-4" name="heart" />
            <p>Mis favoritas</p>
        </button>
        <button class="filter-button hover:bg-gray-100">
            <AppIcon class="size-4" name="star" />
            <p>Mejor valoradas</p>
        </button>
        <button class="filter-button hover:bg-gray-100">
            <AppIcon class="size-4" name="map-pin" />
            <p>Cerca de mi</p>
        </button>
    </div>
</template>

<style scoped>
.filter-button {
    @apply flex items-center justify-center bg-white gap-3 border text-sm border-gray-200 rounded-lg h-10 px-4 py-2 w-full transition-colors hover:bg-gray-50;
}
</style>
