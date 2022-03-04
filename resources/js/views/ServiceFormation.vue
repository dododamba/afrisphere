<template>

   <div class="app-contact">


<section id="services" class="services">
      <div class="container">

       <div class="section-title">
          <h2>{{$t('header.formation')}}</h2>
                    <h4>Pack Office, Codage informatique, mise à niveau</h4>

        </div>

     
      <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <img src="services/office.png" alt="" style="width: 100px; height: auto">
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">{{$t('service.s-1-m')}}</h5>
                                <p class="edu_desc mt-3 mb-0 text-muted">
                                        {{$t('service.s-1-n')}}
                                </p>
                            </div>
                             <div class="text-center"><router-link to="/contact" class="sweet-button">
                            {{$t('header.contact')}} 
                            </router-link></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <img src="services/programming.png" style="width: 100px; height: auto">
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">{{$t('service.s-1-o')}}</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">
                                {{$t('service.s-1-p')}}
                                </p>
                            </div>
                             <div class="text-center"><router-link to="/contact" class="sweet-button">
                            {{$t('header.contact')}} 
                            </router-link></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <img src="services/more.png" alt="" style="width: 100px; height: auto">
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">{{$t('service.s-1-q')}} </h5>
                                <p class="edu_desc mb-0 mt-3 text-muted"> 
                                            {{$t('service.s-1-r')}}
                                </p>
                            </div>
                             <div class="text-center"><router-link to="/contact" class="sweet-button">
                            {{$t('header.contact')}} 
                            </router-link></div>
                        </div>
                    </div>
                </div>

      </div>
    </section>

    


   </div>
  
</template>

<script>
export default {
    
}
</script>
<style>
 .service-pict{
    width: 100px;
    height: auto;

 }

 .sweet-button {
	background-color:#00795C;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:12px 38px;
    text-decoration:none;
    margin-top: 4%;
}
.sweet-button:hover {
	background-color:rgb(19, 211, 166);
}
.sweet-button:active {
	position:relative;
	top:1px;
}


</style>
