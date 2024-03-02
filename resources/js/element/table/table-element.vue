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
  }
});
</script>

<template>
  <div class="overflow-x-auto">
    <table class="table border-0">
      <!-- head -->
      <thead>
      <tr>
        <th v-for="(header, index) in headers" :key="index">{{header}}</th>
      </tr>
      </thead>
      <tbody class="table-body">
      <tr v-for="(table, index) in [...tables, ...tables, ...tables]" :key="index" class="rounded-2xl border-2 border-primary">
        <td class="py-2">
          <div class="flex items-center gap-3">
            <avatar text="HH"/>
            <div>
              <div class="font-bold">{{table.name}}</div>
            </div>
          </div>
        </td>
        <td class="py-2">
          {{table.teacher.name}} {{table.teacher.surname}}
        </td>
        <td class="py-2">
          {{table.start}}
        </td>
        <td class="py-2">
          <div class="radial-progress text-primary text-xs leading-[3rem]"
               style="--value:100; --size:2.5rem"
               role="progressbar"
          >
            70%
          </div>
        </td>
        <td class="py-2">
          <button class="btn btn-ghost btn-xs">details</button>
        </td>
      </tr>
      </tbody>
    </table>
  </div>
</template>


<style scoped>
.table {
  border-collapse:separate;
  border-spacing: 1rem;
}

</style>
