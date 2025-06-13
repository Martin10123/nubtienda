<script setup lang="ts">
import TextInput from "./TextInput.vue";

defineProps({
    titleMethod: String,
    descriptionMethod: String,
    isFreeMethod: Boolean,
});
</script>

<template>
    <div
        class="grid grid-cols-[auto,1fr] items-center gap-2 border p-4 rounded-lg sm:grid-cols-[auto,1fr,auto] sm:gap-4"
    >
        <label class="inline-flex items-center cursor-pointer">
            <input type="checkbox" value="" class="sr-only peer" />
            <div
                class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-500 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"
            ></div>
        </label>

        <div>
            <h3 class="text-sm leading-none font-medium">{{ titleMethod }}</h3>
            <p class="text-sm text-gray-500">{{ descriptionMethod }}</p>
        </div>

        <p
            v-if="isFreeMethod"
            class="w-full min-w-32 max-w-32 text-sm border p-2 rounded-md bg-gray-100 font-medium text-black text-center col-span-2 sm:col-span-1"
        >
            Gratis
        </p>

        <TextInput
            v-else
            id="nameBusiness"
            type="text"
            class="text-sm w-full max-w-32 col-span-2 sm:col-span-1"
            placeholder="$5.000..."
            required
        />
    </div>
</template>
