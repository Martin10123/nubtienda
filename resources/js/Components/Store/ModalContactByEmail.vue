<script setup lang="ts">
import InputLabel from "../InputLabel.vue";
import ModalComponent from "../ModalComponent.vue";
import TextInput from "@/Components/TextInput.vue";
import AppIcon from "@/Components/AppIcon.vue";

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
    <ModalComponent
        :show="show"
        maxWidth="xl"
        :closeable="closeable"
        @close="close"
    >
        <div class="p-6">
            <div class="mb-6">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800">
                        Envianos un mensaje
                    </h2>

                    <button
                        @click="close"
                        class="shadow-md bg-gray-100 opacity-50 hover:bg-gray-200 rounded-md p-1.5 cursor-pointer transition-colors duration-200 lg:opacity-100"
                    >
                        <AppIcon name="x" />
                    </button>
                </div>

                <p class="text-gray-600">
                    Si tienes alguna pregunta o necesitas más información, no
                    dudes en enviarnos un mensaje. Estaremos encantados de
                    ayudarte. <br />
                    <strong
                        >Recuerda que puedes contactarnos por WhatsApp al
                    </strong>
                    <a
                        href="#"
                        class="text-green-500 hover:underline"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        +57 300 000 0000
                    </a>
                </p>
            </div>

            <form class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <InputLabel for="name" value="Nombre *" />
                        <TextInput
                            id="name"
                            type="text"
                            class="mt-1 block w-full"
                            placeholder="Tu nombre"
                            required
                        />
                    </div>

                    <div>
                        <InputLabel for="cellphone" value="Telefono *" />
                        <TextInput
                            id="cellphone"
                            type="number"
                            class="mt-1 block w-full"
                            placeholder="Tu Telefono"
                            required
                        />
                    </div>
                </div>

                <div>
                    <InputLabel for="email" value="Correo electrónico *" />
                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 block w-full"
                        placeholder="Tu correo electrónico"
                        required
                    />
                </div>

                <div>
                    <InputLabel for="product" value="Producto (Opcional)" />
                    <TextInput
                        id="product"
                        type="text"
                        class="mt-1 block w-full"
                        placeholder="Nombre del producto..."
                        required
                    />
                </div>

                <div>
                    <InputLabel for="message" value="Mensaje *" />
                    <textarea
                        id="message"
                        class="mt-1 block w-full h-32 p-3 border border-gray-300 rounded-md resize-none"
                        placeholder="Escribe tu mensaje aquí"
                        required
                    ></textarea>
                </div>

                <div>
                    <button
                        type="submit"
                        class="mt-4 w-full bg-black text-white font-semibold py-3 px-4 rounded-md hover:opacity-80 transition-colors"
                    >
                        Enviar mensaje
                    </button>
                </div>
            </form>
        </div>
    </ModalComponent>
</template>
