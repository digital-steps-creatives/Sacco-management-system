<template>
    <Zoom>
        <component :is="component" :data="field" :form="form"/>
    </Zoom>
</template>

<script>
const componentsMap = {
    text: "InputComponent",
    email: "InputComponent",
    button: "SubmitButton"
};
import get from "lodash/get";
export default {
    props: {
        field: { required: true, type: Object },
        form: { required: true, type: Object },
        fillData: { default: () => {} }
    },
    components: {
        component() {
            return componentsMap[this.field.type];
        }
    }
};
</script>

<style>

</style>
