<script setup>
import AppIcon from "@/Components/AppIcon.vue";
import CitiesList from "@/Components/Directory/CitiesList.vue";
import FeaturedStores from "@/Components/Directory/FeaturedStores.vue";
import FilterButtons from "@/Components/Directory/FilterButtons.vue";
import PopularCategories from "@/Components/Directory/PopularCategories.vue";
import SearchBar from "@/Components/Directory/SearchBar.vue";
import StatsCards from "@/Components/Directory/StatsCards.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
    <AppLayout title="Directorio">
        <section class="p-4 bg-before before:bg-gray-100">
            <div class="lg:flex lg:items-center lg:justify-between mb-6">
                <div class="mb-4 lg:mb-0">
                    <h2 class="text-3xl font-bold tracking-tight">
                        Gestión de Directorios
                    </h2>

                    <p class="text-gray-500">
                        Descubre y conecta con otros emprendedores de la
                        comunidad Nubtienda
                    </p>
                </div>

                <div
                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-gradient-to-r from-blue-500 to-purple-600 text-white">
                    <AppIcon class="size-4 mr-2" name="users" />Comunidad
                </div>
            </div>

            <StatsCards />

            <FilterButtons />

            <div class="mt-6 bg-white rounded-lg shadow-sm p-4">
                <SearchBar />

                <div class="mt-6 grid grid-cols-1 gap-4">
                    <PopularCategories />

                    <CitiesList />
                </div>
            </div>

            <FeaturedStores />
        </section>
    </AppLayout>
</template>
