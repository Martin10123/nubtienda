<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import AppIcon from "@/Components/AppIcon.vue";
import PersonalInformation from "./PersonalInformation.vue";
import SettingsSegurity from "./SettingsSegurity.vue";
import MyBusiness from "./MyBusiness.vue";
import Invoicing from "./Invoicing.vue";
import Tabs from "@/Components/Tabs.vue";

const profileTabs = [
    {
        label: "Datos personales",
        icon: "user",
        component: PersonalInformation,
    },
    {
        label: "Mis negocios",
        icon: "briefcase-business",
        component: MyBusiness,
    },
    {
        label: "Seguridad y Configuración",
        icon: "lock",
        component: SettingsSegurity,
    },
    { label: "Facturación", icon: "gem", component: Invoicing },
];
</script>

<template>
    <AppLayout title="Profile">
        <section class="p-4">
            <div
                class="flex flex-col p-4 border border-gray-200 rounded-lg md:flex-row md:items-center md:justify-between md:p-8"
            >
                <div class="flex items-center gap-4 mb-6 md:mb-0">
                    <img
                        src="/icons/avatar.svg"
                        alt="Avatar"
                        class="size-16 rounded-full"
                    />

                    <div>
                        <h2 class="text-3xl font-bold">John Doe</h2>

                        <div class="flex items-center gap-2 mt-1">
                            <p
                                class="w-max bg-black text-white text-xs px-2.5 py-0.5 rounded-full border cursor-pointer"
                            >
                                Plan normal
                            </p>
                            <p
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 cursor-pointer"
                            >
                                2 negocios
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="grid grid-cols-1 sm:grid-cols-2 gap-2 mb-6 md:mb-0 md:gap-6"
                >
                    <p class="text-gray-600 text-sm">
                        <AppIcon
                            name="at-sign"
                            class="inline-block mr-2 size-4 text-gray-500"
                        />
                        JohnDoe@email.com
                    </p>

                    <p class="text-gray-600 text-sm">
                        <AppIcon
                            name="phone"
                            class="inline-block mr-2 size-4 text-gray-500"
                        />
                        +57 300 123 4567
                    </p>

                    <p class="text-gray-600 text-sm">
                        <AppIcon
                            name="map-pinned"
                            class="inline-block mr-2 size-4 text-gray-500"
                        />
                        Bogotá, Colombia
                    </p>
                    <p class="text-gray-600 text-sm">
                        <AppIcon
                            name="calendar"
                            class="inline-block mr-2 size-4 text-gray-500"
                        />
                        Miembro desde Enero 2024
                    </p>
                </div>
                <div class="flex flex-col justify-center items-center gap-2">
                    <div class="text-2xl font-bold text-green-600 md:text-3xl">
                        $4,250,000
                    </div>
                    <span class="text-sm text-gray-500">Ventas totales</span>
                </div>
            </div>

            <div>
                <Tabs :tabs="profileTabs" />
            </div>
        </section>
    </AppLayout>
</template>
