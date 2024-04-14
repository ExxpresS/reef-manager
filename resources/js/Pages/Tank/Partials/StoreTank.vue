<script setup>
import {reactive} from 'vue'
import {router} from '@inertiajs/vue3'
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import {Link, useForm, usePage} from '@inertiajs/vue3';


const form = useForm({
    litre: 'null',
    title: 'null',
    date_add: 'null',
});

function submit() {
    router.post(route('tank.store'), form)
}

console.log(form)
</script>

<template>
    <form @submit.prevent="submit">
        <div>
            <InputLabel for="title" value="Titre"/>

            <TextInput
                id="title"
                type="text"
                class="mt-1 block w-full"
                v-model="form.title"
                required
                autofocus
                autocomplete="Nom"
            />

            <InputError class="mt-2" :message="form.errors.title"/>
        </div>

        <div>
            <InputLabel for="litre" value="litre"/>

            <TextInput
                id="litre"
                type="text"
                class="mt-1 block w-full"
                v-model="form.litre"
                required
                autofocus
                autocomplete="litre"
            />

            <InputError class="mt-2" :message="form.errors.title"/>
        </div>

        <label for="date_add">date</label>
        <input id="date_add" v-model="form.date_add"/>

        <div class="flex items-center gap-4">
            <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

            <Transition
                enter-active-class="transition ease-in-out"
                enter-from-class="opacity-0"
                leave-active-class="transition ease-in-out"
                leave-to-class="opacity-0"
            >
                <p v-if="form.recentlySuccessful" class="text-sm text-gray-600 dark:text-gray-400">Saved.</p>
            </Transition>
        </div>
    </form>
</template>
