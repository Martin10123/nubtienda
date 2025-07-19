<script setup>
import AppIcon from "@/Components/AppIcon.vue";
</script>

<template>
    <form class="flex items-center mt-2">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <AppIcon class="size-4" name="search" />
            </div>
            <input type="text" id="simple-search"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full ps-10 p-2.5"
                placeholder="Buscar tiendas por nombre, categoría..." />
        </div>
        <button type="submit"
            class="p-2.5 ms-2 text-sm font-medium text-white bg-black rounded-lg border border-black hover:bg-black focus:ring-4 focus:outline-none focus:ring-black flex items-center gap-2">
            <AppIcon class="size-4" name="search" />
            <span>Buscar</span>
        </button>
    </form>
</template>
