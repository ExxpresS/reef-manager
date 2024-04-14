<script setup>
import {reactive} from 'vue'
import {router} from '@inertiajs/vue3'

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
    <el-form
        label-position="top"
        label-width="auto"
        :model="formLabelAlign"
        style="max-width: 600px"
    >
        <el-form-item label="Name">
            <el-input v-model="useForm.title" />
        </el-form-item>
        <el-form-item label="Activity zone">
            <el-input v-model="useForm.litre" />
        </el-form-item>
        <el-form-item label="Activity form">
            <el-input v-model="useForm.date_add" />
        </el-form-item>
    </el-form>

<!--    -->
</template>
