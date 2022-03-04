<template>

   <div class="app-contact">



            <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>{{$t('header.devloppements')}}</h2>
          <br>
         <h4>Application Mobile, Site Web, Projet sur mesures</h4>

        </div>
        


        

        <div class="row mt-3">

            <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <img src="services/application.png" alt="" class="service-pict">
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">{{$t('service.s-1-e')}}</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">
                                        {{$t('service.s-1-f')}}
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
                                    <img src="services/mobile.png" class="service-pict-mobile">
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">{{$t('service.s-1-c')}}</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">
                                     {{$t('service.s-1-d')}}
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
                                    <img src="services/web.png" alt="" class="service-pict">
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold"> {{$t('service.s-1-a')}} </h5>
                                <p class="edu_desc mt-3 mb-0 text-muted"> 
                                   {{$t('service.s-1-b')}}
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
    width: 351px;
    height: auto;

 }

 .service-pict-mobile {
    width: 190px;
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
