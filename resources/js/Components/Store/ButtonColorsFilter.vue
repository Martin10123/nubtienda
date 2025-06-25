<script setup lang="ts">
const colors = [
    "red",
    "blue",
    "green",
    "yellow",
    "purple",
    "pink",
    "gray",
    "black",
    "white",
    "indigo",
    "teal",
    "orange",
];
</script>

<template>
    <button
        class="p-5 border-2 border-gray-300 cursor-pointer rounded-full"
        v-for="color in colors"
        :key="color"
        :class="`bg-${color}-500 hover:bg-${color}-700`"
    ></button>
</template>
