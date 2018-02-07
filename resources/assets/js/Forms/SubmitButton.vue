<template>
    <div class="form-group">
        <button class="btn" :class="btnClass" :disabled="isDisabled">
            <component :is="iconComponent"></component>
            <span v-if="text" v-text="text"></span>
        </button>
    </div>
</template>

<script>
export default {
    props: {
        btnClass: { default: "btn-primary", type: String },
        text: {},
        icon: { default: "icon-save", type: String },
        form: { default: null }
    },
    computed: {
        iconComponent() {
            if (this.form && this.form.isSubmitting) {
                return "icon-spinner";
            }
            return this.icon;
        },
        isDisabled() {
            return this.form ? this.form.errors.any() : false;
        }
    }
};
</script>

<style>

</style>
