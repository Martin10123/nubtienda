<template>
    <!-- FONDO OSCURO -->
    <div
        v-if="showFilters"
        class="fixed inset-0 bg-black/50 z-40 lg:hidden"
        @click="$emit('close')"
    ></div>

    <!-- PANEL DE FILTROS -->
    <aside
        :class="[
            'bg-white p-6 z-50 transition-transform duration-300 overflow-y-auto',
            'fixed top-0 left-0 h-full w-10/12 max-w-md shadow-lg lg:relative lg:h-auto lg:w-auto lg:shadow-none lg:translate-x-0 lg:z-0 lg:p-0',
            showFilters ? 'translate-x-0' : '-translate-x-full',
        ]"
    >
        <div class="grid gap-6 lg:border lg:p-6 lg:rounded-lg">
            <h3 class="font-semibold tracking-tight text-lg">Filtros</h3>

            <!-- Categorías -->
            <div class="grid gap-2 border-b pb-6">
                <h2 class="text-base font-medium">Categorías</h2>
                <ul class="flex flex-col gap-2">
                    <ItemCategoriFilter />
                </ul>
            </div>

            <!-- Rango de precios -->
            <div class="grid gap-2 border-b pb-6">
                <h2 class="text-base font-medium">Rango de precios</h2>
                <div class="flex gap-2">
                    <TextInput
                        type="number"
                        name="min_price"
                        placeholder="Precio mínimo"
                        class="w-full"
                    />
                    <TextInput
                        type="number"
                        name="max_price"
                        placeholder="Precio máximo"
                        class="w-full"
                    />
                </div>
                <div class="grid gap-2">
                    <button
                        class="w-full border py-2 rounded-lg text-sm font-medium hover:bg-gray-100 transition-colors"
                    >
                        Menos de $50.000
                    </button>
                    <button
                        class="w-full border py-2 rounded-lg text-sm font-medium hover:bg-gray-100 transition-colors"
                    >
                        Entre $50.000 y $100.000
                    </button>
                    <button
                        class="w-full border py-2 rounded-lg text-sm font-medium hover:bg-gray-100 transition-colors"
                    >
                        Más de $100.000
                    </button>
                </div>
            </div>

            <!-- Disponibilidad -->
            <div class="grid gap-2 border-b pb-6">
                <h2 class="text-base font-medium mb-2">Disponibilidad</h2>
                <ItemAvalaibleProduct
                    name="all_products"
                    title-label="Todos los productos"
                    id-input="all_products"
                />
                <ItemAvalaibleProduct
                    name="just_available"
                    title-label="Solo disponibles"
                    id-input="just_available"
                />
                <ItemAvalaibleProduct
                    name="not_available"
                    title-label="Agotados"
                    id-input="not_available"
                />
            </div>

            <!-- Tallas -->
            <div class="grid gap-2 border-b pb-6">
                <h2 class="text-base font-medium mb-2">Tallas</h2>
                <div class="grid grid-cols-3 gap-2">
                    <ButtonTall />
                </div>
            </div>

            <!-- Colores -->
            <div>
                <h2 class="text-base font-medium mb-2">Colores</h2>
                <div class="grid grid-cols-4 gap-2 justify-items-center">
                    <ButtonColorsFilter />
                </div>
            </div>
        </div>
    </aside>
</template>

<script setup lang="ts">
import ButtonColorsFilter from "./ButtonColorsFilter.vue";
import ItemAvalaibleProduct from "./ItemAvalaibleProduct.vue";
import TextInput from "@/Components/TextInput.vue";
import ItemCategoriFilter from "@/Components/Store/ItemCategoriFilter.vue";
import ButtonTall from "@/Components/Store/ButtonTall.vue";
import { watch } from "vue";

const props = defineProps<{
    showFilters: boolean;
}>();

defineEmits(["close"]);

watch(
    () => props.showFilters,
    (newVal) => {
        if (typeof window !== "undefined") {
            document.body.classList.toggle("overflow-hidden", newVal);
        }
    },
    { immediate: true }
);
</script>
