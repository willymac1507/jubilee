<script setup>
defineProps({
    active: Boolean,
});
</script>

<template>
    <Link
        class="text-blue-500 text-sm hover:underline"
        :class="{ 'font-bold': active }"
    >
        <slot />
    </Link>
</template>

<style />
