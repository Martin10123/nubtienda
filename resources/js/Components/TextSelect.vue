<script setup>
import { onMounted, ref } from "vue";

defineProps({
    modelValue: String,
    placeholder: String,
    id: String,
    options: {
        type: Array,
        default: () => [],
    },
});

defineEmits(["update:modelValue"]);

const selectRef = ref(null);

onMounted(() => {
    if (selectRef.value.hasAttribute("autofocus")) {
        selectRef.value.focus();
    }
});

defineExpose({ focus: () => selectRef.value.focus() });
</script>

<template>
    <select
        :id="id"
        ref="selectRef"
        class="border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"
        :value="modelValue"
        @change="$emit('update:modelValue', $event.target.value)"
    >
        <option disabled value="">{{ placeholder }}</option>
        <option
            v-for="(option, index) in options"
            :key="index"
            :value="option.value"
        >
            {{ option.label }}
        </option>
    </select>
</template>
