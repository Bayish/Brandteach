<script setup>
import CrmViewContentHeader from "@/layout/crm-layout/crm-view-content-header.vue";
import Dropdown from "@/element/dropdown/dropdown.vue";

const props = defineProps({
    groups: {
        type: Array,
        default: () =>  []
    }
})

console.log(props);
</script>

<template>
    <crm-view-content-header
        pageTitle="List of groups"
        buttonText="Add new group"
        route-link="company.create"
    />
    <div class="bg-accent rounded-3xl h-full w-full overflow-hidden flex-1 mb-4 shadow-md">
        <div class="flex-auto block h-full">
            <table class="flex flex-col min-w-full divide-y divide-gray-200 divide-gray-700 h-full">
                <thead class="sticky top-0 w-full z-40">
                    <tr>
                        <th scope="col" class="py-3.5 px-4 text-base font-medium text-left  text-info">
                            <div class="flex items-center gap-x-3">
                                <input type="checkbox" class="text-blue-500 border-gray-300 rounded bg-gray-900 ring-offset-gray-900 border-gray-700">
                                <button class="flex items-center gap-x-2">
                                    <span>Name</span>

                                    <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                        <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                        <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                    </svg>
                                </button>
                            </div>
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-base font-medium text-left  text-info">
                            Course
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-base font-medium text-left  text-info">
                            Lessons
                        </th>

                        <th scope="col" class="w-1/5 px-4 py-3.5 text-base font-medium text-left  text-info">
                            Teachers
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-base font-medium text-left  text-info">
                            Students
                        </th>

                        <th scope="col" class="relative py-3.5 px-4">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="flex-1 h-full overflow-y-auto overflow-y-auto divide-y divide-gray-200 divide-gray-700">
                <tr
                    v-for="(group, index) in groups" :key="index"
                    :class="{'bg-base-100': index % 2 === 0, 'bg-a': index % 2 !== 0}"
                >
                    <td class="px-4 py-4 text-sm font-medium text-gray-700 text-gray-200 whitespace-nowrap">
                        <div class="inline-flex items-center gap-x-3">
                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded bg-gray-900 ring-offset-gray-900 border-gray-700">

                            <span>{{group.name}}</span>
                        </div>
                    </td>
                    <td class="px-4 py-4 text-sm text-gray-500 text-gray-300 whitespace-nowrap">{{group.course.name}}</td>
                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                        <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 bg-gray-800">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <h2 class="text-sm font-normal">{{group.count_of_lessons}}</h2>
                        </div>
                    </td>
                    <td class="w-1/5 px-4 py-4 text-sm text-gray-500 text-gray-300 whitespace-nowrap">
                        <div class="flex items-center gap-x-2">
                            <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                            <div>
                                <h2 class="text-sm font-medium text-gray-800 text-white ">{{group.teachers.length}}</h2>
                                <p class="text-xs font-normal text-gray-600 text-info">authurmelo@example.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-4 text-sm text-gray-500 text-gray-300 whitespace-nowrap">{{group.students.length}}</td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                        <div class="flex items-center gap-x-6">
                            <dropdown
                                :index="index"
                                :active-index="activeDropdownIndex"
                                @update-active="updateActiveDropdown"
                            >
                                <template #button>
                                    <font-awesome-icon class="text-white" :icon="['fas', 'ellipsis']" />
                                </template>
                                <template #body>
                                    <ul :tabindex="index" class="p-2 shadow menu dropdown-content z-[1] bg-accent rounded-box w-52">
                                        <li>
                                            <Link href="company.edit" :routeId="group.id" class="w-full block my-1 py-1 rounded-lg">Edit</Link>
                                        </li>
                                        <li><a>Delete</a></li>
                                    </ul>
                                </template>
                            </dropdown>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="px-4 py-4 text-sm font-medium text-gray-700 text-gray-200 whitespace-nowrap">
                        <div class="inline-flex items-center gap-x-3">
                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded bg-gray-900 ring-offset-gray-900 border-gray-700">

                            <span>#3065</span>
                        </div>
                    </td>
                    <td class="px-4 py-4 text-sm text-gray-500 text-gray-300 whitespace-nowrap">Jan 5, 2022</td>
                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                        <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 bg-gray-800">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <h2 class="text-sm font-normal">Cancelled</h2>
                        </div>
                    </td>
                    <td class="px-4 py-4 text-sm text-gray-500 text-gray-300 whitespace-nowrap">
                        <div class="flex items-center gap-x-2">
                            <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">
                            <div>
                                <h2 class="text-sm font-medium text-gray-800 text-white ">Andi Lane</h2>
                                <p class="text-xs font-normal text-gray-600 text-info">andi@example.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-4 text-sm text-gray-500 text-gray-300 whitespace-nowrap">Monthly subscription</td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                        <div class="flex items-center gap-x-6">
                            <button class="text-gray-500 transition-colors duration-200 hover:text-indigo-500 text-gray-300 hover:text-indigo-500 focus:outline-none">
                                Archive
                            </button>

                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                Download
                            </button>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="px-4 py-4 text-sm font-medium text-gray-700 text-gray-200 whitespace-nowrap">
                        <div class="inline-flex items-center gap-x-3">
                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded bg-gray-900 ring-offset-gray-900 border-gray-700">

                            <span>#3062</span>
                        </div>
                    </td>
                    <td class="px-4 py-4 text-sm text-gray-500 text-gray-300 whitespace-nowrap">Jan 4, 2022</td>
                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                        <div class="inline-flex items-center px-3 py-1 text-gray-500 rounded-full gap-x-2 bg-gray-100/60 bg-gray-800">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 7L2 4.5M2 4.5L4.5 2M2 4.5H8C8.53043 4.5 9.03914 4.71071 9.41421 5.08579C9.78929 5.46086 10 5.96957 10 6.5V10" stroke="#667085" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <h2 class="text-sm font-normal">Refunded</h2>
                        </div>
                    </td>
                    <td class="px-4 py-4 text-sm text-gray-500 text-gray-300 whitespace-nowrap">
                        <div class="flex items-center gap-x-2">
                            <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=644&q=80" alt="">
                            <div>
                                <h2 class="text-sm font-medium text-gray-800 text-white ">Orlando Diggs</h2>
                                <p class="text-xs font-normal text-gray-600 text-info">orlando@example.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-4 text-sm text-gray-500 text-gray-300 whitespace-nowrap">Monthly subscription</td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                        <div class="flex items-center gap-x-6">
                            <button class="text-gray-500 transition-colors duration-200 hover:text-indigo-500 text-gray-300 hover:text-indigo-500 focus:outline-none">
                                Archive
                            </button>

                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                Download
                            </button>
                        </div>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                    <div class="flex items-center justify-between mt-6">
                    <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 bg-gray-900 text-gray-200 border-gray-700 hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                        </svg>

                        <span>
                previous
            </span>
                    </a>

                    <div class="items-center hidden md:flex gap-x-3">
                        <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md bg-gray-800 bg-blue-100/60">1</a>
                        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-800 text-gray-300 hover:bg-gray-100">2</a>
                        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-800 text-gray-300 hover:bg-gray-100">3</a>
                        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-800 text-gray-300 hover:bg-gray-100">...</a>
                        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-800 text-gray-300 hover:bg-gray-100">12</a>
                        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-800 text-gray-300 hover:bg-gray-100">13</a>
                        <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-800 text-gray-300 hover:bg-gray-100">14</a>
                    </div>

                    <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 bg-gray-900 text-gray-200 border-gray-700 hover:bg-gray-800">
            <span>
                Next
            </span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
                </tfoot>
            </table>
        </div>
    </div>


</template>


<style scoped>
thead, tbody tr {
    display: table;
    width: 100%;
    table-layout: fixed;/* even columns width , fix width of table too*/
}
</style>
