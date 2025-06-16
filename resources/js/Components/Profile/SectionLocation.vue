<script setup lang="ts">
import InputError from "../InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import { citiesArray } from "@/Data/citiesArray";
</script>

<template>
    <form class="md:grid md:grid-cols-2 gap-y-2 gap-x-6">
        <div class="mt-4">
            <InputLabel
                class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                for="country"
                value="País *"
            />
            <select
                id="country"
                class="mt-2 block w-full p-2.5 text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
            >
                <option value="colombia" selected disabled>Colombia</option>
            </select>
            <InputError class="mt-2" />
        </div>

        <div class="mt-4">
            <InputLabel
                class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                for="city"
                value="Ciudad *"
            />

            <select
                class="mt-2 block w-full p-2.5 text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                id="city"
            >
                <option
                    v-for="city in citiesArray"
                    :key="city.id"
                    :value="city.id"
                >
                    {{ city.name }}
                </option>
            </select>

            <InputError class="mt-2" />
        </div>

        <div class="mt-4 col-span-2">
            <InputLabel
                class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                for="location"
                value="Dirección (Opcional)"
            />
            <TextInput
                id="location"
                type="text"
                class="mt-2 block w-full"
                placeholder="Calle 85 #15-20..."
                required
            />
            <InputError class="mt-2" />
        </div>
    </form>
</template>
