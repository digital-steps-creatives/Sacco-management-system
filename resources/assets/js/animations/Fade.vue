<template>
     <transition
     enter-active-class="animated fadeIn"
     leave-active-class="animated fadeOut"
     appear
    mode="in-out"
     >
     <slot></slot>
    </transition>
</template>

<script>
export default {};
</script>


