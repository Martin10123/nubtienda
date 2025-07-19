<script setup>
import AppIcon from "@/Components/AppIcon.vue";
</script>

<template>
    <div
        class="rounded-lg border bg-card text-card-foreground shadow-2xs group hover:shadow-lg transition-shadow overflow-hidden">
        <div class="relative">
            <img class="w-full h-48 object-cover" src="/icons/avatar.svg" alt="" />
            <div class="absolute top-2 left-2 chip bg-gradient-to-r from-yellow-400 to-orange-500 text-white">
                <AppIcon class="size-4 text-yellow-200 fill-yellow-200 mr-1" name="star" />
                <p>Destacada</p>
            </div>
            <div class="absolute top-2 right-2 chip bg-blue-500 text-white">
                <AppIcon class="size-4 mr-1" name="check" />
                <p>Verificada</p>
            </div>
            <div
                class="absolute bottom-2 right-2 bg-gray-100 rounded-md cursor-pointer p-2 inline-flex items-center justify-center hover:bg-gray-200 opacity-0 group-hover:opacity-100 transition-opacity">
                <AppIcon class="size-4" name="heart" />
            </div>
        </div>

        <div class="p-4">
            <div class="flex gap-2">
                <img class="w-12 h-12 object-cover rounded-full border-2 border-white shadow-sm"
                    src="/images/logoApp.webp" alt="" />
                <div>
                    <h3 class="text-lg font-semibold truncate">Bella Moda</h3>
                    <p class="text-sm text-gray-500">
                        Ropa femenina elegante y casual para toda ocasión
                    </p>
                </div>
            </div>

            <div class="flex items-center justify-between gap-2 my-3">
                <p class="chip hover:bg-blue-50 hover:border-blue-300">
                    Tecnología
                </p>
                <div class="flex items-center gap-2 text-sm">
                    <AppIcon class="size-4" name="map-pin" />
                    <p class="text-sm text-gray-500">Medellín, Colombia</p>
                </div>
            </div>

            <div class="flex items-center justify-between my-3">
                <div class="flex items-center gap-2 text-sm">
                    <AppIcon class="size-4 fill-yellow-400 text-yellow-400" name="star" />
                    <p class="text-sm font-semibold">4.8</p>
                    <p class="text-gray-500 text-sm">(156 reseñas)</p>
                </div>

                <div class="flex items-center gap-2 text-sm">
                    <AppIcon class="size-4 text-gray-500" name="calendar" />
                    <p>hace 2 semanas</p>
                </div>
            </div>

            <div class="flex items-center justify-between my-3">
                <div class="flex items-center gap-2 text-sm">
                    <AppIcon class="size-4 text-gray-500" name="shopping-bag" />
                    <p>89 productos</p>
                </div>
                <div class="flex items-center gap-2 text-sm">
                    <AppIcon class="size-4 text-gray-500" name="users" />
                    <p>1,247 seguidores</p>
                </div>
            </div>

            <div class="flex gap-2 items-center mt-5">
                <button
                    class="w-full flex items-center justify-center gap-2 bg-black text-white px-4 py-2 rounded-lg hover:opacity-80 transition-colors">
                    <AppIcon class="size-4" name="external-link" />
                    Ver tienda
                </button>
                <button class="bg-gray-100 text-gray-700 h-10 px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                    Seguir
                </button>
                <button class="bg-gray-100 text-gray-700 h-10 px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                    <AppIcon class="size-4" name="heart" />
                </button>
            </div>
        </div>
    </div>
</template>

<style scoped>
.chip {
    @apply inline-flex border px-2 py-1 rounded-full text-xs font-bold cursor-pointer;
}
</style>
