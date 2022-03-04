<template>

   <div class="app-contact">


   <!-- ======= Breadcrumbs Section ======= -->
            






            <section id="contact" class="contact">
      <div class="container-fuild">

        <div class="section-title">
          <h2>Careers</h2>
            <br>
          <h4>Vous etes un professionel du Tech ? Rejoignez-nous</h4>
        </div>
      </div>

    

      <div class="container">
        <div class="row mt-5">

      
           <div class="col-lg-2"></div>
          <div class="col-lg-8 mt-5 mt-lg-0">

            <form  method="post" role="form" class="php-email-form">
              <div class="row">
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required="">
                    </div>
                </div>


            

                 <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Prenom" required="">
                    </div>
                </div>

                <div class="form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" id="email" :placeholder="$t('contact.s-1-b')" required="">
                </div>


                <div class="form-group mt-3 mt-md-0">
                  <input type="file" class="form-control" name="email" id="email" placeholder="Your CV" required="">
                </div>

                <div class="form-group mt-3 mt-md-0">

                  <input type="text" class="form-control" name="email" id="email" :placeholder="$t('contact.s-1-c')"  required="">
                </div>
              </div>
            
             

              <div class="text-center"><button type="submit" class="sweet-button">{{$t('contact.s-1-h')}}</button></div>
            </form>

          </div>
           <div class="col-lg-2"></div>

        </div>

      </div>

        
    </section>
   </div>
  
</template>

<script>
import {mapGetters, mapActions} from 'vuex';
import {ValidationObserver, ValidationProvider} from "vee-validate";

export default {
  title: 'Contact | AST',

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
                    phone: '',
                    message: ''
                }
            }
        },
        computed: {
            ...mapGetters('contact', { messageContactStatus: 'getMessageContactSendstatus'}),
            ...mapGetters('contact', { messageSuccessMessage: 'getMessageContactSendstatus'}),
            ...mapGetters('contact', { messageFailedMessage: 'getFailledMessageResponse'}),
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
.app-contact {
	margin-top: 0px;
}


.contact .info i {
    font-size: 20px;
    color: #ffffff  ;
    float: left;
    width: 30px;
    height: 30px;
    background: #00796A;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
}

.contact .info p {
    padding: 0 0 0 60px;
    margin-bottom: 0;
    font-size: 26px;
    color: #4b7dab;
}


.contact .php-email-form button {
    background: #00796A;
    border: 0;
    padding: 10px 35px;
    color: #fff;
    transition: 0.4s;
    /* border-radius: 50px; */
}

.career {
    width: 698px;
    height: 500px;
}


.container-fluid {
    width: 80%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
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
}
.sweet-button:hover {
	background-color:rgb(19, 211, 166);
}
.sweet-button:active {
	position:relative;
	top:1px;
}

</style>
