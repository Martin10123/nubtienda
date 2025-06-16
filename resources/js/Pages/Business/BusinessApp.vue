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
import Tabs from "@/Components/Tabs.vue";

// Tabs disponibles
const businessTabs = [
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
</script>

<template>
    <AppLayout title="Inicio">
        <div class="p-4">
            <h2 class="text-3xl font-bold tracking-tight">Agrega tu negocio</h2>

            <Tabs :tabs="businessTabs" />
        </div>
    </AppLayout>
</template>
