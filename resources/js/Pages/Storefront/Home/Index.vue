<script setup>
import StorefrontLayout from "@/layout/storefront-layout/index.vue";
import SectionHero from "@/Pages/Storefront/Home/sections/section-hero.vue";
import SectionFeatures from "@/Pages/Storefront/Home/sections/section-features.vue";
import SectionStat from "@/Pages/Storefront/Home/sections/section-stat.vue";
import SectionAccordion from "@/Pages/Storefront/Home/sections/section-accordion.vue";
import SectionSteps from "@/Pages/Storefront/Home/sections/section-steps.vue";
import SectionCardCarousel from "@/Pages/Storefront/Home/sections/section-card-carousel.vue";
import SectionTestimonialCopy from "@/Pages/Storefront/Home/sections/section-testimonial-copy.vue";
</script>

<template>
    <storefront-layout class="scroll-smooth">
        <section-hero/>
        <section-steps/>
        <section-card-carousel/>
        <section-features/>
        <section-stat/>
        <section-accordion/>
        <section-testimonial-copy/>
    </storefront-layout>
</template>
