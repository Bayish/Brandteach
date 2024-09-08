<script setup>
import CrmViewContentHeader from "@/layout/crm-layout/crm-view-content-header.vue";
import {useForm} from "@inertiajs/vue3";
import InputMedia from "@/element/forms/input-media.vue";
import InputText from "@/element/forms/input-text.vue";
import InputSelect from "@/element/forms/input-select.vue";
import ButtonSave from "@/element/buttons/button-save.vue";
import InputMail from "@/element/forms/input-mail.vue";
import InputPhone from "@/element/forms/input-phone.vue";
import {filterOptions} from "@/utilities/form";
import CompanyContactLink from "@/Pages/Core/Company/templates/company-contact-link.vue";

const props = defineProps({
    memberships: {
        type: Array,
        default: () => [],
    },
    countries: {
        type: Array,
        default: null
    },
    socialMedias: {
        type: Array,
        default: null
    },
})

const form = useForm({
    name: '',
    surname: '',
    email: '',
    password: '',
    media: '',
    user_id: null,
    language_id: null,
    country_id: '',
    city_id: '',
    street: '',
    house_number: '',
    phone_number: '',
    contactLinks: [{
        social_media_id: '',
        link: ''
    }]
});

const onSubmit = () => {

}

</script>
<template>
    <crm-view-content-header
        pageTitle="User create"
    />
    <div
        class="bg-accent rounded-3xl h-full w-full overflow-hidden mb-4 flex-1 flex mx-auto shadow-md before:h-4 after:h-4  mr-auto flex-col">
        <div class="overflow-y-auto h-full px-4 lg:px-8">
            <div class="max-w-3xl  mx-auto h-full flex-1 flex flex-col">
                <h3 class="text-info font-bold text-xl my-4">General Settings</h3>
                <form class="w-full" @submit="onSubmit">
                    <div class="w-full">
                        <div class="w-full flex justify-between items-end">
                            <input-text
                                v-model:modelValue="form.name"
                                class="mb-4 w-6/12"
                                label="User name"
                                input-id="user-name"
                            />
                            <input-text
                                v-model:modelValue="form.surname"
                                class="mb-4 w-6/12"
                                label="User surname"
                                input-id="user-surname"
                            />
                        </div>
                        <div class="w-full flex justify-between items-end">
                            <div class="w-6/12">
                                <input-text
                                    v-model:modelValue="form.password"
                                    class="mb-4 w-full"
                                    label="User password"
                                    input-id="user-password"
                                />
                                <input-text
                                    v-model:modelValue="form.password"
                                    class="mb-4 w-full"
                                    label="User name"
                                    input-id="user-name"
                                />
                            </div>
                            <input-media
                                class="w-7/12 mr-auto"
                                v-model:file="form.media"
                                placeholder-title="Upload logo"
                                placeholder-text="Choose photo size should be less than 2mb and should be in JPG, PNG, or GIF format."
                                button-text="Upload"
                            />
                        </div>
                        <h4 class="text-info font-bold text-lg my-4">Contact</h4>
                        <div class="w-full flex justify-between">
                            <input-mail
                                v-model:modelValue="form.email"
                                placeholder="user@mail.com"
                                class="mb-4 w-1/2"
                                label="User mail"
                                input-id="user-mail"
                            />
                            <input-phone
                                v-model:modelValue="form.phone_number"
                                placeholder="+9967777..."
                                class="ml-2 mb-4 w-1/2"
                                label="User phone number"
                                input-id="user-phone-number"
                            />
                        </div>
                        <company-contact-link
                            :contact="form.contactLinks"
                            :social-medias="socialMedias"
                        />
                        <h4 class="text-info font-bold text-lg my-4">Address</h4>
                        <div class="w-full flex justify-between items-center">
                            <input-select
                                v-model:selected="form.country_id"
                                :options="countries"
                                class="mb-4 w-2/3"
                                label="County"
                                input-id="user-country"
                            />
                            <input-select
                                v-model:selected="form.city_id"
                                :disabled="!form.country_id"
                                :options="filterOptions(countries, form.country_id)"
                                class="ml-2  mb-4 w-2/3"
                                label="City"
                                input-id="user-city"
                            />
                        </div>
                        <div class="w-full flex justify-between items-center">
                            <input-text
                                v-model:modelValue="form.street"
                                class="mb-4 w-2/3"
                                label="Street"
                                input-id="user-street"
                            />
                            <input-text
                                v-model:modelValue="form.house_number"
                                class="ml-2  mb-4 w-1/3"
                                label="House number"
                                input-id="user-house-number"
                            />
                        </div>
                        <button-save class="!justify-end my-6" text="Save" @click="onSubmit"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
