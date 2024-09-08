<script setup>
import CrmAside from "@/layout/crm-layout/crm-aside.vue";
import CrmView from "@/layout/crm-layout/crm-view.vue";
import {onBeforeMount} from "vue";
import {loadLanguageAsync} from "laravel-vue-i18n";

defineProps({
  user: {
    type: Object,
    default: null
  }
});

onBeforeMount(() => {
    loadLanguageAsync(localStorage.getItem('lang') ?? 'de')
})


</script>

<template>
  <div class="bg-base-100 antialiased h-screen drawer md:drawer-open">
    <input id="drawer" type="checkbox" class="drawer-toggle"/>
    <crm-view>
      <slot/>
    </crm-view>
    <crm-aside :user="user"/>
  </div>
</template>


<style >

nav::-webkit-scrollbar {
  width: 0;
}

nav::-webkit-scrollbar-track {
  background-color: #ffffff; /* White background */
}

nav::-webkit-scrollbar-thumb {
  background-color: #3f8cff; /* Scrollbar color: #3F8CFF */
  width: 0;
  border-radius: 0;
}

aside:hover  nav::-webkit-scrollbar {
  width: 3px;
}

aside:hover nav::-webkit-scrollbar-thumb {
  width: 3px;
  border-radius: 5px;
}

/* For WebKit Browsers (Chrome, Safari) */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background-color: #ffffff; /* White background */
}

::-webkit-scrollbar-thumb {
  background-color: #3f8cff; /* Scrollbar color: #3F8CFF */
  width: 8px;
  border-radius: 5px;
}
</style>






