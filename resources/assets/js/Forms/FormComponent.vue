<template>
    <div>
        <template v-for="field in fields">
            <FieldComponent :field="field" :form="form" :fillData="fillData"/>
        </template>
    </div>
</template>

<script>
import Form from "./Form";

export default {
    props: {
        fields: {
            required: true,
            type: Array
        },
        fillData: { default: null }
    },
    created() {
        let fieldNames = {};

        this.fields.forEach(field => {
            if (field.name) {
                fieldNames[field.name] = get(this.fillData, field.name, "");
            }
            const type = field.type || "text";
            if (!componentsMap[type]) {
                throw new Error(type + "form type is not registered");
            }
            this.components.push();
            this.form = new Form(fieldNames);
        });
    },
    computed: {},
    data() {
        return {
            form: new Form({})
        };
    }
};
</script>

<style>

</style>
