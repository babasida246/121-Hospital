<template>
    <inertia-link :href="route(link)" :class="IsActive">
       <font-awesome-icon :icon="['fas', 'link']" /> <slot></slot>
    </inertia-link>
</template>

<script>
    export default {
        props: ['link'],
        computed: {
            IsActive() {
                return route().current(this.link)
                            ? 'active'
                            : ''
            }
        }
    }
</script>
