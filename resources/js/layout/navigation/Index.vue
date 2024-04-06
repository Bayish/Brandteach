<script setup>
import Link from "@/layout/navigation/Link.vue";
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";

const props = defineProps({
  routeLink: {
    type: String,
    default: "dashboard",
  },
  title: {
    type: String,
    default: "Dashboard",
  },
  icon: {
    type: String,
    default: "compass",
  },
  iconType: {
    type: String,
    default: "far",
  }
});

</script>

<template>
  <Link :href="routeLink" class="w-full block my-1 py-1 rounded-lg">
    <div class="flex items-center py-1 px-2">
      <div class="px-0 w-6 text-left flex justify-center items-center">
        <font-awesome-icon class="font-medium fa-xl w-full" :icon="[iconType, icon]" />
      </div>
      <div class="pl-3">
        <span class="text-base font-bold">{{ title }}</span>
      </div>
    </div>
  </Link>
</template>


