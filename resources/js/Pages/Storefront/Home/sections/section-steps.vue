<script setup>
import TitleSecondary from "@/element/titles/title-secondary.vue";
import SectionsContainer from "@/element/sections/sections-container.vue";

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
    <sections-container class="my-8">
        <div class="bg-accent rounded-xl shadow grid w-full  gap-8 lg:grid-cols-2">
            <div class="bg-cover bg-center hidden lg:block rounded-l-xl"
                 style="background-image: url('https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/motion-tailwind/img/auth-3-bg.jpeg')">
            </div>
            <div class="flex flex-col gap-18 py-8 px-4 lg:px-0 lg:py-8 lg:pr-8">
                <div class="flex flex-col gap-2 text-center md:text-start my-6">
                    <title-secondary>Как работает Brandteach?</title-secondary>
                    <p class="font-medium leading-7 text-secondary">Brandteach упрощает процесс обучения, обеспечивая удобный доступ к курсам.</p>
                </div>
                <div class="grid w-full grid-cols-1 md:grid-cols-2 gap-y-16 gap-x-10">
                    <div v-for="(item, index) in steps"
                         class="flex flex-col lg:flex-row items-center md:items-start gap-1 max-w-96 mx-auto md:max-w-full">
                        <div
                            class="lg:mr-2 flex items-center justify-center w-8 h-8 rounded-full bg-primary text-primary mb-2">
                            <span class="text-base font-bold leading-7 text-white">{{ index + 1 }}</span>
                        </div>
                        <div class="flex-1 text-center md:text-start">
                            <h3 class="text-base font-bold leading-tight text-info font-display">{{ item.title }}</h3>
                            <p class="text-base font-medium leading-7 text-secondary">
                                {{ item.description }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </sections-container>
</template>
