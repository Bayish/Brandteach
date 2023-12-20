<script setup>
import Logo from '../../icons/brandTeachLogo.vue';
import Support from '../../layout/navigation/Support.vue';


</script>

<template>
  <div class="bg-base-100 drawer lg:drawer-open">
    <input id="drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col items-center p-4">
      <!-- Page content here -->
      <label for="drawer" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>

      <!-- Navbar here -->

      <div class="navbar bg-base-100">
        <div class="flex-1">
          <div class="form-control bg-white">
            <div class="input-group flex justify-center align-center border-2 bg-white">
              <button class="btn bg-white border-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
              </button>
              <input type="text" placeholder="Search…" class="input bg-white" />
            </div>
          </div>
        </div>
        <div class="flex-none gap-2">

          <div class="dropdown dropdown-end bg-white rounded-2xl">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
              <div class="indicator">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                <span class="badge badge-sm indicator-item">8</span>
              </div>
            </div>
            <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
              <div class="card-body">
                <span class="font-bold text-lg">8 Items</span>
                <span class="text-info">Subtotal: $999</span>
                <div class="card-actions">
                  <button class="btn btn-primary btn-block">View cart</button>
                </div>
              </div>
            </div>
          </div>

          <div class="dropdown dropdown-end bg-white rounded-2xl">
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

      <!-- Navbar end -->


    </div>
    <div class="drawer-side z-40 p-4">
      <label for="drawer" aria-label="close sidebar" class="drawer-overlay"></label>
      <div class="w-48 min-h-full bg-white rounded-2xl flex flex-col justify-between align-center">

        <div class="top">
          <div class="mw-100 p-4"><Logo/></div>

          <ul class="menu w-100 rounded-box">
            <li>
              <a class="text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                <span class="pl-2">Dashboard</span>
              </a>
            </li>
            <li>
              <a class="text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span class="pl-2">Groups</span>
              </a>
            </li>
            <li>
              <a class="text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                <span class="pl-2">Students</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="p-4">
          <div class="flex flex-col justify-end w-100 bg-base-100 rounded-2xl p-4 mb-4 relative h-48">
            <img src="/img/layout/illustration.png" alt="Illus" class="absolute left-1/2 -translate-x-1/2 bottom-1/2 w-3/4">
            <div class="p-4 bg-primary rounded-2xl text-white mt-4">
              <Support/>
            </div>
          </div>
          <ul class="menu w-100 rounded-box pt-4">
            <li>
              <a class="text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span class="pl-2">Logout</span>
              </a>
            </li>
          </ul>
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
</style>


