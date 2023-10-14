
<script setup>
import { useContainerStore } from '@/stores/container'
import { ref, onMounted } from "vue";
import { useRouter } from 'vue-router';
import ContainerService from "@/service/ContainerService";

const router = useRouter();
const store = useContainerStore()
const server_locations = ref();
const handleSubmit = () => {
    store.update({ page: 2 })
    router.push('/ct/info/plan');
}

onMounted(async () => {
    server_locations.value = await ContainerService.getServerLocations();
});

</script>

<template>
    <div>
        <form @submit.prevent="handleSubmit">
            <div class="mb-6">
                <label for="container_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Container
                    name</label>
                <input name="container_name" id="container_name" :value="store.container.name"
                    @input="event => store.update({ name: event.target.value })"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" required>
            </div>
            <div class="mb-6">
                <label for="container_config" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Container
                    config</label>
                <input name="container_config" id="container_config" :value="store.container.config"
                    @input="event => store.update({ config: event.target.value })"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="container_location"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Container location</label>
                <select name="container_location" id="container_location" :value="store.container.location"
                    @input="event => store.update({ location: event.target.value })"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option v-for="option in server_locations" :value="option.id">
                        {{ option.server_location_name }}
                    </option>
                </select>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Continue</button>
        </form>
    </div>
</template>
