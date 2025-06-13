<script setup>
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";

const categoriasBusiness = [
    "Ropa y Accesorios",
    "Ropa Infantil",
    "Ropa de Bebé",
    "Ropa Femenina",
    "Ropa Masculina",
    "Accesorios",
    "Calzado",
    "Comida",
    "Artesanías",
    "Tecnología",
    "Hogar",
    "Belleza",
    "Deportes",
    "Juguetes",
    "Papelería",
    "Electrodomésticos",
    "Jardinería",
    "Mascotas",
    "Salud",
    "Lencería",
    "Vehículos",
    "Bebés y Niños",
    "Instrumentos Musicales",
    "Libros",
    "Servicios",
    "Fotografía",
    "Viajes y Turismo",
];
</script>

<template>
    <section class="p-4">
        <div class="border p-3 rounded-md lg:p-6">
            <h3
                class="text-2xl font-bold tracking-tight flex items-center gap-2"
            >
                <img
                    class="size-6"
                    src="/icons/storeIcon.svg"
                    alt="storeIcon"
                />
                Información Principal
            </h3>

            <p class="mt-2 text-sm text-gray-600">
                Esta información aparecerá en tu tienda pública y ayudará a los
                clientes a conocerte mejor
            </p>

            <div>
                <form class="grid gap-2">
                    <div>
                        <h3
                            class="text-lg font-semibold tracking-tight flex items-center gap-2 mt-4 mb-2 lg:text-base"
                        >
                            Logo de tu negocio *
                        </h3>

                        <div class="flex items-center gap-4">
                            <div
                                class="w-20 h-20 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center"
                            >
                                <img
                                    class="size-8"
                                    src="/icons/uploadIcon.svg"
                                    alt="uploadIcon"
                                />
                            </div>

                            <div>
                                <button
                                    class="flex items-center gap-2 border hover:bg-gray-100 px-4 py-2 rounded-md transition-colors"
                                >
                                    <img
                                        class="size-5"
                                        src="/icons/uploadIcon.svg"
                                        alt="uploadIcon"
                                    />
                                    <span>Subir logo</span>
                                </button>

                                <p class="text-xs text-gray-500 mt-1">
                                    Recomendado: 200x200px, formato PNG o JPG
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="mt-4">
                            <InputLabel
                                class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                                for="nameBusiness"
                                value="Nombre de tu negocio *"
                            />
                            <TextInput
                                id="nameBusiness"
                                type="text"
                                class="mt-2 block w-full"
                                placeholder="Boutique Carolina..."
                                required
                            />
                            <InputError class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <InputLabel
                                class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                                for="sloganBusiness"
                                value="Slogan (Opcional)"
                            />
                            <TextInput
                                id="sloganBusiness"
                                type="text"
                                class="mt-2 block w-full"
                                placeholder="Escribe algo unico para tu negocio..."
                                required
                            />
                            <InputError class="mt-2" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="descriptionBusiness"
                            value="Descripción de tu negocio *"
                        />
                        <textarea
                            class="mt-2 block w-full h-40 resize-none border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Escribe una breve descripción de tu negocio, lo que ofreces y lo que te hace especial..."
                        />
                        <InputError class="mt-2" />

                        <p class="text-xs text-[#71717a] mt-2">
                            Esta descripción aparecerá en la página principal de
                            tu tienda
                        </p>
                    </div>

                    <div>
                        <h3
                            class="text-lg font-semibold tracking-tight flex items-center gap-2 mt-4 mb-2 lg:text-base"
                        >
                            Categoría Principal *
                        </h3>

                        <div class="flex flex-wrap gap-2">
                            <button
                                v-for="categoria in categoriasBusiness"
                                :key="categoria"
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-black cursor-pointer hover:bg-primary"
                                :class="{
                                    'bg-blue-500 text-white':
                                        categoria === 'Ropa y Accesorios',
                                }"
                            >
                                {{ categoria }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="border p-3 rounded-md mt-6 lg:p-6">
            <h2 class="text-2xl font-semibold leading-none tracking-tight">
                URL de tu Tienda
            </h2>
            <p class="text-sm text-gray-500 mt-1">
                Esta será la dirección web que compartirás con tus clientes
            </p>

            <div class="mt-2 flex items-center gap-2">
                <span class="text-sm text-gray-500">nubtienda.com/</span>
                <TextInput
                    id="storeUrl"
                    type="text"
                    class="block w-full max-w-72"
                    required
                />
            </div>

            <div class="p-3 bg-blue-50 rounded-lg mt-4">
                <p class="mb-1 font-medium">Tu tienda estará disponible en:</p>
                <span class="text-blue-500 font-medium"
                    >https://nubtienda.com/tu-negocio</span
                >
            </div>
        </div>

        <div class="flex justify-end gap-2 mt-2">
            <button
                class="mt-4 border px-4 py-2 rounded-md hover:bg-gray-100 transition-colors"
            >
                Cancelar
            </button>
            <button
                class="mt-4 border px-4 py-2 rounded-md bg-blue-500 text-white hover:bg-blue-600 transition-colors"
            >
                Guardar cambios
            </button>
        </div>
    </section>
</template>
