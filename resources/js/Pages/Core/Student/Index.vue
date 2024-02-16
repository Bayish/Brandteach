<script setup>
import CrmViewContentHeader from "@/layout/crm-layout/crm-view-content-header.vue";
import StudentCard from "@/component/card/student-card.vue";
import Avatar from "@/element/avatar.vue";

const props = defineProps({
  students: {
    type: Array,
    default: () => [],
  }
})

const uniqueCourses = (student) => {
  const courses = new Set();
  student.student_groups.forEach(group => {
    courses.add(group.group.course.name);
  });
  return Array.from(courses);
}

</script>

<template>
  <crm-view-content-header
    :pageTitle="`Students(${students.length})`"
    buttonText="Add new student"
  />
  <ul class="pt-4">
    <li class="flex justify-between rounded-3xl my-4 px-5 bg-accent items-center py-3"
        v-for="(student, index) in students" :key="index">
      <div class="flex items-center gap-3 w-4/12">
        <avatar text="HH"/>
        <div>
          <div class="font-bold text-base text-info">{{student.name}} {{student.surname}}</div>
          <div class="font-bold text-sm text-base-300">{{student.email}}</div>
        </div>
      </div>
      <div class="w-3/12 text-info">
        <div class="font-bold text-base text-info">Courses</div>
        <div class="font-bold text-sm text-base-300" v-for="(course, i) in uniqueCourses(student)">{{course}}</div>
      </div>
      <div class="w-2/12 text-info">
        <div class="font-bold text-base text-info">Status for month</div>
        <div class="font-bold text-sm text-base-300">Paid</div>
      </div>
      <div class="w-1/12 flex justify-center">
        <div class="radial-progress text-success text-xs leading-[3rem]"
             style="--value:70; --size:2.8rem"
             role="progressbar"
        >
          70%
        </div>
      </div>
      <div class="w-2/12 flex justify-center">
        <button
          class="btn text-primary-content bg-primary-content/10 hover:bg-primary-content hover:text-accent border-0 text-accent btn-md py-0 mx-auto">
          details
        </button>
      </div>
    </li>
  </ul>
</template>


