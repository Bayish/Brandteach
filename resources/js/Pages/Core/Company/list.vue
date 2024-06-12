<script setup>
import CrmViewContentHeader from "@/layout/crm-layout/crm-view-content-header.vue";
import Link from "@/layout/navigation/Link.vue";
import Dropdown from "@/element/dropdown/dropdown.vue";
import {ref} from "vue";
const props = defineProps({
    companies: {
        type: Array,
        default: () =>  []
    }
})

const getMembershipUntil = (date) => {
    const dateObject = new Date(date);
    const day = dateObject.getDate();
    const month = dateObject.getMonth() + 1;
    const year = dateObject.getFullYear();
    return (day < 10 ? '0' : '') + day + "." + (month < 10 ? '0' : '') + month + "." + year;
}

const activeDropdownIndex = ref(null);
const updateActiveDropdown = (index) => index === activeDropdownIndex.value ? activeDropdownIndex.value = null : activeDropdownIndex.value = index;

</script>

<template>
    <crm-view-content-header
        pageTitle="List of groups"
        buttonText="Add new group"
        route-link="company.create"
    />
    <div class="bg-accent rounded-3xl h-full w-full overflow-hidden flex-1 mb-4 shadow-md">
        <div class="flex-auto block py-4 h-full">
            <div class="overflow-y-auto pr-4 pl-8 h-full">
                <table class="w-full my-0 align-middle text-dark border-neutral-200 px-4">
                    <thead class="align-bottom ">
                        <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                            <th class="py-3 w-1/5 text-start">Name</th>
                            <th class="p-3 w-1/5 text-center">Email</th>
                            <th class="p-3 w-1/12 text-center">Courses</th>
                            <th class="p-3 w-1/5 text-center">Membership</th>
                            <th class="p-3 w-1/5 text-center">Until</th>
                            <th class="py-3 w-1/12 text-end">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(company, index) in [...companies, ...companies, ...companies] " :key="index" class="border-b border-dashed last:border-b-0">
                            <td class="py-3 w-1/5 pr-3 text-start">
                                <div class="flex items-center">
                                    <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                        <img
                                            src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-49-new.jpg"
                                            class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl" alt="">
                                    </div>
                                    <div class="flex flex-col justify-start">
                                        <a href="javascript:void(0)"
                                           class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary">
                                            {{company.name}}</a>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 w-1/5 pr-3 text-center">
                                            <span
                                                class="font-semibold text-light-inverse text-md/normal">{{company.email}}</span>
                            </td>
                            <td class="py-3 w-1/5 pr-3 text-center">
                        <span
                            class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none text-success bg-success-light rounded-lg">
                                {{company.courses.length}}
                        </span>
                            </td>
                            <td class="py-3 pr-3 w-1/12 text-center">
                                            <span
                                                class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-primary bg-primary-light rounded-lg">{{company.membership.name}}</span>
                            </td>
                            <td class="py-3 w-1/5 pr-3 text-center">
                                <span class="font-semibold text-light-inverse text-md/normal">{{getMembershipUntil(company.membership_until)}}</span>
                            </td>
                            <td class="py-3 w-1/12 pl-3 text-end">
                                <dropdown
                                    :index="index"
                                    :active-index="activeDropdownIndex"
                                    @update-active="updateActiveDropdown"
                                >
                                    <template #button>
                                        <font-awesome-icon :icon="['fas', 'ellipsis']" />
                                    </template>
                                    <template #body>
                                        <ul :tabindex="index" class="p-2 shadow menu dropdown-content z-[1] bg-accent rounded-box w-52">
                                            <li>
                                                <Link href="company.edit" :routeId="company.id" class="w-full block my-1 py-1 rounded-lg">Edit</Link>
                                            </li>
                                            <li><a>Delete</a></li>
                                        </ul>
                                    </template>
                                </dropdown>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
