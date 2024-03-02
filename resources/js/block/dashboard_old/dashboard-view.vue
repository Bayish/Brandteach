<script setup>

</script>

<template>
  <div class="drawer-content flex flex-col items-center pl-0 relative">
    <div class="pr-4 w-full rounded-2xl flex flex-col justify-between absolute h-full overflow-y-auto scroll-smooth">
      <slot/>
    </div>
  </div>
</template>

<style scoped>
.drawer-content{
  overflow: hidden;
  box-flex: 1;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
  flex-grow: 1;
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
