<script setup>
import { ref, computed } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import AppIcon from "@/Components/AppIcon.vue";

// Componentes de cada tab
import GeneralInformation from "./GeneralInformation.vue";
import ContactDelivery from "./ContactDelivery.vue";
import SocialNetwork from "./SocialNetwork.vue";
import PoliticsTerms from "./PoliticsTerms.vue";
import SettingsBusiness from "./SettingsBusiness.vue";

// Tabs disponibles
const tabs = [
    {
        label: "Información básica",
        icon: "badge-info",
        component: GeneralInformation,
    },
    {
        label: "Contacto y entrega",
        icon: "headset",
        component: ContactDelivery,
    },
    {
        label: "Redes sociales",
        icon: "messages-square",
        component: SocialNetwork,
    },
    { label: "Políticas", icon: "scroll-text", component: PoliticsTerms },
    { label: "Configuración", icon: "settings", component: SettingsBusiness },
];

// Tab activo
const activeTabIndex = ref(0);

// Componente actual
const ActiveComponent = computed(() => tabs[activeTabIndex.value].component);
</script>

<template>
    <AppLayout title="Inicio">
        <div class="p-4">
            <h2 class="text-3xl font-bold tracking-tight">Agrega tu negocio</h2>

            <!-- Tabs -->
            <div
                class="grid grid-cols-5 gap-2 w-full bg-gray-100 rounded-md p-1 mt-6"
            >
                <button
                    v-for="(tab, index) in tabs"
                    :key="index"
                    @click="activeTabIndex = index"
                    class="flex items-center justify-center gap-2 w-full p-2 rounded-md cursor-pointer duration-300"
                    :class="{
                        'bg-white text-black': activeTabIndex === index,
                        'text-gray-500 hover:bg-white':
                            activeTabIndex !== index,
                    }"
                >
                    <AppIcon class="size-6 md:size-5" :name="tab.icon" />
                    <span class="hidden lg:block text-sm">{{ tab.label }}</span>
                </button>
            </div>

            <!-- Contenido del tab activo -->
            <div class="mt-6">
                <component :is="ActiveComponent" />
            </div>
        </div>
    </AppLayout>
</template>
