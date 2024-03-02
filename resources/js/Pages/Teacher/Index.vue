<script setup>
import UserName from "@/component/user/user-name.vue";
import PageTitle from "@/component/page/page-title.vue";
import navigations from '@/helper/routes';
import Avatar from "@/element/avatar.vue";

const props = defineProps({
  teachers: {
    type: Array,
    default: [],
  },
  students: {
    type: Array,
    default: [],
  },
  user: {
    type: Object,
    default: null
  }
});

const pageTitle = navigations.filter((n) => n.link === route().current());

</script>

<template>
    <div class="mt-4 w-full h-full">
      <div class="flex justify-between items-center">
        <div>
          <user-name :name="user.name"/>
          <page-title :title="pageTitle && pageTitle[0].title"/>
        </div>
        <div>
          <a role="button" class="btn btn-primary text-accent text-base font-bold rounded-2xl">+ Add Group</a>
        </div>
      </div>
      <div class="mt-4 bg-accent rounded-2xl h-5/6">
        <div class="flex ">
          <div class="mb-4">
            <h4 class="text-info font-bold">Список курсов</h4>
            <p>Узнайте информацию о курсах в системе</p>
          </div>
        </div>
        <div class="overflow-x-auto">
          <table class="table table-zebra">
            <!-- head -->
            <thead>
            <tr>
              <th>Course Name</th>
              <th>Teacher</th>
              <th>Start</th>
              <th>Realized</th>
              <th>About</th>
            </tr>
            </thead>
            <tbody class="table-body">
            <!-- row 1 -->
            <tr v-for="i in 20" :key="i" class="bg-primary rounded-2xl my-2">
              <td class="py-2">
                <div class="flex items-center gap-3">
                  <avatar text="HH"/>
                  <div>
                    <div class="font-bold">Hart Hagerty</div>
                    <div class="text-sm opacity-50">United States</div>
                  </div>
                </div>
              </td>
              <td class="py-2">
                Baiysh Parpiev
              </td>
              <td class="py-2">
                01.02.14
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
          <div class="flex justify-center items-center my-4">
            <div class="join bg-accent">
              <button class="join-item btn bg-transparent hover:bg-accent text-xs">1</button>
              <button class="join-item btn bg-transparent hover:bg-accent text-xs">2</button>
              <button class="join-item btn bg-transparent hover:bg-accent btn-disabled text-xs">...</button>
              <button class="join-item btn bg-transparent hover:bg-accent text-xs">99</button>
              <button class="join-item btn bg-transparent hover:bg-accent text-xs">100</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<style scoped>
.table {
  border-spacing: 0 45px;
}
</style>



