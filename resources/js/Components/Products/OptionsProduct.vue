<script setup>
import AppIcon from '../AppIcon.vue';
</script>

<template>
    <ul class="absolute bottom-14 right-0 z-10 bg-white border rounded-md shadow-lg w-48">
        <li class="flex items-center gap-2 px-4 py-2 font-medium hover:bg-gray-100 cursor-pointer">
            <AppIcon class="size-5" name="eye" />Ver producto
        </li>
        <li class="flex items-center gap-2 px-4 py-2 font-medium hover:bg-gray-100 cursor-pointer">
            <AppIcon class="size-5" name="square-pen" />Editar
        </li>
        <li class="flex items-center gap-2 px-4 py-2 font-medium hover:bg-gray-100 cursor-pointer">
            <AppIcon class="size-5" name="share-2" />Compartir
        </li>
        <li class="flex items-center gap-2 px-4 py-2 font-medium hover:bg-gray-100 cursor-pointer">
            <AppIcon class="size-5" name="chart-column-increasing" />Estadisticas
        </li>
        <li class="flex items-center gap-2 px-4 py-2 font-medium text-red-500 hover:bg-gray-100 cursor-pointer">
            <AppIcon class="size-5" name="trash-2" />Eliminar
        </li>
    </ul>
</template>
