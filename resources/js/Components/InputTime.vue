<script setup>
defineProps({
    dayWeek: String,
});
</script>

<template>
    <div
        class="border flex flex-col gap-4 p-2 rounded-lg sm:flex-row sm:items-center sm:justify-between"
    >
        <div class="flex items-center gap-3">
            <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer" />
                <div
                    class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-500 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"
                ></div>
            </label>

            <span> {{ dayWeek }} </span>
        </div>

        <div class="flex items-center justify-end gap-1 sm:gap-2">
            <input
                class="flex h-10 rounded-md border border-gray-200 px-3 py-2 text-sm file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-gray-200 placeholder:text-gray-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-24"
                type="time"
                value="08:00"
            />
            <span> a </span>
            <input
                class="flex h-10 rounded-md border border-gray-200 px-3 py-2 text-sm file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-gray-200 placeholder:text-gray-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-24"
                type="time"
                value="18:00"
            />
        </div>
    </div>
</template>
