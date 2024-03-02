<script setup>
defineProps({
  checked: {
    type: Boolean,
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
});

defineEmits(['update:checked']);

</script>

<template>
  <div class="flex justify-between items-center">
    <input
      :id="'bt-checkbox-' + inputId"
      type="checkbox"
      :checked="checked"
      class="checkbox checkbox-primary text-white [--chkbg:oklch(var(--a))] [--chkfg:oklch(var(--p))]"
      @change="$emit('update:checked', !checked)"
    />
    <label :for="'bt-checkbox-' + inputId" class="label cursor-pointer">
      <span class="label-text text-base text-secondary">{{ label }}</span>
    </label>
  </div>
</template>





