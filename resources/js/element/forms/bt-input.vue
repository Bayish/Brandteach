<script setup>
defineProps({
  modelValue: {
    type: String,
    default: null
  },
  inputId: {
    type: String,
    default: null
  },
  label: {
    type: String,
    default: null
  },
  type: {
    type: String,
    default: null
  },
  placeholder: {
    type: String,
    default: null
  },
})

defineEmits(['update:modelValue']);
</script>

<template>
  <div>
    <label :for="'bt-field-' + inputId" class="label">
      <span class="text-secondary label-text text-xl">{{ label }}</span>
    </label>
    <input
      :id="'bt-field-' + inputId"
      :type="type"
      :placeholder="placeholder"
      readonly
      onfocus="this.removeAttribute('readonly');"
      class="input input-bordered input-accent block text-lg leading-5 w-full py-2 px-3 border-2 border-neutral text-secondary rounded-lg shadow-sm focus:ring focus:ring-neutral-200 bg-accent"
      @input="$emit('update:modelValue', $event.target.value)"
    >
  </div>
</template>





