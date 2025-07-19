<template>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <StatCard color="blue" value="1,247" label="Tiendas Activas" />
        <StatCard color="green" value="15" label="Categorías" />
        <StatCard color="purple" value="89" label="Nuevas esta semana" />
        <StatCard color="orange" value="4.8" label="Rating Promedio" />
    </div>
</template>

<script setup>
import StatCard from './StatCard.vue';
</script>
