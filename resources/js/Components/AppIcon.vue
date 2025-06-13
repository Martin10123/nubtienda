<script setup>
import { computed } from "vue";
import * as icons from "lucide-vue-next";

const props = defineProps({
    name: { type: String, required: true },
    class: { type: String, default: "w-5 h-5" },
});

function toPascalCase(name) {
    return name
        .split(/[-_]/)
        .map((part) => part.charAt(0).toUpperCase() + part.slice(1))
        .join("");
}

const iconComponent = computed(() => {
    const iconName = `${toPascalCase(props.name)}Icon`;
    return icons[iconName] || null;
});
</script>

<template>
    <component :is="iconComponent" :class="props.class" v-if="iconComponent" />
    <span v-else class="text-red-500">⚠️</span>
</template>
