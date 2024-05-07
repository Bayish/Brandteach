<script setup>
import SectionContainer from "@/Pages/Storefront/Home/sections/section-container.vue";
const steps = [
    {
        "title": "Заполнение формы контакта",
        "description": "Партнеры, учителя или наставники заполняют форму контакта на нашем сайте."
    },
    {
        "title": "Выбор плана",
        "description": "Мы поможем им выбрать подходящий план сотрудничества."
    },
    {
        "title": "Создание аккаунта в CRM",
        "description": "Мы создадим для партнеров, учителей или наставников аккаунт в нашей CRM системе."
    }
]

</script>

<template>
    <section>
        <section-container>
            <div class="shadow bg-accent rounded-xl py-8 flex flex-col items-center gap-16 mx-auto p-4">
                <div class="flex flex-col gap-16">
                    <div class="flex flex-col gap-2 text-center">
                        <h2 class="text-3xl py-4 font-extrabold leading-tight lg:text-4xl text-info">Как работает BrandTeach?</h2>
                        <p class="max-w-4xl text-base font-medium leading-7 text-secondary">Наша система предоставляет инструменты для создания курсов, управления материалами и обмена информацией, делая образование более эффективным и доступным.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col items-baseline justify-between w-full lg:flex-row gap-y-10 lg:gap-y-0 lg:gap-x-8 xl:gap-x-10">
                    <div v-for="(step, index) in steps" class="flex w-full gap-4">
                        <div class="flex items-start">
                            <div
                                class="flex items-center justify-center w-12 h-12 rounded-full shrink-0 bg-primary">
                                <span class="text-base font-bold leading-7 text-white">{{index + 1}}</span>
                            </div>
                            <div class="flex flex-col ml-4">
                                <h3 class="text-base font-bold leading-tight text-info">{{ step.title }}</h3>
                                <p class="text-base font-medium leading-7 text-secondary">{{step.description}}</p>
                            </div>
                        </div>
                        <div v-if="index + 1 !== steps.length" class="rotate-90 lg:rotate-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42" viewBox="0 0 43 42" fill="none">
                                <g clip-path="url(#clip0_3346_6663)">
                                    <path
                                        d="M16.9242 11.7425C16.2417 12.425 16.2417 13.5275 16.9242 14.21L23.7142 21L16.9242 27.79C16.2417 28.4725 16.2417 29.575 16.9242 30.2575C17.6067 30.94 18.7092 30.94 19.3917 30.2575L27.4242 22.225C28.1067 21.5425 28.1067 20.44 27.4242 19.7575L19.3917 11.725C18.7267 11.06 17.6067 11.06 16.9242 11.7425Z"
                                        fill="#A3AED0"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3346_6663">
                                        <rect width="42" height="42" fill="white" transform="translate(0.666748)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section-container>
    </section>
</template>


