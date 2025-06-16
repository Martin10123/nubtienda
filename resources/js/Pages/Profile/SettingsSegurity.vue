<script setup lang="ts">
import SectionCardInformation from "@/Components/SectionCardInformation.vue";
</script>

<template>
    <section>
        <SectionCardInformation
            title="Tema y Apariencia"
            icon="moon"
            description="Personaliza la apariencia de tu panel de control"
        >
            <template #content>
                <div class="">
                    <div>
                        <h3>Modo oscuro</h3>
                        <p>
                            Activa el tema oscuro para una mejor experiencia
                            nocturna
                        </p>
                    </div>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer" />
                        <div
                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-500 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"
                        ></div>
                    </label>
                </div>
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Comunicación"
            icon="mail"
            description="Configura cómo prefieres recibir comunicaciones"
        >
            <template #content>
                <div class="">
                    <div>
                        <h3>Reportes Semanales</h3>
                        <p>Resumen semanal de tus ventas y estadísticas</p>
                    </div>

                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer" />
                        <div
                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-500 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"
                        ></div>
                    </label>
                </div>
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Sesiones Activas"
            icon="eye"
            description="Revisa dónde está iniciada tu sesión"
        >
            <template #content>
                <div class="">
                    <div>
                        <h3>Chrome en Windows</h3>
                        <p>Bogotá, Colombia • Hace 5 minutos</p>
                    </div>

                    <div>Actual</div>
                </div>
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Configuración de privacidad"
            icon="shield"
            description="Controla qué información compartes"
        >
            <template #content>
                <div>
                    <div class="">
                        <div>
                            <h3>Perfil Público</h3>
                            <p>
                                Permite que otros usuarios vean tu perfil básico
                            </p>
                        </div>

                        <label class="inline-flex items-center cursor-pointer">
                            <input
                                type="checkbox"
                                value=""
                                class="sr-only peer"
                            />
                            <div
                                class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-500 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"
                            ></div>
                        </label>
                    </div>

                    <div class="">
                        <div>
                            <h3>Mostrar Estadísticas</h3>
                            <p>
                                Compartir estadísticas básicas de tus negocios
                            </p>
                        </div>

                        <label class="inline-flex items-center cursor-pointer">
                            <input
                                type="checkbox"
                                value=""
                                class="sr-only peer"
                            />
                            <div
                                class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-500 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"
                            ></div>
                        </label>
                    </div>

                    <div class="">
                        <div>
                            <h3>Compartir Información de Contacto</h3>
                            <p>
                                Permitir que otros usuarios vean tu correo
                                electrónico y número de teléfono
                            </p>
                        </div>

                        <label class="inline-flex items-center cursor-pointer">
                            <input
                                type="checkbox"
                                value=""
                                class="sr-only peer"
                            />
                            <div
                                class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-500 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"
                            ></div>
                        </label>
                    </div>
                </div>
            </template>
        </SectionCardInformation>

        <SectionCardInformation
            title="Tus Datos"
            icon="download"
            description="Gestiona y descarga tu información personal"
        >
            <template #content>
                <div class="">
                    <div>
                        <h3>Descargar Datos</h3>
                        <p>Obtén una copia de toda tu información</p>
                    </div>

                    <button>Solicitar Descarga</button>
                </div>
                <div class="">
                    <div>
                        <h3>Exportar Negocios</h3>
                        <p>Descarga información de tus tiendas y productos</p>
                    </div>

                    <button>Exportar</button>
                </div>
            </template>
        </SectionCardInformation>
    </section>
</template>
