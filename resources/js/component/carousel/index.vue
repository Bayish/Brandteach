<script setup>
// https://colorlib.com/preview/theme/seogo/

const buttonsWrapper = document.querySelector(".map");
const slides = document.querySelector(".inner");

console.log(buttonsWrapper)

if(buttonsWrapper){
    buttonsWrapper.addEventListener("click", e => {
        if (e.target.nodeName === "BUTTON") {
            Array.from(buttonsWrapper.children).forEach(item =>
                item.classList.remove("active")
            );
            if (e.target.classList.contains("first")) {
                slides.style.transform = "translateX(-0%)";
                e.target.classList.add("active");
            } else if (e.target.classList.contains("second")) {
                slides.style.transform = "translateX(-33.33333333333333%)";
                e.target.classList.add("active");
            } else if (e.target.classList.contains('third')){
                slides.style.transform = 'translatex(-66.6666666667%)';
                e.target.classList.add('active');
            }
        }
    });
}

</script>

<template>
    <div class="center">
        <div class="wrapper">
            <div class="inner">
                <div class="card">
                    <img src="https://colorlib.com/preview/theme/seogo/img/case_study/1.png">
                    <div class="content">
                        <h1>Product Design</h1>
                        <h3>UI/UX, Design</h3>
                    </div>
                </div>
                <div class="card">
                    <img src="https://colorlib.com/preview/theme/seogo/img/case_study/2.png">
                    <div class="content">
                        <h1>Custom Website</h1>
                        <h3>UI/UX, Design</h3>
                    </div>
                </div>
                <div class="card">
                    <img src="https://colorlib.com/preview/theme/seogo/img/case_study/3.png">
                    <div class="content">
                        <h1>Digital Marketing</h1>
                        <h3>UI/UX, Design</h3>
                    </div>
                </div>
                <div class="card">
                    <img src="https://colorlib.com/preview/theme/seogo/img/case_study/1.png">
                    <div class="content">
                        <h1>Digital Marketing</h1>
                        <h3>UI/UX, Design</h3>
                    </div>
                </div>
                <div class="card">
                    <img src="https://colorlib.com/preview/theme/seogo/img/case_study/2.png">
                    <div class="content">
                        <h1>Digital Marketing</h1>
                        <h3>UI/UX, Design</h3>
                    </div>
                </div>
                <div class="card">
                    <img src="https://colorlib.com/preview/theme/seogo/img/case_study/3.png">
                    <div class="content">
                        <h1>Digital Marketing</h1>
                        <h3>UI/UX, Design</h3>
                    </div>
                </div>
                <div class="card">
                    <img src="https://colorlib.com/preview/theme/seogo/img/case_study/1.png">
                    <div class="content">
                        <h1>Digital Marketing</h1>
                        <h3>UI/UX, Design</h3>
                    </div>
                </div>
                <div class="card">
                    <img src="https://colorlib.com/preview/theme/seogo/img/case_study/2.png">
                    <div class="content">
                        <h1>Digital Marketing</h1>
                        <h3>UI/UX, Design</h3>
                    </div>
                </div>
                <div class="card">
                    <img src="https://colorlib.com/preview/theme/seogo/img/case_study/3.png">
                    <div class="content">
                        <h1>Digital Marketing</h1>
                        <h3>UI/UX, Design</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="map">
            <button class="active first"></button>
            <button class="second"></button>
            <button class="third"></button>
        </div>
    </div>
</template>


<style scoped>
.center {
    align-items: center;
    display: flex;
    flex-direction: column;
    height: 100%;
    justify-content: center;
}

.wrapper {
    display: flex;
    grid-gap: 1em;
    overflow: hidden;
    width: 55em;
}

.wrapper > .inner {
    display: flex;
    grid-gap: 1em;
    transition: all 1s ease-in-out;
}

.card {
    border-radius: 0.5em;
    box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
}

.card > img {
    border-top-right-radius: inherit;
    border-top-left-radius: inherit;
    display: block;
    width: 17.5em;
}

.card > .content {
    background: #0a2640;
    border-bottom-left-radius: inherit;
    border-bottom-right-radius: inherit;
    padding: 1em;
    text-align: center;
}

.card > .content > h1,
.card > .content > h3 {
    margin: 0.35em 0;
}

.card > .content > h1 {
    color: #fff;
    font-size: 1.25rem;
    line-height: 1;
}

.card > .content > h3 {
    color: #ccc;
    font-size: 0.9rem;
    font-weight: 300;
}

.map {
    margin-top: 1em;
}

.map > button {
    all: unset;
    background: #001d38;
    cursor: pointer;
    margin: 0 0.125em;
    position: relative;
    user-select: none;
    border-radius: 100%;
    height: 1em;
    width: 1em;
}

.map > button.active:after {
    background: #0a2640;
    content: "";
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    border-radius: 100%;
    height: 0.5em;
    width: 0.5em;
}

</style>
