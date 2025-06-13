<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import GeneralInformation from "./GeneralInformation.vue";
import ContactDelivery from "./ContactDelivery.vue";
import SocialNetwork from "./SocialNetwork.vue";
import PoliticsTerms from "./PoliticsTerms.vue";
import AppIcon from "@/Components/AppIcon.vue";
</script>

<template>
    <AppLayout title="Inicio">
        <div class="p-4">
            <h2 class="text-3xl font-bold tracking-tight">Agrega tu negocio</h2>

            <div
                class="grid grid-cols-5 gap-2 w-full bg-gray-50 rounded-md p-1 mt-6"
            >
                <button
                    class="flex items-center justify-center gap-2 w-full p-2 rounded-md cursor-pointer text-black bg-white"
                >
                    <AppIcon class="size-6" name="badge-info" />

                    <span class="hidden lg:block">Información basica</span>
                </button>
                <button
                    class="flex items-center justify-center gap-2 w-full p-2 rounded-md cursor-pointer text-gray-500 hover:bg-white duration-300"
                >
                    <AppIcon class="size-6" name="headset" />

                    <span class="hidden lg:block">Contacto y entrega</span>
                </button>
                <button
                    class="flex items-center justify-center gap-2 w-full p-2 rounded-md cursor-pointer text-gray-500 hover:bg-white duration-300"
                >
                    <AppIcon class="size-6" name="messages-square" />

                    <span class="hidden lg:block">Redes sociales</span>
                </button>
                <button
                    class="flex items-center justify-center gap-2 w-full p-2 rounded-md cursor-pointer text-gray-500 hover:bg-white duration-300"
                >
                    <AppIcon class="size-6" name="scroll-text" />

                    <span class="hidden lg:block">Politicas</span>
                </button>
                <button
                    class="flex items-center justify-center gap-2 w-full p-2 rounded-md cursor-pointer text-gray-500 hover:bg-white duration-300"
                >
                    <AppIcon class="size-6" name="settings" />

                    <span class="hidden lg:block">Configuración</span>
                </button>
            </div>
        </div>

        <!-- Información basica -->

        <!-- <GeneralInformation />
        <ContactDelivery />
        <SocialNetwork /> -->
        <PoliticsTerms />
    </AppLayout>
</template>
