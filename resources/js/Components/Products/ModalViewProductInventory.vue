<script setup>
import ModalComponent from '../ModalComponent.vue';
import AppIcon from '@/Components/AppIcon.vue';

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
        <div class="p-4 md:p-6">

            <div class="flex items-center justify-between mb-4">
                <p class="flex items-center gap-2 text-lg font-semibold">
                    <AppIcon class="size-5" name="eye" />

                    Vista previa del producto
                </p>

                <AppIcon name="x" class="cursor-pointer size-5 hover:text-red-600 transition-colors" @click="close" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <img class="w-full h-80 rounded-md object-cover border mb-4" src="/images/logoApp.webp" alt="">

                    <div class="grid grid-cols-2 gap-2 mt-4">
                        <button
                            class="border p-2 flex items-center justify-center gap-2 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                            <AppIcon class="size-4" name="share-2" />
                            Compartir
                        </button>
                        <button
                            class="border p-2 flex items-center justify-center gap-2 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                            <AppIcon class="size-4" name="external-link" />
                            Ver en tienda
                        </button>
                    </div>
                </div>

                <div class="mt-6 space-y-4">
                    <h2 class="text-2xl font-bold">Vestido Floral Primavera</h2>

                    <div class="flex items-center gap-2">
                        <p class="inline-flex border px-2 py-1 rounded-full text-xs font-medium">Vestidos</p>
                        <p class="inline-flex border px-2 py-1 rounded-full text-xs font-medium">5 unidades</p>
                        <p class="inline-flex border px-2 py-1 rounded-full text-xs font-medium bg-black text-white">
                            Activo</p>
                    </div>

                    <ul>
                        <li class="flex justify-between">
                            <p class="text-gray-600">Precio:</p>
                            <p class="font-semibold text-base md:text-lg">$89.000</p>
                        </li>
                        <li class="flex justify-between">
                            <p class="text-gray-600">SKU:</p>
                            <p class="font-semibold text-base md:text-lg">VF-001</p>
                        </li>
                        <li class="flex justify-between">
                            <p class="text-gray-600">Stock:</p>
                            <p class="font-semibold text-base md:text-lg">5 unidades</p>
                        </li>
                        <li class="flex justify-between">
                            <p class="text-gray-600">Vistas:</p>
                            <p class="font-semibold text-base md:text-lg">234</p>
                        </li>
                        <li class="flex justify-between">
                            <p class="text-gray-600">Peso:</p>
                            <p class="font-semibold text-base md:text-lg">0.3kg</p>
                        </li>
                        <li class="flex justify-between">
                            <p class="text-gray-600">Dimensiones:</p>
                            <p class="font-semibold text-base md:text-lg">Talla S, M, L, XL</p>
                        </li>
                        <li class="flex justify-between">
                            <p class="text-gray-600">Fecha de creación:</p>
                            <p class="font-semibold text-base md:text-lg">14/1/2024</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-6">
                <h2 class="font-semibold mb-2">Descripción</h2>
                <p class="text-gray-600">
                    Este vestido floral es perfecto para la primavera, con un diseño fresco y ligero que te hará sentir
                    cómoda y elegante. Disponible en varias tallas, ideal para cualquier ocasión.
                </p>
            </div>

            <div class="my-6">
                <h2 class="font-semibold mb-2">
                    Etiquetas
                </h2>

                <div class="flex flex-wrap gap-2">
                    <span class="inline-flex items-center px-2 py-1 text-xs font-medium bg-gray-100 rounded-full">
                        #Primavera
                    </span>
                    <span class="inline-flex items-center px-2 py-1 text-xs font-medium bg-gray-100 rounded-full">
                        #Floral
                    </span>
                    <span class="inline-flex items-center px-2 py-1 text-xs font-medium bg-gray-100 rounded-full">
                        #Vestido
                    </span>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4 p-4 bg-gray-50 rounded-lg">
                <div class="text-center">
                    <div class="text-2xl font-bold text-blue-600">234</div>
                    <div class="text-sm text-gray-500">Vistas totales</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-green-600">35</div>
                    <div class="text-sm text-gray-500">Clics</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-purple-600">11</div>
                    <div class="text-sm text-gray-500">Conversiones</div>
                </div>
            </div>

            <div class="mt-6 flex justify-end gap-2">
                <button class="border px-4 py-2 font-medium rounded-lg hover:bg-gray-300 transition-colors"
                    @click="close">Cerrar</button>
                <button
                    class="border px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors flex items-center gap-2 bg-black text-white">
                    <AppIcon class="size-4" name="edit" />
                    Editar producto
                </button>
            </div>
        </div>
    </ModalComponent>
</template>
