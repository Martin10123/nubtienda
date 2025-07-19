<template>
    <div class="rounded-lg border bg-white">
        <div class="p-4 text-center">
            <div :class="`text-2xl font-bold text-${color}-600`">
                {{ value }}
            </div>
            <div class="text-sm text-gray-500">{{ label }}</div>
        </div>
    </div>
</template>

<script setup>
defineProps({
    value: String,
    label: String,
    color: String
});
</script>
