<script setup lang="ts">
import AppIcon from "@/Components/AppIcon.vue";
import { ref } from "vue";
import SelectTemsStore from "@/Components/SelectTemsStore.vue";
import SettingsItem from "@/Components/SettingsItem.vue";

const selected = ref("clasico");

const themesBusiness = [
    {
        name: "clasico",
        title: "Clásico",
        description: "Ideal para tiendas elegantes y sobrias.",
        color: "bg-blue-500",
    },
    {
        name: "moderno",
        title: "Moderno",
        description: "Diseño vibrante y actual.",
        color: "bg-purple-500",
    },
    {
        name: "minimalista",
        title: "Minimalista",
        description: "Limpio, simple y profesional.",
        color: "bg-gray-500",
    },
    {
        name: "colorido",
        title: "Colorido",
        description: "Perfecto para marcas alegres y vivas.",
        color: "bg-pink-500",
    },
];
</script>

<template>
    <section class="p-4">
        <div class="p-4 border rounded-lg lg:p-6">
            <h2 class="text-xl font-bold flex items-center gap-2">
                <AppIcon class="size-6" name="settings" />

                Estado de la Tienda
            </h2>
            <p class="text-gray-500 text-sm mb-6">
                Controla si tu tienda está visible para los clientes
            </p>

            <div
                class="flex items-center justify-between gap-4 mb-4 border p-4 rounded-lg"
            >
                <div class="flex items-center gap-4 text-gray-700">
                    <AppIcon
                        v-if="true"
                        class="size-6 text-green-500"
                        name="eye"
                    />
                    <AppIcon
                        v-else
                        class="size-6 text-red-500"
                        name="eye-closed"
                    />

                    <div>
                        <h3 class="text-sm font-medium">Tienda Activa</h3>
                        <p class="text-sm text-gray-500">
                            Tu tienda está visible para los clientes
                        </p>
                    </div>
                </div>

                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer" />
                    <div
                        class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-500 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"
                    ></div>
                </label>
            </div>

            <div class="text-green-800 text-sm p-4 bg-green-100 rounded-lg">
                <p class="flex items-center gap-2 mb-2">
                    <AppIcon class="size-5" name="square-check" />
                    <span
                        >Tu tienda está <strong>ACTIVA</strong> y visible en:
                    </span>
                </p>
                <p>https://nubtienda.com/boutique-carolina</p>
            </div>
        </div>

        <div class="p-4 border rounded-lg lg:p-6 my-6">
            <h2 class="text-xl font-bold flex items-center gap-2">
                <AppIcon class="size-6" name="settings" />

                Tema Visual
            </h2>
            <p class="text-gray-500 text-sm mb-6">
                Personaliza la apariencia de tu tienda
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <SelectTemsStore
                    v-for="theme in themesBusiness"
                    :key="theme.name"
                    :title="theme.title"
                    :description="theme.description"
                    :color="theme.color"
                    :is-active="selected === theme.name"
                    :onClick="() => (selected = theme.name)"
                />
            </div>
        </div>

        <div class="p-4 border rounded-lg lg:p-6">
            <h2 class="text-xl font-bold flex items-center gap-2">
                <AppIcon class="size-6" name="settings-2" />

                Configuraciones Avanzadas
            </h2>
            <p class="text-gray-500 text-sm mb-6">
                Opciones adicionales para tu tienda
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <SettingsItem
                    description="Los clientes verán cuántas unidades quedan"
                    title="Mostrar Stock Disponible"
                />
                <SettingsItem
                    description="Los clientes pueden hacer preguntas sobre productos"
                    title="Permitir Preguntas"
                />
                <SettingsItem
                    description="Mantener productos sin stock visibles"
                    title="Mostrar Productos Agotados"
                />
                <SettingsItem
                    description="Generar catálogo automático para WhatsApp Business"
                    title="Catálogo en WhatsApp"
                />
            </div>
        </div>

        <div class="p-4 border rounded-lg lg:p-6 mt-6">
            <h2 class="text-xl font-bold flex items-center gap-2 text-red-500">
                <AppIcon class="size-6" name="triangle-alert" />

                Zona de Peligro
            </h2>
            <p class="text-gray-500 text-sm mb-6">
                Acciones irreversibles para tu tienda
            </p>

            <div
                class="text-red-800 text-sm p-4 bg-red-100 border border-red-400 rounded-lg"
            >
                <h3 class="text-lg font-semibold mb-2">
                    Cerrar Tienda Permanentemente
                </h3>
                <p class="text-red-600 font-medium">
                    Esta acción eliminará permanentemente tu tienda, productos,
                    y toda la información asociada. Esta acción no se puede
                    deshacer.
                </p>

                <button
                    class="mt-4 border px-4 py-2.5 rounded-md bg-red-500 text-white hover:bg-red-600 transition-colors"
                >
                    Cerrar Tienda permanentemente
                </button>
            </div>
        </div>

        <div class="flex justify-end gap-2 mt-2">
            <button
                class="mt-4 border px-4 py-2 rounded-md hover:bg-gray-100 transition-colors"
            >
                Cancelar
            </button>
            <button
                class="mt-4 border px-4 py-2 rounded-md bg-blue-500 text-white hover:bg-blue-600 transition-colors"
            >
                Guardar cambios
            </button>
        </div>
    </section>
</template>
