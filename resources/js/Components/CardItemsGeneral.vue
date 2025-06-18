<script setup>
import AppIcon from "./AppIcon.vue";
import LabelToggle from "./LabelToggle.vue";

defineProps({
    containerClass: String,
    iconName: String,

    iconClass: {
        type: String,
        default: "size-5 text-black",
    },
    title: String,
    titleClass: {
        type: String,
        default: "text-sm font-semibold",
    },
    description: String,
    descriptionClass: {
        type: String,
        default: "text-sm text-gray-500",
    },

    showOption: Boolean,
    showButton: Boolean,
    textButton: String,
    iconButton: String,

    buttonClass: {
        type: String,
        default:
            "w-full border rounded-md px-4 py-2 cursor-pointer transition-colors flex items-center justify-center gap-2",
    },
});
</script>

<template>
    <div
        class="md:w-full md:flex md:items-center md:justify-between"
        :class="containerClass"
    >
        <div class="flex items-center gap-2">
            <AppIcon v-if="iconName" :name="iconName" :class="iconClass" />

            <div>
                <h3 :class="titleClass">{{ title }}</h3>
                <p :class="descriptionClass">{{ description }}</p>
            </div>
        </div>

        <div class="flex items-center gap-2 mt-2">
            <template v-if="showOption">
                <span class="border rounded-full px-4 text-xs font-medium"
                    >Email</span
                >
                <span class="border rounded-full px-4 text-xs font-medium"
                    >Push</span
                >
            </template>

            <LabelToggle
                v-if="!showButton"
                class="inline-flex items-center cursor-pointer"
            />

            <button v-else :class="buttonClass" type="button">
                <AppIcon v-if="iconButton" :name="iconButton" class="size-4" />
                {{ textButton }}
            </button>
        </div>
    </div>
</template>
