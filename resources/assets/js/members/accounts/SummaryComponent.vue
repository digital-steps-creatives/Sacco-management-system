<template>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Accounts</h4>
                    {{ member.accounts.length }}
                </div>
            </div>
        </div>
      
    </div>
</template>

<script>
export default {
    props: ["member"]
};
</script>

<style>

</style>
