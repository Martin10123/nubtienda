<script setup lang="ts">
import AppIcon from "@/Components/AppIcon.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputTime from "@/Components/InputTime.vue";
import MethodDelivery from "@/Components/MethodDelivery.vue";
import TextInput from "@/Components/TextInput.vue";
</script>

<template>
    <section>
        <div class="p-4 border rounded-lg">
            <h2 class="text-2xl font-bold flex items-center gap-2">
                <AppIcon class="size-6" name="headset" />

                Información de Contacto
            </h2>
            <p class="text-gray-500 text-sm mb-6">
                Datos para que tus clientes puedan contactarte fácilmente
            </p>

            <form>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="mt-4">
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="nameBusiness"
                            value="Telefono/WhatsApp *"
                        />
                        <TextInput
                            id="nameBusiness"
                            type="text"
                            class="mt-2 block w-full"
                            placeholder="Boutique Carolina..."
                            required
                        />
                        <InputError class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="nameBusiness"
                            value="Email de contacto *"
                        />
                        <TextInput
                            id="nameBusiness"
                            type="text"
                            class="mt-2 block w-full"
                            placeholder="Boutique Carolina..."
                            required
                        />
                        <InputError class="mt-2" />
                    </div>
                </div>

                <div class="mt-4">
                    <InputLabel
                        class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                        for="nameBusiness"
                        value="Dirección (Opcional)"
                    />
                    <TextInput
                        id="nameBusiness"
                        type="text"
                        class="mt-2 block w-full"
                        placeholder="Boutique Carolina..."
                        required
                    />

                    <p class="text-sm tracking-tight text-gray-500 mt-2">
                        Solo se mostrará si ofreces recogida en tienda física.
                    </p>
                </div>
            </form>
        </div>

        <div class="p-4 border rounded-lg my-5">
            <h2 class="text-xl font-semibold mb-2 flex items-center gap-2">
                <AppIcon class="size-6" name="clock-2" />

                Horarios de Atención
            </h2>
            <p class="text-gray-600 text-sm mb-4">
                Cuándo pueden contactarte tus clientes
            </p>

            <div class="grid grid-cols-1 gap-4">
                <InputTime day-week="Lunes" />
                <InputTime day-week="Martes" />
                <InputTime day-week="Miercoles" />
                <InputTime day-week="Jueves" />
                <InputTime day-week="Viernes" />
                <InputTime day-week="Sabados" />
                <InputTime day-week="Domingo" />
            </div>
        </div>

        <div class="p-4 border rounded-lg">
            <h2 class="text-xl font-semibold mb-1 flex items-center gap-2">
                <AppIcon class="size-6" name="truck" />
                Métodos de Entrega
            </h2>
            <p class="text-gray-600 text-sm mb-4">
                Cómo entregas tus productos a los clientes
            </p>

            <div class="grid gap-4">
                <MethodDelivery
                    titleMethod="Domicilio"
                    descriptionMethod="Envío a la dirección del cliente"
                />
                <MethodDelivery
                    titleMethod="Recogida en Tienda"
                    descriptionMethod="Cliente recoge en tu ubicación"
                    isFreeMethod
                />
                <MethodDelivery
                    titleMethod="Envío Nacional"
                    descriptionMethod="Envío a otras ciudades"
                />
            </div>

            <div class="mt-4">
                <h2 class="text-sm font-semibold mb-1 flex items-center gap-2">
                    Zonas de entrega
                </h2>

                <textarea
                    class="mt-2 block w-full h-40 text-sm resize-none border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Chapinero, Zona Rosa, Usaquén, Bogotá Norte..."
                />
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
