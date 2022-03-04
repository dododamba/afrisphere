<template>
<div class="app-about">

<section class="section_all bg-light" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
   <div class="section-title">
          <h2>{{$t('header.about')}}</h2>
        </div>
                    </div>
                </div>


                 <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fas fa-pencil-alt"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Creativité</h5>
                                <p class="edu_desc mt-3 mb-0 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fab fa-angellist"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Rigueur</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Pontualité </h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                </div>




               

               
            </div>
        </section>




                <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-8 d-flex">
            <div>
            <b-embed
                type="iframe"
                aspect="16by9"
                src="https://youtu.be/jpYS0LOKjkM"
                allowfullscreen
            ></b-embed>
</div>
          </div>
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Qui Sommes-Nous ?</h3>
              <p>
               Nous sommes un cabinet d'ingenierie logicielle engagé dans la transformation digitale, 
               Notre mission est d’offrir à nos clients un vaste choix de produits: consulatance, hebergement, formation, etc. 
               Notre expérience en la matière nous permet de sources le meilleur rapport qualité/prix pour vous. 
               Et nous mettons un point d’honneur à vous proposer un excellent service client et assistance. 
               </p>

                <p class="text-muted mt-3">  Nous vous aidons à faire vos premiers pas sur internet en vous proposant un site web moderne pour promouvoir vos produits et services et plus encore 
                        nous vous aidons à lancer votre première application mobile.
                            </p>
                 
            </div>
          </div>
          
        </div>

      </div>
    </section>

   </div>
  
</template>
<script>
export default {
  title: 'About | CriptoPompe',
}
</script>

<style>

.app-about {margin-top: 0%;}
.section_all {
    position: relative;
    padding-top: 80px;
    padding-bottom: 80px;
    min-height: 100vh;
}
.section-title {
    font-weight: 700;
    text-transform: capitalize;
    letter-spacing: 1px;
}

.section-subtitle {
    letter-spacing: 0.4px;
    line-height: 28px;
    max-width: 550px;
}

.section-title-border {
    background-color: #000;
    height: 1 3px;
    width: 44px;
}

.section-title-border-white {
    background-color: #fff;
    height: 2px;
    width: 100px;
}
.text_custom {
    color: #00795C;
}

.about_icon i {
    font-size: 22px;
    height: 65px;
    width: 65px;
    line-height: 65px;
    display: inline-block;
    background: #fff;
    border-radius: 35px;
    color: #00795C;
    box-shadow: 0 8px 20px -2px rgba(158, 152, 153, 0.5);
}

.about_header_main .about_heading {
    max-width: 450px;
    font-size: 24px;
}

.about_icon span {
    position: relative;
    top: -10px;
}

.about_content_box_all {
    padding: 28px;
}


.img-k {
    height: 400px;
    width: 400px;
}
</style>
