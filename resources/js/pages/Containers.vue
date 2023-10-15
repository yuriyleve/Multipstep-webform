
<script setup>
import { ref, onMounted } from "vue";
import ContainerService from "@/service/ContainerService";

const usercontainers = ref();
const plans = ref();

onMounted(() => {
    ContainerService.getContainers().then((data) => {
        plans.value = data.plans
        usercontainers.value = data.usercontainers
    });
});

const getPlanById = (id, key) => {
    const plan = plans.value.find(item => item.id === id);
    return plan[key];
}

</script>

<template>
    <div class="max-w-5xl m-auto">
        <div class="border-b-2">
            <h1 class="text-3xl mb-2">Containers</h1>
        </div>
        <div class="grid grid-cols-8 mt-2 gap-y-4">
            <div class="col-span-2 font-bold">Name</div>
            <div class="font-bold">Usage</div>
            <div class="col-span-2 font-bold">Expires on</div>
            <div class="font-bold">Status</div>
            <div class="font-bold">Plan</div>
            <div></div>
            <div v-for="usercontainer in usercontainers" :key="usercontainer.id" class="col-span-8 grid grid-cols-8">
                <div class="col-span-2">{{ usercontainer.container_id }}</div>
                <div>49 / {{ getPlanById(usercontainer.container_plan, "plan_max_requests") }}</div>
                <div class="col-span-2">{{ usercontainer.container_next_billing_cycle }}</div>
                <div>{{ usercontainer.container_status ? 'Active' : 'Disactive' }}</div>
                <div> {{ getPlanById(usercontainer.container_plan, "plan_name") }}</div>
                <div>
                    <router-link :to="`/ct/view/${usercontainer.id}`">
                        <span class="btn btn-sm btn-bg-light btn-active-color-primary">View</span>
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>
