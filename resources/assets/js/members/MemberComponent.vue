<template>
    <div class="container-fluid">
        <div class="row">   
            <div class="col-md-3 profile">
                <MemberProfile 
                :member.sync="member"
                @accountChanged="selectedAccount=$event"
                />
            </div>
            
            <div class="col-md-9 ml-auto">
                <zoom>
                    <SummaryComponent 
                    :member="member" 
                    v-if="isShowingSummary"
                    />
                </zoom>
            </div>
        </div>
       

    </div>
</template>

<script>
import MemberProfile from "./MemberProfile";
import SummaryComponent from "./accounts/SummaryComponent";
export default {
    props: ["data-member"],
    components: { MemberProfile, SummaryComponent },
    data() {
        return {
            member: this.dataMember,
            //we will default to displaying summary
            selectedAccount: { id: -1 }
        };
    },
    computed: {
        isShowingSummary() {
            return this.selectedAccount.id == -1;
        }
    }
};
</script>

<style>

</style>
