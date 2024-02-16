<script setup>
import CrmViewHeader from "@/layout/crm-layout/crm-view-header.vue";
</script>

<template>
  <main class="drawer-content h-screen w-full overflow-y-auto overflow-x-hidden">
    <section class="p-4 md:p-0 md:pr-4">
      <crm-view-header/>
      <slot/>
    </section>
  </main>
</template>
