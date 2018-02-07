<template>
    <div class="container-fluid">
        <modal-component 
            :show.sync="isCreating"
        >
            <span slot="title">Register A new Member</span>
            <MembersForm @created="memberCreated"/>
        </modal-component>
        <data-table 
            :data="members" 
            title="Regestered Members" 
            :rowClickable="true"
            @rowClicked="showMember"
        >
            <div class="btn-group" slot="icons">
                <button 
                    class="btn  btn-outline-secondary"
                    @click.prevent="isCreating=true"
                >
                    <icon-user-plus/>
                    New Member
                </button>
            </div>
            <tableCol data-key='name' label="Name"></tableCol>
            <tableCol data-key='email' label="Email"></tableCol>
            <tableCol data-key='phoneNumber' label="Phone Number"></tableCol>
        </data-table>
    </div>
   
</template>

<script>
import MembersForm from "./MembersForm";
export default {
    props: ["dataMembers"],
    components: {
        MembersForm
    },
    data() {
        return {
            isCreating: false,
            members: this.dataMembers
        };
    },
    methods: {
        memberCreated(member) {
            Flash.success("Member was created successfully");

            Vue.set(this.members, member.id, member);

            this.isCreating = false;
        },
        showMember(member) {
            Confirmation.confirm("Continue", "View Profile").then(
                done => (window.location = `/members/${member.id}`)
            );
        }
    }
};
</script>

<style>

</style>
