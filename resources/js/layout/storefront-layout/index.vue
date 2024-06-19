<script setup>
import StorefrontHeader from "@/layout/storefront-layout/storefront-header.vue";
import StorefrontFooter from "@/layout/storefront-layout/storefront-footer.vue";
import Banner from "@/component/cookie/banner.vue";

</script>
<template>
    <div class="flex flex-col scroll-smooth min-h-screen">
        <storefront-header/>
        <main class="flex-1">
            <banner/>
            <slot/>
        </main>
        <storefront-footer/>
    </div>
</template>
