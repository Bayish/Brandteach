<script setup>
import StorefrontHeader from "@/layout/storefront-layout/storefront-header.vue";
import StorefrontFooter from "@/layout/storefront-layout/storefront-footer.vue";

</script>
<template>
    <div class="flex flex-col scroll-smooth min-h-screen">
        <storefront-header/>
        <main class="flex-1">
            <slot/>
        </main>
        <storefront-footer/>
    </div>
</template>
