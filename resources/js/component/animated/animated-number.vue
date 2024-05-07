<script setup>
import { ref, defineProps, onBeforeUnmount } from 'vue';

const props = defineProps({
    number: {
        type: Number,
        default: 0
    },
    identifier: {
        type: String,
        default: ','
    }
})

let interval = null;
const displayNumber = ref(0);

const updateNumber = () => {
    clearInterval(interval);

    if (props.number === displayNumber.value) {
        return;
    }

    interval = setInterval(() => {
        if (displayNumber.value !== props.number) {
            const change = (props.number - displayNumber.value) / 10;
            displayNumber.value += change >= 0 ? Math.ceil(change) : Math.floor(change);
        }
    }, 20);
};

onBeforeUnmount(() => {
    clearInterval(interval);
});

function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

const onAppear = document.querySelectorAll('.animated-number');
onAppear.forEach(elem => {

    console.log(elem)
    if (isElementInViewport(elem)) {
        updateNumber();
    }
});

const handleScroll = () => {
    const onAppear = document.querySelectorAll('.animated-number');
    onAppear.forEach(elem => {
        if (isElementInViewport(elem)) {
            updateNumber();
        }
    });
}

window.addEventListener('scroll', handleScroll, false);

handleScroll();
</script>

<template>
    <span class="animated-number">
        <slot name="before"/>{{ displayNumber }}<slot name="after"/>
    </span>
</template>
