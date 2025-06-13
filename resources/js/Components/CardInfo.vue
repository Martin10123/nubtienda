<script setup>
defineProps({
    title: String,
    iconPath: String,
    amount: String,
    variation: String,
    variationColor: {
        type: String,
        default: 'bg-blue-500 hover:bg-blue-400'
    },
    comparisonText: String
})
</script>

<template>
    <div class="rounded-lg border bg-card shadow-sm p-6">
        <div class="flex flex-row items-center justify-between space-y-0 pb-2">
            <h3 class="tracking-tight text-sm font-medium">{{ title }}</h3>
            <img :src="iconPath" alt="icono" class="size-5 text-[#71717a]" />
        </div>

        <div>
            <h3 class="text-2xl font-bold">{{ amount }}</h3>
            <div class="flex items-center space-x-2 text-xs">
                <p
                    :class="['inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors text-white text-xs border-transparent', variationColor]">
                    {{ variation }}
                </p>
                <p class="text-[#71717a]">{{ comparisonText }}</p>
            </div>
        </div>
    </div>
</template>
