<script setup>
import Header from "@/layout/header/Index.vue";
import Footer from "@/layout/footer/Index.vue";
import Logo from "@/layout/header/Logo.vue";
import DashboardHeader from "@/block/dashboard/dashboard-header.vue";
import DashboardAside from "@/block/dashboard/dashboard-aside.vue";

const props = defineProps({
  user: {
    type: Object,
    default: null
  }
});


</script>

<template>
  <div class="bg-base-100 antialiased h-screen drawer md:drawer-open">
    <input id="drawer" type="checkbox" class="drawer-toggle"/>
    <main class="drawer-content h-screen w-full overflow-y-auto overflow-x-hidden">
      <section class="p-4 md:p-0 md:pr-4">
        <dashboard-header/>
          <slot/>
      </section>
    </main>
    <dashboard-aside>
      <div class="w-56 h-full flex flex-col md:rounded-2xl bg-accent">
        <header class="flex-grow">
          <div class="flex justify-start">
            <div class="mw-full p-4 w-24 mr-auto mb-3"><Logo/></div>
            <div>
              <label for="drawer" aria-label="close sidebar" class="drawer-overlay md:hidden">Close</label>
            </div>
          </div>
        </header>
        <nav class="overflow-y-auto h-full flex-grow">
          <Header/>
        </nav>
        <Footer :user="user"/>
      </div>
    </dashboard-aside>
  </div>
</template>


<style scoped>

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






