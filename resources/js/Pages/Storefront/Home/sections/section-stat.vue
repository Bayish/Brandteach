<script setup>
import AnimatedNumber from "@/component/animated/animated-number.vue";

</script>
<template>
    <div class="w-full draggable" draggable="true">
        <div class="container flex flex-col items-center gap-16 mx-auto my-32">
            <div class="grid w-full grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-y-8">
                <div class="flex flex-col items-center">
                    <h3 class="text-5xl font-extrabold leading-tight text-center text-dark-grey-900 font-display">
                        <animated-number identifier="count-of-course" :number="250"><template #before>+</template></animated-number>
                    </h3>
                    <p class="text-base font-medium leading-7 text-center text-dark-grey-600">Successful Projects</p>
                </div>
                <div class="flex flex-col items-center">
                    <h3 class="text-5xl font-extrabold leading-tight text-center text-dark-grey-900 font-display">
                        <animated-number identifier="count-of-agencies" :number="12"><template #before>$</template><template #after>m</template></animated-number>
                    </h3>
                    <p class="text-base font-medium leading-7 text-center text-dark-grey-600">Annual Revenue Growth</p>
                </div>
                <div class="flex flex-col items-center">
                    <h3 class="text-5xl font-extrabold leading-tight text-center text-dark-grey-900 font-display text-info"><span id="countto3" countto="2600" data-decimal="1">2.8</span>k+</h3>
                    <p class="text-base font-medium leading-7 text-center text-dark-grey-600">Global Partners</p>
                </div>
                <div class="flex flex-col items-center">
                    <h3 class="text-5xl font-extrabold leading-tight text-center text-dark-grey-900 font-display">
                        <animated-number identifier="count-of-students" :number="18000"><template #before>+</template></animated-number>
                    </h3>
                    <p class="text-base font-medium leading-7 text-center text-dark-grey-600">Daily Website Visitors</p>
                </div>
            </div>
        </div>
    </div>
</template>
