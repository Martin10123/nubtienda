<script setup>
import { computed } from 'vue'


const props = defineProps({
    typeProduct: String,
    activeProduct: Number,
    totalProduct: Number,
})

const percentage = computed(() => {
    if (!props.totalProduct) return 0
    return Math.round((props.activeProduct / props.totalProduct) * 100)
})

</script>

<template>
    <div>
        <div class="flex items-center justify-between">
            <p class="text-sm font-medium">{{ typeProduct }}</p>

            <div class="flex items-center space-x-2">
                <div
                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-xs">
                    {{ activeProduct }}/{{ totalProduct }}</div>

                <p class="text-sm text-[#71717a]">{{ percentage }}%</p>
            </div>
        </div>

        <div class="w-full bg-[#e0e0e0] rounded-lg mt-2">
            <div class="bg-black p-[0.25rem] text-center text-white rounded-lg" :style="`width: ${percentage}%`">
            </div>
        </div>
    </div>
</template>
