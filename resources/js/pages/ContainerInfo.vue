<script setup>
import Navbar from '@/components/Navbar.vue';
import Summery from '@/components/ContainerInfo/Summery.vue';
</script>

<template>
    <div class="max-w-5xl m-auto">
        <div class="border-b-2">
            <h1 class="text-3xl mb-2">Create Container</h1>
        </div>
        <div class="flex mt-2">
            <Navbar></Navbar>
            <div class="w-3/5">
                <router-view></router-view>
            </div>
            <Summery></Summery>
        </div>
    </div>
</template>

<style scoped></style>
