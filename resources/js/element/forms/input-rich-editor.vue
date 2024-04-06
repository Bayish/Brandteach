<script setup>
import Vue from "vue";
import VueTrix from "vue-trix";

import {ref} from "vue";

const editorContent = ref("");
</script>

<template>
    <VueTrix v-model="editorContent" placeholder="Enter content" localStorage/>
</template>
