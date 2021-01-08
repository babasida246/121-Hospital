<template>
  <div class="col-lg-6">
    <div class="member d-flex align-items-start">
      <div class="pic">
        <img :src="'/images/doctors/'+this.drProfile.img" class="img-fluid" alt="" />
      </div>
      <div class="member-info">
        <h4>{{this.drProfile.drName}}</h4>
        <span>{{this.drProfile.jobTitle}}</span>
        <p>{{this.drProfile.drInfo}}</p>
        <!-- <div class="social">
          <a href=""><i class="ri-twitter-fill"></i></a>
          <a href=""><i class="ri-facebook-fill"></i></a>
          <a href=""><i class="ri-instagram-fill"></i></a>
          <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
        </div> -->
      </div>
    </div>
  </div>
</template>

<script>
export default {
    props:['drProfile']
};
</script>

<style>
</style>