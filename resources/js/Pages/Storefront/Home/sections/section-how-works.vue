<script setup>
import SectionContainer from "@/Pages/Storefront/Home/sections/section-container.vue";
import TitleSecondary from "@/element/titles/title-secondary.vue";

const steps = [
    {title: "Выберите курс", description: "Первый шаг - выберите курс из широкого ассортимента предложений на Brandteach. Используйте удобный фильтр, чтобы найти курс по интересующей вас теме, продолжительности и уровню сложности."},
    {title: "Свяжитесь с нами для регистрации", description: "После выбора курса, свяжитесь с нашей командой, чтобы зарегистрироваться на Brandteach. Мы поможем вам с оформлением и ответим на любые вопросы, которые у вас могут возникнуть."},
    {title: "Получите доступ", description: "После успешной регистрации вы получите доступ к платформе обучения Brandteach. Именно здесь начнется ваш курс."},
    {title: "Начните обучение", description: "Теперь вы готовы начать обучение на Brandteach! Изучайте материалы в своем собственном темпе, выполняйте задания и просматривайте видеоуроки в удобное для вас время."},
]

</script>
<template>
    <section>
        <section-container>
            <div class="grid w-full grid-cols-1 gap-32 lg:grid-cols-2 bg-accent rounded-xl shadow">
                <div class="bg-cover bg-center hidden lg:block rounded-l-xl" style="background-image: url('https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/motion-tailwind/img/auth-3-bg.jpeg')">
                </div>
                <div class="flex flex-col gap-16 py-8 pr-8">
                    <div class="flex flex-col gap-2 text-center md:text-start">
                        <title-secondary>Как работает Brandteach?</title-secondary>
                        <p class="text-base font-medium leading-7 text-secondary">Motion's operation involves seamlessly integrating various functions to deliver optimal performance. Our platform is designed to provide efficient solutions and streamline your experience.</p>
                    </div>
                    <div class="grid w-full grid-cols-1 md:grid-cols-2 gap-y-16 gap-x-10">
                        <div class="flex flex-col items-start gap-1">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full bg-primary text-primary mb-2 mb-2">
                                <span class="text-base font-bold leading-7 text-white">1</span>
                            </div>
                            <h3 class="text-base font-bold leading-tight text-info font-display">Exquisite Culinary Creations</h3>
                            <p class="text-base font-medium leading-7 text-secondary">Explore a world of flavors that will tantalize your taste buds.</p>
                        </div>
                        <div class="flex flex-col items-start gap-1">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full bg-primary text-primary mb-2">
                                <span class="text-base font-bold leading-7 text-white">2</span>
                            </div>
                            <h3 class="text-base font-bold leading-tight text-info font-display">Seamless Dining Coordination</h3>
                            <p class="text-base font-medium leading-7 text-secondary">We make sure every culinary journey detail is perfect.</p>
                        </div>
                        <div class="flex flex-col items-start gap-1">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full bg-primary text-primary mb-2">
                                <span class="text-base font-bold leading-7 text-white">3</span>
                            </div>
                            <h3 class="text-base font-bold leading-tight text-info font-display">Savor the Ambiance</h3>
                            <p class="text-base font-medium leading-7 text-secondary">Immerse yourself in a captivating dining ambiance.</p>
                        </div>
                        <div class="flex flex-col items-start gap-1">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full bg-primary text-primary mb-2">
                                <span class="text-base font-bold leading-7 text-white">4</span>
                            </div>
                            <h3 class="text-base font-bold leading-tight text-info font-display">Gourmet Delights</h3>
                            <p class="text-base font-medium leading-7 text-secondary">Treat your palate to an array of gourmet dishes.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section-container>
    </section>
</template>
