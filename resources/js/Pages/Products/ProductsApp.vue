<script setup>
import CardInfo from '@/Components/CardInfo.vue';
import OptionsInventory from '@/Components/Inventory/OptionsInventory.vue';
import CardProductInventoty from '@/Components/Products/CardProductInventoty.vue';
import AppLayout from '@/Layouts/AppLayout.vue';

</script>

<template>
    <AppLayout title="Products">
        <section class="p-4 bg-before before:bg-gray-100">
            <div class="lg:flex lg:items-center lg:justify-between mb-6">
                <div class="mb-4 lg:mb-0">
                    <h2 class="text-3xl font-bold tracking-tight">
                        Gestión de Productos
                    </h2>

                    <p class="text-gray-500">
                        Administra tus productos de manera eficiente.
                    </p>
                </div>

                <OptionsInventory titleButton="Agregar producto" />
            </div>

            <div class="grid grid-cols-1 my-6 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <CardInfo title="Total Productos" iconPath="package" icon-color="text-blue-500" amount="$3,850,000"
                    variation="+5%" comparisonText="este mes" />
                <CardInfo title="Productos Activos" iconPath="trending-up" icon-color="text-green-500" amount="42"
                    variation="93%" comparisonText="del total" />
                <CardInfo title="Stock Bajo" iconPath="triangle-alert" icon-color="text-orange-500" amount="3"
                    variation="" comparisonText="Requieren atención" />
                <CardInfo title="Más Visto" iconPath="eye" icon-color="text-purple-500" amount="1" variation=""
                    comparisonText="Sin stock disponible" />
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <div>
                    <h2 class="text-2xl font-bold tracking-tight mb-4">
                        Control de inventario
                    </h2>

                    <div class="space-y-4">
                        <CardProductInventoty />
                        <CardProductInventoty />
                        <CardProductInventoty />
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
