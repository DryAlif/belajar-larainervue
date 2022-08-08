<template>
    <Head title="About Us" />
    <AppLayout>
        <h2 class="mt-4 text-2xl">About Us</h2>
        <p>Text About Us</p>
    </AppLayout>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3"
import {Inertia} from "@inertiajs/inertia";
import AppLayout from "../Layouts/App"

export default {
    components: {
        AppLayout, Head
    },
}
</script>
