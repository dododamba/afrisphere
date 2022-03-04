<template>

   <div class="app-contact">


<section id="services" class="services">
      <div class="container">

       <div class="section-title">
          <h2>{{$t('header.etudes')}}</h2>
          <br>
          <h4>Etudes, Conseils,Consultation & Infogérange</h4>
        </div>

             <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <img src="services/consulting-icon-0.png" alt="" style="width: 100px; height: auto">
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">{{$t('service.s-1-g')}}</h5>
                                <p class="edu_desc mt-3 mb-0 text-muted">
                                   {{$t('service.s-1-h')}}
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
                                    <img src="services/security_system.png" style="width: 100px; height: auto">
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">{{$t('service.s-1-i')}}</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">
                                   {{$t('service.s-1-j')}}   
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
                                    <img src="services/setting.png" alt="" style="width: 100px; height: auto">
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">{{$t('service.s-1-k')}} </h5>
                                <p class="edu_desc mb-0 mt-3 text-muted"> 
                                   {{$t('service.s-1-l')}}
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
