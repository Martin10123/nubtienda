<script setup lang="ts">
import AppIcon from "../AppIcon.vue";
import InfoProductCard from "./InfoProductCard.vue";
import ModalHistoryProduct from "./ModalHistoryProduct.vue";
import ModalStockInventory from "./ModalStockInventory.vue";
import { ref } from "vue";

const showModal = ref(false);
const showHistoryModal = ref(false);
</script>

<template>
    <div
        class="border p-4 rounded-lg sm:grid sm:grid-cols-2 lg:flex lg:items-center lg:justify-between gap-6"
    >
        <InfoProductCard />

        <div class="lg:flex lg:items-center gap-4">
            <div class="grid grid-cols-2 gap-4 my-4 lg:items-center">
                <div class="text-center">
                    <p class="text-2xl font-bold text-green-500 tracking-tight">
                        5
                    </p>
                    <p class="text-gray-500 text-sm">Stock actual</p>
                    <p
                        class="inline-flex border px-4 py-1 rounded-xl text-sm font-semibold"
                    >
                        En stock
                    </p>
                </div>

                <div class="text-center">
                    <p class="text-2xl font-bold tracking-tight lg:text-lg">
                        3
                    </p>
                    <p class="text-gray-500 text-sm">Stock minimo</p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4">
                <button
                    class="border border-gray-300 rounded-lg p-2 hover:bg-gray-100 transition-colors flex justify-center items-center"
                >
                    <AppIcon class="size-5" name="minus" />
                </button>

                <input
                    type="number"
                    class="w-full p-2 border border-gray-300 rounded-lg text-center"
                    placeholder="Cantidad"
                    min="1"
                    max="1000"
                    value="0"
                />

                <button
                    class="border border-gray-300 rounded-lg p-2 hover:bg-gray-100 transition-colors flex justify-center items-center"
                >
                    <AppIcon class="size-5" name="plus" />
                </button>
            </div>

            <div class="grid grid-cols-1 gap-2 mt-6 lg:mt-0 lg:gap-4">
                <button
                    class="border border-gray-300 rounded-lg p-2 hover:bg-gray-100 transition-colors flex items-center justify-center gap-2"
                    @click="showModal = true"
                >
                    <AppIcon class="size-5" name="edit" />
                    Ajustar
                </button>

                <button
                    class="border border-gray-300 rounded-lg p-2 hover:bg-gray-100 transition-colors flex items-center justify-center gap-2"
                    @click="showHistoryModal = true"
                >
                    <AppIcon class="size-5" name="clock" />
                    Historial
                </button>
            </div>
        </div>
    </div>

    <ModalStockInventory
        :show="showModal"
        @close="showModal = false"
        :closeable="true"
    />

    <ModalHistoryProduct
        :show="showHistoryModal"
        @close="showHistoryModal = false"
        :closeable="true"
    />
</template>
