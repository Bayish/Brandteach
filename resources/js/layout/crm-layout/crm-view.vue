<script setup>
import CrmViewHeader from "@/layout/crm-layout/crm-view-header.vue";
</script>

<template>
  <main class="drawer-content h-screen w-full p-4 md:p-0 md:pr-4 flex flex-col">
    <crm-view-header/>
    <slot class="pb-4"/>
  </main>
</template>
