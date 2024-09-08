<script setup>
import StorefrontLayout from "@/layout/storefront-layout/index.vue";
import SectionHero from "@/Pages/Storefront/Partners/sections/section-hero.vue";
import SectionHowWorks from "@/Pages/Storefront/Partners/sections/section-how-works.vue";
import SectionReview from "@/Pages/Storefront/Partners/sections/section-review.vue";
import SectionPrice from "@/Pages/Storefront/Partners/sections/section-price.vue";
import SectionWhoWill from "@/Pages/Storefront/Partners/sections/section-who-will.vue";
import SectionJoin from "@/Pages/Storefront/Partners/sections/section-join.vue";

const companySections = [
    {
        "title": "Реклама и размещение",
        "description": "Разместите вашу рекламу на нашей платформе или представьте вашу компанию и услуги."
    },
    {
        "title": "Управление обучением",
        "description": "Используйте нашу систему управления обучением для планирования курсов, регистрации студентов и отслеживания их прогресса."
    },
    {
        "title": "Партнёрство",
        "description": "Сотрудничайте с нами в качестве партнёра, размещая ваши курсы на нашей платформе и привлекая новую аудиторию."
    },
    {
        "title": "Расширение аудитории",
        "description": "Доступ к нашей широкой аудитории поможет вашей компании привлечь новых клиентов и увеличить продажи."
    },
    {
        "title": "Персонализированные инструменты",
        "description": "Мы предлагаем индивидуальные инструменты управления и аналитики, чтобы помочь вашей компании эффективно управлять обучением и достичь поставленных целей."
    },
    {
        "title": "Поддержка и консультации",
        "description": "Наша команда готова оказать вам помощь и консультации по всем вопросам, связанным с использованием нашей платформы и организацией обучения в вашей компании."
    }
];

const steps = [
    {
        "step": "Выберите ваш план",
        "description": "Выберите из наших планов. Все планы имеют бесплатный тестовый период в 60 дней."
    },
    {
        "step": "Получите доступ",
        "description": "После выбора вашего плана, вы получите доступ к нашей платформе и ее функциям."
    },
    {
        "step": "Создайте курсы для учителей",
        "description": "Создайте курсы для ваших учителей. Затем предоставьте вашим студентам доступ к этим курсам."
    },
    {
        "step": "Получите консультацию, если нужно",
        "description": "Если вам нужна помощь или консультация, не стесняйтесь обращаться к нам. Мы здесь, чтобы помочь!"
    }
];


</script>
<template>
    <storefront-layout>
        <section-hero/>
        <section-price/>
        <section-who-will/>
        <section-how-works/>
        <section-join/>
        <section-review/>
    </storefront-layout>
</template>
