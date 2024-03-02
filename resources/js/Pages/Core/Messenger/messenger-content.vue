<template>
  <div class="flex-1 h-full">
    <!-- Chat Header -->
    <header class="h-20 bg-accent p-4  border-b border-info-content">
      <h2 class="text-xl text-info font-semibold">Alice</h2>
      <span class="text-sm text-base-300 font-semibold">UI/UX Designer</span>
    </header>

    <!-- Chat Messages -->
    <div class="overflow-y-auto h-full p-4 pb-36 flex flex-col flex-col-reverse">
      <!-- Incoming Message -->
      <div class="flex mb-4 cursor-pointer">
        <div class="w-9 h-9 rounded-full flex items-center justify-center mr-2">
          <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-8 h-8 rounded-full">
        </div>
        <div class="flex max-w-96 bg-accent rounded-lg p-3 gap-3">
          <p class="text-gray-700">Hey Bob, how's it going?</p>
        </div>
      </div>


      <!-- Outgoing Message -->
      <div class="flex justify-end mb-4 cursor-pointer ">
        <div class="flex max-w-96 bg-indigo-500 text-accent rounded-lg p-3 gap-3">
          <p>It's about an astronaut stranded on Mars, trying to survive. Gripping stuff!</p>
        </div>
        <div class="w-9 h-9 rounded-full flex items-center justify-center ml-2">
          <img src="https://placehold.co/200x/b7a8ff/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="My Avatar" class="w-8 h-8 rounded-full">
        </div>
      </div>


      <!-- Outgoing Message -->
      <div class="flex justify-end mb-4 cursor-pointer">
        <div class="flex max-w-96 bg-indigo-500 text-accent rounded-lg p-3 gap-3">
          <p>Anytime! Let me know how you like it. 😊</p>
        </div>
        <div class="w-9 h-9 rounded-full flex items-center justify-center ml-2">
          <img src="https://placehold.co/200x/b7a8ff/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="My Avatar" class="w-8 h-8 rounded-full">
        </div>
      </div>

      <!-- Incoming Message -->
      <div class="flex mb-4 cursor-pointer">
        <div class="w-9 h-9 rounded-full flex items-center justify-center mr-2">
          <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-8 h-8 rounded-full">
        </div>
        <div class="flex max-w-96 bg-accent rounded-lg p-3 gap-3">
          <p class="text-gray-700">So, pizza next week, right?</p>
        </div>
      </div>

      <!-- Outgoing Message -->
      <div class="flex justify-end mb-4 cursor-pointer">
        <div class="flex max-w-96 bg-indigo-500 text-accent rounded-lg p-3 gap-3">
          <p>Absolutely! Can't wait for our pizza date. 🍕</p>
        </div>
        <div class="w-9 h-9 rounded-full flex items-center justify-center ml-2">
          <img src="https://placehold.co/200x/b7a8ff/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="My Avatar" class="w-8 h-8 rounded-full">
        </div>
      </div>
      <!-- Incoming Message -->
      <div class="flex mb-4 cursor-pointer">
        <div class="w-9 h-9 rounded-full flex items-center justify-center mr-2">
          <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-8 h-8 rounded-full">
        </div>
        <div class="flex max-w-96 bg-accent rounded-lg p-3 gap-3">
          <p class="text-gray-700">Hoorayy!!</p>
        </div>
      </div>

    </div>

    <!-- Chat Input -->
    <footer class="bg-accent border-t border-info-content p-4 sticky bottom-0 w-full">
      <div class="flex items-center">
        <input type="text" placeholder="Type a message..." class="border-info-content bg-accent w-full p-2 rounded-md border focus:outline-none focus:border-blue-500">
        <button class="bg-primary text-accent px-4 py-2 rounded-lg ml-2">
          <icon-send/>
        </button>
      </div>
    </footer>
  </div>
</template>
