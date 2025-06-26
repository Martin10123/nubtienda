<script setup>
import AppIcon from "./AppIcon.vue";

defineProps({
    title: String,
    iconPath: String,
    iconColor: {
        type: String,
        default: "text-gray-500",
    },
    amount: String,
    variation: String,
    variationColor: {
        type: String,
        default: "bg-blue-500 hover:bg-blue-400",
    },
    comparisonText: String,
});
</script>

<template>
    <div class="rounded-lg border bg-white shadow-sm p-6">
        <div class="flex flex-row items-center justify-between space-y-0 pb-2">
            <h3 class="tracking-tight text-sm font-medium">{{ title }}</h3>
            <AppIcon class="size-4" :name="iconPath" :class="iconColor" />
        </div>

        <div>
            <h3 class="text-2xl font-bold">{{ amount }}</h3>
            <div class="flex items-center space-x-2 text-xs">
                <p
                    :class="[
                        'inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors text-white text-xs border-transparent',
                        variationColor,
                    ]"
                    v-if="variation"
                >
                    {{ variation }}
                </p>
                <p class="text-[#71717a]">{{ comparisonText }}</p>
            </div>
        </div>
    </div>
</template>
