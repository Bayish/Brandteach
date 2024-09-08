<script setup>
import TitleMain from "@/element/titles/title-main.vue";
import TextGray from "@/element/text/text-gray.vue";
import ButtonPrimary from "@/element/buttons/button-primary.vue";
import ButtonSecondary from "@/element/buttons/button-secondary.vue";
import SectionsContainer from "@/element/sections/sections-container.vue";

const props = defineProps({
    snippets: {
        type: Object,
        default: null,
    },
})

</script>
<template>
    <section class="section-hero py-5 md:h-[calc(100vh-7rem)] min-h-96 bg-[url('/img/landing/rect-light.svg')]" >
        <sections-container>
            <div class="w-full h-full md:flex justify-center items-center">
                <div class="md:pr-4 xl:pr-0 w-full md:w-7/12 flex flex-col justify-center col-span-1 text-center md:text-start">
                    <div class="flex items-center justify-center mb-4 md:justify-normal">
                        <img class="h-5"
                             src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/motion-tailwind/img/logos/logo-1.png"
                             alt="logo">
                        <h4 class="ml-2 text-sm font-bold tracking-widest text-primary uppercase">{{$t('storefront.home.hero.subtitle')}}</h4>
                    </div>
                    <title-main>{{$t('storefront.home.hero.title')}}</title-main>
                    <text-gray class="mb-6 lg:w-3/4">{{ $t('storefront.home.hero.desc') }}</text-gray>
                    <div class="flex flex-col items-center gap-4 md:flex-row">
                        <button-primary>{{$t('storefront.home.hero.btn.begin' )}}</button-primary>
                        <button-secondary>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-5 h-5 mr-2">
                                <path fill-rule="evenodd"
                                      d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            {{$t('storefront.home.hero.btn.consult' )}}
                        </button-secondary>
                    </div>
                </div>
                <div class="w-full my-4 md:my-0 md:w-5/12 items-center justify-center col-span-1 md:flex md:justify-end">
                    <img class="md:min-h-96 h-full w-full rounded-xl object-contain"
                         src="/img/landing/online-learning.jpg"
                         alt="header image">
                </div>
            </div>
        </sections-container>
    </section>
</template>


<style scoped>
.section-hero {
    background-image: url('/img/landing/rect-light.svg');
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
}
</style>
