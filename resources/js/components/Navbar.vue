<script setup>
import { useContainerStore } from '@/stores/container'

const store = useContainerStore()
</script>

<template>
    <div class="w-[200px]">
        <ul class="text-lg">
            <li>
                <router-link to="/ct/info">
                    <span :class="{ 'font-bold': store.container.page === 1 }">Container info</span>
                </router-link>
            </li>
            <li>
                <router-link to="/ct/info/plan" v-if="store.container.page > 1">
                    <span :class="{ 'font-bold': store.container.page === 2 }">Select plan</span>
                </router-link>
                <span v-else class="text-gray-300">Select plan</span>
            </li>
            <li>
                <router-link to="/ct/info/domain" v-if="store.container.page > 2">
                    <span :class="{ 'font-bold': store.container.page === 3 }">Custom domain</span>
                </router-link>
                <span v-else class="text-gray-300">Custom domain</span>
            </li>
            <li>
                <router-link to="/ct/info/dns" v-if="store.container.page > 3">
                    <span :class="{ 'font-bold': store.container.page === 4 }">Review</span>
                </router-link>
                <span v-else class="text-gray-300">Finish</span>

            </li>
        </ul>
    </div>
</template>