<script setup>
import { ref, onMounted } from 'vue';

defineProps({
    file: {
        type: Object,
        default: null
    },
    type: {
        type: String,
        default: null
    },
    label: {
        type: String,
        default: null
    },
    placeholderTitle: {
        type: String,
        default: null
    },
    placeholderText: {
        type: String,
        default: null
    },
    buttonText: {
        type: String,
        default: null
    },
})
defineEmits(['update:file']);


const uploadInput = ref(null);
const filenameLabel = ref(null);
const imagePreview = ref(null);
const isEventListenerAdded = ref(false);

onMounted(() => {
    uploadInput.value = document.getElementById('upload');
    filenameLabel.value = document.getElementById('filename');
    imagePreview.value = document.getElementById('image-preview');

    uploadInput.value.addEventListener('change', (event) => {
        const file = event.target.files[0];

        if (file) {
            filenameLabel.value.textContent = file.name;


            const reader = new FileReader();
            reader.onload = (e) => {
                imagePreview.value.innerHTML =
                    `<img src="${e.target.result}" class="max-h-48 rounded-lg mx-auto" alt="Image preview" />`;
                imagePreview.value.classList.remove('border-dashed', 'border-2', 'border-gray-400');

                // Add event listener for image preview only once
                if (!isEventListenerAdded.value) {
                    imagePreview.value.addEventListener('click', () => {
                        uploadInput.value.click();
                    });

                    isEventListenerAdded.value = true;
                }
            };
            reader.readAsDataURL(file);
        } else {
            filenameLabel.value.textContent = '';
            imagePreview.value.innerHTML =
                `<div class="bg-gray-200 h-48 rounded-lg flex items-center justify-center text-gray-500">No image preview</div>`;
            imagePreview.value.classList.add('border-dashed', 'border-2', 'border-gray-400');

            // Remove the event listener when there's no image
            imagePreview.value.removeEventListener('click', () => {
                uploadInput.value.click();
            });

            isEventListenerAdded.value = false;
        }
    });

    uploadInput.value.addEventListener('click', (event) => {
        event.stopPropagation();
    });
});
</script>

<template>
    <section class="container mx-auto items-center py-4">
        <div class="bg-white rounded-lg shadow-md overflow-hidden items-center">
            <div class="px-4 py-6 max-w-sm mx-auto">
                <div id="image-preview" class="max-w-sm p-2 mb-4 bg-base-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer">
                    <input
                        id="upload"
                        type="file"
                        class="hidden"
                        accept="image/*"
                        @input="$emit('update:file', $event.target.files[0])"
                    />
                    <label for="upload" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-700 mx-auto mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                        </svg>
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-info">
                            {{ placeholderTitle }}
                        </h5>
                        <p class="font-normal text-sm text-gray-400 md:px-6">
                            {{ placeholderText }}
                        </p>
                        <span id="filename" class="text-gray-500 bg-gray-200 z-50"></span>
                    </label>
                </div>
                <div class="flex items-center justify-center">
                    <div class="w-full">
                        <label class="w-full text-white bg-primary hover:bg-primary/80 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center justify-center mr-2 mb-2 cursor-pointer">
                            <span class="text-center ml-2">{{ buttonText }}</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
