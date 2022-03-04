<template>
    <div class="app-hearder">
        <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@afrispheretechnplogie.com">contact@afrisphere.com</a>
        <i class="bi bi-telephone"></i> <a href="">+235 63 49 49 10</a>
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        

  


      </div>



  


   
      
    </div>


        
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">
          <router-link to="/" style="color: #1D1A53;"> <img alt="Image placeholder" src="images/logo.PNG" id="navbar-logo"> AFRISPHERE TECHNOLOGY</router-link>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0 ">
        <ul>
          <li>
              <router-link to="/" class="nav-link">{{$t('header.overview')}}</router-link>
          </li>
         <li >
                                <router-link to="/about" class="nav-link" >{{$t('header.about')}}</router-link>
                            </li>
                            
                            <li class="dropdown"><a href="javascript:void(0)"><span>{{$t('header.realisations')}}</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>

                                <li><router-link to="/services-developpents">{{$t('header.devloppements')}}</router-link></li>
                                <li><router-link to="/services-etudes-conseils">{{$t('header.etudes')}}</router-link></li>
                                <li><router-link to="/serices-formations">{{$t('header.formation')}}</router-link></li>
                                </ul>
                            </li>
                               

                   <li><router-link to="/careers">{{$t('header.carreers')}}</router-link></li>

                              <li >
                                <router-link to="/contact" class="nav-link">{{$t('header.contact')}}</router-link>
                            </li>

                        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->



    </div>
  </header><!-- End Header -->
    </div>
  </template>

<script>
 import {mapGetters, mapActions} from 'vuex';



export default {

    
 computed: {
           languages() {
      return i18nService.languages
    },
    language: {
      get(){
        return i18nService.getActiveLanguage()
      },
      set(lang){
        i18nService.setActiveLanguage(lang)
      }
    },



    
        },

        data() {
            return {
                current_lang: '',
                
                languages: [
                    {
                     id: 1,
                     name: "FR",
                     iso: 'images/fr.svg'
                    },
                     {
                     
                     name: "EN",
                     iso: 'images/en.svg'
                    },
                     {

                     name: "AR",
                     iso: 'images/ma.svg'
                    },
                    ],
                    current_lang : '',
               
            }
        },
          
          created(){
              this.getLang()
              this.getCurrentLang()
              
          },

        methods: {
            ...mapActions('auth',['logout']),



             setActiveLanguage(lang) {
                localStorage.setItem("language", lang);
            },
            getActiveLanguage() {
                return localStorage.getItem("language") || this.defaultLanguage;
            },

           getCurrentLangPict(){
                return "images/" + this.current_lang + ".svg";
            },
            getLangPict(local){
                return "images/" + locale + ".svg";
            },

            setLocale(locale) {
                this.$root.$i18n.locale = locale;
                localStorage.setItem("locale", locale);
                this.getCurrentLang()

                },

                setLocaleConfig(locale) {
                    this.$root.$i18n.locale = locale.target.value;
                    localStorage.setItem("locale", locale.target.value);
                    this.current_lang = `${locale.target.value}` 
                    this.getCurrentLang()
                    

                },


                getCurrentLang(){
                   this.current_lang = localStorage.getItem('locale');
                  var index = this.languages.findIndex(function(o){
                    return o.iso === localStorage.getItem('locale');
                    })
                    if (index !== -1) this.languages.splice(index, 1);

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
            getLang() {
                 if(localStorage.getItem('locale')){
                     const locale = localStorage.getItem('locale');
                    localStorage.setItem("locale",locale)

                 }else{
                    const locale = navigator.language || navigator.userLanguage || "fr";
                    localStorage.setItem("locale",locale)
                    this.$root.$i18n.locale = locale;
                 }
                 
                 }
        },
        
}
</script>
 
<style>
 #header .logo img {
    max-height: 75px;
}

#header {
    background: #fff;
    transition: all 0.5s;
    z-index: 997;
    padding: 1px 0;
    top: 40px;
    box-shadow: 0px 2px 15px rgb(25 119 204 / 10%);
}


#navbar-logo {
 width: 100px;
 height: auto;
}

.navbar a, .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 17px;
    color: #2c4964;
    white-space: nowrap;
    transition: 0.3s;
    border-bottom: 2px solid #fff;
    padding: 5px 2px;
}

.app-header{
    margin-bottom: 0%;
}


.select-box {
  cursor: pointer;
  position : relative;
  max-width:  20em;
  margin: 5em auto;
  width: 100%;
}

.select,
.label {
  color: #414141;
  display: block;
  font: 400 17px/2em 'Source Sans Pro', sans-serif;
}

.select {
  width: 100%;
  position: absolute;
  top: 0;
  padding: 5px 0;
  height: 20px;
  opacity: 0;
  background: none transparent;
  border: 0 none;
}
.select-box1 {
  background: #00795C;
}

.label {
  position: relative;
  padding: 3px 7px;
  cursor: pointer;
  color: #ffffff;
}
.open .label::after {
   content: "▲";
}
.label::after {
  position: absolute;
  right: 0;
  top: 0;
  padding: 3px 10px;
  border-left: 3px solid #fff;
}

#topbar .contact-info i {
    color: #ffffff;
    padding-right: 4px;
    margin-left: 15px;
}



</style>
