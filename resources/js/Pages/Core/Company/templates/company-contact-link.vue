<script setup>
import InputSelect from "@/element/forms/input-select.vue";
import InputText from "@/element/forms/input-text.vue";
import {ref} from "vue";

const props = defineProps({
    contact: {
        type: Array,
        default: () => [],
    },
    socialMedias:{
        type: Array,
        default: () => [],
    }
})

console.log(props)

const countOfLinks = ref(props.contact.length);

const addContactLink = (event) => {
    event.preventDefault();
    countOfLinks.value = ++countOfLinks.value;
    props.contact.push({social_media_id: '', link: ''});
};

const removeContactLink = (event, index) => {
    event.preventDefault();
    countOfLinks.value = --countOfLinks.value;
    props.contact.splice(index, 1)
};

</script>

<template>
    <div
        class="w-full flex justify-between items-center"
        v-for="count in countOfLinks"
        :key="count"
    >
        <input-select
            v-model:selected="contact[count - 1].social_media_id"
            :options="socialMedias"
            class="mb-4 w-2/12"
            label="Type"
            :input-id="'company-social-media-' + count"
            :required="true"
        />
        <input-text
            v-model:modelValue="contact[count - 1].link"
            class="mb-4 mx-2 w-8/12"
            label="url"
            :input-id="'company-link-' + count"
            :required="true"
        />
        <div class="flex justify-start items-center w-2/12">
            <button v-if="count < countOfLinks" @click="e =>removeContactLink(e, count)"
                    class="bg-error hover:bg btn mt-8 h-12 w-12 text-2xl text-bold text-accent rounded-full block">
                -
            </button>
            <button @click="e =>addContactLink(e)"
                    class="bg-primary btn mt-8 h-12 w-12 text-2xl text-bold text-accent rounded-full block">
                +
            </button>
        </div>
    </div>
</template>



