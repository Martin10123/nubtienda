<script setup>
import AppIcon from "@/Components/AppIcon.vue";

const props = defineProps({
    titleProduct: String,
    typeProduct: String,
    stock: Number,
    iconPath: String,
});

const stockValue = () => {
    if (props.stock > 0) {
        if (props.stock === 1) {
            return "1 unidad";
        } else if (props.stock > 1) {
            return props.stock + " unidades";
        }
    } else {
        return "Agotado";
    }
};
</script>

<template>
    <div class="flex items-center justify-between p-3 border rounded-lg">
        <div class="flex items-center space-x-3">
            <div
                class="p-2 rounded-full"
                :class="{
                    'bg-orange-100': stock > 0,
                    'bg-red-100': stock === 0,
                }"
            >
                <AppIcon
                    class="size-5"
                    :class="{
                        'text-orange-500': stock > 0,
                        'text-red-500': stock === 0,
                    }"
                    name="package"
                />
            </div>

            <div>
                <h3 class="text-sm font-medium">{{ titleProduct }}</h3>
                <p class="text-xs text-[#71717a]">{{ typeProduct }}</p>
            </div>
        </div>

        <div
            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-[#e1e1e1] text-secondary-foreground hover:bg-[#d4d4d4]"
            :class="{
                'bg-red-500 text-white': stock === 0,
            }"
        >
            {{ stockValue() }}
        </div>
    </div>
</template>
