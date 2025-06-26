<script setup lang="ts">
import AppIcon from "../AppIcon.vue";
</script>

<template>
    <div class="grid grid-cols-2 gap-2 lg:grid-cols-3 xl:flex lg:items-center">
        <form class="w-full col-span-2 my-2">
            <label
                for="search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only"
                >Search</label
            >
            <div class="relative">
                <div
                    class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
                >
                    <AppIcon class="size-4 text-gray-500" name="search" />
                </div>
                <input
                    type="search"
                    id="search"
                    class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-gray-300 focus:border-gray-300 xl:w-64"
                    placeholder="Buscar productos..."
                    required
                />
            </div>
        </form>

        <div
            class="border flex items-center justify-center gap-2 p-3 rounded-lg text-sm font-medium bg-white cursor-pointer hover:bg-gray-100 transition-colors"
        >
            <AppIcon class="size-4" name="funnel" />

            <span>Filtros</span>
        </div>

        <div
            class="border flex items-center justify-center gap-2 p-3 rounded-lg text-sm font-medium bg-white cursor-pointer hover:bg-gray-100 transition-colors"
        >
            <AppIcon class="size-4" name="download" />

            <span>Exportar</span>
        </div>

        <div
            class="border flex items-center justify-center gap-2 p-3 rounded-lg text-sm font-medium bg-white cursor-pointer hover:bg-gray-100 transition-colors"
        >
            <AppIcon class="size-4" name="file-spreadsheet" />

            <span>Importar</span>
        </div>

        <button
            class="w-full border flex items-center justify-center gap-2 p-3 rounded-lg text-sm font-medium bg-black text-white cursor-pointer hover:scale-105 duration-200 transition-transform"
        >
            <AppIcon class="size-4" name="plus" />

            <span>Ajustar stock</span>
        </button>
    </div>
</template>
