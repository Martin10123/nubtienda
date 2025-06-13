<script setup lang="ts">
import SocialNetworkItem from "@/Components/SocialNetworkItem.vue";
import AppIcon from "@/Components/AppIcon.vue";
</script>

<template>
    <section class="p-4">
        <div class="p-4 border rounded-lg lg:p-6">
            <h2 class="text-2xl font-bold flex items-center gap-2">
                <AppIcon class="size-6" name="messages-square" />

                Redes Sociales
            </h2>
            <p class="text-gray-500 text-sm mb-6">
                Conecta tus redes sociales para que los clientes puedan seguirte
                y contactarte
            </p>

            <div class="grid gap-3">
                <SocialNetworkItem
                    pathSocial="/icons/instagramIcon.svg"
                    titleSocial="Instagram"
                    linkSocial="instagram.com/"
                    placeholderInput="@boutique_carolina"
                />

                <SocialNetworkItem
                    pathSocial="/icons/faceIcon.svg"
                    titleSocial="Facebook"
                    linkSocial="facebook.com/"
                    placeholderInput="boutique.carolina"
                />

                <SocialNetworkItem
                    pathSocial="/icons/whatsappIcon.svg"
                    titleSocial="WhatsApp Business"
                    linkSocial="wa.me/"
                    placeholderInput="+573001234567"
                />

                <SocialNetworkItem
                    pathSocial="/icons/tiktokIcon.svg"
                    titleSocial="TikTok"
                    linkSocial="tiktok.com/"
                    placeholderInput="@tu_usuario_tiktok"
                />

                <SocialNetworkItem
                    pathSocial="/icons/youtubeIcon.svg"
                    titleSocial="YouTube"
                    linkSocial="youtube.com/"
                    placeholderInput="tu_canal_youtube"
                />
            </div>
        </div>

        <div class="p-4 border rounded-lg mt-4 lg:p-6">
            <h2 class="text-2xl font-bold flex items-center gap-2">
                <AppIcon class="size-6" name="scan-eye" />

                Vista Previa
            </h2>
            <p class="text-gray-500 text-sm mb-6">
                Así aparecerán tus redes sociales en tu tienda
            </p>

            <div class="bg-gray-50 p-4 rounded-lg">
                <h2 class="text-lg font-bold mb-2 flex items-center gap-2">
                    Siguenos en:
                </h2>

                <div class="grid grid-cols-2 gap-2 md:grid-cols-5">
                    <div
                        class="bg-white p-2 rounded-lg border cursor-pointer hover:bg-gray-200 transition-colors"
                    >
                        <img
                            class="size-6 inline-block mr-2"
                            src="/icons/instagramIcon.svg"
                            alt="instagramIcon"
                        />
                        <span class="text-black text-sm font-medium">
                            Instagram
                        </span>
                    </div>
                    <div
                        class="bg-white p-2 rounded-lg border cursor-pointer hover:bg-gray-200 transition-colors"
                    >
                        <img
                            class="size-6 inline-block mr-2"
                            src="/icons/faceIcon.svg"
                            alt="instagramIcon"
                        />
                        <span class="text-black text-sm font-medium">
                            Facebook
                        </span>
                    </div>
                    <div
                        class="bg-white p-2 rounded-lg border cursor-pointer hover:bg-gray-200 transition-colors"
                    >
                        <img
                            class="size-6 inline-block mr-2"
                            src="/icons/whatsappIcon.svg"
                            alt="instagramIcon"
                        />
                        <span class="text-black text-sm font-medium">
                            WhatsApp
                        </span>
                    </div>
                    <div
                        class="bg-white p-2 rounded-lg border cursor-pointer hover:bg-gray-200 transition-colors"
                    >
                        <img
                            class="size-6 inline-block mr-2"
                            src="/icons/tiktokIcon.svg"
                            alt="instagramIcon"
                        />
                        <span class="text-black text-sm font-medium">
                            TikTok
                        </span>
                    </div>
                    <div
                        class="bg-white p-2 rounded-lg border cursor-pointer col-span-2 text-center hover:bg-gray-200 transition-colors md:col-span-1 md:text-left"
                    >
                        <img
                            class="size-6 inline-block mr-2"
                            src="/icons/youtubeIcon.svg"
                            alt="instagramIcon"
                        />
                        <span class="text-black text-sm font-medium">
                            YouTube
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
