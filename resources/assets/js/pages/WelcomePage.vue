<template>
  <div class="main" >
    <Zoom>
      <div class="content card mx-2">
        <div class="card-body py-5">

         <div  class="flex-between">
          <div>
            <img src="/images/mak-logo-sm.png" class="img-thumbnail">
          </div>
          <div class="content">
            <h1 class="text-muted font-weight-bold display-3 text-center">FIC Management System</h1>
            <div class="description">
              <p class="h3 text-center">
                An intra-net <strong class="text-primary">Lan</strong> Based System form Managing <strong class="text-primary">FIC</strong> transactions
              </p>

              <div class="flex-center">
                <a href="#" 
                class="
                thick-button
                btn btn-outline-primary btn-lg"
                @click.prevent="isLoggingIn=!isLoggingIn"
                >
                Login Form
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>
</Zoom> 
 <modal-component :show.sync='isLoggingIn' size="medium">
  <span slot="title">Login Page</span>
   <LoginComponent></LoginComponent>
 </modal-component>  
</div> 
</template>

<script>
import Zoom from "../animations/Zoom";
import LoginComponent from "../auth/LoginComponent";
export default {
  components: { Zoom, LoginComponent },
  data() {
    return {
      isLoggingIn: false
    };
  }
};
</script>

<style lang="scss" scoped>
@import "resources/assets/sass/variables";
.main {
  height: 98vh;
  display: flex;
  //margin: 1px
  overflow: hidden;
  align-items: center;
  .thick-button {
    border-width: 3px;
    border-radius: 1.5rem;
    font-size: 2rem;
  }
  .content {
    flex-grow: 1;
  }
}
</style>
