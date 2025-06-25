<script setup lang="ts">
import AppLayout from "@/Layouts/AppLayout.vue";
import HeaderStore from "@/Components/Store/HeaderStore.vue";
import ProductFilterInput from "@/Components/Store/ProductFilterInput.vue";
import AsideAllFilters from "@/Components/Store/AsideAllFilters.vue";
import ProductsList from "@/Components/Store/ProductsList.vue";
import InformationContact from "@/Components/Store/InformationContact.vue";
import { ref } from "vue";

const showFilters = ref(false);
const showContact = ref(false);

const toggleFilters = () => {
    showFilters.value = !showFilters.value;
};
const toggleContact = () => {
    showContact.value = !showContact.value;
};
</script>

<template>
    <AppLayout title="Store">
        <main>
            <HeaderStore />

            <section class="p-4 xl:grid xl:grid-cols-4 gap-4 lg:pt-8">
                <div class="w-full grid gap-4 xl:col-span-3">
                    <ProductFilterInput
                        :showFilters="showFilters"
                        :showContact="showContact"
                        @toggleFilters="toggleFilters"
                        @toggleContact="toggleContact"
                    />

                    <div class="lg:grid lg:grid-cols-3 lg:gap-6">
                        <AsideAllFilters
                            :showFilters="showFilters"
                            @close="showFilters = false"
                        />

                        <ProductsList class="col-span-2" />
                    </div>
                </div>

                <InformationContact
                    :showContact="showContact"
                    @close="showContact = false"
                />
            </section>
        </main>
    </AppLayout>
</template>
