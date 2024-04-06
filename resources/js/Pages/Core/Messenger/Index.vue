<script setup>
import CrmViewContentHeader from "@/layout/crm-layout/crm-view-content-header.vue";
import IconSend from "@/icons/iconSend.vue";
import {ref} from "vue";
import {useForm} from "@inertiajs/vue3";
import TextHelper from "@/component/texts/text-helper.vue";
import TextLabel from "@/component/texts/text-label.vue";

const props = defineProps({
    chatGroups: {
        type: Array,
        default: () => [],
    },
    directs: {
        type: Array,
        default: () => [],
    },
    user: {
        type: Object,
        default: null,
    }
})

console.log(props)

const mobileChat = ref(false)


const selected = ref({
    type: 'group',
    item: props.chatGroups[0],
    name: props.chatGroups[0].name,
    description: props.chatGroups[0].description
});

const form = useForm({
    content: '',
    chat_id: '',
    type: '',
});

const notReadMessages = (chatGroup) => {
    const notMyMessages = chatGroup.messages.filter(message => message.sender_id !== props.user.id);
    let countOfNewMessages = 0;
    for (const message of notMyMessages) {
        message.message_statuses.filter(status => status.viewed === 0).length > 0 && countOfNewMessages++
    }

    return countOfNewMessages;
}

for (const chatGroup of props.chatGroups) {
    const a = notReadMessages(chatGroup);
}

const onSelect = (chat, type) => {
    if (type === 'group') {
        selected.value = {
            type: 'group',
            item: props.chatGroups[0],
            name: props.chatGroups[0].name,
            description: props.chatGroups[0].description
        }
    } else {
        selected.value = {
            type: 'direct',
            item: chat,
            name: getDirectUser(chat).name + ' ' + getDirectUser(chat).surname,
            description: getDirectUser(chat).role.name
        }
    }

    mobileChat.value = true;
};

const onSubmit = () => {
    form.chat_id = selected.value.item.id;
    form.type = selected.value.type;

    console.log(form);


    form.post(route('messenger.store'));
}


const truncateText = (text, maxLength) => {
    if (text.length > maxLength) {
        return text.substring(0, maxLength) + "...";
    } else {
        return text;
    }
}

const messageSort = (messages) => {
    const sortedMessages = messages.sort((a, b) => b.updated_at - a.updated_at);
    return sortedMessages.length > 0 ? sortedMessages[0].content : "New Group";
}

const messageTime = (messages) => {
    const sortedMessages = messages.sort((a, b) => b.updated_at - a.updated_at);
    return sortedMessages.length > 0 ? sortedMessages[0].updated_at : "Now";
}

const getNewMessageFirst = (messages) => {
    return messages.sort((a, b) => new Date(b.updated_at) - new Date(a.updated_at));
}

const getDirectUser = (direct) => {
    const members = [direct.first_member, direct.second_member];
    return members.find(member => member.id !== props.user.id);
}

for (let i = 0; i < props.chatGroups.length; i++) {
    Echo.private('chat-group.' + props.chatGroups[i].id)
        .listen('ChatGroupMessageSent', (e) => {
            console.log(e.message);
            props.chatGroups[i].messages.push(e.message);
        });
}

for (let i = 0; i < props.directs.length; i++) {
    Echo.private('direct-message.' + props.directs[i].id)
        .listen('DirectMessageSent', (e) => {
            console.log(e.message);
            props.directs[i].messages.push(e.message);
        });
}

const getTimestamp = (timestamp) => {
    const date = new Date(timestamp);

    const hour = ('0' + date.getHours()).slice(-2);
    const minute = ('0' + date.getMinutes()).slice(-2);

    return hour + ':' + minute;
}

const getCountOfNotReadMessages = (messages) => {
    let count = 0;
    for (let i = 0; i < messages.length; i++) {
        messages[i].message_statuses.filter(s => s.viewed === 0 && s.member_id === props.user.id).length > 0 ? count += 1 : count;
    }


    return count;
}

const backToTheGroup = () => {
    mobileChat.value = false;
}

</script>

