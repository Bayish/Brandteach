<script setup>
import SectionContainer from "@/Pages/Storefront/Home/sections/section-container.vue";

</script>
<template>
    <section class="section-hero h-full">
        <section-container class="py-28 flex flex-col flex-1">
            <div class="w-full flex">
                <div class="w-7/12 flex flex-col justify-center col-span-1 text-center lg:text-start">
                    <div class="flex items-center justify-center mb-4 lg:justify-normal">
                        <img class="h-5"
                             src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/motion-tailwind/img/logos/logo-1.png"
                             alt="logo">
                        <h4 class="ml-2 text-sm font-bold tracking-widest text-primary uppercase">Ваше образование начинается здесь</h4>
                    </div>
                    <h1 class="mb-8 text-4xl font-extrabold leading-tight lg:text-6xl text-info">Мир онлайн-образования теперь доступен</h1>
                    <p class="mb-6 text-base font-normal leading-7 lg:w-3/4 text-grey-900">
                        Для того чтобы учиться, вам не обязательно куда-то ехать. Вы можете найти все здесь и обучаться онлайн с лучшими наставниками.
                    </p>
                    <div class="flex flex-col items-center gap-4 lg:flex-row">
                        <button
                            class="flex items-center border-2 border-primary py-4 text-sm font-bold text-white px-7 bg-primary hover:bg-accent focus:ring-4 hover:text-primary focus:ring-purple-blue-100 transition duration-300 rounded-xl hover">
                            Начнем
                        </button>
                        <button
                            class="flex items-center py-4 text-sm font-medium px-7 text-primary hover:text-dark-grey-900 transition duration-300 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-5 h-5 mr-2">
                                <path fill-rule="evenodd"
                                      d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            Получите консультацию
                        </button>
                    </div>
                </div>
                <div class="w-5/12 items-center justify-start hidden col-span-1 md:flex">
                    <img class="min-h-96 w-4/5 rounded-xl object-contain"
                         src="/img/landing/online-learning.jpg"
                         alt="header image">
                </div>
            </div>
        </section-container>
    </section>
</template>


<style scoped>
.section-hero {
    background-image: url('./img/landing/rect-light.svg');
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 100%;
}
</style>
