<script setup>
import SectionContainer from "@/Pages/Storefront/Home/sections/section-container.vue";
import TitleSecondary from "@/element/titles/title-secondary.vue";

const steps = [
    {
        title: "Выберите курс",
        description: "Выберите курс на Brandteach с помощью удобного фильтра по теме, длительности и сложности."
    },
    {
        title: "Свяжитесь с нами для регистрации",
        description: "Свяжитесь с нашей командой для регистрации и задайте любые вопросы."
    },
    {
        title: "Получите доступ",
        description: "После регистрации получите доступ к обучающей платформе Brandteach."
    },
    {
        title: "Начните обучение",
        description: "Начните обучение на Brandteach в удобное для вас время, изучая материалы и выполняя задания."
    }
];


</script>
<template>
    <section>
        <section-container>
            <div class="grid w-full  gap-32 lg:grid-cols-2 bg-accent rounded-xl shadow">
                <div class="bg-cover bg-center hidden lg:block rounded-l-xl" style="background-image: url('https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/motion-tailwind/img/auth-3-bg.jpeg')">
                </div>
                <div class="flex flex-col gap-18 py-8 pr-8">
                    <div class="flex flex-col gap-2 text-center md:text-start">
                        <title-secondary>Как работает Brandteach?</title-secondary>
                        <p class="text-base font-medium leading-7 text-secondary">Motion's operation involves seamlessly integrating various functions to deliver optimal performance. Our platform is designed to provide efficient solutions and streamline your experience.</p>
                    </div>
                    <div class="grid w-full grid-cols-1 md:grid-cols-2 gap-y-16 gap-x-10">

                        <div v-for="(item, index) in steps" class="flex flex-col items-start gap-1">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full bg-primary text-primary mb-2 mb-2">
                                <span class="text-base font-bold leading-7 text-white">{{ index + 1 }}</span>
                            </div>
                            <h3 class="text-base font-bold leading-tight text-info font-display">{{ item.title }}</h3>
                            <p class="text-base font-medium leading-7 text-secondary">{{ item.description }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </section-container>
    </section>
</template>
