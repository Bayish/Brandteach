<template>
  <div class="w-80 xl:w-1/4 bg-accent border-r border-info-content">
    <!-- Sidebar Header -->
    <header class="h-20 p-4 border-b border-info-content flex justify-between items-center bg-primary text-accent">
      <h2 class="text-xl font-semibold">Conversations</h2>
      <div class="relative">
        <button id="menuButton" class="focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-100" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
            <path d="M2 10a2 2 0 012-2h12a2 2 0 012 2 2 2 0 01-2 2H4a2 2 0 01-2-2z" />
          </svg>
        </button>
      </div>
    </header>

    <!-- Contact List -->
    <div class="overflow-y-auto h-full p-3 mb-9 pb-20">

      <div tabindex="0" class="collapse collapse-arrow rounded-none md:rounded-b-2xl duration-300 ease-in-out">
        <input type="checkbox" class="peer" />
        <div class="collapse-title text-xl font-medium text-primary p-4">
          <div class="flex w-full justify-start items-center">
            <div class="avatar placeholder mr-2">
              Group messages
            </div>
          </div>
        </div>

        <div class="collapse-content p-0 bg-accent">
          <ul class="w-full px-0 overflow-y-auto relative">
            <li v-for="(chatGroup, chatGroupIndex) in chatGroups" :key="chatGroupIndex" class="w-full">
              <div class="flex items-center mb-4 cursor-pointer hover:bg-base-100 p-2 rounded-md">
                <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                  <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                </div>
                <div class="flex-1">
                  <h2 class="text-lg text-info font-semibold">{{ truncateText(chatGroup.name, 20) }}</h2>
                  <p class="text-gray-600">{{ messageSort(chatGroup.messages) }}</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>


      <div tabindex="0" class="collapse collapse-arrow rounded-none md:rounded-b-2xl duration-300 ease-in-out">
        <input type="checkbox" class="peer" />
        <div class="collapse-title text-xl font-medium text-primary p-4">
          <div class="flex w-full justify-start items-center">
            <div class="avatar placeholder mr-2">
              Direct messages
            </div>
          </div>
        </div>

        <div class="collapse-content p-0 bg-accent">
          <ul class="w-full px-0 overflow-y-auto relative">
            <li class="w-full">
              <div class="flex items-center mb-4 cursor-pointer hover:bg-gray-100 p-2 rounded-md">
                <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                  <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                </div>
                <div class="flex-1">
                  <h2 class="text-lg font-semibold">Alice</h2>
                  <p class="text-gray-600">Hoorayy!!</p>
                </div>
              </div>

              <div class="flex items-center mb-4 cursor-pointer hover:bg-gray-100 p-2 rounded-md">
                <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                  <img src="https://placehold.co/200x/c2ebff/0f0b14.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                </div>
                <div class="flex-1">
                  <h2 class="text-lg font-semibold">David</h2>
                  <p class="text-gray-600">I just finished reading a great book! It was so captivating.</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>



      <div class="flex items-center mb-4 cursor-pointer hover:bg-gray-100 p-2 rounded-md">
        <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
          <img src="https://placehold.co/200x/70ff33/501616.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
        </div>
        <div class="flex-1">
          <h2 class="text-lg font-semibold">Ian</h2>
          <p class="text-gray-600">Let's catch up soon. It's been too long!</p>
        </div>
      </div>

      <div class="flex items-center mb-4 cursor-pointer hover:bg-gray-100 p-2 rounded-md">
        <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
          <img src="https://placehold.co/200x/30916c/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
        </div>
        <div class="flex-1">
          <h2 class="text-lg font-semibold">Jack</h2>
          <p class="text-gray-600">Remember that hilarious joke you told me? I can't stop laughing!</p>
        </div>
      </div>


    </div>
  </div>
</template>
