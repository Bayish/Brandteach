<template>
    <div class="flex justify-between items-center container mx-auto">
        <button class="btn btn-primary" :disabled="isAtStart" @click="leftScroll">
            <i class="fas fa-angle-double-left"></i>
        </button>
        <div class="overflow-x-auto overflow-y-hidden min-h-96 flex" ref="scrollImages">
            <div
                class="min-w-80 my-6 h-full py-6 mx-4 bg-white px-4 py-6 rounded-xl shadow-lg transform hover:scale-105 transition duration-500"
                v-for="(course, index) in courses"
                :key="index"
            >
                <h3 class="mb-3 text-xl font-bold text-primary">{{ course.title }}</h3>
                <div class="relative">
                    <img class="w-full rounded-xl"
                         src="https://images.unsplash.com/photo-1550684848-fac1c5b4e853?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80"
                         alt="Colors"/>
                    <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">
                        $12</p>
                    <p v-if="course.discount > 0" class="absolute top-0 right-0 bg-yellow-300 text-info font-semibold py-1 px-3 rounded-tr-lg rounded-bl-lg">
                        %{{ course.discount }} Discount</p>
                </div>
                <h3 class="mt-4 flex-1 text-info text-2xl font-bold cursor-pointer">{{ course.description }}</h3>
                <div class="my-4">
                    <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mb-1.5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </span>
                        <p class="text-secondary">{{ course.duration }} Minutes</p>
                    </div>
                    <div class="flex space-x-1 items-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mb-1.5" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </span>
                        <p>{{ course.countLessons }} lessons</p>
                    </div>
                    <div class="flex space-x-1 items-center">
                    <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mb-1.5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
            </svg>
          </span>
                        <p>{{ course.category }}</p>
                    </div>
                </div>
                <button class="mt-4 h-16 text-xl w-full text-white bg-primary py-2 rounded-xl shadow-lg">Start
                    Watching Now
                </button>
            </div>
        </div>
        <button class="btn btn-primary" :disabled="isAtEnd" @click="rightScroll">
            <i class="fas fa-angle-double-right"></i>
        </button>
    </div>
</template>

<script setup>
import { ref, onMounted, computed, watch } from 'vue';

const scrollImages = ref(null);
const scrollLength = ref(0);
const isAtStart = ref(true);
const isAtEnd = ref(false);

const courses = [
    {title: "Beginner Friendly", description: "Javascript Bootcamp for Absolute Beginners", category: "Vanilla JS", countLessons: "24", price: "FREE", duration: "90min", discount: 0},
    {title: "Beginner Friendly", description: "Javascript Bootcamp for Absolute Beginners", category: "Vanilla JS", countLessons: "24", price: "FREE", duration: "60min", discount: 0},
    {title: "Intermediate", description: "Write a Gatsby plugin using Typescript", category: "TypeScript", countLessons: "36", price: "$12", duration: "45min", discount: 0},
    {title: "Beginner Friendly", description: "Advanced React Native for Sustainability", category: "Vanilla JS", countLessons: "44", price: "$50", duration: "70min", discount: 20},
    {title: "Beginner Friendly", description: "Advanced React Native for Sustainability", category: "Vanilla JS", countLessons: "44", price: "$50", duration: "70min", discount: 20},
    {title: "Beginner Friendly", description: "Advanced React Native for Sustainability", category: "Vanilla JS", countLessons: "44", price: "$50", duration: "70min", discount: 20},
    {title: "Beginner Friendly", description: "Advanced React Native for Sustainability", category: "Vanilla JS", countLessons: "44", price: "$50", duration: "70min", discount: 20},
    {title: "Beginner Friendly", description: "Advanced React Native for Sustainability", category: "Vanilla JS", countLessons: "44", price: "$50", duration: "70min", discount: 20},
    {title: "Beginner Friendly", description: "Advanced React Native for Sustainability", category: "Vanilla JS", countLessons: "44", price: "$50", duration: "70min", discount: 20},
    {title: "Beginner Friendly", description: "Advanced React Native for Sustainability", category: "Vanilla JS", countLessons: "44", price: "$50", duration: "70min", discount: 20},
    {title: "Beginner Friendly", description: "Advanced React Native for Sustainability", category: "Vanilla JS", countLessons: "44", price: "$50", duration: "70min", discount: 20},
]

// Watch the scroll position and update the buttons state
const updateButtonState = () => {
    const el = scrollImages.value;
    const maxScrollLeft = el.scrollWidth - el.clientWidth;
    scrollLength.value = el.scrollLeft;
    isAtStart.value = el.scrollLeft === 0;
    isAtEnd.value = el.scrollLeft >= maxScrollLeft;
};

// Method to scroll right
const rightScroll = () => {
    const el = scrollImages.value;
    console.log(el)
    el.scrollBy({ left: el.clientWidth, behavior: 'smooth' });
};

// Method to scroll left
const leftScroll = () => {
    const el = scrollImages.value;
    el.scrollBy({ left: -el.clientWidth, behavior: 'smooth' });
};

// Set up scroll event listener on mount
onMounted(() => {
    const el = scrollImages.value;
    el.addEventListener('scroll', updateButtonState);
    updateButtonState();
});
</script>

<style scoped>

button:disabled {
    background: #e5e7eb;
    cursor: not-allowed;
}

button i {
    color: white;
}

button:disabled i {
    color: #cbd5e1;
}
</style>
