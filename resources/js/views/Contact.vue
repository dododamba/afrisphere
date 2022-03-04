<template>

   <div class="app-contact">


   <!-- ======= Breadcrumbs Section ======= -->
            






            <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>{{$t('banners.banner-1-c')}}</h2>
        </div>
      </div>

    

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-6">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                
                <p>Avenue Mathias Ngarteri, N'djamena</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <p>contact@afrisphere.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-telephone"></i>
                <p>+235 63 49 49 10</p>
              </div>
              <br>
              <br>
              <div class="">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>

              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" :placeholder="$t('contact.s-1-a')" required="">
                </div>

                <div class="form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" id="email" :placeholder="$t('contact.s-1-b')" required="">
                </div>

                <div class="form-group mt-3 mt-md-0">

                  <input type="text" class="form-control" name="email" id="email" :placeholder="$t('contact.s-1-c')"  required="">
                </div>
              </div>
              <div class="form-group mt-3">

                 <select name="" id="" class="form-control">
                      <option selected disabled >{{$t('contact.s-1-f')}}</option>
                      <option value="">{{$t('header.devloppements')}}</option>
                      <option value="">{{$t('header.etudes')}}</option>
                      <option value="">{{$t('header.formation')}}</option>
                      <option value="">{{$t('contact.s-1-i')}}</option>


                 </select>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" :placeholder="$t('contact.s-1-g')" required=""></textarea>
              </div>
             

              <div class="text-center"><button type="submit" class="sweet-button">{{$t('contact.s-1-h')}}</button></div>
            </form>

          </div>

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
