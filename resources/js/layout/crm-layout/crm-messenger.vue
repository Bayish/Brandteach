<script setup>
import Messenger from "@/Pages/Message/Index.vue"
import {ref} from "vue";

const props = defineProps({
  chats: {
    type: Array,
    default: () => [],
  },
  show: {
    type: Boolean,
    default: false
  }
})
const statusOfModal = ref(props.show)

const showModal = () => {
  statusOfModal.value = true;
}

const closeModal = () => {
  statusOfModal.value = false;
}
</script>

<template>
  <button class="btn" onclick="my_modal_1.showModal()">open modal</button>
  <button class="btn" @click="showModal()" onClick="my_modal_1.showModal()">
    <font-awesome-icon :icon="['fas', 'comment-dots']" />
  </button>
  <dialog id="my_modal_1" class="modal modal-bottom ">
    <div class="modal-box">
      <h3 class="font-bold text-lg">Hello!</h3>
      <p class="py-4">Press ESC key or click the button below to close</p>
      <div class="modal-action">
        <form method="dialog">
          <!-- if there is a button in form, it will close the modal -->
          <button class="btn" @click="closeModal">Close</button>
        </form>
      </div>
    </div>
  </dialog>
</template>
