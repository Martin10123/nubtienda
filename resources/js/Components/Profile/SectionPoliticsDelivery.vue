<script setup lang="ts">
import InputLabel from "../InputLabel.vue";
import TextInput from "../TextInput.vue";
import InputError from "@/Components/InputError.vue";

const yearsOfExperience = [
    { id: 1, name: "Menos de 1 año" },
    { id: 2, name: "1 a 3 años" },
    { id: 3, name: "4 a 6 años" },
    { id: 4, name: "7 a 10 años" },
    { id: 5, name: "Más de 10 años" },
];
</script>

<template>
    <form class="md:grid md:grid-cols-2 gap-y-2 gap-x-6">
        <div class="mt-4">
            <InputLabel
                class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                for="mainJob"
                value="Ocupación Principal *"
            />
            <TextInput
                id="mainJob"
                type="text"
                class="mt-2 block w-full"
                placeholder="Emprendedora..."
                required
            />
            <InputError class="mt-2" />
        </div>

        <div class="mt-4">
            <InputLabel
                class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                for="yearsOfExperience"
                value="Años de Experiencia *"
            />

            <select
                class="mt-2 block w-full p-2.5 text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                id="yearsOfExperience"
            >
                <option
                    v-for="year in yearsOfExperience"
                    :key="year.id"
                    :value="year.id"
                >
                    {{ year.name }}
                </option>
            </select>

            <InputError class="mt-2" />
        </div>

        <div class="mt-4 col-span-2">
            <InputLabel
                class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                for="commercialInterests"
                value="Intereses Comerciales"
            />
            <TextInput
                id="commercialInterests"
                type="text"
                class="mt-2 block w-full"
                placeholder="Boutique Carolina..."
                required
            />
            <InputError class="mt-2" />
        </div>
    </form>
</template>
