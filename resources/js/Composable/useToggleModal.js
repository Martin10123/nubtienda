// src/composables/useToggle.js
import { onMounted, onUnmounted, ref } from "vue";

export function useToggleModal() {
    const isOpen = ref(false);

    // Bloquear/desbloquear scroll del body
    const toggleBodyScroll = (block) => {
        document.body.style.overflow = block ? "hidden" : "";
    };

    // Alternar estado
    const toggle = () => {
        isOpen.value = !isOpen.value;
        toggleBodyScroll(isOpen.value);
    };

    // Cerrar al hacer clic fuera
    const handleClickOutside = (event, elementRef) => {
        if (elementRef.value && !elementRef.value.contains(event.target)) {
            isOpen.value = false;
            toggleBodyScroll(false);
        }
    };

    // Configurar event listeners
    const setupClickOutside = (elementRef) => {
        onMounted(() => {
            document.addEventListener("mousedown", (e) =>
                handleClickOutside(e, elementRef)
            );
        });

        onUnmounted(() => {
            document.removeEventListener("mousedown", (e) =>
                handleClickOutside(e, elementRef)
            );
            toggleBodyScroll(false); // Asegurarse de desbloquear scroll al desmontar
        });
    };

    return {
        isOpen,
        toggle,
        setupClickOutside,
    };
}
