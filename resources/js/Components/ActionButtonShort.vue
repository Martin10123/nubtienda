<script setup>
import AppIcon from "./AppIcon.vue";

defineProps({
    title: {
        type: String,
        required: true,
    },
    description: {
        type: String,
        default: "",
    },
    iconPath: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <button
        class="justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium hover:bg-gray-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border border-input h-auto p-4 flex flex-col items-center space-y-2 hover:shadow-md transition-shadow"
    >
        <AppIcon class="size-5" :name="iconPath" />

        <div>
            <p class="text-sm font-medium">{{ title }}</p>
            <p class="text-xs text-[#71717a] hidden sm:block">
                {{ description }}
            </p>
        </div>
    </button>
</template>
