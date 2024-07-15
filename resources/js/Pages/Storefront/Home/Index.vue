<script setup>
import {ref} from "vue";
import StorefrontLayout from "@/layout/storefront-layout/index.vue";
import SectionHero from "@/Pages/Storefront/Home/sections/section-hero.vue";
import SectionTestimonial from "@/Pages/Storefront/Home/sections/section-testimonial.vue";
import SectionFeatures from "@/Pages/Storefront/Home/sections/section-features.vue";
import SectionStat from "@/Pages/Storefront/Home/sections/section-stat.vue";
import SectionAccordion from "@/Pages/Storefront/Home/sections/section-accordion.vue";
import SectionHowWorks from "@/Pages/Storefront/Home/sections/section-how-works.vue";
import SectionCourses from "@/Pages/Storefront/Home/sections/section-courses.vue";
import SectionCarousel from "@/Pages/Storefront/Home/sections/section-carousel.vue";
import SectionCardCarousel from "@/Pages/Storefront/Home/sections/section-card-carousel.vue";

const isOpen = ref(false);
const toggleMenu = () => isOpen.value = !isOpen.value;

</script>

<template>
    <storefront-layout>
        <section-hero/>
        <section-card-carousel/>
        <section-features/>
        <section-how-works/>
        <section-testimonial/>
        <section-courses/>
        <section-stat/>
        <section-accordion/>
        <section-carousel/>
    </storefront-layout>
</template>
