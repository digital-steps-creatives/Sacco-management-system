<template>
    <modal-component 
        :show="isCreating"
         @closed="$emit('update:isCreating',false)"
    >
        <span slot="title">Register A new Member</span>
        <MembersForm @done="done"/>
    </modal-component>
</template>

<script>
import MembersForm from "./MembersForm";
export default {
    props: ["isCreating"],
    components: { MembersForm },
    data() {
        return {};
    },
    methods: {
        done() {
            this.$emit("update:isCreating", false);
            Flash.success("member was registered successfully");
        }
    }
};
</script>

<style>

</style>
