<template>
    <a :href="href" class="nav-link nav-item" :class="{active:isActive}">
        <slot></slot>
    </a>
</template>

<script>
export default {
    props: {
        href: { default: "#" }
    },
    computed: {
        isActive() {
            if (this.href == "#") {
                return false;
            }
            return window.location.pathname.includes(this.href);
        }
    }
};
</script>

<style scoped lang="scss">
@import "resources/assets/sass/variables";
a {
    font-size: 1rem;
    font-weight: 600;
    &:hover {
        svg {
            fill: $info;
        }
        color: $info;
    }

    &.active {
        color: $info;
        padding-bottom: 0;
        margin-bottom: 0;

        border-bottom: 2px solid $primary;
    }
}
</style>
