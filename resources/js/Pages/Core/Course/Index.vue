<script setup>
import TableBody from "@/element/table/table-body.vue";
import CrmViewContentHeader from "@/layout/crm-layout/crm-view-content-header.vue";

const props = defineProps({
  user: {
    type: Array,
    default: () => [],
  }
})

const tableHeaders = ['Course Name', 'Teacher', 'Start', 'Status', 'About'];

const title = "Список курсов";
const description = "Узнайте информацию о курсах в системе";

</script>

<template>
  <crm-view-content-header
    pageTitle="Список курсов"
    pageDescription="Узнайте информацию о курсах в системе"
    buttonText="Add New Course"
  />
<!--  <table-body class="" :headers="tableHeaders" :tables="courses"/>-->
</template>

<style scoped>
th{border-collapse:separate}
</style>
