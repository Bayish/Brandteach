<script setup>
import CrmViewContentHeader from "@/layout/crm-layout/crm-view-content-header.vue";
import IconSend from "@/icons/iconSend.vue";
import {ref} from "vue";
import {useForm} from "@inertiajs/vue3";

const props = defineProps({
  chatGroups: {
    type: Array,
    default: () => [],
  },
  user: {
    type: Object,
    default: null,
  }
})

const selected = ref(props.chatGroups[0]);
const form = useForm({
  content: '',
  chat_group_id: '',
});

const onSubmit = () => {
  form.chat_group_id = selected.value.id;
  form.post(route('messenger.store'));
}

const truncateText = (text, maxLength)  =>{
  if (text.length > maxLength) {
    return text.substring(0, maxLength) + "...";
  } else {
    return text;
  }
}

const messageSort = (messages) =>{
  const sortedMessages = messages.sort((a, b) => b.updated_at - a.updated_at);
  return sortedMessages.length > 0 ? sortedMessages[0].content : "New Group";
}

Echo.private('chat-group.' + selected.value.id)
  .listen('MessageSent', (e) => {
    console.log(e);
  });

</script>

<template>
  <crm-view-content-header
    pageTitle="Messenger"
  />
  <div class="bg-accent rounded-3xl h-full w-full overflow-hidden flex-1 mb-4">
    <!-- component -->
    <div class="flex h-full">
      <!-- Sidebar -->
      <div class="w-80 xl:w-1/4 bg-accent border-r border-info-content">
        <!-- Sidebar Header -->
        <header class="h-20 p-4 border-b border-info-content flex justify-between items-center bg-primary text-accent">
          <h2 class="text-xl font-semibold">Conversations</h2>
          <div class="relative">
            <button id="menuButton" class="focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-100" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                <path d="M2 10a2 2 0 012-2h12a2 2 0 012 2 2 2 0 01-2 2H4a2 2 0 01-2-2z" />
              </svg>
            </button>
          </div>
        </header>

        <!-- Contact List -->
        <div class="overflow-y-auto h-full p-3 mb-9 pb-20">

          <div tabindex="0" class="collapse collapse-arrow rounded-none md:rounded-b-2xl duration-300 ease-in-out">
            <input type="checkbox" class="peer" />
            <div class="collapse-title text-xl font-medium text-primary p-4">
              <div class="flex w-full justify-start items-center">
                <div class="avatar placeholder mr-2">
                  Group messages
                </div>
              </div>
            </div>

            <div class="collapse-content p-0 bg-accent">
              <ul class="w-full px-0 overflow-y-auto relative">
                <li v-for="(chatGroup, chatGroupIndex) in chatGroups" :key="chatGroupIndex" class="w-full">
                  <div class="flex items-center mb-4 cursor-pointer hover:bg-base-100 p-2 rounded-md">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                      <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="flex-1">
                      <h2 class="text-lg text-info font-semibold">{{ truncateText(chatGroup.name, 20) }}</h2>
                      <p class="text-gray-600">{{ messageSort(chatGroup.messages) }}</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>


          <div tabindex="0" class="collapse collapse-arrow rounded-none md:rounded-b-2xl duration-300 ease-in-out">
            <input type="checkbox" class="peer" />
            <div class="collapse-title text-xl font-medium text-primary p-4">
              <div class="flex w-full justify-start items-center">
                <div class="avatar placeholder mr-2">
                  Direct messages
                </div>
              </div>
            </div>

            <div class="collapse-content p-0 bg-accent">
              <ul class="w-full px-0 overflow-y-auto relative">
                <li class="w-full">
                  <div class="flex items-center mb-4 cursor-pointer hover:bg-gray-100 p-2 rounded-md">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                      <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="flex-1">
                      <h2 class="text-lg font-semibold">Alice</h2>
                      <p class="text-gray-600">Hoorayy!!</p>
                    </div>
                  </div>

                  <div class="flex items-center mb-4 cursor-pointer hover:bg-gray-100 p-2 rounded-md">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                      <img src="https://placehold.co/200x/c2ebff/0f0b14.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="flex-1">
                      <h2 class="text-lg font-semibold">David</h2>
                      <p class="text-gray-600">I just finished reading a great book! It was so captivating.</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>



          <div class="flex items-center mb-4 cursor-pointer hover:bg-gray-100 p-2 rounded-md">
            <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
              <img src="https://placehold.co/200x/70ff33/501616.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
            </div>
            <div class="flex-1">
              <h2 class="text-lg font-semibold">Ian</h2>
              <p class="text-gray-600">Let's catch up soon. It's been too long!</p>
            </div>
          </div>

          <div class="flex items-center mb-4 cursor-pointer hover:bg-gray-100 p-2 rounded-md">
            <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
              <img src="https://placehold.co/200x/30916c/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
            </div>
            <div class="flex-1">
              <h2 class="text-lg font-semibold">Jack</h2>
              <p class="text-gray-600">Remember that hilarious joke you told me? I can't stop laughing!</p>
            </div>
          </div>


        </div>
      </div>

      <!-- Main Chat Area -->
      <div class="flex-1 h-full">
        <!-- Chat Header -->
        <header class="h-20 bg-accent p-4  border-b border-info-content">
          <h2 class="text-xl text-info font-semibold">{{ truncateText(selected.name, 20) }}</h2>
          <span class="text-sm text-base-300 font-semibold">{{truncateText(selected.description, 50)}}</span>
        </header>

        <!-- Chat Messages -->
        <div class="overflow-y-auto h-full p-4 pb-36 flex flex-col flex-col-reverse">
          <template v-for="(message, messageIndex) in selected.messages" :key="messageIndex">

            <!-- Outgoing Message -->
            <div v-if="user.id === message.sender_id" class="flex justify-end mb-4 cursor-pointer ">
              <div class="flex max-w-96 bg-indigo-500 text-accent rounded-lg p-3 gap-3">
                <p>{{message.content}}</p>
              </div>
              <div class="w-9 h-9 rounded-full flex items-center justify-center ml-2">
                <img src="https://placehold.co/200x/b7a8ff/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="My Avatar" class="w-8 h-8 rounded-full">
              </div>
            </div>
            <!-- Incoming Message -->
            <div v-else class="flex mb-4 cursor-pointer">
              <div class="w-9 h-9 rounded-full flex items-center justify-center mr-2">
                <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-8 h-8 rounded-full">
              </div>
              <div class="flex max-w-96 bg-accent rounded-lg p-3 gap-3">
                <p class="text-gray-700">{{message.content}}</p>
              </div>
            </div>

          </template>
        </div>

        <!-- Chat Input -->
        <footer class="bg-accent border-t border-info-content p-4 sticky bottom-0 w-full">
          <div class="flex items-center">
            <input v-model="form.content" type="text" placeholder="Type a message..." class="border-info-content bg-accent w-full p-2 rounded-md border focus:outline-none focus:border-blue-500">
            <button @click="onSubmit" class="bg-primary text-accent px-4 py-2 rounded-lg ml-2">
              <icon-send/>
            </button>
          </div>
        </footer>
      </div>
    </div>
  </div>
</template>
