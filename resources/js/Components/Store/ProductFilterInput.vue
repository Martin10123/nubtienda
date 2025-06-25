<script setup lang="ts">
import AppIcon from "../AppIcon.vue";

defineProps<{
    showFilters: boolean;
    showContact: boolean;
}>();
</script>

<template>
    <div>
        <h2 class="text-2xl font-bold mb-4">Nuestro productos</h2>

        <div class="w-full flex flex-col items-end gap-4 mb-4">
            <form class="w-full">
                <label
                    for="search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only"
                    >Search</label
                >
                <div class="relative">
                    <div
                        class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
                    >
                        <AppIcon class="size-5 text-gray-500" name="search" />
                    </div>
                    <input
                        type="search"
                        id="search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-gray-300 focus:border-gray-300"
                        placeholder="Search"
                        required
                    />
                </div>
            </form>

            <div>
                <select
                    class="border border-gray-300 bg-white rounded-lg py-3 w-max"
                    name=""
                    id=""
                >
                    <option value="">Ordenar por</option>
                    <option value="relevance">Más relevantes</option>
                    <option value="price_asc">Precio: menor a mayor</option>
                    <option value="price_desc">Precio: mayor a menor</option>
                    <option value="name_asc">Nombre A-Z</option>
                    <option value="newest">Más nuevos</option>
                    <option value="popular">Más populares</option>
                </select>
            </div>
        </div>

        <p class="text-gray-500 text-base">Mostrando 1-6 de 8 productos</p>

        <div class="flex items-center justify-between gap-2 my-4">
            <button
                class="border rounded-lg p-2 flex items-center gap-2 hover:bg-gray-100 transition-colors cursor-pointer lg:hidden"
                @click="$emit('toggleFilters')"
                :class="{
                    'bg-gray-100': showFilters,
                }"
            >
                <AppIcon class="size-5" name="list-filter" />
            </button>
            <button
                class="border rounded-lg p-2 flex items-center gap-2 hover:bg-gray-100 transition-colors cursor-pointer lg:ml-auto xl:hidden"
                @click="$emit('toggleContact')"
                :class="{
                    'bg-gray-100': showContact,
                }"
            >
                <AppIcon class="size-5" name="info" />
            </button>
        </div>
    </div>
</template>
