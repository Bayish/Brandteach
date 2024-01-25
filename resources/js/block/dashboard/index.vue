<script setup>
import Header from "@/layout/header/Index.vue";
import Footer from "@/layout/footer/Index.vue";
import ThemeChanger from "@/component/theme/theme-changer.vue";

defineProps({
  teachers: {
    type: Array,
    default: [],
  }
});

</script>

<template>
  <div class="bg-base-100 drawer lg:drawer-open">
    <input id="drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col items-center p-3">
      <!-- Page content here -->

      <div class="navbar bg-base-100 p-0">
        <div class="flex-1">
          <label for="drawer" class="drawer-button lg:hidden pr-4">
            <font-awesome-icon class="font-medium fa-xl" :icon="['fas', 'bars']" />
          </label>

          <div class="form-control bg-accent">
            <div class="input-group flex justify-center align-center border-2 bg-accent">
              <button class="btn bg-accent border-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
              </button>
              <input type="text" placeholder="Search…" class="input bg-accent" />
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
          <div class="dropdown dropdown-end bg-accent hover:bg-accent rounded-3xl">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar flex justify-center align-center w-40">
              <div class="w-10 rounded-full">
                <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
              </div>
              <h3>Baiysh Parpiev</h3>
            </div>
            <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
              <li>
                <a class="justify-between">
                  Profile
                  <span class="badge">New</span>
                </a>
              </li>
              <li><a>Settings</a></li>
              <li><a>Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
      <slot/>
    </div>
    <div class="drawer-side z-40 lg:p-4">
      <label for="drawer" aria-label="close sidebar" class="drawer-overlay"></label>
      <div class="w-56 min-h-full bg-accent flex flex-col justify-between align-center lg:rounded-2xl">
        <div>
          <Header />
        </div>
        <div class="mt-4">
          <Footer/>
        </div>
      </div>
    </div>
  </div>
</template>


<style lang="css">
.drawer-side{
  @media (min-width: 1024px){
    .lg\:drawer-open>.drawer-toggle~.drawer-side {
      pointer-events: auto;
      visibility: visible;
      position: sticky;
      display: block;
      width: auto;
      overscroll-behavior: auto;
    }
  }
}

.drawer-side::-webkit-scrollbar{
  width: 0;
}
</style>


