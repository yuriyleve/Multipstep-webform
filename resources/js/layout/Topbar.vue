<script setup>
import { ref } from 'vue';
import { useRouter } from 'vue-router';
import { useContainerStore } from '@/stores/container'

const router = useRouter();
const store = useContainerStore()
const items = ref([
    {
        label: 'Home',
        to: '/'
    },
    {
        label: 'Containers',
        to: '/ct/containers'
    },
    {
        label: 'Blog',
        to: '/ct/blog'
    },
    {
        label: 'About us',
        to: '/ct/about'
    },
    {
        label: 'Create container',
        to: '/ct/info'
    },
]);
const onCreateContainer = () => {
    store.reset()
    router.push('/ct/info');
};
</script>

<template>
    <div class="w-full shadow-lg fixed bg-white z-50 pb-14">
        <div class="fixed w-full z-50">
            <header class=" flex justify-around items-center px-4 md:px-12 h-14 transition-all duration-400 z-50">
                <router-link to="/">
                    <span class="relative font-semibold text-3xl text-gray-900">Stagger</span>
                </router-link>
                <nav>
                    <button name="menu-toggle" class="md:hidden" x-on:click="navbarOpen = !navbarOpen">
                        <svg class="w-6 h-6 text-gray-900" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 20 20" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <ul class="
                    fixed
                    left-0
                    right-0
                    transition
                    duration-200
                    transform
                    translate-x-full
                    p-4
                    mt-4 md:mt-5
                    font-bold
                    md:relative md:flex md:min-h-0 md:space-y-0 md:p-0 md:translate-x-0 md:space-x-4 md:m-4
                ">
                        <li v-for="item in items">
                            <span v-if="item.to === '/ct/info'" @click="onCreateContainer()"
                                class="cursor-pointer bg-blue-500 text-white ring-2 rounded-lg p-2 md:py-2 md:px-2 mt-4">
                                <span>{{ item.label }}</span>
                            </span>

                            <router-link v-else :to=item.to class="p-2 md:py-6 md:px-2">
                                <span>{{ item.label }}</span>
                            </router-link>
                        </li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>
</template>

<style scoped>
.nav-dropdown {
    width: 200px;
}
</style>
