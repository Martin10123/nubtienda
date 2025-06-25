<script setup>
import { productsCard } from "@/Data/listProducts";
import AppIcon from "../AppIcon.vue";
import CardProduct from "./CardProduct.vue";
import ModalViewProduct from "@/Components/Store/ModalViewProduct.vue";
import { ref } from "vue";

defineProps({
    toggleModal: Function,
});

const showModal = ref(false);

const toggleModal = () => {
    showModal.value = !showModal.value;
};
</script>

<template>
    <div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
            <CardProduct
                v-for="(product, index) in productsCard"
                :key="index"
                v-bind="product"
                :toggle-modal="toggleModal"
            />
        </div>

        <div class="flex items-center justify-between gap-2 mt-4">
            <button
                class="flex items-center gap-2 border rounded-lg p-3 hover:bg-gray-100 transition-colors"
            >
                <AppIcon class="size-5" name="chevron-left" />
                Anterior
            </button>

            <div class="w-full grid grid-cols-3 gap-1 md:grid-cols-6">
                <p
                    class="text-gray-600 text-center text-sm border px-2 py-2.5 rounded-lg hover:bg-gray-200 cursor-pointer transition-colors"
                >
                    1
                </p>
                <p
                    class="text-gray-600 text-center text-sm border px-2 py-2.5 rounded-lg hover:bg-gray-200 cursor-pointer transition-colors"
                >
                    2
                </p>
                <p
                    class="text-gray-600 text-center text-sm border px-2 py-2.5 rounded-lg hover:bg-gray-200 cursor-pointer transition-colors"
                >
                    3
                </p>
                <p
                    class="text-gray-600 text-center text-sm border px-2 py-2.5 rounded-lg hover:bg-gray-200 cursor-pointer transition-colors hidden md:block"
                >
                    4
                </p>
                <p
                    class="text-gray-600 text-center text-sm border px-2 py-2.5 rounded-lg hover:bg-gray-200 cursor-pointer transition-colors hidden md:block"
                >
                    5
                </p>
                <p
                    class="text-gray-600 text-center text-sm border px-2 py-2.5 rounded-lg hover:bg-gray-200 cursor-pointer transition-colors hidden md:block"
                >
                    6
                </p>
            </div>

            <button
                class="flex items-center gap-2 border rounded-lg p-3 hover:bg-gray-100 transition-colors"
            >
                Siguiente
                <AppIcon class="size-5" name="chevron-right" />
            </button>
        </div>

        <ModalViewProduct
            @close="showModal = false"
            :show="showModal"
            :closeable="true"
        />
    </div>
</template>
