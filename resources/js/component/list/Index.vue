<script setup>

const students = [
  {name: 'John', mails: 'john@gmail.com', group: 'Englis'},
  {name: 'John', mails: 'john@gmail.com', group: 'Englis'},
  {name: 'John', mails: 'john@gmail.com', group: 'Englis'},
  {name: 'John', mails: 'john@gmail.com', group: 'Englis'},
  {name: 'John', mails: 'john@gmail.com', group: 'Englis'},
  {name: 'John', mails: 'john@gmail.com', group: 'Englis'},
  {name: 'John', mails: 'john@gmail.com', group: 'Englis'},
];
</script>

<template>
  <div class="flex">
    <div class="card w-1/4 bg-base-100 shadow-xl">
      <figure class="px-10 pt-10">
        <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title">Shoes!</h2>
        <p>If a dog chews shoes whose shoes does he choose?</p>
        <div class="card-actions">
          <button class="btn btn-primary">Buy Now</button>
        </div>
      </div>
    </div>
  </div>
</template>
