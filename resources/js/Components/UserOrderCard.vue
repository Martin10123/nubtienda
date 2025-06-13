<script setup>
defineProps({
    initials: String,
    name: String,
    product: String,
    timeAgo: String,
    amount: String,
    status: String,
    statusColor: {
        type: String,
        default: 'bg-yellow-100 text-yellow-800'
    }
})
</script>

<template>
    <div class="flex items-center space-x-4">
        <!-- Avatar o Iniciales -->
        <div class="relative flex shrink-0 overflow-hidden rounded-full h-9 w-9">
            <span class="flex h-full w-full items-center justify-center rounded-full bg-[#e1e1e1]">
                {{ initials }}
            </span>
        </div>

        <!-- Info principal -->
        <div class="flex-1 space-y-1">
            <h3 class="text-sm font-medium leading-none">{{ name }}</h3>
            <p class="text-sm text-[#71717a]">{{ product }}</p>
            <p class="text-xs text-[#71717a]">{{ timeAgo }}</p>
        </div>

        <!-- Precio y estado -->
        <div class="text-right space-y-1">
            <p class="text-sm font-medium">{{ amount }}</p>
            <p
                :class="['inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors text-xs border-transparent hover:bg-primary/80', statusColor]">
                {{ status }}
            </p>
        </div>
    </div>
</template>
