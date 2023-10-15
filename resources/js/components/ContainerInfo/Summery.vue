<script setup>
import { useContainerStore } from '@/stores/container'

const store = useContainerStore()

const getPlanById = (id, key) => {
    const plan = store.plans.value?.find(item => item.id === id);
    return plan ? plan[key] : '';
}

const getLocationById = (id, key) => {
    const location = store.server_locations.value?.find(item => item.id === id);
    return location ? location[key] : '';
}
</script>

<template>
    <div v-if="store.container.page !== 1"
        class="max-w-sm ml-6 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div v-if="store.container.page > 1">
            <h2 class="text-xl font-bold">Summary</h2>
            <h3 class="underline mt-2">Container info</h3>
            Container name: {{ store.container.container_name }}<br />
            Container config: {{ store.container.container_config ?? 'not set' }}<br />
            Container location: {{ getLocationById(store.container.container_location, "server_location_name") }}<br />
        </div>
        <div v-if="store.container.page > 2">
            <h3 class="underline mt-2">Selected plan</h3>
            Plan:{{ getPlanById(store.container.container_plan, "plan_name") }}<br />
            Billing period: {{ store.container.container_billing_period == 1 ? 'Monthly' : 'Yearly' }}<br />
            Autoupgrade: {{ store.container.container_plan_autoupgrade ? 'Yes' : 'No' }}<br />
        </div>
        <div v-if="store.container.page > 3">
            <h3 class="underline mt-2">Domain settings</h3>
            Domain: {{ store.container.container_domain }}<br />
            Subdomain: {{ store.container.container_subdomain }}<br />
        </div>
    </div>
</template>