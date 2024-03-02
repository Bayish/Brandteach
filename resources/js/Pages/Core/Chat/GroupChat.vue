<script setup>
import {ref, watch} from "vue";
import {useForm} from "@inertiajs/vue3";

const props = defineProps({
  group: {
    type: Object,
    default: null,
  },
  messages: {
    type: Array,
    default: () => [],
  }
})

const currentGroup = ref(props.group);

watch(currentGroup, (val,oldVal) => {
  if(oldVal.id){
    this.disconnect(oldVal);
  }
  this.connect();
})


Echo.private('chat-channel')
  .listen('MessageSent', (e) => {
    console.log(e.message);
    props.messages.push({
      message: e.message.message,
      user: e.user
    });
  });


const form = useForm({
  message: ""
})

const sendMessage = () => {
  form.post(route("message.store", {groupId: props.group.id}), );
}

</script>

<template>
  <div class="">
    <h3>{{ group.name }}</h3>
    <ul v-for="(message, index) in messages" :key="index">
      <li>{{message.message}}</li>
    </ul>
    <div class="relative h-10 m-1">
      <div class="grid grid-cols-6"
           style="border-top: 1px solid #e6e6e6;">
        <input type="text"
               v-model="form.message"
               @keyup.enter="sendMessage()"
               placeholder="New Message"
               class="col-span-5 outline-none p-1" />
        <button @click="sendMessage()"
                class="place-self-end bg-gray-500 hover:bg-blue-700 p-1 mt-1 rounded text-white">
          Send
        </button>
      </div>
    </div>
  </div>
</template>
