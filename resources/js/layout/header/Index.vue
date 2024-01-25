<script setup>
import Navigation from '@/layout/navigation/Index.vue';
import Logo from '@/icons/favicon-brandteach.vue';
import { ref } from 'vue'
import navigations from '@/helper/routes';

const currentRoute = route().current();
const isHovered = ref(false);
const dynamicHeight = ref('0');

const  setHovered = (length = 0, value) => {
  isHovered.value = value;
  if (value) {
    dynamicHeight.value = (55 * length) + "px";
  }
}

</script>

<template>
  <div class="mw-full p-4 w-24 mr-auto mb-3"><Logo/></div>
  <ul class="w-full rounded-box px-0">
    <li v-for="(item, index) in navigations" :key="index" class="w-full">
      <div
        class="flex justify-between group overflow-hidden"
        @mouseover="setHovered(item.children.length > 0  && item.children.length, true)"
        @mouseleave="setHovered(false)"
      >
        <div class="mx-3 w-full">
          <Navigation
            tabindex="0"
            class="group-hover:bg-base-100 group-hover:text-primary"
            :routeLink="item.link"
            :title="item.title"
            :icon="item.icon"
            :iconType="item.iconType"
            :class="{
            'text-secondary': currentRoute !== item.link,
            'bg-base-100 text-primary' : currentRoute === item.link
          }"
          />
          <ul v-if="item.children && item.children.length > 0"
            class="h-0 w-full group-hover:block min-h-96 pl-4 transition-all ease-in-out duration-500"
              :style="{ height: isHovered ? dynamicHeight : '0' }"
          >
            <li v-for="(child, childIndex) in item.children" :key="childIndex">
              <Navigation
                tabindex="0"
                class="group-hover:bg-base-100 group-hover:text-primary"
                :routeLink="child.link"
                :title="child.title"
                :icon="child.icon"
                :iconType="child.iconType"
                />
            </li>
          </ul>
        </div>
        <div
          class="rounded-lg w-1 my-1 group-hover:bg-primary"
          :class="{'bg-primary' : currentRoute === item.link}"
        />
      </div>
    </li>
  </ul>
</template>
