<template>
    <inertia-link :href="route(link)" :class="classes">
        <slot></slot>
    </inertia-link>
</template>

<script>
    export default {
        props: ['link'],
        computed: {
            classes() {
                return route().current(this.link)
                            ? 'active'
                            : ''
            }
        }
    }
</script>
