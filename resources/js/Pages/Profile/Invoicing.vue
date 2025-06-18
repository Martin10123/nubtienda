<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import SectionCardInformation from "@/Components/SectionCardInformation.vue";
import TextInput from "@/Components/TextInput.vue";
import AppIcon from "@/Components/AppIcon.vue";
</script>

<template>
    <section class="grid gap-6">
        <SectionCardInformation
            title="Plan actual"
            icon="dollar-sign"
            description="Tu suscripción activa y beneficios"
            custom-class="bg-gray-100"
        >
            <template #header-actions>
                <div
                    class="p-2 bg-gray-200 font-medium border rounded-md text-sm"
                >
                    Plan normal
                </div>
            </template>

            <template #content>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                    <div
                        class="p-4 bg-white rounded-md flex flex-col gap-2 justify-center items-center"
                    >
                        <p class="text-xl font-bold">$0</p>
                        <p class="text-gray-500">por mes</p>
                    </div>
                    <div
                        class="p-4 bg-white rounded-md flex flex-col gap-2 justify-center items-center"
                    >
                        <p class="text-xl font-bold text-green-700">0</p>
                        <p class="text-gray-500">Próximo cobro</p>
                    </div>
                    <div
                        class="p-4 bg-white rounded-md flex flex-col gap-2 justify-center items-center"
                    >
                        <p class="text-xl font-bold text-blue-700">2</p>
                        <p class="text-gray-500">Negocios máximo</p>
                    </div>
                </div>

                <div class="mt-4 flex gap-2 justify-center items-center">
                    <button
                        class="border px-4 py-2 rounded-md bg-blue-500 text-white hover:bg-blue-700 focus:outline-none transition-colors"
                    >
                        Cambiar Plan
                    </button>
                    <button
                        class="border px-4 py-2 rounded-md bg-white hover:bg-gray-200 focus:outline-none transition-colors"
                    >
                        Cancelar Suscripción
                    </button>
                </div>
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Metodo de pago"
            icon="credit-card"
            description="Gestiona tu información de pago"
        >
            <template #content>
                <div
                    class="border p-4 rounded-md md:flex md:items-center md:justify-between"
                >
                    <div class="flex items-center gap-4">
                        <div
                            class="md:w-16 md:h-16 p-4 flex items-center justify-center bg-gray-200 rounded-full"
                        >
                            <AppIcon class="size-6" name="credit-card" />
                        </div>

                        <div>
                            <p class="text-sm font-medium">
                                Tarjeta de crédito
                            </p>
                            <p class="font-bold">**** **** **** 1234</p>
                            <p class="text-gray-500 text-sm">Expira: 12/25</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2 mt-4">
                        <button
                            class="border px-4 py-2 rounded-md hover:bg-gray-100 focus:outline-none transition-colors"
                        >
                            Editar
                        </button>
                        <button
                            class="border px-4 py-2 rounded-md hover:bg-gray-100 focus:outline-none transition-colors"
                        >
                            Eliminar
                        </button>
                    </div>
                </div>

                <button
                    class="flex items-center justify-center gap-2 border px-4 py-2 rounded-md hover:bg-gray-100 focus:outline-none transition-colors mt-4"
                >
                    <AppIcon class="size-6" name="credit-card" />

                    Agregar método de pago
                </button>
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Información de Facturación"
            description="Datos para tus facturas"
        >
            <template #content>
                <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="fullName"
                            value="Nombre completo"
                        />
                        <TextInput
                            id="fullName"
                            type="text"
                            class="mt-2 block w-full"
                            placeholder="Juan Pérez"
                            required
                        />
                        <InputError class="mt-2" />
                    </div>
                    <div>
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="documentId"
                            value="Documento de Identidad*"
                        />
                        <TextInput
                            id="documentId"
                            type="text"
                            class="mt-2 block w-full"
                            placeholder="123456789..."
                            required
                        />
                        <InputError class="mt-2" />
                    </div>
                    <div>
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="address"
                            value="Dirección"
                        />
                        <TextInput
                            id="address"
                            type="number"
                            class="mt-2 block w-full"
                            placeholder="Calle 123 #45-67..."
                            required
                        />
                        <InputError class="mt-2" />
                    </div>
                    <div>
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="city"
                            value="Ciudad"
                        />
                        <TextInput
                            id="city"
                            type="text"
                            class="mt-2 block w-full"
                            placeholder="Cartagena..."
                            required
                        />
                        <InputError class="mt-2" />
                    </div>
                    <div class="md:col-span-2">
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="postalCode"
                            value="Código Postal"
                        />
                        <TextInput
                            id="postalCode"
                            type="number"
                            class="mt-2 block w-full"
                            placeholder="101010..."
                            required
                        />
                        <InputError class="mt-2" />
                    </div>

                    <button
                        class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none transition-colors md:col-span-2"
                    >
                        Actualizar Información
                    </button>
                </form>
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Historial de Facturas"
            icon="receipt"
            description="Todas tus facturas y pagos"
        >
            <template #content>
                <div
                    class="border p-4 rounded-md mb-4 md:flex md:items-center md:justify-between"
                >
                    <div class="flex items-center gap-4 mb-4 md:mb-0">
                        <div class="rounded-full bg-green-200 p-2">
                            <AppIcon
                                class="size-5 text-green-700"
                                name="credit-card"
                            />
                        </div>

                        <div>
                            <p class="font-medium">Plan Premium - Enero 2024</p>
                            <p class="text-sm text-gray-500">
                                INV-2024-001 • 14 de enero de 2024
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between gap-4">
                        <div>
                            <p class="font-medium text-lg">$ 49.900</p>
                            <div
                                class="text-sm text-green-700 font-medium text-center bg-green-200 rounded-full px-2 py-1"
                            >
                                Pagada
                            </div>
                        </div>

                        <button
                            class="border px-4 py-2 rounded-md hover:bg-gray-100 focus:outline-none transition-colors"
                        >
                            Ver Factura
                        </button>
                    </div>
                </div>

                <button
                    class="border px-4 py-2 rounded-md hover:bg-gray-100 focus:outline-none transition-colors"
                >
                    Ver Todas las Facturas
                </button>
            </template>
        </SectionCardInformation>
    </section>
</template>
