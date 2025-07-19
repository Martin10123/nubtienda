<script setup>
import StoreCard from "./StoreCardDirectory.vue";
</script>

<template>
    <div class="mt-8">
        <div class="mb-6">
            <h2 class="text-lg font-semibold">Tiendas Destacadas</h2>
            <p class="text-sm text-gray-500">Las tiendas más populares y mejor valoradas</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <StoreCard />
            <StoreCard />
            <StoreCard />
            <StoreCard />
        </div>
    </div>
</template>
