
<script setup>
import { useContainerStore } from '@/stores/container'
import { useRouter } from 'vue-router';

const router = useRouter();
const container = useContainerStore()
const handleSubmit = () => {
    router.push('/ct/info/dns');
}
</script>

<template>
    <div>
        <form @submit.prevent="handleSubmit">
            <div class="mb-6">
                <label for="container_domain"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Domain</label>
                <input name="container_domain" id="container_domain" :value="container.domain"
                    @input="event => container.update({ domain: event.target.value })"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" required>
            </div>
            <div class="mb-6">
                <label for="container_subdomain"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subdomain</label>
                <input name="container_subdomain" id="container_subdomain" :value="container.subdomain"
                    @input="event => container.update({ subdomain: event.target.value })"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" required>
            </div>
            <router-link to="/ct/info/plan">
                <span>Back to Container info</span>
            </router-link>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Continue</button>
        </form>
    </div>
</template>
