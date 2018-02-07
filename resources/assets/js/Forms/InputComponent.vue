<template>
    <div class="form-group">
        <label v-if="label" v-text="label"/>
        <input 
            :type="type" 
            v-model="form[name]" 
            class="form-control" 
            :name="name" 
            @keydown="clearError(form, name)"
        >
        <bounce>
            <span class="form-text text-danger" v-if="hasError" v-text="firstError"/>
        </bounce>
    </div>
</template>

<script>
import debounce from "lodash/debounce";
export default {
    props: {
        form: { required: true, type: Object },
        name: { required: true, type: String },
        label: { default: null, type: String },
        type: { default: "text", type: String }
    },
    mounted() {
        this.form.updateField(this.name, "");
    },
    computed: {
        value: {
            get() {
                return this.form[this.name];
            },
            set(value) {
                this.form.updateField(this.name, value);
            }
        },
        firstError() {
            return this.form.errors.first(this.name);
        },

        hasError() {
            return this.form.errors.has(this.name);
        }
    },
    methods: {
        clearError: debounce(function(form, name) {
            form.errors.clear(name);
        }, 100)
    }
};
</script>

<style>

</style>
