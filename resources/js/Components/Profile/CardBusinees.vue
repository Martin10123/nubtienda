<script setup lang="ts">
import AppIcon from "../AppIcon.vue";
</script>

<template>
    <div class="border p-3 rounded-lg relative md:grid md:grid-cols-2 md:gap-3">
        <div class="grid grid-cols-[auto,1fr] gap-4 md:gap-0 md:gap-x-4">
            <img
                src="/icons/avatar.svg"
                alt="Avatar"
                class="size-16 rounded-full"
            />

            <div class="w-full">
                <div class="flex flex-col mb-2 md:flex-row md:gap-4">
                    <h3 class="font-semibold text-lg tracking-tight">
                        Boutique Carolina
                    </h3>

                    <p
                        class="w-max inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-green-300 bg-green-100 text-green-800"
                    >
                        Activo
                    </p>
                </div>

                <p class="text-gray-600 text-sm">
                    Tienda de ropa femenina con las últimas tendencias
                </p>
            </div>

            <div
                class="col-span-2 px-4 md:flex md:gap-4 md:items-center md:justify-end"
            >
                <p class="flex items-center gap-2 text-sm text-gray-500">
                    <AppIcon name="globe" class="size-4" />
                    nubtienda.com/boutique-carolina
                </p>
                <p class="text-sm text-gray-500">Creado: 14 de enero de 2024</p>
                <p class="text-sm text-gray-500">Categoria: Ropa Femenina</p>
            </div>
        </div>

        <div class="mt-6 md:mr-6">
            <div
                class="grid grid-cols-2 md:grid-cols-4 gap-4 md:justify-items-end"
            >
                <div class="text-center">
                    <p class="font-semibold">45</p>
                    <p class="text-sm text-gray-500">Productos</p>
                </div>
                <div class="text-center">
                    <p class="font-semibold text-green-700">$2,450,000</p>
                    <p class="text-sm text-gray-500">Ventas</p>
                </div>
                <div class="text-center">
                    <p class="font-semibold">3,247</p>
                    <p class="text-sm text-gray-500">Visitas/mes</p>
                </div>
                <div class="text-center">
                    <p class="font-semibold">200</p>
                    <p class="text-sm text-gray-500">Consultas/mes</p>
                </div>
            </div>

            <div
                class="col-span-2 flex justify-center gap-2 mt-4 md:justify-end"
            >
                <button
                    class="w-full border p-2 flex items-center justify-center gap-2 rounded-md cursor-pointer hover:bg-gray-100 transition-colors md:w-max"
                >
                    <AppIcon name="eye" class="size-4" />
                    Ver tienda
                </button>
                <button
                    class="w-full border p-2 bg-blue-500 text-white flex items-center justify-center gap-2 rounded-md cursor-pointer hover:bg-blue-700 transition-colors md:w-max"
                >
                    <AppIcon name="settings" class="size-4" />
                    Gestionar
                </button>
            </div>

            <button
                class="absolute top-4 right-2 p-1 rounded-full hover:bg-gray-200 transition-colors md:top-2"
            >
                <AppIcon name="ellipsis" class="size-4" />
            </button>
        </div>
    </div>
</template>
