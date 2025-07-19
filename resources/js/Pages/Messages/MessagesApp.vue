<script setup>
import AppIcon from "@/Components/AppIcon.vue";
import CardInfo from "@/Components/CardInfo.vue";
import CardMessage from "@/Components/Messages/CardMessage.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
    <AppLayout title="Mensajes">
        <section class="p-4 bg-before before:bg-gray-100">
            <div class="lg:flex lg:items-center lg:justify-between mb-6">
                <div class="mb-4 lg:mb-0">
                    <h2 class="text-3xl font-bold tracking-tight">
                        Mensajes y Consultas
                    </h2>

                    <p class="text-gray-500">
                        Gestiona las consultas de tus clientes
                    </p>
                </div>

                <div class="relative w-full lg:w-1/4">
                    <div
                        class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
                    >
                        <AppIcon class="size-4" name="search" />
                    </div>
                    <input
                        type="text"
                        id="simple-search"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full ps-10 p-2.5"
                        placeholder="Buscar tiendas por nombre, categoría..."
                    />
                </div>
            </div>

            <div
                class="grid grid-cols-1 my-6 sm:grid-cols-2 lg:grid-cols-4 gap-4"
            >
                <CardInfo
                    title="Total Mensajes"
                    iconPath="message-square"
                    icon-color="text-blue-500"
                    amount="47"
                    variation="+8"
                    comparisonText="hoy"
                />
                <CardInfo
                    title="Sin Responder"
                    iconPath="info"
                    icon-color="text-red-500"
                    amount="42"
                    variation=""
                    comparisonText="Requieren atención"
                />
                <CardInfo
                    title="Respondidos"
                    iconPath="check-circle"
                    icon-color="text-green-500"
                    amount="5"
                    variation="14%"
                    comparisonText="del total"
                />
                <CardInfo
                    title="Tiempo Promedio"
                    iconPath="clock"
                    icon-color="text-orange-500"
                    amount="2.5h"
                    variation=""
                    comparisonText="Tiempo de respuesta"
                />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <CardMessage />
                <CardMessage />
                <CardMessage />
                <CardMessage />
            </div>
        </section>
    </AppLayout>
</template>
