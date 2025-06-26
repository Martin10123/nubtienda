<script setup lang="ts">
import AppLayout from "@/Layouts/AppLayout.vue";
import CardInfo from "@/Components/CardInfo.vue";
import CardInventoryProduct from "@/Components/Inventory/CardInventoryProduct.vue";
import OptionsInventory from "@/Components/Inventory/OptionsInventory.vue";
</script>

<template>
    <AppLayout title="Inventory">
        <section class="p-4 bg-before before:bg-gray-100">
            <div class="lg:flex lg:items-center lg:justify-between mb-6">
                <div class="mb-4 lg:mb-0">
                    <h2 class="text-3xl font-bold tracking-tight">
                        Gestión de Inventario
                    </h2>

                    <p class="text-gray-500">
                        Gestiona el stock de tus productos.
                    </p>
                </div>

                <OptionsInventory />
            </div>

            <div
                class="grid grid-cols-1 my-6 sm:grid-cols-2 lg:grid-cols-4 gap-4"
            >
                <CardInfo
                    title="Valor Total Inventario"
                    iconPath="dollar-sign"
                    icon-color="text-green-500"
                    amount="$3,850,000"
                    variation="+5%"
                    comparisonText="este mes"
                />
                <CardInfo
                    title="Productos en Stock"
                    iconPath="package"
                    icon-color="text-blue-500"
                    amount="42"
                    variation=""
                    comparisonText="de 45 productos"
                />
                <CardInfo
                    title="Stock Bajo"
                    iconPath="triangle-alert"
                    icon-color="text-yellow-500"
                    amount="3"
                    variation=""
                    comparisonText="Requieren reposición"
                />
                <CardInfo
                    title="Productos Agotados"
                    iconPath="trending-down"
                    icon-color="text-red-500"
                    amount="1"
                    variation=""
                    comparisonText="Sin stock disponible"
                />
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <div>
                    <h2 class="text-2xl font-bold tracking-tight mb-4">
                        Control de inventario
                    </h2>

                    <div class="space-y-4">
                        <CardInventoryProduct />
                        <CardInventoryProduct />
                        <CardInventoryProduct />
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
