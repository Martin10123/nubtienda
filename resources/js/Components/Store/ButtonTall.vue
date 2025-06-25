<script setup lang="ts">
defineProps({
    name: String,
    titleLabel: String,
    idInput: String,
});

const sizes = [
    { label: "XS", value: "xs" },
    { label: "S", value: "s" },
    { label: "M", value: "m" },
    { label: "L", value: "l" },
    { label: "XL", value: "xl" },
    { label: "XXL", value: "xxl" },
];
</script>

<template>
    <button
        class="border rounded-lg px-2 py-1 text-sm font-medium cursor-pointer hover:bg-gray-100 transition-colors"
        v-for="size in sizes"
        :key="size.value"
    >
        {{ size.label }}
    </button>
</template>
