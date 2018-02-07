<template>
    <div class="root">

       <div class="flex-center">
           <div 
                class="img-thumbnail viewer relative"
                @mouseenter="isHovering=true"
                @mouseleave="isHovering=false"
            >
            <zoom>
                <div v-if="isHovering" class="overlay absolute flex-center">
                    <label class="btn btn-outline-secondary " for="openUploader" >
                        <i class="fa fa-camera"></i>
                    </label>
                </div>
          
         </zoom>
         <icon-user  width="180px" height="180px" ></icon-user> 
     </div>
 </div>


 <input type="file" class="uploader" accept="image/*" id="openUploader" @change="uploadImage">
</div>
</template>

<script>
export default {
    data() {
        return {
            isHovering: false
        };
    },
    methods: {
        uploadImage(e) {
            console.log(e);
        }
    }
};
</script>

<style>
.uploader {
    opacity: 0;
}
.overlay {
    top: 0;
    bottom: 0;
    background-color: #000;
    opacity: 0.5;
    left: 0;

    right: 0;
    z-index: 1;
}
</style>
