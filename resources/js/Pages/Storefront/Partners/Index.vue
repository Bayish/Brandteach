<script setup>
import StorefrontLayout from "@/layout/storefront-layout/index.vue";
import SectionHero from "@/Pages/Storefront/Partners/sections/section-hero.vue";
import SectionHowWorks from "@/Pages/Storefront/Partners/sections/section-how-works.vue";
import SectionReview from "@/Pages/Storefront/Partners/sections/section-review.vue";
import SectionPrice from "@/Pages/Storefront/Partners/sections/section-price.vue";
import SectionWhoWill from "@/Pages/Storefront/Partners/sections/section-who-will.vue";
import SectionJoin from "@/Pages/Storefront/Partners/sections/section-join.vue";

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
