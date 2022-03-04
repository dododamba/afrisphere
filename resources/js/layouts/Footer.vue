<template>
   
   <div class="app-footer">


<section class="section section-default mt-none mb-none">
   <div class="container">
      <h2 class="mb-sm">Nos  <strong>Partenaires</strong></h2>

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
      <b-carousel-slide  img-src="https://www.pmits.co.uk/portals/0/images/partners/solar-communications-200.png">
    </b-carousel-slide>

      

    </b-carousel>


   
   </div>
</section>

       
       <footer id="footer">

 
 <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
              <img src="images/logo.PNG" id="navbar-logo-footer" >
              
            <p>
            Avenue Mathias Ngarteri, N'djamena
              <strong>Phone:</strong> +235 63 49 49 10<br>
              <strong>Email:</strong> contact@afrisphere.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <router-link to="/" class="nav-link">{{$t('header.overview')}}</router-link></li>
              <li><i class="bx bx-chevron-right"></i> <router-link to="/about" class="nav-link" >{{$t('header.about')}}</router-link></li>
              <li><i class="bx bx-chevron-right"></i>  <router-link to="/contact" class="nav-link">{{$t('header.contact')}}</router-link></li>
             
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <router-link to="/services-developpents">{{$t('header.devloppements')}}</router-link></li>
              <li><i class="bx bx-chevron-right"></i> <router-link to="/services-etudes-conseils">{{$t('header.etudes')}}</router-link></li>
              <li><i class="bx bx-chevron-right"></i> <router-link to="/serices-formations">{{$t('header.formation')}}</router-link></li>
             
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Inscrivez-vous à notre Newsletter</h4>
            <p></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>
 


<div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright {{year()}} ,<strong><span>AFRISPHERE TECHNOLOGY</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="javascrpit:void(0)" @click="setLocale('fr')">
              <img alt="Image placeholder" src="images/fr.svg" > 
            </a>
            <a href="javascrpit:void(0)" @click="setLocale('us')">
              <img alt="Image placeholder" src="images/us.svg" > 
            </a>
            <a href="javascrpit:void(0)" @click="setLocale('ar')">
              <img alt="Image placeholder" src="images/ma.svg" > 
            </a>
      </div>
    </div>


  
  </footer><!-- End Footer -->


   </div>
  </template>

<script>
import {mapGetters, mapActions} from 'vuex';

export default {
 computed: {
            ...mapGetters("auth", {
                isAuthenticated: "isAuthenticated"
            })
        },

        data() {
            return {
                current_lang: '',
               
            }
        },
          
          created(){
              this.getCurrentLang()
          },

        methods: {
            ...mapActions('auth',['logout']),

            setLocale(locale) {
                this.$root.$i18n.locale = locale;

                this.getCurrentLang()

               
                localStorage.setItem("locale", locale);
                },

                year(){
                  return new Date().getFullYear()
                },

                getCurrentLang(){
                   this.current_lang = localStorage.getItem('locale')
                },

                setLangues(){
                    var index = this.languages.indexOf(value);
                    if (index > -1) {
                      this.languages.splice(index, 1);
                    }
                    return this.languages;
                },



            doLogout(){

                this.logout()
                    .then(() =>  this.$router.push({name: "login"}));
            },
        },
        
}
</script>

<style>
img {
   width: 15px;
   height: auto;
}

#navbar-logo-footer {
    width: 200px;
    height: auto;
}

.img-partenaire {
    width: 250px;
}

.carousel-item img {
        height:10vh!important ;
    }
</style>
