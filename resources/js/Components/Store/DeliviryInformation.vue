<script setup lang="ts">
defineProps<{
    title: string;
}>();
</script>

<template>
    <div class="bg-gray-50 p-4 border border-gray-200 rounded-lg shadow-sm">
        <h2 class="text-xl font-bold text-gray-900 mb-4">
            {{ title }}
        </h2>

        <slot />
    </div>
</template>
