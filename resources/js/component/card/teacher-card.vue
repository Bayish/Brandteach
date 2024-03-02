<script setup>
const props = defineProps({
  teacher: {
    type: Object,
    default: null
  }
})
let studentsCount = 0;
props.teacher.teacher_groups.forEach(group => studentsCount += group.group.students.length);



const uniqueCourses = () => {
  const courses = new Set();
  props.teacher.teacher_groups.forEach(group => {
    courses.add(group.group.course.name);
  });
  return Array.from(courses);
}

</script>

<template>
  <div class="card flex-col bg-accent w-64 max-w-64 p-3 rounded-3xl m-3">
    <div class="flex flex-col flex-1 bg-base-100 rounded-3xl card-header p-4">
      <div class="flex flex-col grow">
        <div class="avatar placeholder mr-2">
          <div class="bg-neutral text-neutral-content rounded-full w-16 h-16 mx-auto">
            <span class="text-md">BT</span>
          </div>
        </div>
        <div class="flex flex-col justify-center items-center py-3">
          <h3 class="text-base font-bold text-info text-center">{{teacher?.name}} {{teacher?.surname}}</h3>
          <p class="text-base text-info pt-2 text-center">{{teacher?.role?.name}}</p>
          <p class="text-base text-info text-center">
            <span v-for="(course, index) in uniqueCourses()">{{ course }}</span>
          </p>
        </div>
      </div>
    </div>
    <div class="flex justify-center items-center py-2">
      <div class="flex flex-col justify-center items-center px-3">
        <span class="text-info font-bold">{{ teacher.teacher_groups.length }}</span>
        <p class="text-base-300">Groups</p>
      </div>
      <div class="flex flex-col justify-center items-center px-3">
        <span class="text-info font-bold">{{ studentsCount }}</span>
        <p class="text-base-300">Students</p>
      </div>
    </div>
  </div>
</template>
