<script setup>
import ModalComponent from "../ModalComponent.vue";
import InfoProductCard from "./InfoProductCard.vue";
import AppIcon from "@/Components/AppIcon.vue";

const emit = defineEmits(["close"]);

defineProps({
    show: {
        type: Boolean,
        required: true,
    },
    closeable: {
        type: Boolean,
        default: true,
    },
});

const close = () => {
    emit("close");
};
</script>

<template>
    <ModalComponent :show="show" :closeable="closeable" @close="close" max-width="2xl">
        <div class="p-4">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-4">
                    <AppIcon class="size-6" name="clock" />

                    <h2 class="font-semibold text-gray-800">
                        Historial de Movimientos - Vestido Floral Primavera
                    </h2>
                </div>

                <div class="cursor-pointer bg-gray-100 hover:bg-gray-200 p-1.5 rounded-md transition-colors">
                    <AppIcon class="size-5" name="x" @click="close" />
                </div>
            </div>

            <InfoProductCard
                class-name="bg-gray-50 p-4 rounded-lg flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
                <div class="sm:text-right">
                    <p class="text-2xl font-bold text-blue-600">0</p>
                    <p class="text-sm text-gray-500">Stock actual</p>
                </div>
            </InfoProductCard>

            <div class="mt-6 grid grid-cols-1 gap-4">
                <div
                    class="border border-gray-200 rounded-lg p-4 mb-4 md:flex md:items-center md:justify-between md:gap-4">
                    <div class="flex items-start gap-4 mb-4 md:mb-0">
                        <AppIcon class="size-5 text-red-500" name="minus" />

                        <div class="">
                            <div class="flex items-center gap-2">
                                <span
                                    class="bg-red-200 text-red-500 px-4 py-1 rounded-full text-xs font-semibold">Salida</span>

                                <h2 class="text-lg font-semibold text-gray-800">
                                    Venta realizada
                                </h2>
                            </div>

                            <p class="text-sm text-gray-600 mt-2">
                                Venta online - Pedido #1234
                            </p>
                        </div>
                    </div>

                    <div>
                        <div class="md:flex md:items-center md:justify-end md:gap-4">
                            <div class="flex items-center gap-2 mb-2 text-gray-500 md:mb-0">
                                <AppIcon class="size-4" name="calendar" />

                                <span class="text-sm">2025-05-01 14:30</span>
                            </div>
                            <div class="flex items-center gap-2 mb-2 text-gray-500 md:mb-0">
                                <AppIcon class="size-4" name="user" />
                                <span class="text-sm">Carolina Pérez</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-4 md:mt-2 md:justify-end md:gap-4 md:text-sm">
                            <p class="flex items-center gap-2">
                                Stock: 2
                                <AppIcon class="size-4" name="move-right" />
                                7
                            </p>

                            <p class="border rounded-full px-4 py-0.5 text-sm inline-flex">+5</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4 p-4 bg-gray-50 rounded-lg">
                <div class="text-center">
                    <div class="text-2xl font-bold text-green-600">5</div>
                    <div class="text-sm text-gray-500">Total Entradas</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-red-600">3</div>
                    <div class="text-sm text-gray-500">Total Salidas</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-blue-600">4</div>
                    <div class="text-sm text-gray-500">Movimientos</div>
                </div>
            </div>
        </div>
    </ModalComponent>
</template>
