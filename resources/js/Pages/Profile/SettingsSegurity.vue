<script setup lang="ts">
import AppIcon from "@/Components/AppIcon.vue";
import CardItemsGeneral from "@/Components/CardItemsGeneral.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import SectionCardInformation from "@/Components/SectionCardInformation.vue";
import TextInput from "@/Components/TextInput.vue";
</script>

<template>
    <section class="grid gap-6">
        <SectionCardInformation
            title="Tema y Apariencia"
            icon="moon"
            description="Personaliza la apariencia de tu panel de control"
        >
            <template #content>
                <CardItemsGeneral
                    title="Modo oscuro"
                    description="Activa el tema oscuro para una mejor experiencia nocturna"
                />
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Comunicación"
            icon="mail"
            description="Configura cómo prefieres recibir comunicaciones"
        >
            <template #content>
                <CardItemsGeneral
                    title="Reportes Semanales"
                    description="Resumen semanal de tus ventas y estadísticas"
                />
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Notificaciones"
            icon="bell"
            description="Configura tus preferencias de notificación"
        >
            <template #content>
                <div class="grid gap-4">
                    <CardItemsGeneral
                        title="Nuevos Pedidos"
                        description="Cuando recibas un nuevo pedido"
                        icon-name="triangle-alert"
                        :show-option="true"
                    />
                    <CardItemsGeneral
                        title="Nuevas Consultas"
                        description="Cuando un cliente haga una pregunta"
                        icon-name="message-square"
                        :show-option="true"
                    />
                    <CardItemsGeneral
                        title="Stock Bajo"
                        description="Cuando un producto tenga poco stock"
                        icon-name="triangle-alert"
                        :show-option="true"
                    />
                    <CardItemsGeneral
                        title="Productos Agotados"
                        description="Cuando un producto se agote completamente"
                        icon-name="triangle-alert"
                        :show-option="true"
                    />
                </div>
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Sesiones Activas"
            icon="eye"
            description="Revisa dónde está iniciada tu sesión"
        >
            <template #content>
                <div class="border p-4 rounded-lg">
                    <div>
                        <h3 class="font-medium">Chrome en Windows</h3>
                        <p class="text-sm text-gray-500">
                            Bogotá, Colombia • Hace 5 minutos
                        </p>
                    </div>

                    <div
                        class="mt-2 flex items-center gap-2 text-sm text-gray-600"
                    >
                        Actual
                    </div>
                </div>
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Configuración de privacidad"
            icon="shield"
            description="Controla qué información compartes"
        >
            <template #content>
                <div class="grid gap-4">
                    <CardItemsGeneral
                        title="Perfil Público"
                        description="Permite que otros usuarios vean tu perfil básico"
                    />
                    <CardItemsGeneral
                        title=" Mostrar Estadísticas"
                        description="Compartir estadísticas básicas de tus negocios"
                    />
                    <CardItemsGeneral
                        title="Compartir Información de Contacto"
                        description="Permitir que otros usuarios vean tu correo electrónico y número de teléfono"
                    />
                </div>
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Cambiar Contraseña"
            icon="key"
            description="Actualiza tu contraseña para mantener tu cuenta segura"
        >
            <template #content>
                <form class="">
                    <div class="mt-4">
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="currentPassword"
                            value="Contraseña Actual"
                        />
                        <TextInput
                            id="currentPassword"
                            type="text"
                            class="mt-2 block w-full"
                            required
                        />
                        <InputError class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="newPassword"
                            value="Nueva Contraseña"
                        />
                        <TextInput
                            id="newPassword"
                            type="text"
                            class="mt-2 block w-full"
                            required
                        />
                        <InputError class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <InputLabel
                            class="text-black text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 focus:border-blue-500 focus:ring-blue-500"
                            for="confirmPassword"
                            value="Confirmar Nueva Contraseña"
                        />
                        <TextInput
                            id="confirmPassword"
                            type="text"
                            class="mt-2 block w-full"
                            required
                        />
                        <InputError class="mt-2" />
                    </div>

                    <button
                        type="submit"
                        class="mt-6 w-full bg-blue-600 text-white font-medium py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                    >
                        Actualizar Contraseña
                    </button>
                </form>
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Tus Datos"
            icon="download"
            description="Gestiona y descarga tu información personal"
        >
            <template #content>
                <div class="grid gap-4">
                    <CardItemsGeneral
                        title="Descargar Datos"
                        description="Obtén una copia de toda tu información"
                        :show-button="true"
                        text-button="Solicitar Descarga"
                        button-class="w-full border rounded-md px-4 py-2 cursor-pointer transition-colors flex items-center justify-center gap-2 hover:bg-gray-100"
                    />

                    <CardItemsGeneral
                        title="Exportar Negocios"
                        description="Descarga información de tus tiendas y productos"
                        :show-button="true"
                        text-button="Exportar"
                        button-class="w-full border rounded-md px-4 py-2 cursor-pointer transition-colors flex items-center justify-center gap-2 hover:bg-gray-100"
                    />
                </div>
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Zona de Peligro"
            icon="triangle-alert"
            description="Acciones irreversibles para tu cuenta"
            custom-class="text-red-600"
        >
            <template #content>
                <div class="">
                    <p class="text-sm text-gray-600">
                        <AppIcon
                            class="size-5 text-black"
                            name="triangle-alert"
                        />

                        Las siguientes acciones son permanentes y no se pueden
                        deshacer. Procede con precaución.
                    </p>
                </div>

                <CardItemsGeneral
                    title="Desactivar Cuenta"
                    description="Desactiva temporalmente tu cuenta"
                    :show-button="true"
                    text-button="Desactivar Cuenta"
                    button-class="w-full border rounded-md px-4 py-2 cursor-pointer bg-red-500 text-white transition-colors flex items-center justify-center gap-2 hover:bg-red-400"
                    container-class="my-4"
                />

                <CardItemsGeneral
                    title="Eliminar Cuenta"
                    description="Elimina permanentemente tu cuenta y todos los datos"
                    :show-button="true"
                    text-button="Eliminar Cuenta"
                    icon-button="trash-2"
                    button-class="w-full border rounded-md px-4 py-2 cursor-pointer bg-red-500 text-white transition-colors flex items-center justify-center gap-2 hover:bg-red-400"
                />
            </template>
        </SectionCardInformation>
    </section>
</template>
