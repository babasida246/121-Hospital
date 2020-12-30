<template>
    <inertia-link :href="route(link)" :class="IsActive">
       <font-awesome-icon v-if="IconName" :icon="['fas', IconName]" /> <slot></slot>
    </inertia-link>
</template>

<script>
    export default {
        props: ['link','IconName'],
        computed: {
            IsActive() {
                return route().current(this.link)
                            ? 'active'
                            : ''
            }
        }
    }
</script>
