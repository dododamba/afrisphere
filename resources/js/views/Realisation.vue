<template>
<div class="app-service">


   <!-- ======= Breadcrumbs Section ======= -->
            <section class="breadcrumbs">
              <div class="container">
        
                <div class="d-flex justify-content-between align-items-center">
                  <h2> {{$t('header.realisations')}}</h2>
                  <ol>
                    <li><router-link to="/"> {{$t('header.overview')}}</router-link></li>
                    <li> {{$t('header.realisations')}}</li>
                  </ol>
                </div>
        
              </div>
            </section>



    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2> {{$t('overview.section-1-i')}} </h2>
          <p>
            Technologies fronend
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-code"></i></div>
              <h4><a href=""> Framework Angular </a></h4>
               

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href=""> Framework Vue JS</a></h4>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href=""> Framework React </a></h4>
          
                
                
            </div>
          </div>



          

       

        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="section-title">
          <p>
            Technologies backend
          </p>
        </div>



       


        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-code"></i></div>
              <h4><a href="">  Laravel & Symfony </a></h4>
               

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href=""> Spring Boot, MVC & Security</a></h4>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href=""> Node JS & Google Firebase </a></h4>
          
                
                
            </div>
          </div>



          

       

        </div>


        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


           <div class="section-title">
          <p>
            Base des données
          </p>
        </div>


        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-code"></i></div>
              <h4><a href="">MySql , Postegresql & Oracle </a></h4>
               

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href=""> MongoDB & Cassandra</a></h4>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href=""> Microsoft Access & Exel </a></h4>
          
                
                
            </div>
          </div>



          

       

        </div>


      </div>
    </section>




   </div>
  
</template>
  
</template>

<script>
import {mapGetters, mapActions} from 'vuex';
import {ValidationObserver, ValidationProvider} from "vee-validate";

export default {
      title: 'Realisations | CriptoPompe',

components: {
            ValidationObserver,
            ValidationProvider
        },
       data() {
            return {
                form : {
                    nom: '',
                    email: '',
                    sujet: '',
                    message: ''
                }
            }
        },
        computed: {
        
        },
        created() {

        },
        methods: {
           ...mapActions('contact',['sendMessage']),
           onSubmit(){
               this.sendMessage(this.form).then(() => {
                   if(this.messageContactStatus){
                      this.$swal({
                            title: 'Succès!',
                            text: this.messageSuccessMessage,
                            icon: 'success',
                            confirmButtonText: 'Quiter'
                            })


                   }else{
                       this.$swal({
                            title: 'Erreur!',
                            text: this.messageFailedMessage,
                            icon: 'error',
                            confirmButtonText: 'Quiter'
                            })


                   }
               } )
           }

        }
    }
</script>

<style>
section.slice {
	margin-top: 0px;
}
</style>
