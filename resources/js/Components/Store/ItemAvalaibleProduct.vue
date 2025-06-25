<script setup lang="ts">
defineProps({
    name: String,
    titleLabel: String,
    idInput: String,
});
</script>

<template>
    <div class="flex gap-2">
        <input
            class="rounded-full bg-gray-100 border-gray-200 focus:ring-gray-300"
            type="radio"
            :name="name"
            :id="idInput"
        />

        <label :for="idInput">
            {{ titleLabel }}
        </label>
    </div>
</template>
