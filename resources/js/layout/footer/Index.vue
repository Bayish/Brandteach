<script setup>
import Navigation from "@/layout/navigation/Index.vue";
import Link from "@/layout/navigation/Link.vue";
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";

 const login =  {title: "Login", link: "login", icon: "comment", iconType: "far"};
 const logout =  {title: "Logout", link: "login", icon: "circle-info",  iconType: "fas"};

const currentRoute = route().current().split(".");
const checkRoute = currentRoute.length > 0 ? currentRoute[1] : currentRoute;

</script>

<template>
  <div class="flex flex-col justify-end item-center bg-base-100 rounded-2xl p-4 mb-4 relative h-48 mt-10 mx-3">
    <img src="/img/layout/illustration.png" alt="Illus" class="absolute left-1/2 -translate-x-1/2 bottom-1/2 w-3/4">
    <div class="bg-primary rounded-2xl mb-4">
      <Link href="login" class="block mx-2 my-1 py-2 rounded-lg text-accent">
        <div class="flex justify-between items-center py-1 px-2">
          <div class="px-0 w-2/12 text-left">
            <font-awesome-icon class="font-medium fa-xl" :icon="['far', 'comment']" />
          </div>
          <div class="w-9/12">
            <span class="text-base font-bold font-semibold">Support</span>
          </div>
        </div>
      </Link>
    </div>
  </div>
  <div class="flex justify-between group">
    <Navigation
      class="grop-hover:bg-base-100 group-hover:text-primary mx-3"
      :routeLink="logout.link"
      :title="logout.title"
      :icon="logout.icon"
      :iconType="logout.iconType"
      :class="{
            'text-secondary': checkRoute !== logout.link,
            'bg-base-100 text-primary' : checkRoute === logout.link
          }"
    />
    <div
      class="rounded-lg w-1 my-1 group-hover:bg-primary"
      :class="{'bg-primary' : checkRoute === logout.link}"
    />
  </div>
</template>
