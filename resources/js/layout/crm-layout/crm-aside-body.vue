<script setup>
import Navigation from '@/layout/navigation/Index.vue';
import {ref} from 'vue'
import navigations from '@/helper/routes';

const isHovered = ref(false);
const dynamicHeight = ref('0');
const currentRoute = ref(route().current());


const  setHovered = (length = 0, value) => {
  isHovered.value = value;
  if (value) {
    dynamicHeight.value = (55 * length) + "px";
  }
}

const changeActive = (value) =>{
  currentRoute.value = value;
}

const {core} = navigations;
console.log(core.header)
</script>

<template>
  <nav class="overflow-y-auto h-full flex-grow">
    <ul class="w-full px-0 overflow-y-auto relative">
      <li v-for="(item, index) in core.header" :key="index" class="w-full">
        <div
          class="flex justify-between group overflow-hidden"
          @mouseover="setHovered(item.children?.length, true)"
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
              @click="changeActive(item.link)"
            />
            <ul v-if="item.children && item.children.length > 0"
                class="h-0 w-full group-hover:block pl-4 transition-all ease-in-out duration-500"
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
        </div>
      </li>
    </ul>
  </nav>
</template>



