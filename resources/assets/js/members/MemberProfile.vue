<template>
  <div>
    <div class="profile">
      <div class="card">
        <div class="card-body">
          <div class="flex-center mb-1">
           <img src="" alt="" v-if="member.avatarPath">
           <icon-user v-else width="80px" height="80px" ></icon-user> 
         </div>
         <h4 v-text="member.name" class="text-secondary text-center"></h4>
         <div class="btn-group flex-center">
          <button 
          class="btn btn-outline-secondary" 
          title="New Account"
          @click.prevent="addAccount"
          >
          <i class="fa fa-plus"></i>
        </button>
        <button 
        class="btn btn-outline-secondary" 
        title="Upload Avatar"
        @click.prevent="isUploadingImage=true"
        >
        <i class="fa fa-camera"></i>
      </button>
      <button class="btn btn-outline-secondary" title="Edit Profile">
        <i class="fa fa-edit"></i>
      </button>
      <button class="btn btn-outline-secondary" title="Delete Member">
        <i class="fa fa-trash"></i>
      </button>
    </div>
  </div>
</div>
<div class="list-group mt-2">
  <a class="list-group-item">
    <h6><strong>Accounts</strong></h6>
  </a>

  <a href="#" 
  @click.prevent="accountChanged({id:-1})"
  class="list-group-item list-group-item-action" 
  :class="{'bordered-left':isActive(-1)}">
  <i class="fa fa-link mr-2"></i>
  Summary
</a>
<a href="#" 
@click="accountChanged(account)"
:class="{'bordered-left':isActive(account.id)}"
class="list-group-item list-group-item-action flex-between"
v-for="account in accounts"
>
<span>
  <i class="fa fa-link mr-2"></i>
  {{ account.number }}
</span>
<span v-text="account.balance" class="badge badge-pill badge-primary"></span>


</a>
</div>
<ul class="list-group  mt-2">
  <li class="list-group-item ">
    <h6><strong>Bio Data</strong></h6>
  </li>
  <li class="list-group-item flex-between">
    <span>Email:</span>
    <span v-text="member.email"></span>
  </li>

  <li class="list-group-item flex-between">
    <span>Phone:</span>
    <span v-text="member.phoneNumber"></span>
  </li>

  <li class="list-group-item flex-between">
    <span>Accounts:</span>
    <span v-text="member.accounts.length" class="badge badge-pill badge-primary"></span>
  </li>
</ul>
</div>
<!-- upload Image -->
<modal-component 
  :show.sync="isUploadingImage"
  size="medium" 
  @close="isUploadingImage=false"
>
  <span slot="title"> {{ member.name }} (Photo)</span>
  <ImageUploader></ImageUploader>
</modal-component>
</div>
</template>

<script>
import ImageUploader from "../components/ImageUploader";
export default {
  components: { ImageUploader },
  props: ["member"],
  data() {
    return {
      activeAccountId: -1,
      isUploadingImage: false
    };
  },
  computed: {
    accounts() {
      return this.member.accounts;
    }
  },
  methods: {
    addAccount() {
      Confirmation.confirm("New Account will be created").then(cornfirmed => {
        axios.post(`/members/${this.member.id}/accounts`).then(({ data }) => {
          Flash.success("Account was created successful");
          let member = this.member;
          member.accounts.push(data);
          this.$emit("update:member", member);
        });
      });
    },
    accountChanged(account) {
      this.activeAccountId = account.id;
      this.$emit("accountChanged", account);
    },
    isActive(id) {
      return id == this.activeAccountId;
    }
  }
};
</script>

<style scoped lang="scss">
.profile {
  position: fixed;
  top: 70px;
  height: 80vh;
  overflow-y: scroll;
}
</style>
