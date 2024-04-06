<script setup>
    defineProps({
        chatGroups: {
            type: Array,
            default: () => [],
        },
        directs: {
            type: Array,
            default: () => [],
        }
    })
</script>

<template>
    <!-- Contact List -->
    <div class="overflow-y-auto h-full p-2 mb-9 pb-20">

        <div tabindex="0"
             class="collapse collapse-arrow rounded-none md:rounded-b-2xl duration-300 ease-in-out">
            <input type="checkbox" class="peer"/>
            <div class="collapse-title text-xl font-medium text-primary p-4">
                <div class="flex w-full justify-start items-center">
                    <div class="avatar placeholder mr-2">
                        Group messages
                    </div>
                </div>
            </div>

            <div class="collapse-content p-0 bg-accent">
                <ul class="w-full px-0 overflow-y-auto relative">
                    <li
                        v-for="(chatGroup, chatGroupIndex) in chatGroups"
                        :key="chatGroupIndex"
                        class="w-full"
                        @click="onSelect(chatGroup, 'group')"
                    >
                        <div class="flex items-center mb-4 cursor-pointer hover:bg-base-100 p-2 rounded-md">
                            <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                                <img
                                    src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato"
                                    alt="User Avatar" class="w-12 h-12 rounded-full">
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-center">
                                    <text-label :value="truncateText(chatGroup.name, 20)"/>
                                    <div class="w-10 ml-1">
                                        <text-helper class="flex-1"
                                                     :value="getTimestamp(messageTime(chatGroup.messages))"/>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <text-helper class="flex-1" :value="messageSort(chatGroup.messages)"/>
                                    <div class="w-10 ml-1">
                                                    <span
                                                        class="w-auto text-accent flex justify-center items-center text-center min-h-8 bg-success rounded-full">{{
                                                            getCountOfNotReadMessages(chatGroup.messages)
                                                        }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        <div tabindex="0"
             class="collapse collapse-arrow rounded-none md:rounded-b-2xl duration-300 ease-in-out">
            <input type="checkbox" class="peer"/>
            <div class="collapse-title text-xl font-medium text-primary p-4">
                <div class="flex w-full justify-start items-center">
                    <div class="avatar placeholder mr-2">
                        Direct messages
                    </div>
                </div>
            </div>

            <div class="collapse-content p-0 bg-accent">
                <ul class="w-full px-0 overflow-y-auto relative">
                    <li
                        v-for="(direct, directIndex) in directs"
                        :key="directIndex"
                        class="w-full"
                        @click="onSelect(direct, 'direct')"
                    >
                        <div class="flex items-center mb-4 cursor-pointer hover:bg-base-100 p-2 rounded-md">
                            <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                                <img
                                    src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato"
                                    alt="User Avatar" class="w-12 h-12 rounded-full">
                            </div>
                            <div class="flex-1">
                                <div class="flex">
                                    <text-label :value="getDirectUser(direct).name"/>
                                    <text-label class="pl-3" :value="getDirectUser(direct).surname"/>
                                </div>
                                <text-helper :value="messageSort(direct.messages)"/>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</template>
