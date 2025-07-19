<script setup>
import InputLabel from '../InputLabel.vue';
import ModalComponent from '../ModalComponent.vue';
import AppIcon from '@/Components/AppIcon.vue';
import TextInput from '../TextInput.vue';
import InputError from '../InputError.vue';
import TextSelect from '../TextSelect.vue';

const emit = defineEmits(["close"]);

defineProps({
    show: {
        type: Boolean,
        required: true,
    },
    closeable: {
        type: Boolean,
        default: true,
    },
});

const close = () => {
    emit("close");
};
</script>

<template>
    <ModalComponent :show="show" :closeable="closeable" @close="close" max-width="2xl">
        <div class="p-4 md:p-6">

            <div class="flex items-center justify-between mb-4">
                <p class="flex items-center gap-2 text-lg font-semibold">
                    <AppIcon class="size-5" name="edit" />

                    Editar producto
                </p>

                <AppIcon name="x" class="cursor-pointer size-5 hover:text-red-600 transition-colors" @click="close" />
            </div>

            <form class="grid grid-cols-1 md:grid-cols-2 gap-x-4">
                <div class="mt-4 md:col-span-2">
                    <InputLabel
                        class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                        for="name" value="Nombre del Producto" />
                    <TextInput id="name" type="text" class="mt-2 block w-full" placeholder="Nombre del Producto..." />
                    <InputError class="mt-2" />
                </div>

                <div class="mt-4">
                    <InputLabel
                        class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                        for="SKU" value="SKU" />
                    <TextInput id="SKU" type="text" class="mt-2 block w-full" placeholder="SKU..." />
                    <InputError class="mt-2" />
                </div>

                <div class="mt-4">
                    <InputLabel
                        class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                        for="category" value="Categoría" />
                    <TextSelect id="category" class="mt-2 block w-full" :options="[]"
                        placeholder="Selecciona una categoría" />
                    <InputError class="mt-2" />
                </div>

                <div class="mt-4">
                    <InputLabel
                        class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                        for="price" value="Precio" />
                    <TextInput id="price" type="number" class="mt-2 block w-full" placeholder="Precio..." />
                    <InputError class="mt-2" />
                </div>

                <div class="mt-4">
                    <InputLabel
                        class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                        for="stock" value="Stock" />
                    <TextInput id="stock" type="text" class="mt-2 block w-full" placeholder="Stock..." />
                    <InputError class="mt-2" />
                </div>


                <div class="mt-4">
                    <InputLabel
                        class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                        for="weight" value="Peso" />
                    <TextInput id="weight" type="text" class="mt-2 block w-full" placeholder="Peso..." />
                    <InputError class="mt-2" />
                </div>


                <div class="mt-4">
                    <InputLabel
                        class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                        for="dimensions" value="Dimensiones/Tallas" />
                    <TextInput id="dimensions" type="text" class="mt-2 block w-full"
                        placeholder="Dimensiones/Tallas..." />
                    <InputError class="mt-2" />
                </div>

                <div class="mt-4 md:col-span-2">
                    <InputLabel
                        class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                        for="description" value=" Descripción del Producto" />
                    <textarea
                        class="mt-2 block w-full text-sm h-24 resize-none border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 md:h-28"
                        placeholder="Escribe una breve descripción de tu negocio, lo que ofreces y lo que te hace especial..."
                        id="description" />
                    <InputError class="mt-2" />
                </div>

            </form>

            <div class="my-6">
                <h2 class="font-semibold mb-2">
                    Etiquetas
                </h2>

                <div class="flex flex-wrap gap-2">
                    <span class="inline-flex items-center px-2 py-1 text-xs font-medium bg-gray-100 rounded-full">
                        #Primavera
                    </span>
                    <span class="inline-flex items-center px-2 py-1 text-xs font-medium bg-gray-100 rounded-full">
                        #Floral
                    </span>
                    <span class="inline-flex items-center px-2 py-1 text-xs font-medium bg-gray-100 rounded-full">
                        #Vestido
                    </span>
                </div>

                <div class="flex items-center gap-2 mt-4">
                    <TextInput id="dimensions" type="text" class="block w-full" placeholder="Agregar etiqueta..." />

                    <button class="border px-4 py-3 rounded-md hover:bg-gray-100 transition-colors">
                        <AppIcon class="size-4" name="plus" />
                    </button>
                </div>

                <label class="inline-flex items-center cursor-pointer mt-4">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div
                        class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-black">
                    </div>
                    <span class="ml-3 text-sm font-medium text-gray-900">Producto activo</span>
                </label>
            </div>

            <div class="mt-6 flex justify-end gap-2">
                <button class="border px-4 py-2 font-medium rounded-lg hover:bg-gray-300 transition-colors"
                    @click="close">Cerrar</button>
                <button
                    class="border px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors flex items-center gap-2 bg-black text-white">
                    <AppIcon class="size-4" name="edit" />
                    Editar producto
                </button>
            </div>
        </div>
    </ModalComponent>
</template>
