<script setup>
    defineProps({
        message: {
            type: Object,
            default: null
        }
    })
</script>

<template>
    <!-- Chat Messages -->
    <div class="overflow-y-auto h-full flex-1 p-2 flex flex-col flex-col-reverse">
        <template v-for="(message, messageIndex) in getNewMessageFirst(selected.item.messages)"
                  :key="messageIndex">
            <div class="w-full py-2">
                <div class="flex items-center">
                    <div class="w-9 h-9 rounded-full flex items-center justify-center mr-2">
                        <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato"
                             alt="User Avatar" class="w-8 h-8 rounded-full">
                    </div>
                    <div>{{ message.sender.name }} {{ message.sender.name }}
                        {{ getTimestamp(message.updated_at) }}
                    </div>
                </div>
                <!-- Incoming Message -->
                <div class="flex mb-4 cursor-pointer">
                    <div class="flex max-w-96 bg-accent rounded-lg p-3 gap-3">
                        <p class="text-gray-700">{{ message.content }}</p>
                    </div>
                </div>
            </div>

        </template>
    </div>
</template>
