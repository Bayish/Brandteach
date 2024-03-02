<script setup>
import Navigation from '@/layout/navigation/Index.vue';
import navigations from '@/helper/routes';

const currentRoute = route().current();
const props = defineProps({
  user: {
    type: Object,
    default: null
  }
});

console.log(props)

</script>

<template>
  <footer>
    <div tabindex="0" class="collapse collapse-arrow rounded-none md:rounded-b-2xl duration-300 ease-in-out">
      <input type="checkbox" class="peer" />
      <div class="collapse-title text-xl font-medium text-accent p-4 bg-primary">
        <div class="flex w-full justify-start items-center">
          <div class="avatar placeholder mr-2">
            <div class="bg-neutral text-neutral-content rounded-full w-8 h-8">
              <span class="text-md">BT</span>
            </div>
          </div>
          <div>
            <h3 class="text-sm font-semibold">{{user?.name}} {{user?.surname}}</h3>
            <p class="text-base font-bold">{{user?.role?.name}}</p>
          </div>
        </div>
      </div>
      <div class="collapse-content p-0 bg-accent">
        <ul class="w-full px-0 overflow-y-auto relative">
          <li v-for="(item, index) in navigations.footer" :key="index" class="w-full">
            <div
              class="flex justify-between group overflow-hidden"
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
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </footer>
</template>



