<script setup lang="ts">
import SectionCardInformation from "@/Components/SectionCardInformation.vue";
import AppIcon from "@/Components/AppIcon.vue";
import CardBusinees from "@/Components/Profile/CardBusinees.vue";
</script>

<template>
    <section>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <div
                class="rounded-lg border bg-card text-card-foreground shadow-sm p-4 text-center"
            >
                <h3 class="text-2xl font-bold text-blue-600">3</h3>
                <p class="text-sm text-gray-500">Negocios totales</p>
            </div>
            <div
                class="rounded-lg border bg-card text-card-foreground shadow-sm p-4 text-center"
            >
                <h3 class="text-2xl font-bold text-green-600">2</h3>
                <p class="text-sm text-gray-500">Activos</p>
            </div>
            <div
                class="rounded-lg border bg-card text-card-foreground shadow-sm p-4 text-center"
            >
                <h3 class="text-2xl font-bold text-orange-600">80</h3>
                <p class="text-sm text-gray-500">Productos totales</p>
            </div>
            <div
                class="rounded-lg border bg-card text-card-foreground shadow-sm p-4 text-center"
            >
                <h3 class="text-2xl font-bold text-purple-600">1</h3>
                <p class="text-sm text-gray-500">Premium</p>
            </div>
        </div>

        <div>
            <SectionCardInformation
                title="Mis Negocios"
                icon="briefcase-business"
                description="Gestiona todos tus negocios desde un solo lugar"
            >
                <template #header-actions>
                    <button
                        class="flex items-center justify-center px-4 py-2 bg-blue-500 border border-transparent rounded-md text-white hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150"
                    >
                        <AppIcon name="plus" class="size-4 mr-2" />

                        Agregar Negocio
                    </button>
                </template>

                <template #content>
                    <div class="grid gap-4">
                        <CardBusinees />
                        <CardBusinees />
                    </div>
                </template>
            </SectionCardInformation>
        </div>

        <div
            class="rounded-lg border text-card-foreground shadow-sm border-blue-200 bg-blue-50 mt-6"
        >
            <div class="p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="font-medium text-blue-900">
                            Límite de Negocios
                        </h4>
                        <p class="text-sm text-blue-700">
                            Tienes 1 de 2 negocios permitidos en tu plan actual
                        </p>
                    </div>
                    <button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border hover:bg-blue-100 h-10 px-4 py-2 border-blue-300 text-blue-700"
                    >
                        Actualizar Plan
                    </button>
                </div>
            </div>
        </div>
    </section>
</template>
