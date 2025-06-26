<script setup>
defineProps({
    className: String,
});
</script>

<template>
    <div :class="className">
        <div class="lg:flex lg:items-center lg:gap-4">
            <img
                class="w-full h-52 rounded-md object-cover lg:w-16 lg:h-16 border"
                src="/icons/avatar.svg"
                alt="avatar.svg"
            />

            <div class="mt-4 lg:mt-0">
                <h2 class="text-xl font-semibold tracking-tight">
                    Vestido Floral Primavera
                </h2>
                <p class="text-gray-500 text-sm">SKU: VF-001</p>
                <p class="text-black font-semibold">$ 120.000</p>
                <p class="text-gray-500 text-sm">Proveedor: Moda Primavera</p>
            </div>
        </div>

        <slot />
    </div>
</template>
