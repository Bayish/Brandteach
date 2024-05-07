<script setup>
import SectionContainer from "@/Pages/Storefront/Home/sections/section-container.vue";

const plans = [
    {
        title: "Intro",
        isDefault: true,
        price: "$19 ",
        for: "Month",
        description: "For most businesses that want to optimaize web queries.",
        features:["All limited links", "Own analytics platform", "Chat support", "Optimize hashtags", "Unlimited users"]
    },
    {
        title: "Base",
        isDefault: false,
        price: "$19 ",
        for: "Month",
        description: "For most businesses that want to optimaize web queries.",
        features:["All limited links", "Own analytics platform", "Chat support", "Optimize hashtags", "Unlimited users"]
    },
    {
        title: "Popular",
        isDefault: false,
        price: "$19 ",
        for: "Month",
        description: "For most businesses that want to optimaize web queries.",
        features:["All limited links", "Own analytics platform", "Chat support", "Optimize hashtags", "Unlimited users"]
    },
    {
        title: "Exterprise",
        isDefault: false,
        price: "$19 ",
        for: "Month",
        description: "For most businesses that want to optimaize web queries.",
        features:["All limited links", "Own analytics platform", "Chat support", "Optimize hashtags", "Unlimited users"]
    }
];

</script>
<template>
    <section>
        <section-container>
            <div class="px-6 py-8 bg-accent shadow rounded-xl">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <div>
                        <h2 class="text-3xl font-bold text-info">Партнерские планы с <span class="text-primary">BrandTeach</span></h2>
                        <p class="mt-4 text-secondary text-md">Получите доступ к эксклюзивным функциям и поддержке!</p>
                    </div>

                    <div class="overflow-hidden p-0.5 mt-6 border border-primary rounded-lg">
                        <div class="sm:-mx-0.5 flex">
                            <button
                                class="px-3 w-1/2 sm:w-auto py-1 sm:mx-0.5 text-white bg-primary rounded-lg">
                                Ежемесячно
                            </button>
                            <button
                                class="px-3 w-1/2 sm:w-auto py-1 sm:mx-0.5 text-secondary rounded-lg hover:text-white hover:bg-primary">
                                Ежегодно
                            </button>
                        </div>
                    </div>
                </div>
                <div class="grid gap-6 mt-16 -mx-6 sm:gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <div
                        v-for="(plan, index) in plans"
                        :key="index"
                        class="px-6 py-4 transition-colors duration-200 transform rounded-lg hover:bg-info group"
                        :class="{'bg-info': plan.isDefault, 'bg-accent': !plan.isDefault}"
                    >
                        <p
                            class="text-lg font-medium group-hover:text-accent"
                            :class="{'text-accent': plan.isDefault, 'text-info': !plan.isDefault}"
                        >{{ plan.title }}</p>
                        <h4
                            class="mt-2 text-4xl font-semibold group-hover:text-accent"
                            :class="{'text-accent': plan.isDefault, 'text-info': !plan.isDefault}"
                        >{{ plan.price }} <span
                            class="text-base font-normal group-hover:text-accent"
                            :class="{'text-accent': plan.isDefault, 'text-info': !plan.isDefault}"
                        >/{{ plan.for }}</span></h4>
                        <p
                            class="mt-4 group-hover:text-accent"
                            :class="{'text-accent': plan.isDefault, 'text-secondary': !plan.isDefault}"
                        >{{ plan.description }}.</p>

                        <div class="mt-8 space-y-8">
                            <div v-for="(feature, i) in plan.features" :key="i" class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span
                                    class="mx-4 group-hover:text-accent"
                                    :class="{'text-accent': plan.isDefault, 'text-secondary': !plan.isDefault}"
                                >{{ feature }}</span>
                            </div>
                        </div>

                        <button
                            class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Choose plan
                        </button>
                    </div>
                </div>
            </div>

        </section-container>

    </section>
</template>
