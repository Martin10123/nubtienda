<script setup>
import AppIcon from "@/Components/AppIcon.vue";
</script>

<template>
    <div>
        <div class="flex items-center gap-2">
            <AppIcon class="size-4" name="tag" />
            <h2 class="text-sm font-medium text-gray-700">Categorías Populares:</h2>
        </div>
        <ul class="flex flex-wrap gap-2 mt-2">
            <li v-for="cat in ['Ropa Femenina', 'Accesorios', 'Calzado', 'Vestidos', 'Belleza', 'Hogar', 'Tecnología', 'Deportes', 'Joyería', 'Gastronomía', 'Salud', 'Mascotas', 'Libros', 'Juguetes', 'Arte', 'Servicios']"
                :key="cat" class="category-chip hover:bg-blue-50 hover:border-blue-300">
                {{ cat }}
            </li>
        </ul>
    </div>
</template>

<style scoped>
.category-chip {
    @apply inline-flex border px-2 py-1 rounded-full text-xs font-bold cursor-pointer duration-300;
}
</style>
