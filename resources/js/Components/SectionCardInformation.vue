<script setup>
import AppIcon from "@/Components/AppIcon.vue";

defineProps({
    title: { type: String, required: true },
    icon: { type: String, default: "" },
    description: { type: String, default: "" },
    customClass: { type: String, default: "" },
});
</script>

<template>
    <div
        class="flex flex-col p-4 border border-gray-200 rounded-lg md:p-6"
        :class="customClass"
    >
        <div
            class="flex flex-col mb-4 md:flex-row md:items-center md:justify-between"
        >
            <div>
                <h2 class="text-2xl font-bold flex items-center gap-2">
                    <AppIcon class="size-6" :name="icon" v-if="!!icon" />
                    {{ title }}
                </h2>

                <p v-if="description" class="text-gray-500 text-sm mb-2">
                    {{ description }}
                </p>
            </div>

            <slot name="header-actions" />
        </div>

        <slot name="content" />
    </div>
</template>
