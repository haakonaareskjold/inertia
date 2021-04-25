<template>
    <div v-for="(message, index) in messages" :key="index">
        {{message.text}}
    </div>
</template>

<script>
export default {
    name: "Messages",
    props: {
        messages: Array
    }
}
</script>

<style scoped>

</style>
