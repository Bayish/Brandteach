<script setup>
import CrmViewContentHeader from "@/layout/crm-layout/crm-view-content-header.vue";
import TeacherCard from "@/component/card/teacher-card.vue";

const props = defineProps({
  teachers: {
    type: Array,
    default: () => [],
  }
})


</script>

<template>
  <div class="h-full flex flex-col w-full pb-8">
      <crm-view-content-header
          pageTitle="Teacher"
          buttonText="Add Teacher"
      />
      <div class="flex-1 h-full overflow-y-auto flex justify-center items-center -mx-4 flex-wrap w-full  items-stretch">
          <teacher-card v-for="(teacher, index) in [...teachers]" :teacher="teacher"/>
      </div>
  </div>
</template>
