<template>
    <div class="py-12 flex flex-col justify-center items-center">
        <div class="mb-4 max-w-xs">
            <input type="search" v-model="params.search" aria-label="Search" placeholder="Search..." class="block w-full rounded-md border-gray-300">
        </div>
    </div>
    <div class="flex flex-col justify-center items-center bg-white">
        <div v-for="(user) in users.data" :key="user.id" class="bg-blue-500 mb-4 p-8 rounded shadow">
            {{user.name}}
        </div>
    </div>
</template>

<script>


export default {
    props: {
        users: Object
    },
    data() {
        return {
            params: {
                search: null
            }
        }
    },
    watch: {
        params: {
            handler() {
                this.$inertia.get(this.route('search'), this.params, {replace: true, preserveState: true});
            },
            deep: true,
        }
    }
}
</script>

<style scoped>

</style>
