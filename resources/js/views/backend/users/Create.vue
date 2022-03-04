<template>




</template>

<script>
import {mapGetters, mapActions} from 'vuex';
import {ValidationObserver, ValidationProvider} from "vee-validate";

export default {
title: 'Nouveau technicien | CriptoPompe',
components: {
            ValidationObserver,
            ValidationProvider
        },
       data() {
            return {
                form : {
                    name: '',
                    surname: '',
                     email: '',
                    phone: '',
                    adress: '',
                }
            }
        },
        computed: {
        },
        created() {
            
        },
        methods: {
           ...mapActions('users',['addTechnicien']),
           onSubmit(){
               this.addTechnicien(this.form).then(() => this.$router.push({ name: "users" }) )
           }

        }
    }
</script>

<style>
section{
    margin-top: 7%;
}
</style>
