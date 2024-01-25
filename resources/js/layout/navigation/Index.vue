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
  <Link :href="routeLink" class="w-full block my-1 py-2 rounded-lg">
    <div class="flex justify-between items-center py-1 px-2">
      <div class="px-0 w-2/12 text-left">
        <font-awesome-icon class="font-medium fa-xl" :icon="[iconType, icon]" />
      </div>
      <div class="w-9/12">
        <span class="text-base font-bold font-semibold">{{ title }}</span>
      </div>
    </div>
  </Link>
</template>


