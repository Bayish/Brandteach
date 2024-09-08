<script setup>
import Logo from "@/layout/header/Logo.vue";
import Link from "@/layout/navigation/Link.vue";
import BtInput from "@/element/forms/bt-input.vue";
import ButtonIcon from "@/element/buttons/button-icon.vue";
import BtCheckbox from "@/element/forms/bt-checkbox.vue";
import { Head, useForm } from '@inertiajs/vue3'

defineProps({
  canResetPassword: Boolean,
  status: String
});

const form = useForm({
  email: '',
  password: '',
  remember: false
});

const submit = () => {
    form.post(route('login'));
}


</script>

<template>
  <div class="flex flex-row justify-center align-center h-screen p-6 max-w-screen-2xl mx-auto">
    <div class="w-1/2 bg-primary rounded-l-2xl flex flex-col justify-center items-center p-6">
      <div class="w-2/3 flex justify-start items-end">
        <Logo class="w-24"/>
        <div><span class="text-accent pl-3 text-2xl font-bold">CRM Platform</span></div>
      </div>
      <h2 class="mt-8 w-2/3 text-4xl text-accent text-left font-bold">Your place to work <br/>Plan. Create. Control.</h2>
      <div class="w-2/3 mt-8"><img src="/img/auth/Illustration.png" alt="Man on the board"></div>
    </div>
    <div class="w-1/2 bg-accent rounded-r-2xl flex flex-col justify-center items-center">
      <h2 class="text-4xl text-info font-bold text-center">Sign In</h2>
      <form autocomplete="off" class="max-w-sm w-full mt-10" @submit.prevent="submit">
        <bt-input v-model:modelValue="form.email" input-id="user-email" label="Email Address" type="email" placeholder="jane@example.com"/>
        <bt-input v-model:modelValue="form.password" input-id="user-password" class="mt-6" label="Password" type="password" placeholder="********"/>
        <div class="mt-6 flex justify-between items-center">
          <bt-checkbox  v-model:checked="form.remember" input-id="user-remember" label="Remember me" />
          <Link class="text-secondary hover:text-primary hover:underline text-center">Forget Password?</Link>
        </div>
        <button-icon type="submit" label="Sign In" icon-type="fas" icon="arrow-right"/>
        <Link class="text-primary hover:text-secondary hover:underline mt-6 text-center">Don't have an account</Link>
      </form>
    </div>
  </div>
</template>


