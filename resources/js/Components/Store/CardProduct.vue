<script setup>
import AppIcon from "@/Components/AppIcon.vue";
import { convertMoneyCop } from "@/helpers/convertMoneyCop";

defineProps({
    image: String,
    category: String,
    title: String,
    price: Number | String,
    oldPrice: Number | String,
    toggleModal: Function,
    stock: Number,
    tags: Array,
    discount: String,
    sizes: Array,
});
</script>

<template>
    <div
        class="rounded-lg border bg-card shadow-sm group hover:shadow-lg transition-shadow overflow-hidden"
    >
        <div class="relative">
            <img
                class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300 cursor-pointer"
                :src="image || '/icons/avatar.svg'"
                :alt="title"
                @click="toggleModal"
            />

            <div class="absolute top-3 left-3 flex flex-col gap-2">
                <p
                    v-for="(tag, index) in tags"
                    :key="index"
                    class="px-3 text-sm border bg-green-500 text-white rounded-lg"
                    :class="{
                        'bg-green-500': tag === 'Nuevo',
                        'bg-red-500': tag === 'Oferta',
                        'bg-blue-500': tag === 'Destacado',
                    }"
                >
                    {{ tag }}
                </p>
            </div>

            <!-- Descuento -->
            <p
                v-if="discount"
                class="absolute bottom-3 left-3 bg-red-500 px-2.5 py-0.5 text-white rounded-full text-sm font-semibold"
            >
                {{ discount }}
            </p>

            <!-- Iconos hover -->
            <div
                class="absolute top-3 right-3 flex flex-col gap-2 opacity-0 group-hover:opacity-100 transition-opacity"
            >
                <button
                    class="p-2 bg-white rounded-full shadow-md hover:bg-gray-50"
                >
                    <AppIcon class="size-5" name="heart" />
                </button>
                <button
                    class="p-2 bg-white rounded-full shadow-md hover:bg-gray-50"
                    @click="toggleModal"
                >
                    <AppIcon class="size-5" name="eye" />
                </button>
            </div>
        </div>

        <div class="p-4">
            <!-- Categoría -->
            <div
                class="border rounded-full text-sm font-semibold inline-flex px-2.5 py-0.5 mb-4"
            >
                {{ category }}
            </div>

            <!-- Título -->
            <h3
                class="font-semibold text-gray-900 mb-2 line-clamp-2 cursor-pointer hover:text-blue-600"
            >
                {{ title }}
            </h3>

            <!-- Precios y stock -->
            <div class="flex items-center flex-wrap gap-4 mb-4">
                <p class="text-xl font-bold text-green-600">
                    {{ convertMoneyCop(price) }}
                </p>
                <p v-if="oldPrice" class="line-through text-gray-500">
                    {{ convertMoneyCop(oldPrice) }}
                </p>
                <p v-if="stock !== undefined" class="text-sm text-gray-500">
                    Stock: {{ stock }}
                </p>
            </div>

            <!-- Tallas -->
            <div
                v-if="sizes?.length"
                class="flex items-center flex-wrap gap-2 mb-4"
            >
                <h4 class="text-sm text-gray-500">Tallas:</h4>
                <div
                    v-for="(size, index) in sizes"
                    :key="index"
                    class="inline-flex px-3.5 py-0.5 border rounded-full text-sm font-semibold cursor-pointer hover:bg-gray-100"
                >
                    {{ size }}
                </div>
            </div>

            <!-- Botón preguntar -->
            <button
                class="w-full bg-black text-white py-3 rounded-lg hover:bg-gray-800 transition-colors flex items-center justify-center gap-2"
            >
                <AppIcon class="size-5" name="message-circle" />
                Preguntar
            </button>
        </div>
    </div>
</template>
