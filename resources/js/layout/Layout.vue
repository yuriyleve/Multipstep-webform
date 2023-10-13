<script setup>
import { computed, watch, ref } from 'vue';
import Topbar from './Topbar.vue';
</script>

<template>
    <div class="h-full">
        <div class="flex">
            <Topbar></Topbar>
        </div>
        <div class="pt-20">
            <router-view></router-view>
        </div>
    </div>
</template>

<style scoped></style>
