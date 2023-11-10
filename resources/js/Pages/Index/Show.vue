<template>
        <div>Show page</div>
    <div>
        The message is {{message}}
    </div>
<!--        <Link href="/">Show Page</Link>-->
</template>
<script setup>
    import {Link} from "@inertiajs/vue3";
    defineProps({
        message: {
            default: "The message is not set!",
            type: String
        }
    })
</script>
