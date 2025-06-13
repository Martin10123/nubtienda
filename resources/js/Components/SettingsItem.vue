<script setup lang="ts">
defineProps({
    title: String,
    description: String,
});
</script>

<template>
    <div class="border rounded-lg p-4 flex items-center justify-between gap-4">
        <div>
            <h3 class="text-sm font-medium">{{ title }}</h3>
            <p class="text-gray-500 text-sm">
                {{ description }}
            </p>
        </div>

        <label class="inline-flex items-center cursor-pointer">
            <input type="checkbox" value="" class="sr-only peer" />
            <div
                class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-500 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"
            ></div>
        </label>
    </div>
</template>
