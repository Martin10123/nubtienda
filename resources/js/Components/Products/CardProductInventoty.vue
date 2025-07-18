<script setup>
import { ref } from 'vue';
import AppIcon from '../AppIcon.vue';
import OptionsProduct from './OptionsProduct.vue';
import { useToggleModal } from '@/Composable/useToggleModal';

const dropdownRef = ref(null)
const { isOpen: openOptions, toggle: toggleOptions, setupClickOutside } = useToggleModal()

setupClickOutside(dropdownRef)
</script>

<template>
    <div
        class="p-4 border border-gray-200 rounded-md bg-white duration-200 hover:bg-gray-50 transition-all lg:flex lg:items-center lg:justify-between">
        <div class="lg:flex lg:items-center lg:gap-4">
            <img class="w-full h-52 rounded-md object-cover lg:w-16 lg:h-16 border" src="/icons/avatar.svg"
                alt="avatar.svg" />

            <div class="mt-4 lg:mt-0">
                <h2 class="text-xl font-semibold tracking-tight">
                    Vestido Floral Primavera
                </h2>

                <div class="mt-2 flex items-center gap-4">
                    <p class="inline-flex border px-2 py-1 rounded-full text-xs font-medium">Vestidos</p>
                    <p class="text-gray-500 text-sm">234 vistas</p>
                    <p class="text-gray-500 text-sm">SKU: VF-001</p>
                </div>
            </div>
        </div>

        <div class="mt-4 lg:mt-0 lg:flex lg:items-center lg:gap-4 lg:w-auto w-full">
            <div class="mt-2 lg:text-end">
                <p class="font-semibold text-xl">$ 89.000</p>
                <p class="text-md text-gray-500">Precio</p>
            </div>

            <div class="mt-2 grid grid-cols-2 gap-4 lg:flex lg:items-center lg:gap-6">
                <p class="inline-flex border px-2 py-1 rounded-full text-xs font-medium">5 unidades</p>

                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div
                        class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-black">
                    </div>
                    <span class="ml-3 text-sm font-medium text-gray-900">Activo</span>
                </label>

                <div class="col-span-2 relative" ref="dropdownRef">
                    <button @click="toggleOptions"
                        class="w-full flex items-center justify-center gap-2 px-4 py-2 bg-black text-white rounded-md hover:bg-gray-800 duration-200 focus:outline-none focus:ring-2 focus:ring-gray-300 lg:hidden">
                        Opciones
                    </button>

                    <AppIcon class="hidden cursor-pointer size-5 lg:block" name="ellipsis" @click="toggleOptions" />

                    <Transition name="fade-slide">
                        <OptionsProduct v-if="openOptions" />
                    </Transition>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.fade-slide-enter-active,
.fade-slide-leave-active {
    transition: opacity 0.2s ease, transform 0.2s ease;
}

.fade-slide-enter-from,
.fade-slide-leave-to {
    opacity: 0;
    transform: translateY(5px);
}
</style>
