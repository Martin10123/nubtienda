<script setup>
import AppIcon from "@/Components/AppIcon.vue";
</script>

<template>
    <div>
        <div class="flex items-center gap-2">
            <AppIcon class="size-4" name="map-pin" />
            <h2 class="text-sm font-medium text-gray-700">Ciudades:</h2>
        </div>
        <ul class="flex flex-wrap gap-2 mt-2">
            <li v-for="city in ['Cartagena', 'Medellín', 'Bogotá', 'Cali', 'Barranquilla', 'Bucaramanga', 'Pereira']"
                :key="city" class="city-chip hover:bg-green-50 hover:border-green-300">
                {{ city }}
            </li>
        </ul>
    </div>
</template>

<style scoped>
.city-chip {
    @apply inline-flex border px-2 py-1 rounded-full text-xs font-bold cursor-pointer duration-300;
}
</style>
