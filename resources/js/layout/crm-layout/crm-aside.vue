<script setup>
import CrmAsideHeader from "@/layout/crm-layout/crm-aside-header.vue";
import CrmAsideBody from "@/layout/crm-layout/crm-aside-body.vue";
import CrmAsideFooter from "@/layout/crm-layout/crm-aside-footer.vue";

defineProps({
  user: {
    type: Object,
    default: null
  }
});
</script>

<template>
  <aside class="drawer-side h-full md:p-4 z-40">
    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
    <slot/>
    <div class="w-56 h-full flex flex-col md:rounded-2xl bg-accent">
      <crm-aside-header/>
      <crm-aside-body/>
      <crm-aside-footer :user="user"/>
    </div>
  </aside>
</template>

