<script setup>

import Calendar from '../Shared/Calendar.vue';

    defineProps({
        'bookings': Object,
    })
</script>

<template>
    <Calendar />
    <div class="border rounded" v-for="booking in bookings">
        {{ booking.title }}
    </div>

</template>

<style/>
