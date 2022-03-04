<template>
  <div class="app-home">



<div>
    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="4000"
      controls
      indicators
      background="#ababab"
    
      @sliding-start="onSlideStart"
      @sliding-end="onSlideEnd"
    >
    
      <!-- Slides with custom text -->
      <b-carousel-slide img-src="images/1.png">
            <section id="why-us" class="why-us">
              <div class="container">

                  <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                      <div class="content">
                        <h3>{{$t('overview.section-1-a')}}</h3>
                        <h6>
                          Assurez votre transformation en toute confiance.
                        </h6>
                      
                      </div>
                    </div>
                  
                      </div>

                  </div>
            </section>

      </b-carousel-slide>

       <b-carousel-slide img-src="images/2.png">
         <section id="why-us" class="why-us carousel-color">
              <div class="container">

                  <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                      <div class="content">
                        <h3>AFRISPHERE DEVELOPEMENT</h3>
                        <h6>
                          Assurez votre transformation en toute confiance.
                        </h6>
                      
                      </div>
                    </div>
                  
                      </div>

                  </div>
            </section>

         
      </b-carousel-slide>


       <b-carousel-slide img-src="images/3.png">
          <section id="why-us" class="why-us carousel-color">
              <div class="container">

                  <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                      <div class="content">
                        <h3>AFRISPHERE CONSULTING</h3>
                        <h6>
                          Assurez votre transformation en toute confiance.
                        </h6>
                      
                      </div>
                    </div>
                  
                      </div>

                  </div>
            </section>


      </b-carousel-slide>

      <b-carousel-slide img-src="images/4.png">
         <section id="why-us" class="why-us carousel-color">
              <div class="container">

                  <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                      <div class="content">
                        <h3>AFRISPHERE LEARNING</h3>
                        <h6>
                          Assurez votre transformation en toute confiance.
                        </h6>
                      
                      </div>
                    </div>
                  
                      </div>

                  </div>
            </section>

      </b-carousel-slide>

    </b-carousel>
  </div>




  <section id="why-us" class="why-us slice">
      <div class="container">

       

       <div class="row">
         <div class="col-lg-12 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>{{$t('overview.section-1-c')}}</h4>
                    <p>
                      {{$t('overview.section-1-d')}}
                
                    </p>
  
                  <div class="text-center">
                    <router-link to="/services-developpents" class="sweet-button">En savoir plus</router-link>
                  </div>

                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4> {{$t('overview.section-1-e')}}</h4>
                    <p>
                        {{$t('overview.section-1-f')}} 
                    </p>
  
                      <div class="text-center">
                    <router-link to="/services-etudes-conseils" class="sweet-button">En savoir plus</router-link>
                  </div>


                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4> {{$t('overview.section-1-g')}} </h4>
                    <p>
                       {{$t('overview.section-1-h')}} 
                    </p>
  
                    <div class="text-center">
                    <router-link to="/serices-formations" class="sweet-button">En savoir plus</router-link>
                  </div>
                  </div>
                </div>
               
              </div>
            </div><!-- End .content-->
          </div>

       </div>

          
        
        </div>

    </section>





<!-- 
<div class="container">
   <div class="section-title">
          <h2>Our Blog</h2>
          <p></p>
        </div>


      <div class="row">
        <div class="col">
          <div class="i-card" tabindex="0">
            <div class="i-card-image">
              <img src="https://assets.codepen.io/772926/card-img-one.png" alt="">
            </div>
            <div class="i-card-content">
              <p class="kicker">Technology</p>
              <h2>Using Banner Stands To Increase Trade Show Traffic</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
            <div class="i-card-footer">
              <a href="#" role="button">
                <span>Read More</span>
              </a>
              <svg class="icon" viewBox="0 0 16 16">
                <g fill="none" stroke-width="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                  <line x1="0.5" y1="8.5" x2="15.5" y2="8.5"></line>
                  <polyline points="10.5,3.5 15.5,8.5 10.5,13.5 "></polyline>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="i-card" tabindex="0">
            <div class="i-card-image">
              <img src="https://assets.codepen.io/772926/card-img-one.png" alt="">
            </div>
            <div class="i-card-content">
              <p class="kicker">Marketing</p>
              <h2>Writing A Good Headline For Your Advertisement</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
            <div class="i-card-footer">
              <a href="#" role="button">
                <span>Read More</span>
              </a>
              <svg class="icon" viewBox="0 0 16 16">
                <g fill="none" stroke-width="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                  <line x1="0.5" y1="8.5" x2="15.5" y2="8.5"></line>
                  <polyline points="10.5,3.5 15.5,8.5 10.5,13.5 "></polyline>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="i-card" tabindex="0">
            <div class="i-card-image">
              <img src="https://assets.codepen.io/772926/card-img-one.png" alt="">
            </div>
            <div class="i-card-content">
              <p class="kicker">Technology</p>
              <h2>15 Tips To Increase Your Adwords Profits</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
            <div class="i-card-footer">
              <a href="#" role="button">
                <span>Read More</span>
              </a>
              <svg class="icon" viewBox="0 0 16 16">
                <g fill="none" stroke-width="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                  <line x1="0.5" y1="8.5" x2="15.5" y2="8.5"></line>
                  <polyline points="10.5,3.5 15.5,8.5 10.5,13.5 "></polyline>
                </g>
              </svg>
            </div>
          </div>
        </div>
      </div>


        <div class="text-center"><router-link to="/blog" class="sweet-button">
               Read more articles
              </router-link>
          </div>



    </div>

      -->
  </div>



