<script setup lang="ts">
import ModalComponent from "../ModalComponent.vue";
import AppIcon from "@/Components/AppIcon.vue";
const emit = defineEmits(["close"]);

defineProps({
    show: {
        type: Boolean,
        default: false,
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
    <ModalComponent
        :show="show"
        maxWidth="4xl"
        :closeable="closeable"
        @close="close"
    >
        <div class="p-4 relative lg:grid lg:grid-cols-2 gap-6">
            <button
                @click="close"
                class="absolute top-3 right-3 z-[99] shadow-md bg-gray-100 opacity-50 hover:bg-gray-200 rounded-md p-1.5 cursor-pointer transition-colors duration-200 lg:opacity-100"
            >
                <AppIcon name="x" />
            </button>

            <div class="space-y-4 mb-6">
                <div class="relative">
                    <img
                        class="w-full h-96 object-cover rounded-lg"
                        src="/icons/avatar.svg"
                        alt="icons/avatar.svg"
                    />

                    <div class="absolute top-3 left-3 flex flex-col gap-2">
                        <p
                            class="px-3 text-sm border bg-green-500 text-white rounded-lg"
                        >
                            Nuevo
                        </p>
                        <p
                            class="px-3 text-sm border bg-red-500 text-white rounded-lg"
                        >
                            Oferta
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-4 gap-2">
                    <img
                        class="w-full h-24 object-cover rounded-lg cursor-pointer"
                        src="/icons/avatar.svg"
                        alt="icons/avatar.svg"
                    />
                    <img
                        class="w-full h-24 object-cover rounded-lg cursor-pointer"
                        src="/icons/avatar.svg"
                        alt="icons/avatar.svg"
                    />
                    <img
                        class="w-full h-24 object-cover rounded-lg cursor-pointer"
                        src="/icons/avatar.svg"
                        alt="icons/avatar.svg"
                    />
                    <img
                        class="w-full h-24 object-cover rounded-lg cursor-pointer"
                        src="/icons/avatar.svg"
                        alt="icons/avatar.svg"
                    />
                </div>
            </div>

            <div>
                <div class="border-b-2 pb-4 mb-4">
                    <p
                        class="border px-4 text-sm rounded-full font-semibold inline-flex mb-4"
                    >
                        Blusas
                    </p>

                    <h2 class="text-3xl font-bold text-gray-900 mb-2">
                        Blusa Elegante Blanca
                    </h2>

                    <div class="flex items-center gap-4 mb-6">
                        <div class="flex items-center">
                            <AppIcon
                                name="star"
                                class="fill-yellow-400 text-yellow-400 cursor-pointer"
                            />
                            <AppIcon
                                name="star"
                                class="fill-yellow-400 text-yellow-400 cursor-pointer"
                            />
                            <AppIcon
                                name="star"
                                class="fill-yellow-400 text-yellow-400 cursor-pointer"
                            />
                            <AppIcon
                                name="star"
                                class="fill-yellow-400 text-yellow-400 cursor-pointer"
                            />
                            <AppIcon
                                name="star"
                                class="fill-gray-300 text-gray-300 cursor-pointer"
                            />
                        </div>

                        <p class="text-gray-500 text-sm font-semibold">
                            (4.0) • 24 reseñas
                        </p>
                    </div>

                    <div class="flex items-center flex-wrap gap-4 mb-6">
                        <p class="text-3xl font-bold text-green-500">
                            $ 615.000
                        </p>

                        <p class="line-through text-gray-500 text-base">
                            $ 120.000
                        </p>

                        <span
                            class="text-white bg-red-500 font-semibold text-xs px-1.5 py-1 rounded-full inline-flex items-center justify-center"
                        >
                            -45% OFF</span
                        >
                    </div>

                    <p class="text-gray-500 font-medium">
                        ¡Solo quedan 12 disponibles!
                    </p>
                </div>

                <div class="border-b-2 pb-4 mb-4">
                    <h2 class="text-lg font-semibold text-gray-900 mb-2">
                        Descripción
                    </h2>

                    <p class="text-gray-600">
                        Blusa elegante blanca de alta calidad, perfecta para
                        ocasiones especiales. Confeccionada con materiales
                        suaves y cómodos, esta blusa ofrece un ajuste perfecto y
                        un estilo atemporal.
                    </p>
                </div>

                <div class="border-b-2 pb-4 mb-4">
                    <h2 class="text-lg font-semibold text-gray-900 mb-2">
                        Talla
                    </h2>

                    <div class="flex items-center gap-2 mb-4">
                        <button
                            class="border-2 border-gray-200 px-4 py-2 cursor-pointer rounded-md hover:border-gray-400 transition-colors duration-200"
                        >
                            XS
                        </button>
                        <button
                            class="border-2 border-gray-200 px-4 py-2 cursor-pointer rounded-md hover:border-gray-400 transition-colors duration-200"
                        >
                            S
                        </button>
                        <button
                            class="border-2 border-gray-200 px-4 py-2 cursor-pointer rounded-md hover:border-gray-400 transition-colors duration-200"
                        >
                            M
                        </button>
                        <button
                            class="border-2 border-gray-200 px-4 py-2 cursor-pointer rounded-md hover:border-gray-400 transition-colors duration-200"
                        >
                            L
                        </button>
                        <button
                            class="border-2 border-gray-200 px-4 py-2 cursor-pointer rounded-md hover:border-gray-400 transition-colors duration-200"
                        >
                            XL
                        </button>
                    </div>

                    <h2 class="text-lg font-semibold text-gray-900 mb-2">
                        Color
                    </h2>

                    <div>
                        <button
                            class="border-2 border-gray-200 px-4 py-2 cursor-pointer rounded-md hover:border-gray-400 transition-colors duration-200"
                        >
                            Blanco
                        </button>
                    </div>
                </div>

                <div>
                    <div class="grid grid-cols-[1fr,auto] gap-2 mb-2">
                        <button
                            class="bg-black text-white px-3 py-3.5 rounded-md flex items-center justify-center gap-4 hover:bg-gray-600 transition-colors duration-200"
                        >
                            <AppIcon name="shopping-cart" />
                            Preguntar por el producto
                        </button>
                        <button
                            class="border-2 border-gray-200 px-4 py-2 cursor-pointer rounded-md hover:bg-gray-100 transition-colors duration-200"
                        >
                            <AppIcon name="heart" />
                        </button>
                    </div>

                    <button
                        class="w-full border-2 border-gray-200 px-3 py-3.5 cursor-pointer rounded-md flex items-center justify-center gap-4 hover:bg-gray-100 transition-colors duration-200"
                    >
                        <AppIcon name="share-2" />
                        Compartir producto
                    </button>
                </div>

                <div class="bg-gray-50 p-4 rounded-lg mt-6">
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="text-sm text-gray-500">Envio:</h4>
                        <p class="text-sm font-semibold">
                            $8.000 (Gratis en compras +$150.000)
                        </p>
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="text-sm text-gray-500">
                            Tiempo de entrega:
                        </h4>
                        <p class="text-sm font-semibold">2-3 días hábiles</p>
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="text-sm text-gray-500">Devoluciones:</h4>
                        <p class="text-sm font-semibold">15 días</p>
                    </div>
                </div>
            </div>
        </div>
    </ModalComponent>
</template>
