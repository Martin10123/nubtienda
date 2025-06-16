<script setup>
import { ref, computed } from "vue";
import AppIcon from "@/Components/AppIcon.vue";

const props = defineProps({
    tabs: {
        type: Array,
        required: true,
    },
    defaultIndex: {
        type: Number,
        default: 0,
    },
});

const activeTabIndex = ref(props.defaultIndex);

const ActiveComponent = computed(
    () => props.tabs[activeTabIndex.value].component
);
</script>

<template>
    <div>
        <!-- Botones de tabs -->
        <div
            class="grid grid-cols-[repeat(auto-fit,minmax(120px,1fr))] gap-2 w-full bg-gray-50 rounded-md p-1 mt-6"
        >
            <button
                v-for="(tab, index) in tabs"
                :key="index"
                @click="activeTabIndex = index"
                class="flex items-center justify-center gap-2 w-full p-2 rounded-md cursor-pointer duration-300"
                :class="{
                    'bg-white text-black': activeTabIndex === index,
                    'text-gray-500 hover:bg-white': activeTabIndex !== index,
                }"
            >
                <AppIcon class="size-5 md:size-4" :name="tab.icon" />
                <span class="hidden lg:block text-sm">{{ tab.label }}</span>
            </button>
        </div>

        <!-- Contenido del tab activo -->
        <div class="mt-6">
            <component :is="ActiveComponent" />
        </div>
    </div>
</template>
