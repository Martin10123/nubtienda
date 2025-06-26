<script setup lang="ts">
import ModalComponent from "../ModalComponent.vue";
import AppIcon from "@/Components/AppIcon.vue";
import InfoProductCard from "./InfoProductCard.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import TextSelect from "../TextSelect.vue";

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

const optionsMovement = [
    { value: "entrada", label: "Entrada de stock" },
    { value: "salida", label: "Salida de stock" },
    { value: "ajuste", label: "Ajuste manual" },
];

const optionsReason = [
    { value: "venta", label: "Venta realizada" },
    { value: "malEstado", label: "Producto dañado" },
    { value: "perdido", label: "Producto perdido" },
    { value: "promocion/regalo", label: "Promoción/Regalo" },
];
</script>

<template>
    <ModalComponent
        :show="show"
        :closeable="closeable"
        @close="close"
        max-width="2xl"
    >
        <div class="p-4">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-4">
                    <AppIcon class="size-6" name="package" />

                    <h2 class="font-semibold text-gray-800">
                        Ajustar Stock - Vestido Floral Primavera
                    </h2>
                </div>

                <div
                    class="cursor-pointer bg-gray-100 hover:bg-gray-200 p-1.5 rounded-md transition-colors"
                >
                    <AppIcon class="size-5" name="x" @click="close" />
                </div>
            </div>

            <InfoProductCard
                class-name="bg-gray-50 p-4 rounded-lg flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4"
            >
                <div class="sm:text-right">
                    <p class="text-2xl font-bold text-blue-600">0</p>
                    <p class="text-sm text-gray-500">Stock actual</p>
                </div>
            </InfoProductCard>

            <form class="mt-6 md:grid md:grid-cols-2 gap-6">
                <div>
                    <div class="mt-4">
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="typeMovement"
                            value="Tipo de Movimiento"
                        />
                        <TextSelect
                            id="typeMovement"
                            class="mt-2 block w-full"
                            :options="optionsMovement"
                            placeholder="Selecciona un tipo de movimiento"
                        />
                        <InputError class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="quantity"
                            value="Cantidad"
                        />
                        <TextInput
                            id="quantity"
                            type="number"
                            class="mt-2 block w-full"
                            placeholder="Boutique Carolina..."
                            required
                        />
                        <InputError class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="minimumStock"
                            value="Stock Mínimo"
                        />
                        <TextInput
                            id="minimumStock"
                            type="number"
                            class="mt-2 block w-full"
                            placeholder="Boutique Carolina..."
                            required
                        />
                        <InputError class="mt-2" />
                    </div>
                </div>
                <div>
                    <div class="mt-4">
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="reason"
                            value="Motivo"
                        />
                        <TextSelect
                            id="reason"
                            class="mt-2 block w-full"
                            :options="optionsReason"
                            placeholder="Selecciona un motivo"
                        />
                        <InputError class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="notes"
                            value="Notas (Opcional)"
                        />
                        <textarea
                            class="mt-2 block w-full text-sm h-24 resize-none border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 md:h-28"
                            placeholder="Escribe una breve descripción de tu negocio, lo que ofreces y lo que te hace especial..."
                            id="notes"
                        />
                        <InputError class="mt-2" />
                    </div>
                </div>
            </form>

            <div class="bg-gray-50 p-4 rounded-lg mt-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">
                    Resumen del cambio
                </h2>

                <div class="flex justify-between mb-2">
                    <h2 class="font-medium text-lg">Stock actual:</h2>
                    <p class="border px-3 py-1 rounded-full text-sm">
                        0 unidades
                    </p>
                </div>
                <div class="flex justify-between mb-2">
                    <h2 class="font-medium text-lg">Nuevo stock:</h2>
                    <p
                        class="border px-3 py-1 rounded-full bg-black text-white text-sm"
                    >
                        0 unidades
                    </p>
                </div>
            </div>

            <div class="flex justify-end gap-2 mt-6">
                <button
                    class="border py-3 px-4 rounded-md hover:bg-gray-100 transition-colors"
                >
                    Cancelar
                </button>
                <button
                    class="border py-3 px-4 rounded-md text-white bg-black hover:bg-gray-800 transition-colors"
                >
                    Guardar cambios
                </button>
            </div>
        </div>
    </ModalComponent>
</template>
