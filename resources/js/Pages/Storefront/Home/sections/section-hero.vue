<script setup>
import SectionContainer from "@/Pages/Storefront/Home/sections/section-container.vue";
import TitleMain from "@/element/titles/title-main.vue";
import TextGray from "@/element/text/text-gray.vue";
import ButtonPrimary from "@/element/buttons/button-primary.vue";
import ButtonSecondary from "@/element/buttons/button-secondary.vue";

</script>
<template>
    <section class="section-hero h-[calc(100vh-6rem)]">
        <section-container>
            <div class="w-full h-full flex justify-center items-center">
                <div class="w-7/12 flex flex-col justify-center col-span-1 text-center lg:text-start">
                    <div class="flex items-center justify-center mb-4 lg:justify-normal">
                        <img class="h-5"
                             src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/motion-tailwind/img/logos/logo-1.png"
                             alt="logo">
                        <h4 class="ml-2 text-sm font-bold tracking-widest text-primary uppercase">Ваше образование начинается здесь</h4>
                    </div>
                    <title-main>Мир онлайн-образования теперь доступен</title-main>
                    <text-gray class="mb-6 lg:w-3/4">
                        Для того чтобы учиться, вам не обязательно куда-то ехать. Вы можете найти все здесь и обучаться онлайн с лучшими наставниками.
                    </text-gray>
                    <div class="flex flex-col items-center gap-4 lg:flex-row">
                        <button-primary>Начнем</button-primary>
                        <button-secondary>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-5 h-5 mr-2">
                                <path fill-rule="evenodd"
                                      d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            Получите консультацию
                        </button-secondary>
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
}
</style>
