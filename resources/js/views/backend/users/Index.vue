<template>


</template>

<script>
import {mapGetters,mapActions} from 'vuex';
import {ValidationObserver, ValidationProvider} from "vee-validate";

export default {
      title: 'Users | CriptoPompe',
components: {
            ValidationObserver,
            ValidationProvider
        },
        data() {
            return {
                
            }
        },
         computed: {
            ...mapGetters('users', {
                users: 'getUsers'
            })
        },
        created() {
            this.fetch();
        },
        methods: {
           ...mapActions('users',['fetch']),

            

        }
        
    }
</script>
</script>

<style>
section{
    margin-top: 7%;
    
}
</style>
