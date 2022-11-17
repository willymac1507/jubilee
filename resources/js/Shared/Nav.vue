<!--suppress HtmlUnknownTarget -->
<script setup>
import NavLink from "./NavLink.vue";
</script>

<template>
    <nav>
        <ul class="flex list-none space-x-4 list-inside">
            <li>
                <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
            </li>
            <li>
                <NavLink href="/users" :active="$page.component === 'Users'">Bookings</NavLink>
            </li>
            <li>
                <NavLink href="/settings" :active="$page.component === 'Settings'">Profile</NavLink>
            </li>
            <li>
                <NavLink href="logout" method="post">Log Out</NavLink>
            </li>
        </ul>
    </nav>

</template>


<style scoped>

</style>

