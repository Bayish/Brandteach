<script setup>
import Avatar from "@/element/avatar.vue";

defineProps({
  headers: {
    type: Array,
    default: [],
  },
  tables: {
    type: Array,
    default: [],
  },
  status: {
    type: Number,
    default: 0,
  }
});

function convertDate(inputFormat) {
  function pad(s) { return (s < 10) ? '0' + s : s; }
  var d = new Date(inputFormat)
  return [pad(d.getDate()), pad(d.getMonth()+1), d.getFullYear()].join('/')
}


const tableHeaders = ['Course Name', 'Teacher', 'Start', 'Status', 'About'];

</script>

<template>
  <div class="overflow-x-auto relative">
    <ul class="pt-4">
      <li class="flex justify-between px-5 bg-neutral rounded-3xl">
        <div class="w-4/12 py-3 text-info text-lg font-bold" >Course Name</div>
        <div class="w-3/12 py-3 text-info text-lg font-bold" >Teacher</div>
        <div class="w-2/12 py-3 text-info text-lg font-bold" >Start</div>
        <div class="w-1/12 py-3 text-info text-lg font-bold text-center">Status</div>
        <div class="w-2/12 py-3 text-info text-lg font-bold text-center" >About</div>
      </li>
      <li class="flex justify-between rounded-3xl my-4 px-5 bg-accent items-center" v-for="(table, index) in [...tables, ...tables, ...tables, ...tables, ...tables, ...tables, ...tables]" :key="index">
        <div class="flex items-center gap-3 w-4/12">
          <avatar text="HH"/>
          <div>
            <div class="font-bold text-info">{{table.name}}</div>
          </div>
        </div>
        <div class="py-2 w-3/12 text-info">
          {{table.teacher.name}} {{table.teacher.surname}}
        </div>
        <div class="py-2 w-2/12 text-info">
          {{convertDate(table.start)}}
        </div>
        <div class="py-2 w-1/12 flex justify-center">
          <div class="radial-progress text-success text-xs leading-[3rem]"
               style="--value:70; --size:2.8rem"
               role="progressbar"
          >
            70%
          </div>
        </div>
        <div class="py-2 w-2/12 flex justify-center">
          <button
            class="btn text-primary-content bg-primary-content/10 hover:bg-primary-content hover:text-accent border-0 text-accent btn-md py-0 mx-auto">
            details
          </button>
        </div>
      </li>
    </ul>
    <div class="flex justify-center items-center my-4 ">
      <div class="join bg-accent">
        <button class="join-item btn bg-transparent hover:bg-accent text-xs">1</button>
        <button class="join-item btn bg-transparent hover:bg-accent text-xs">2</button>
        <button class="join-item btn bg-transparent hover:bg-accent btn-disabled text-xs">...</button>
        <button class="join-item btn bg-transparent hover:bg-accent text-xs">99</button>
        <button class="join-item btn bg-transparent hover:bg-accent text-xs">100</button>
      </div>
    </div>
  </div>
</template>
