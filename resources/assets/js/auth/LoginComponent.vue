<template>
      <form method="post" @submit.prevent="login">
       <InputComponent label="Email" name="email" :form="form"/>
       <InputComponent label="Password" name="password" :form="form" type="password"/>
       <SubmitButton icon="icon-sign-in" text="Sing In " :form="form"/>
     </form>
</template>

<script>
export default {
  data() {
    return {
      form: new MyForm()
    };
  },
  methods: {
    login() {
      this.form.post("/login").then(data => window.location.reload());
    }
  }
};
</script>

<style>

</style>
