<template>
    <inertia-link :href="route(link)" :class="IsActive">
       <font-awesome-icon :icon="['fas', iconname]" /> <slot></slot>
    </inertia-link>
</template>

<script>
    export default {
        props: ['link','iconname'],
        computed: {
            IsActive() {
                return route().current(this.link)
                            ? 'active'
                            : ''
            }
        }
    }
</script>
