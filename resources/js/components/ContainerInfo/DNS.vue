
<script setup>
import { useContainerStore } from '@/stores/container'
import { useRouter } from 'vue-router';
import ContainerService from "@/service/ContainerService";

const router = useRouter();
const store = useContainerStore()
const handleSubmit = async () => {
    await ContainerService.createContainer(store);

    store.reset();
    router.push('/ct/containers');
}
</script>

<template>
    <div>
        <form @submit.prevent="handleSubmit">
            <div class="mb-6">
                <div class="flex justify-content">
                    <label for="container_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Add
                        this DNS record</label>
                    <div
                        class="ml-3 relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5 text-sm ml-auto">
                        <span class="absolute flex-shrink-0 flex items-center justify-center">
                            <div class="w-full h-full min-h-full flex justify-center items-center" bis_skin_checked="1"><svg
                                    class="animate-spin h-3 w-3 text-cyan-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg></div>
                        </span><span class="ml-5 font-medium text-yellow-700">Awaiting DNS configuration</span>
                    </div>
                </div>
                <div class="mt-4">
                    Now you need to update A records for your custom domain, and you can do that on your domain provider's
                    website. A DNS change requires time to propagate worldwide. Most often, this happens in a matter of
                    hours.
                </div>
                <div class="flex justify-between mt-4">
                    <div class="grid grid-cols-4 gaps-4">
                        <div>Name</div>
                        <div>TTL</div>
                        <div>Type</div>
                        <div>Record</div>
                        <div>{{ store.container.subdomain }}.{{ store.container.domain }}</div>
                        <div>300</div>
                        <div>A</div>
                        <div>51.195.44.157 <button>Copy</button></div>
                    </div>
                    <div class="">
                        <button type="submit"
                            class="text-black bg-white ring-black ring-1 font-medium rounded-lg text-sm w-full sm:w-auto p-1 text-center">Validate</button>
                    </div>
                </div>
            </div>
            <router-link to="/ct/info/domain">
                <span>Back to Custom domain</span>
            </router-link>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Go
                to payment</button>
        </form>
    </div>
</template>
