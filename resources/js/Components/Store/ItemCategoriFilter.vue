<script setup lang="ts">
const categoriesList = [
    {
        title: "Vestidos",
        count: 120,
    },
    {
        title: "Camisas",
        count: 80,
    },
    {
        title: "Blusas",
        count: 150,
    },
    {
        title: "Pantalones",
        count: 90,
    },
    {
        title: "Faldas",
        count: 40,
    },
    {
        title: "Chaquetas",
        count: 33,
    },
    {
        title: "Deportivo",
        count: 23,
    },
];
</script>

<template>
    <li
        class="flex items-center justify-between gap-2"
        v-for="item in categoriesList"
        :key="item.title"
    >
        <div class="flex items-center gap-2">
            <input
                class="rounded-md bg-gray-100 border-gray-200"
                type="checkbox"
                name=""
                :id="item.title"
            />
            <label :for="item.title" class="text-sm font-medium">{{
                item.title
            }}</label>
        </div>

        <p
            class="border bg-gray-100 py-0.5 font-medium rounded-xl text-xs px-3"
        >
            {{ item.count }}
        </p>
    </li>
</template>
