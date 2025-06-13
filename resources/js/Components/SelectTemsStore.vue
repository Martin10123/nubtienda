<script setup>
defineProps({
    title: String,
    description: String,
    color: String,
    isActive: Boolean,
    onClick: Function,
});
</script>

<template>
    <div
        class="p-4 border rounded-lg cursor-pointer transition-shadow hover:shadow-md"
        :class="
            isActive ? 'border-blue-500 bg-blue-50' : 'border-gray-300 bg-white'
        "
        @click="onClick"
    >
        <div class="w-full h-8 rounded mb-2" :class="color"></div>
        <p class="text-sm font-semibold text-center">{{ title }}</p>
        <p class="text-xs text-center text-gray-500">{{ description }}</p>

        <div
            class="mt-4 px-2 py-1 text-white text-center text-xs font-semibold rounded-full transition-colors"
            :class="isActive ? 'bg-neutral-900' : 'bg-gray-300'"
        >
            {{ isActive ? "Actual" : "Seleccionar" }}
        </div>
    </div>
</template>
