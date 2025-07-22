<script setup>
import { useForm, usePage } from "@inertiajs/vue3";
import InputError from "../InputError.vue";
import InputLabel from "../InputLabel.vue";
import TextInput from "../TextInput.vue";
import AppIcon from "@/Components/AppIcon.vue";

const { auth } = usePage().props;

const formData = useForm({
    fullName: auth.user?.name || "",
    email: auth.user?.email || "",
    cellphone: auth.user?.cellphone || "",
    birthday: auth.user?.birthday || "",
    description: auth.user?.description || "",
});
</script>

<template>
    <div class="flex items-center gap-4 my-4">
        <img
            alt="Avatar"
            class="size-16 rounded-full"
            :src="auth.user?.avatar || '/icons/avatar.svg'"
        />

        <div>
            <button
                class="flex items-center gap-2 border hover:bg-gray-100 px-4 py-2 rounded-md transition-colors"
            >
                <AppIcon class="size-4" name="upload" />

                <span>Subir logo</span>
            </button>

            <p class="text-xs text-gray-500 mt-1">
                JPG, PNG. Tamaño máximo 2MB.
            </p>
        </div>
    </div>

    <form class="md:grid md:grid-cols-2 gap-y-2 gap-x-6">
        <div class="mt-4">
            <InputLabel
                class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                for="fullName"
                value="Nombre Completo *"
            />
            <TextInput
                id="fullName"
                type="text"
                class="mt-2 block w-full"
                placeholder="Boutique Carolina..."
                v-model="formData.fullName"
            />
            <InputError class="mt-2" />
        </div>

        <div class="mt-4">
            <InputLabel
                class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                for="email"
                value="Email *"
            />
            <TextInput
                id="email"
                type="email"
                class="mt-2 block w-full"
                placeholder="email@correo.com..."
                v-model="formData.email"
            />
            <InputError class="mt-2" />
        </div>

        <div class="mt-4">
            <InputLabel
                class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                for="cellphone"
                value="Teléfono *"
            />
            <TextInput
                id="cellphone"
                type="number"
                class="mt-2 block w-full"
                placeholder="3001234567..."
                v-model="formData.cellphone"
            />
            <InputError class="mt-2" />
        </div>

        <div class="mt-4">
            <InputLabel
                class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                for="birthday"
                value="Fecha de Nacimiento"
            />
            <TextInput
                id="birthday"
                type="date"
                class="mt-2 block w-full"
                v-model="formData.birthday"
                placeholder="DD/MM/YYYY"
            />
            <InputError class="mt-2" />
        </div>

        <div class="mt-4 md:col-span-2">
            <InputLabel
                class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                for="description"
                value="Biografía (Opcional)"
            />
            <textarea
                class="mt-2 block w-full text-sm h-24 resize-none border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                placeholder="Escribe una breve descripción de tu negocio, lo que ofreces y lo que te hace especial..."
                id="description"
                v-model="formData.description"
            />
            <InputError class="mt-2" />
        </div>
    </form>
</template>