<template>
    <crm-view-content-header
        pageTitle="Messenger"
    />
    <div class="bg-accent rounded-3xl h-full w-full overflow-hidden flex-1 mb-4 shadow-md">
        <!-- component -->
        <div class="hidden lg:flex h-full">
            <!-- Sidebar -->
            <div class="w-80 xl:w-96 xl:w-1/4 bg-accent border-r border-info-content">
                <!-- Sidebar Header -->
                <header
                    class="min-h-24 p-4 border-b border-info-content flex justify-between items-center bg-primary text-accent">
                    <h2 class="text-xl font-semibold">Conversations</h2>
                    <div class="relative">
                        <button id="menuButton" class="focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-100" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path d="M2 10a2 2 0 012-2h12a2 2 0 012 2 2 2 0 01-2 2H4a2 2 0 01-2-2z"/>
                            </svg>
                        </button>
                    </div>
                </header>

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
            </div>

            <!-- Main Chat Area -->
            <div class="flex-1 flex flex-col justify-between h-full">
                <!-- Chat Header -->
                <header class="min-h-24 bg-accent p-4  border-b border-info-content">
                    <h2 class="text-xl text-info font-semibold">{{ truncateText(selected.name, 20) }}</h2>
                    <text-helper :value="truncateText(selected.description, 50)"/>
                </header>

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

                <!-- Chat Input -->
                <footer class="bg-accent border-t border-info-content p-4 w-full">
                    <div class="flex items-center">
                        <input v-model="form.content" type="text" placeholder="Type a message..."
                               class="border-info-content bg-accent w-full p-2 rounded-md border focus:outline-none focus:border-blue-500">
                        <button @click="onSubmit" class="bg-primary text-accent px-4 py-2 rounded-lg ml-2">
                            <icon-send/>
                        </button>
                    </div>
                </footer>
            </div>
        </div>

        <div class="lg:hidden h-full relative">

            <div
                class="bg-accent h-full transition transform duration-500 ease-in-out absolute inset-0 flex flex-col"
                :class="{'-translate-x-full': mobileChat, '-translate-x-0': !mobileChat}"
            >
                <!-- Sidebar Header -->
                <header
                    class="min-h-24 p-4 border-b border-info-content flex justify-between items-center bg-primary text-accent">
                    <h2 class="text-xl font-semibold">Conversations</h2>
                    <div class="relative">
                        <button id="menuButton" class="focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-100" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path d="M2 10a2 2 0 012-2h12a2 2 0 012 2 2 2 0 01-2 2H4a2 2 0 01-2-2z"/>
                            </svg>
                        </button>
                    </div>
                </header>
                <!-- Contact List -->
                <div class="overflow-y-auto flex-1 h-full p-3">

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
                                            <text-label :value="truncateText(chatGroup.name, 20)"/>
                                            <span class="text-red">{{
                                                    getCountOfNotReadMessages(chatGroup.messages)
                                                }}</span>
                                            <text-helper :value="messageSort(chatGroup.messages)"/>
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
                                    v-for="(direct, directIndex) in [...directs, ...directs, ...directs]"
                                    :key="directIndex"
                                    class="w-full"
                                    @click="onSelect(direct, 'direct')"
                                >
                                    <div class="flex items-center mb-4 cursor-pointer hover:bg-gray-100 p-2 rounded-md">
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
            </div>
            <div
                class="h-full text-center transition transform duration-500 ease-in-out absolute inset-0 flex-1 flex flex-col justify-between"
                :class="{'translate-x-full': !mobileChat, 'translate-x-0': mobileChat}"
            >
                <!-- Chat Header -->
                <header class="min-h-24 bg-accent p-4  border-b border-info-content flex justify-between items-center">
                    <button class="w-10 h-10 bg-primary rounded-full mr-2" @click="backToTheGroup">
                        <font-awesome-icon class="font-medium fa-xl text-accent" :icon="['fas', 'angle-left']"/>
                    </button>
                    <div class="flex-1">
                        <h2 class="text-xl text-info font-semibold text-left">{{ truncateText(selected.name, 20) }}</h2>
                        <text-helper :value="truncateText(selected.description, 50)"/>
                    </div>
                </header>

                <!-- Chat Messages -->
                <div class="overflow-y-auto h-full flex-1 p-4 flex flex-col flex-col-reverse">
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

                <!-- Chat Input -->
                <footer class="bg-accent border-t border-info-content p-4 w-full">
                    <div class="flex items-center">
                        <input v-model="form.content" type="text" placeholder="Type a message..."
                               class="border-info-content bg-accent w-full p-2 rounded-md border focus:outline-none focus:border-blue-500">
                        <button @click="onSubmit" class="bg-primary text-accent px-4 py-2 rounded-lg ml-2">
                            <icon-send/>
                        </button>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</template>
