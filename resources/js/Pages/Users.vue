<template>
   <div class="flex flex-col justify-center items-center bg-white">
       <div v-for="(user, index) in users" :key="index" class="bg-blue-500 mb-4 p-8 rounded shadow">
           {{user.name}}
       </div>
   </div>
</template>

<script>
import Input from "../Components/Input";
export default {
    name: "users",
    components: {Input},
    props: {
        users: Array
    },
}
</script>

<style scoped>

</style>
