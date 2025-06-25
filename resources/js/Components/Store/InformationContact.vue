<script setup lang="ts">
import { defineEmits, defineProps, watch, ref } from "vue";
import InformationDeliveryLayout from "@/Layouts/InformationDeliveryLayout.vue";
import AppIcon from "../AppIcon.vue";
import ModalContactByEmail from "./ModalContactByEmail.vue";

const props = defineProps<{
    showContact: boolean;
}>();

defineEmits(["close"]);

const showModalContact = ref(false);

watch(
    () => props.showContact,
    (val) => {
        document.body.classList.toggle("overflow-hidden", val);
    }
);
</script>

<template>
    <!-- FONDO OSCURO solo visible en móviles -->
    <div
        v-if="showContact"
        class="fixed inset-0 bg-black/50 z-40 xl:hidden"
        @click="$emit('close')"
    ></div>

    <!-- PANEL DE CONTACTO: SLIDER EN MOBILE, NORMAL EN MD+ -->
    <div
        :class="[
            'bg-white z-50 transition-transform duration-300 overflow-y-auto',
            'fixed top-0 left-0 h-full w-10/12 max-w-md shadow-lg p-6 xl:relative xl:h-auto xl:w-full xl:shadow-none xl:p-0',
            showContact
                ? 'translate-x-0'
                : '-translate-x-full xl:translate-x-0',
        ]"
    >
        <div class="w-full grid gap-6">
            <!-- Información de contacto -->
            <InformationDeliveryLayout title="Información de contacto">
                <ul class="space-y-4 mb-4">
                    <li class="flex items-center gap-4">
                        <AppIcon class="size-5 text-gray-500" name="phone" />
                        <div>
                            <p class="text-sm font-semibold">+56 9 1234 5678</p>
                            <span class="text-gray-500 text-sm"
                                >WhatsApp disponible</span
                            >
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <AppIcon class="size-5 text-gray-500" name="mail" />
                        <div>
                            <p class="text-sm font-semibold">
                                email@contact.com
                            </p>
                            <span class="text-gray-500 text-sm"> Email </span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <AppIcon class="size-5 text-gray-500" name="map-pin" />
                        <div>
                            <p class="text-sm font-semibold">
                                Calle Falsa 123, Ciudad, País
                            </p>
                            <span class="text-gray-500 text-sm"
                                >Recogida en tienda</span
                            >
                        </div>
                    </li>
                </ul>

                <div class="grid gap-2">
                    <button
                        class="inline-flex items-center justify-center gap-2 bg-green-600 text-white border rounded-lg p-3 w-full hover:bg-green-700 transition-colors"
                    >
                        <AppIcon class="size-5" name="message-circle" />
                        Contactar por WhatsApp
                    </button>

                    <button
                        class="inline-flex items-center justify-center gap-2 bg-white border rounded-lg p-3 w-full hover:bg-gray-50 transition-colors"
                        @click="showModalContact = true"
                        @keydown.enter="showModalContact = true"
                        @keydown.space="showModalContact = true"
                        @click.stop
                        @keydown.enter.stop
                        @keydown.space.stop
                    >
                        <AppIcon class="size-5" name="mail" />
                        Enviar un correo
                    </button>
                </div>
            </InformationDeliveryLayout>

            <!-- Horarios -->
            <InformationDeliveryLayout title="Horario de atención">
                <ul class="space-y-4">
                    <li class="flex items-center gap-4">
                        <AppIcon class="size-5 text-gray-500" name="clock" />
                        <div>
                            <p class="font-semibold">Lunes a Viernes</p>
                            <span class="text-gray-500 text-sm"
                                >9:00 AM - 6:00 PM</span
                            >
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <AppIcon class="size-5 text-gray-500" name="clock" />
                        <div>
                            <p class="font-semibold">Sábados</p>
                            <span class="text-gray-500 text-sm"
                                >10:00 AM - 2:00 PM</span
                            >
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <AppIcon class="size-5 text-gray-500" name="clock" />
                        <div>
                            <p class="font-semibold">Domingos</p>
                            <span class="text-gray-500 text-sm">Cerrado</span>
                        </div>
                    </li>
                </ul>
            </InformationDeliveryLayout>

            <!-- Redes sociales -->
            <InformationDeliveryLayout title="Redes sociales">
                <ul class="grid gap-2">
                    <li
                        class="flex items-center gap-4 border border-gray-200 p-3 rounded-lg bg-white hover:bg-gray-50 transition-colors cursor-pointer"
                    >
                        <AppIcon class="size-5 text-blue-500" name="facebook" />
                        Facebook
                    </li>
                    <li
                        class="flex items-center gap-4 border border-gray-200 p-3 rounded-lg bg-white hover:bg-gray-50 transition-colors cursor-pointer"
                    >
                        <AppIcon
                            class="size-5 text-pink-600"
                            name="instagram"
                        />
                        Instagram
                    </li>
                    <li
                        class="flex items-center gap-4 border border-gray-200 p-3 rounded-lg bg-white hover:bg-gray-50 transition-colors cursor-pointer"
                    >
                        <AppIcon class="size-5 text-blue-700" name="twitter" />
                        Twitter
                    </li>
                    <li
                        class="flex items-center gap-4 border border-gray-200 p-3 rounded-lg bg-white hover:bg-gray-50 transition-colors cursor-pointer"
                    >
                        <AppIcon class="size-5" name="music-2" />
                        TikTok
                    </li>
                </ul>

                <button
                    class="mt-4 inline-flex items-center justify-center gap-2 bg-white border rounded-lg p-3 w-full hover:bg-gray-50 transition-colors"
                >
                    <AppIcon class="size-5" name="share-2" />
                    Compartir en redes sociales
                </button>
            </InformationDeliveryLayout>

            <!-- Información de envío -->
            <InformationDeliveryLayout title=" Información de Envío">
                <ul class="space-y-3">
                    <li class="grid gap-1 text-sm text-gray-600">
                        <h4 class="text-sm font-semibold text-gray-900">
                            📦 Envíos
                        </h4>
                        Envío gratis en compras sobre $50.000
                    </li>
                    <li class="grid gap-1 text-sm text-gray-600">
                        <h4 class="text-sm font-semibold text-gray-900">
                            🔄 Devoluciones
                        </h4>
                        15 días para cambios con producto en perfecto estado
                    </li>
                    <li class="grid gap-1 text-sm text-gray-600">
                        <h4 class="text-sm font-semibold text-gray-900">
                            💳 Pagos
                        </h4>
                        Efectivo, transferencia, Nequi, Daviplata
                    </li>
                    <li class="grid gap-1 text-sm text-gray-600">
                        <h4 class="text-sm font-semibold text-gray-900">
                            🚚 Envío gratis
                        </h4>
                        En compras superiores a $150.000
                    </li>
                </ul>
            </InformationDeliveryLayout>

            <ModalContactByEmail
                @close="showModalContact = false"
                :show="showModalContact"
                :closeable="true"
            />
        </div>
    </div>
</template>
