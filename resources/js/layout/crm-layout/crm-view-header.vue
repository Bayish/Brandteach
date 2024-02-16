<script setup>
import ThemeChanger from "@/component/theme/theme-changer.vue";

</script>

<template>
  <div class="navbar py-4 px-0 md:sticky md:top-0 md:bg-base-100 md:z-40">
    <div class="flex-1">
      <label for="drawer" class="drawer-button md:hidden pr-4">
        <font-awesome-icon class="font-medium fa-xl" :icon="['fas', 'bars']" />
      </label>
      <div class="form-control bg-accent rounded-2xl">
        <div class="input-group flex justify-center align-center bg-accent rounded-2xl">
          <button class="btn hover:bg-accent bg-accent border-0 shadow-none rounded-r-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
          </button>
          <input type="text" placeholder="Search…" class="input bg-accent focus:outline-none border-0"/>
        </div>
      </div>
    </div>
    <div class="flex-none gap-2">
      <theme-changer/>
      <div class="dropdown dropdown-end bg-accent rounded-full">
        <div tabindex="0" role="button" class="bg-accent w-8 h-8 rounded-full flex justify-center items-center">
          <div class="indicator">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
            <span class="badge badge-sm indicator-item">8</span>
          </div>
        </div>
        <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
          <div class="card-body bg-accent rounded-xl">
            <span class="font-bold text-lg">8 Items</span>
            <span class="text-info">Subtotal: $999</span>
            <div class="card-actions">
              <button class="btn btn-primary btn-block">View cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>



