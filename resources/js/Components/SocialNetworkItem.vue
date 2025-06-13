<script setup lang="ts">
import TextInput from "./TextInput.vue";

defineProps({
    pathSocial: String,
    titleSocial: String,
    linkSocial: String,
    placeholderInput: String,
});
</script>

<template>
    <div>
        <div>
            <img
                class="size-6 inline-block mr-2"
                :src="pathSocial"
                :alt="titleSocial + ' icon'"
            />
            <span class="text-black text-sm font-medium">
                {{ titleSocial }}
            </span>
        </div>

        <div class="flex items-center gap-2 mt-2">
            <span class="text-gray-500 text-sm">{{ linkSocial }} </span>
            <TextInput
                id="nameBusiness"
                type="text"
                class="block w-full text-sm"
                :placeholder="placeholderInput"
                required
            />
        </div>
    </div>
</template>
