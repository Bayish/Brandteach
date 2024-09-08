<script setup>
import LogoMobile from '@/icons/favicon-brandteach.vue';
import LogoDesktop from '@/icons/brandteach-desktop.vue';
import Link from "@/layout/navigation/Link.vue";
</script>

<template>
    <Link class="text-center">
        <LogoMobile class="lg:hidden"/>
        <LogoDesktop class="hidden min-h-16 lg:block xl:min-h-24"/>
    </Link>
</template>
