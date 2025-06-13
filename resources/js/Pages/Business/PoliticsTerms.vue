<script setup lang="ts">
import InputLabel from "@/Components/InputLabel.vue";
import AppIcon from "@/Components/AppIcon.vue";
</script>

<template>
    <section class="p-4">
        <div class="p-4 border rounded-lg lg:p-6">
            <h2 class="text-2xl font-bold flex items-center gap-2">
                <AppIcon class="size-6" name="scroll-text" />

                Políticas de Envío
            </h2>
            <p class="text-gray-500 text-sm mb-6">
                Información importante sobre tus envíos y entregas
            </p>

            <div class="mb-4">
                <InputLabel
                    class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                    for="timeDelivery"
                    value="Tiempo de Envío"
                />
                <textarea
                    id="timeDelivery"
                    class="mt-2 block w-full h-32 text-sm resize-none border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 md:h-20"
                    placeholder="Los pedidos se procesan en 1-2 días hábiles. El envío dentro de Bogotá toma 1-2 días adicionales. Para otras ciudades, el tiempo puede variar entre 3-5 días hábiles..."
                />
            </div>

            <div>
                <InputLabel
                    class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                    for="informationCosts"
                    value="Información de Costos"
                />
                <textarea
                    id="informationCosts"
                    class="mt-2 block w-full h-32 text-sm resize-none border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 md:h-16"
                    placeholder="Envío gratis en compras superiores a $150.000. Envío dentro de Bogotá: $8.000. Envío nacional: $15.000..."
                />
            </div>
        </div>

        <div class="p-4 border rounded-lg lg:p-6 my-6">
            <h2 class="text-2xl font-bold flex items-center gap-2">
                <AppIcon class="size-6" name="rotate-ccw" />

                Políticas de Devolución
            </h2>
            <p class="text-gray-500 text-sm mb-6">
                Condiciones para cambios y devoluciones
            </p>

            <div class="mb-4">
                <div class="mb-2">
                    <h3 class="text-sm font-medium">Acepto Devoluciones</h3>
                    <p class="text-sm text-gray-500">
                        ¿Permites que los clientes devuelvan productos?
                    </p>
                </div>

                <div>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer" />
                        <div
                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-500 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"
                        ></div>
                    </label>
                </div>
            </div>

            <div>
                <InputLabel
                    class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                    for="conditionsReturn"
                    value="Condiciones de Devolución"
                />
                <textarea
                    id="conditionsReturn"
                    class="mt-2 block w-full h-32 text-sm resize-none border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 md:h-24"
                    placeholder="Aceptamos cambios y devoluciones dentro de los 15 días posteriores a la compra. Los productos deben estar en perfecto estado, con etiquetas originales. El cliente asume el costo del envío de devolución..."
                />
            </div>
        </div>

        <div class="p-4 border rounded-lg lg:p-6">
            <h2 class="text-2xl font-bold flex items-center gap-2">
                <AppIcon class="size-6" name="shield" />

                Términos y Condiciones
            </h2>
            <p class="text-gray-500 text-sm mb-6">
                Términos generales de tu tienda
            </p>

            <div class="mb-4">
                <InputLabel
                    class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                    for="paymentMethods"
                    value="Métodos de Pago Aceptados"
                />
                <textarea
                    id="paymentMethods"
                    class="mt-2 block w-full h-32 text-sm resize-none border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 md:h-16"
                    placeholder="Aceptamos: Efectivo (contra entrega), transferencia bancaria, Nequi, Daviplata, PSE. Para pedidos superiores a $200.000 solicitamos el 50% de anticipo..."
                />
            </div>

            <div>
                <InputLabel
                    class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                    for="generalTerms"
                    value="Términos Generales"
                />
                <textarea
                    id="generalTerms"
                    class="mt-2 block w-full h-32 text-sm resize-none border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 md:h-16"
                    placeholder="Al realizar un pedido, el cliente acepta nuestras políticas de envío y devolución. Los precios pueden cambiar sin previo aviso. Las fotos son referenciales, los colores pueden variar ligeramente..."
                />
            </div>
        </div>

        <div class="p-4 border rounded-lg mt-4 lg:p-6">
            <h2 class="text-2xl font-bold flex items-center gap-2">
                <AppIcon class="size-6" name="scan-eye" />

                Vista Previa
            </h2>
            <p class="text-gray-500 text-sm mb-6">
                Así aparecerán tus políticas en tu tienda
            </p>

            <div class="bg-gray-50 p-4 rounded-lg grid gap-4">
                <div class="grid gap-1">
                    <p class="flex items-center gap-2">
                        <AppIcon class="size-4" name="package" />
                        Envíos
                    </p>
                    <p class="text-sm text-gray-500 tracking-tight">
                        Procesamos en 1-2 días, entrega en 2-3 días
                    </p>
                </div>
                <div class="grid gap-1">
                    <p class="flex items-center gap-2">
                        <AppIcon class="size-4" name="refresh-ccw" />
                        Devoluciones
                    </p>
                    <p class="text-sm text-gray-500 tracking-tight">
                        15 días para cambios con producto en perfecto estado
                    </p>
                </div>
                <div class="grid gap-1">
                    <p class="flex items-center gap-2">
                        <AppIcon class="size-4" name="credit-card" />
                        Pagos
                    </p>
                    <p class="text-sm text-gray-500 tracking-tight">
                        Efectivo, transferencia, Nequi, Daviplata
                    </p>
                </div>
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
