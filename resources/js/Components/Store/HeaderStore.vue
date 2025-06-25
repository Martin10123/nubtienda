<script setup lang="ts">
import AppIcon from "../AppIcon.vue";
</script>

<template>
    <header
        class="bg-gray-50 p-4 border-t border-gray-200 md:border-none relative md:rounded-lg md:shadow md:flex md:items-start md:gap-4 md:py-8"
    >
        <div class="md:max-w-2xl">
            <div class="flex gap-4">
                <img
                    class="size-16 rounded-full"
                    src="/icons/avatar.svg"
                    alt="avatar"
                />

                <div class="flex flex-col gap-1">
                    <h1
                        class="!text-2xl md:!text-3xl font-bold text-gray-900 !m-0"
                    >
                        Tienda para todos
                    </h1>

                    <p class="text-gray-600 text-sm">
                        Slogan de la tienda, un lugar para comprar todo lo que
                        necesites.
                    </p>

                    <div
                        class="border rounded-lg bg-white text-sm text-center md:w-max md:px-3"
                    >
                        Ropa femenina
                    </div>
                </div>
            </div>

            <p class="text-gray-600 mt-4 text-justify">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Adipisci optio aliquid id unde, ducimus in nihil molestiae
                distinctio! Nulla amet debitis quisquam qui architecto vel
                voluptatum sint ad quia eaque!
            </p>
        </div>

        <div class="flex gap-2 mt-4 md:ml-auto">
            <button class="border rounded-lg p-3 flex items-center gap-2">
                <AppIcon class="size-5" name="heart" />
                Favoritos
            </button>
            <button class="border rounded-lg p-3 flex items-center gap-2">
                <AppIcon class="size-5" name="share-2" />Compartir
            </button>
        </div>
    </header>
</template>
