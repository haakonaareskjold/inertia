<template>
    <div v-for="(user, index) in users" :key="index">
        {{user.name}}
    </div>
</template>

<script>
export default {
    name: "users",
    props: {
        users: Array
    }
}
</script>

<style scoped>

</style>
