<script setup lang="ts">
import SectionCardInformation from "@/Components/SectionCardInformation.vue";
import SectionPersonalInfo from "@/Components/Profile/SectionPersonalInfo.vue";
import SectionLocation from "@/Components/Profile/SectionLocation.vue";
import SectionPoliticsDelivery from "@/Components/Profile/SectionPoliticsDelivery.vue";
</script>

<template>
    <section>
        <SectionCardInformation
            title="Información Personal"
            icon="user"
            description="Actualiza tu información personal y de contacto"
        >
            <template #content>
                <SectionPersonalInfo />
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Ubicación"
            icon="map-pin"
            description="Información sobre tu ubicación geográfica"
            custom-class="my-6"
        >
            <template #content>
                <SectionLocation />
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Políticas de Envío"
            icon="briefcase-business"
            description="Información importante sobre tus envíos y entregas"
        >
            <template #content>
                <SectionPoliticsDelivery />
            </template>
        </SectionCardInformation>

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