</template>

<script>
import {mapGetters, mapActions} from 'vuex';
import {ValidationObserver, ValidationProvider} from "vee-validate";



export default {
      title: 'Accueil | AST',

components: {
            ValidationObserver,
			ValidationProvider,
			
        },
        data() {
            return {
                form: {
                   email: '',
                    password: ''
                },
                slide: 0,
                sliding: null
            }
        },
        computed: {
           
        },
        created(){
            this.getLang()
            this.getCurrentLang()
        },
        methods: {
               _getUrlPhoto(item) {
                return this.pict_directory + '/images/' + item;
            },

             onSlideStart(slide) {
              this.sliding = true
            },
            onSlideEnd(slide) {
              this.sliding = false
            },

             getLang() {
                if(localStorage.getItem('locale')){
                     const locale = localStorage.getItem('locale');
                    localStorage.setItem("locale",locale)

                 }else{
                    const locale = navigator.language || navigator.userLanguage || "fr";
                    localStorage.setItem("locale",locale)
                    this.$root.$i18n.locale = locale;
                 }
            
        
        },
                    getCurrentLang(){
                   this.current_lang = localStorage.getItem('locale');
                  var index = this.languages.findIndex(function(o){
                    return o.iso === localStorage.getItem('locale');
                    })
                    if (index !== -1) this.languages.splice(index, 1);

                },

              _toSingle(slug){
                  return '/article/' + slug + '/detail';
              }
        }
    }
    </script>
<style>

.sweet-button {
	background-color:#00795C;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:12px 38px;
	text-decoration:none;
}
.sweet-button:hover {
	background-color:rgb(19, 211, 166);
}
.sweet-button:active {
	position:relative;
	top:1px;
}




section.slice {
	margin-top: 0px;
}

 .carousel-item img {
        height:95vh!important ;
    }

 .caption {
	 top: 20px;
}



.member {
	 background: #fefeff;
   }

.i-card {
	 background: #f0f0f1;
	 margin-top: 1.5rem;
	 border-radius: 6px;
	 overflow: hidden;
	 cursor: pointer;
	 box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
	 transition: box-shadow 0.3s ease-in-out;
}
 .i-card:hover {
	 box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}
 .i-card:focus {
	 -webkit-box-shadow: 0 0 0 3px #22223a, 0 0 0 4px #00795C;
	 box-shadow: 0 0 0 3px #22223a, 0 0 0 5px #00795C;
	 outline: none;
	 border-radius: 2px;
	 z-index: 1090;
	 position: relative;
}
 .i-card h2 {
	 font-size: 1.25rem;
	 margin: 0;
}
 .i-card .i-card-content {
	 padding: 2rem;
	 min-height: 110px;
	 padding-bottom: 1rem;
}
 .i-card .i-card-content .kicker {
	 color: #00795C;
	 margin-top: 0;
	 text-transform: uppercase;
	 letter-spacing: 0.16rem;
	 font-size: 0.75rem;
	 font-weight: 700;
	 margin-bottom: 0.5rem;
}
 .i-card .i-card-content p {
	 color: #000;
}
 .i-card .i-card-content p:last-of-type {
	 margin-bottom: 0;
}
 .i-card .i-card-image img {
	 width: 100%;
	 height: auto;
}
 .i-card .i-card-footer {
	 position: relative;
}
 .i-card .i-card-footer .icon {
	 position: absolute;
	 right: 2rem;
	 max-width: 20px;
	 top: 50%;
	 margin-top: -10px;
	 transition: color 0.3s;
}
 .i-card .i-card-footer a {
	 background: transparent;
	 border: none;
	 color: #000;
	 padding: 1.25rem 2rem;
	 width: 100%;
	 text-align: left;
	 display: block;
	 opacity: 0;
	 position: relative;
	 top: 3px;
	 font-weight: 400;
	 transition: opacity 0.3s, top 0.3s ease 0s;
}
 .i-card .i-card-footer a:hover, .i-card .i-card-footer a:focus {
	 text-decoration: none;
	 opacity: 1;
	 top: 0;
}
 .i-card .i-card-footer a:focus {
	 box-shadow: inset 0 0 0 2px #00795C;
	 outline: none;
	 border-radius: 2px;
	 z-index: 1090;
	 position: relative;
}
 .i-card .i-card-footer:after {
	 content: '';
	 width: 0%;
	 height: 3px;
	 background: #00795C;
	 position: absolute;
	 bottom: 0;
	 left: 0;
	 transition: width 0.3s;
}
 .i-card .i-card-footer:hover:after {
	 width: 100%;
}
 .i-card:hover .i-card-footer .icon, .i-card:focus .i-card-footer .icon {
	 color: #00795C;
}
 .i-card:hover .i-card-footer a, .i-card:focus .i-card-footer a {
	 opacity: 1;
	 top: 0;
}
 .i-card:hover .i-card-footer:after, .i-card:focus .i-card-footer:after {
	 width: 100%;
}
 
.img-fluid {
  width: 125px;
}


.container-fluid {
    width: 94%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.section-bg {
  
    background: #f1f7fd;
}

 .carousel-item img {
        height:90vh!important ;
    }

.why-us .content {
    padding: 30px;
    background: #ffffff;
    border-radius: 4px;
    color: #fff;
}

.why-us .content h3 {
    font-weight: 400;
    font-size: 34px;
    margin-bottom: 30px;
    color: #00796a;
}


.why-us .content h6 {
    color: #000;
}
</style>
