<script setup>
import { useContainerStore } from '@/stores/container'

const store = useContainerStore()
</script>

<template>
    <div class="w-[200px]">
        <ul class="text-lg">
            <li>
                <router-link to="/ct/info">
                    <span>Container info</span>
                </router-link>
            </li>
            <li>
                <router-link to="/ct/info/plan" v-if="store.container.name">
                    <span>Select plan</span>
                </router-link>
                <span v-else class="text-gray-300">Select plan</span>
            </li>
            <li>
                <router-link to="/ct/info/domain" v-if="store.container.plan">
                    <span>Custom domain</span>
                </router-link>
                <span v-else class="text-gray-300">Custom domain</span>
            </li>
            <li>
                <router-link to="/ct/info/dns" v-if="store.container.domain">
                    <span>Review</span>
                </router-link>
                <span v-else class="text-gray-300">Finish</span>

            </li>
        </ul>
    </div>
</template>