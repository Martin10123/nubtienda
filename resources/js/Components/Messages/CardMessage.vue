<script setup>
import AppIcon from "../AppIcon.vue";
</script>

<template>
    <div
        class="bg-red-50 border border-red-200 p-6 rounded-lg shadow-md space-y-6"
    >
        <div class="flex items-start gap-4">
            <div class="p-2 bg-gray-200 rounded-full">MG</div>

            <div>
                <div class="w-full md:flex md:items-center gap-4">
                    <h3 class="font-semibold text-lg">Maria Gonzalez</h3>

                    <div class="flex items-center gap-2 mt-1 md:mt-0">
                        <p
                            class="bg-red-500 w-max text-white col-span-2 inline-flex border px-2 py-1 rounded-full text-xs font-bold cursor-pointer duration-300"
                        >
                            Sin responder
                        </p>
                        <p
                            class="bg-blue-200 text-blue-600 col-span-2 inline-flex border px-2 py-1 rounded-full text-xs font-bold cursor-pointer duration-300"
                        >
                            Consulta producto
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-2 mt-2">
                    <div
                        class="text-gray-500 text-sm md:flex items-center gap-2"
                    >
                        <AppIcon class="size-4" name="mail" />
                        <p>maria@email.com</p>
                    </div>
                    <div
                        class="text-gray-500 text-sm md:flex items-center gap-2"
                    >
                        <AppIcon class="size-4" name="phone" />
                        <p>+57 300 333 4444</p>
                    </div>
                    <div
                        class="text-gray-500 text-sm md:flex items-center gap-2"
                    >
                        <AppIcon class="size-4" name="clock" />
                        <p>20 de ene, 11:15 a. m.</p>
                    </div>
                </div>

                <div class="mt-2">
                    <p class="text-sm text-blue-500 font-medium">
                        Producto: Camiseta de algodón orgánico
                    </p>
                </div>
            </div>
        </div>

        <div>
            <div
                class="bg-white p-3 rounded-lg shadow-sm border border-gray-300 mb-2"
            >
                <p class="text-gray-700">
                    Hola! Me interesa este vestido. ¿Tienen talla M disponible?
                    ¿Cuál es el tiempo de entrega?
                </p>
            </div>

            <div class="bg-blue-50 p-3 rounded-lg border border-blue-200">
                <div>
                    <div class="flex items-center gap-2 mb-2 text-blue-700">
                        <AppIcon class="size-4" name="reply" />

                        <span class="font-semibold">Respuesta:</span>
                    </div>

                    <p class="text-gray-500 text-xs">
                        Respuesta enviada el 20 de ene, 11:30 a. m.
                    </p>
                </div>

                <p class="text-blue-700 mt-2">
                    Hola! Me interesa este vestido. ¿Tienen talla M disponible?
                    ¿Cuál es el tiempo de entrega?
                </p>
            </div>

            <div class="mt-3">
                <textarea
                    class="block w-full text-sm h-24 resize-none border-gray-300 rounded-md shadow-sm focus:border-red-200 focus:ring-red-200 md:h-28"
                    placeholder="Escribe una respuesta..."
                />
            </div>

            <div class="mt-4">
                <button
                    class="w-full col-span-4 bg-black text-white flex items-center justify-center gap-2 px-4 py-2 rounded-md transition duration-300 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed"
                >
                    <AppIcon class="size-5" name="reply" />
                    Responder
                </button>
            </div>
        </div>
    </div>
</template>
