<script setup>
import CardInfo from "@/Components/CardInfo.vue";
import UserOrderCard from "@/Components/UserOrderCard.vue";
import ChartCanva from "@/Components/ChartCanva.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import ActionButtonShort from "@/Components/ActionButtonShort.vue";
import ItemStock from "@/Components/ItemStock.vue";
import CategoryStock from "@/Components/CategoryStock.vue";
import AppIcon from "@/Components/AppIcon.vue";
</script>

<template>
    <AppLayout title="Inicio">
        <section class="p-4">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-3xl font-bold tracking-tight">Dashboard</h2>

                <div>
                    <button
                        class="w-full flex items-center justify-center gap-2 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors"
                    >
                        <AppIcon class="size-5" name="plus" />

                        Agregar Producto
                    </button>
                </div>
            </div>

            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 lg:gap-8"
            >
                <CardInfo
                    title="Ventas del mes"
                    iconPath="dollar-sign"
                    amount="$2,000.000"
                    variation="+12%"
                    comparisonText="vs mes anterior"
                />
                <CardInfo
                    title="Pedidos Totales"
                    iconPath="shopping-bag"
                    amount="23"
                    variation="+5%"
                    comparisonText="esta semana"
                />
                <CardInfo
                    title="Productos Activos"
                    iconPath="package"
                    amount="45"
                    variation="+3%"
                    comparisonText="en catalogo"
                />
                <CardInfo
                    title="Consultas"
                    iconPath="message-square"
                    amount="12"
                    variation="+8%"
                    comparisonText="sin responder"
                />
                <CardInfo
                    title="Visitas a tu Tienda"
                    iconPath="eye"
                    amount="1,234"
                    variation="+23%"
                    comparisonText="últimos 7 dias"
                />
                <CardInfo
                    title="Tasa de Conversión"
                    iconPath="trending-up"
                    amount="3.2%"
                    variation="+0.5%"
                    comparisonText="promedio mensual"
                />
            </div>

            <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-7 mt-6">
                <div class="rounded-lg border bg-card shadow-sm col-span-4 p-6">
                    <div class="pb-6">
                        <h3
                            class="text-2xl font-semibold leading-none tracking-tight"
                        >
                            Resumen de ventas
                        </h3>
                        <p class="text-sm text-[#71717a]">
                            Tus ventas en los últimos 7 dias
                        </p>
                    </div>

                    <ChartCanva />
                </div>

                <div
                    class="w-full rounded-lg border bg-card shadow-sm col-span-4 lg:col-span-3 p-6"
                >
                    <div class="pb-6">
                        <h3
                            class="text-2xl font-semibold leading-none tracking-tight"
                        >
                            Pedidos recientes
                        </h3>
                        <p class="text-sm text-[#71717a]">
                            Últimas consultas y pedidos recibidos
                        </p>
                    </div>

                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4 md:gap-6 lg:gap-8"
                    >
                        <UserOrderCard
                            initials="MG"
                            name="Maria Gonzales"
                            product="Vestido Floral"
                            timeAgo="Hace 2 horas"
                            amount="$89.000"
                            status="Pendiente"
                            statusColor="bg-yellow-100 text-yellow-800"
                        />
                        <UserOrderCard
                            initials="CR"
                            name="Carlos Ruiz"
                            product="Zapatos Deportivos"
                            timeAgo="Hace 4 horas"
                            amount="$125.000"
                            status="Confirmado"
                            statusColor="bg-blue-100 text-blue-800"
                        />
                        <UserOrderCard
                            initials="AL"
                            name="Ana López"
                            product="Bolso de Cuero"
                            timeAgo="Hace 6 horas"
                            amount="$67.000"
                            status="Pendiente"
                            statusColor="bg-yellow-100 text-yellow-800"
                        />
                        <UserOrderCard
                            initials="PM"
                            name="Pedro Martín"
                            product="Camisa Casual"
                            timeAgo="Hace 1 día"
                            amount="$45.000"
                            status="Entregado"
                            statusColor="bg-green-100 text-green-800"
                        />
                        <UserOrderCard
                            initials="CG"
                            name="Carlos Gomez"
                            product="Camisa Casual"
                            timeAgo="Hace 1 día"
                            amount="$55.000"
                            status="Entregado"
                            statusColor="bg-green-100 text-green-800"
                        />

                        <button
                            class="w-full border p-3 rounded-lg text-sm font-medium hover:bg-gray-200 transition-colors duration-200"
                        >
                            Ver todos los pedidos
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4 my-6">
                <div
                    class="rounded-lg border bg-card text-card-foreground shadow-sm col-span-2 p-6"
                >
                    <div class="pb-6">
                        <h3
                            class="text-2xl font-semibold leading-none tracking-tight"
                        >
                            Acciones rapidas
                        </h3>
                        <p class="text-sm text-[#71717a]">
                            Gestiona tu tienda facilmente
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <ActionButtonShort
                            description="Añade un nuevo producto a tu catálogo"
                            icon-path="plus"
                            title="Agregar Producto"
                        />
                        <ActionButtonShort
                            description="Revisa consultas de clientes"
                            icon-path="message-square"
                            title="Ver mensajes"
                        />
                        <ActionButtonShort
                            description="Actualiza stock de productos"
                            icon-path="package"
                            title="Gestionar inventario"
                        />
                        <ActionButtonShort
                            description="Obten el enlace de tu tienda"
                            icon-path="share-2"
                            title="Compartir tienda"
                        />
                        <ActionButtonShort
                            description="Análisis de ventas y rendimiento"
                            icon-path="chart-column"
                            title="Ver estadisticas"
                        />
                        <ActionButtonShort
                            description="Personaliza la apariencia de tu tienda"
                            icon-path="settings"
                            title="Configuración"
                        />
                    </div>
                </div>

                <div
                    class="rounded-lg border bg-card text-card-foreground shadow-sm col-span-2 p-6"
                >
                    <div class="pb-6">
                        <h3
                            class="text-2xl flex items-center gap-2 font-semibold leading-none tracking-tight"
                        >
                            <AppIcon
                                class="size-6 text-[#f97316]"
                                name="triangle-alert"
                            />

                            Alerta de inventario
                        </h3>
                        <p class="text-sm text-[#71717a]">
                            Productos con bajo inventario
                        </p>
                    </div>

                    <div class="space-y-3">
                        <ItemStock
                            icon-path="/icons/boxCatalogColor.svg"
                            :stock="2"
                            title-product="Vestido Azul Marino"
                            type-product="Ropa"
                        />
                        <ItemStock
                            icon-path="/icons/boxCatalogColor.svg"
                            :stock="1"
                            title-product="Zapatos negros"
                            type-product="Calzado"
                        />
                        <ItemStock
                            icon-path="/icons/boxCatalogColor.svg"
                            :stock="3"
                            title-product="Bolso marrón"
                            type-product="Accesorios"
                        />
                        <ItemStock
                            icon-path="/icons/boxCatalogRed.svg"
                            :stock="0"
                            title-product="Camisa blanca"
                            type-product="Ropa"
                        />

                        <button
                            class="w-full border p-3 rounded-lg text-sm font-medium hover:bg-gray-200 transition-colors duration-200"
                        >
                            Ver todo el inventario
                        </button>
                    </div>
                </div>
            </div>

            <div
                class="rounded-lg border bg-card text-card-foreground shadow-sm p-6"
            >
                <div>
                    <h3
                        class="text-2xl font-semibold leading-none tracking-tight"
                    >
                        Resumen de productos
                    </h3>
                    <p class="text-sm text-[#71717a]">
                        Estado actual de tu catalogo
                    </p>
                </div>

                <div
                    class="grid grid-cols-2 md:grid-cols-4 gap-4 my-6 text-center lg:my-10"
                >
                    <div>
                        <p class="text-2xl font-bold text-blue-500">45</p>
                        <p class="text-sm text-[#71717a]">Total productos</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-green-600">42</p>
                        <p class="text-sm text-[#71717a]">Activos</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-yellow-600">3</p>
                        <p class="text-sm text-[#71717a]">Stock bajo</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-red-500">1</p>
                        <p class="text-sm text-[#71717a]">Agotados</p>
                    </div>
                </div>

                <div class="space-y-4">
                    <h3 class="text-sm font-medium">Por categoria</h3>

                    <div class="grid grid-cols-1 gap-4 lg:gap-8">
                        <CategoryStock
                            type-product="Ropa"
                            :active-product="24"
                            :total-product="25"
                        />
                        <CategoryStock
                            type-product="Calzado"
                            :active-product="11"
                            :total-product="12"
                        />
                        <CategoryStock
                            type-product="Accesorios"
                            :active-product="4"
                            :total-product="10"
                        />
                        <CategoryStock
                            type-product="Otros"
                            :active-product="2"
                            :total-product="5"
                        />
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
