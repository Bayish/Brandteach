<template>
    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Согласие на использование файлов cookie</h5>
                    <button type="button" class="btn-close" aria-label="Close" @click="closeModal"></button>
                </div>
                <div class="modal-body">
                    <p>Мы используем файлы cookie, чтобы улучшить ваше пользовательское взаимодействие с нашим сайтом.</p>
                    <p>Продолжая использовать этот сайт, вы соглашаетесь на использование наших файлов cookie.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" @click="acceptCookies">Принять</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

// Define a ref to track modal visibility
const modalVisible = ref(true);

// Function to close the modal
const closeModal = () => {
    modalVisible.value = false;
};

// Function to handle accepting cookies
const acceptCookies = () => {
    // Perform actions to accept cookies (e.g., set a cookie flag, store in localStorage)
    // For demonstration, simply close the modal
    closeModal();
};
</script>

<style scoped>
/* Add custom styles for modal if needed */
.modal {
    display: block; /* Ensure modal is displayed */
}
</style>
