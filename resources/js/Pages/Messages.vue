<template>
    <div v-for="(message, index) in messages" :key="index" class="bg-blue-500 mb-4 p-8 rounded shadow">
        {{message.text}}
    </div>

    <div class="flex flex-col justify-center items-center mt-4">
        <h2 class="text-3xl font-extrabold mb-12 text-green-500 border-b-4 border-green-500">
            Add a message
        </h2>
        <form @submit.prevent="submit">
            <textarea v-model="form.text" rows="8"></textarea>
            <div v-if="errors.text" class="text-red-300">{{errors.text}}</div>
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add a Message</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: "Messages",
    props: {
        messages: Array,
        errors: Object,
    },
    data() {
        return {
            form: { text: ""}
        };
    },
    methods: {
        submit() {
            this.$inertia.post('/messages', this.form)
        }
    }
};
</script>

<style scoped>

</style>
