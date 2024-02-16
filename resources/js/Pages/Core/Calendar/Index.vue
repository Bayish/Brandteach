<script setup>
import { computed, ref } from 'vue';
import CrmViewContentHeader from "@/layout/crm-layout/crm-view-content-header.vue";
const weekDays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

let viewDate = ref(new Date());

const getDaysToPrepend = computed(() => {
  const startOfMonth = new Date(viewDate.value.getFullYear(), viewDate.value.getMonth(), 1);
  const countOfLastMonth = new Date(viewDate.value.getFullYear(), viewDate.value.getMonth() - 1, 0).getDate();
  const daysOfLastMonth = Array.from({ length: countOfLastMonth }, (_, i) => new Date(viewDate.value.getFullYear(), viewDate.value.getMonth() - 1, i + 1 ));

  return startOfMonth.getDay() === 0 ? [] : daysOfLastMonth.slice(-6).filter(day => day.getDay() !== 0 && day.getDay() < startOfMonth.getDay());
})

const getDaysToAppend = computed(() => {
  const endOfMonth =  new Date(viewDate.value.getFullYear(), viewDate.value.getMonth() + 1, 0);
  const daysOfNextMonth = Array.from({ length: 7 }, (_, i) => new Date(viewDate.value.getFullYear(), viewDate.value.getMonth() +1, i + 1 ));

  return endOfMonth.getDay() === 0 ? [] : daysOfNextMonth.filter(day => day.getDay() === 0 || day.getDay() > endOfMonth.getDay());
})

const units = computed(() => {
  const year = viewDate.value.getFullYear();
  const month = viewDate.value.getMonth();
  const daysInMonth = new Date(year, month + 1, 0).getDate();

  return Array.from({ length: daysInMonth }, (_, i) => new Date(viewDate.value.getFullYear(), viewDate.value.getMonth(), i + 1));

});

const shiftMonth = (amount) => {
  const year = viewDate.value.getFullYear();
  const month = viewDate.value.getMonth() + amount;
  viewDate.value = new Date(year, month, 1);
};

const reset = () => {
  viewDate.value = new Date();
};

const isToday = (date) => {
  const today = new Date();
  return date.getDate() === today.getDate() && date.getMonth() === today.getMonth() && date.getFullYear() === today.getFullYear();
};

</script>


<template>
 <crm-view-content-header
   pageTitle="Calendar"
   pageDescription="Узнайте информацию о курсах в системе"
   buttonText="Add Event"
 />
  <div class="bg-accent rounded-2xl overflow-hidden my-4">
    <div class="flex justify-between py-4">
      <button class="text-primary flex justify-start items-center ml-4 w-1/3" @click="reset()">
        <font-awesome-icon :icon="['fas', 'calendar-day']" />
        <span class="text-info pl-2">Today</span>
      </button>
      <div class="flex justify-center items-center w-1/3 mx-auto">
        <button class="w-1/4 text-primary" @click="shiftMonth(-1)">
          <font-awesome-icon :icon="['fas', 'arrow-left']" />
        </button>
        <span class="text-info w-1/2 px-4 text-center">{{ viewDate.toLocaleString('default', { month: 'long', year: 'numeric' }) }}</span>
        <button class="w-1/4 text-primary" @click="shiftMonth(1)">
          <font-awesome-icon :icon="['fas', 'arrow-right']" />
        </button>
      </div>
      <div class="w-1/3"></div>
    </div>
    <div class="grid grid-cols-7 gap-1 py-4">
      <div v-for="d in weekDays" class="text-center">
        <div>{{ d }}</div>
      </div>
    </div>
    <div class="grid grid-cols-7">
      <div v-for="p in getDaysToPrepend" class="border border-base-100 flex flex-col h-24 pointer-events-none" >
        <div class="text-right p-3 text-neutral">{{ p.getDate() }}</div>
      </div>

      <div v-for="d in units" :class="[isToday(d) ? 'bg-primary' : '']" class="border border-base-100 flex flex-col h-24">
        <div class="text-right p-3" :class="[isToday(d) ? 'text-accent' : 'text-info']" >{{ d.getDate() }}</div>
      </div>

      <div class="border border-base-100 flex flex-col h-24 pointer-events-none" v-for="a in getDaysToAppend">
        <div class="text-right p-3 text-neutral">{{ a.getDate() }}</div>
      </div>

    </div>
  </div>
</template>



