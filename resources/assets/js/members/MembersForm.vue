<template>
    <form method="post" @submit.prevent="submit">
        <InputComponent :form="form" label="Name" name="name"/>
        <InputComponent :form="form" label="Email Address" name="email" type="email"/>
        <InputComponent :form="form" label="Telephone Number" name="phoneNumber"/>
        <SubmitButton :form="form" text="Register"/>
    </form>
        
</template>

<script>
export default {
    data() {
        return {
            form: new MyForm({})
        };
    },
    methods: {
        submit() {
            this.form
                .post("/members")
                .then(({ data }) => this.$emit("created", data))
                .catch(errors =>
                    Flash.error("Something went wrong! please try again")
                );
        }
    }
};
</script>

<style>

</style>
