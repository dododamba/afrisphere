<template>
           <section class="page mt-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                              


                                                <div class="page-description">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-6">
                                                            <div class="box-wrapper">
                                                                <div class="box box-border">
                                                                    <div class="box-body">
                                                                        <h4>Login</h4>
                                                                        <ValidationObserver ref="form" v-slot="{ invalid }">
                                                                            <form  v-on:submit.prevent="signIn(form.email,form.password)">


                                                                            <div class="form-group errorsBlock" id="loginErrors"
                                                                            v-show="loginErrors.length > 0">
                                                                            <ul v-for="error in loginErrors">
                                                                                    <li>
                                                                                    {{ error.message }}
                                                                                    </li>
                                                                                </ul>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <ValidationProvider placeholder="Login"
                                                                                                name="Login"
                                                                                                rules="required|email|min:3|max:254"
                                                                                                v-slot="{ errors }">


                                                                                            <label>Email</label>
                                                                                            <input type="text"  v-model="form.email" class="form-control">

                                                                                        <div class="text-danger">
                                                                                            <template v-show="errors.length > 0">
                                                                                                <i class="fa fa-warning"></i>
                                                                                                <span class="help is-danger">
                                                                                                    {{ errors[0] }}
                                                                                                </span>
                                                                                            </template>
                                                                                        </div>
                                                                            </ValidationProvider>
                                                                            </div>


                                                                            <div class="form-group">
                                                                                <ValidationProvider placeholder="Password"
                                                                                                name="Password"
                                                                                                rules="required|alpha_num|min:3|max:36"
                                                                                                v-slot="{ errors }">


                                                                                            <label>Password</label>
                                                                                            <input type="password"  v-model="form.password" class="form-control">

                                                                                        <div class="text-danger">
                                                                                            <template v-show="errors.length > 0">
                                                                                                <i class="fa fa-warning"></i>
                                                                                                <span class="help is-danger">
                                                                                                    {{ errors[0] }}
                                                                                                </span>
                                                                                            </template>
                                                                                        </div>
                                                                            </ValidationProvider>
                                                                            </div>



                                                                            <div class="form-group text-right">
                                                                                <button class="btn btn-primary btn-block" :disabled="invalid" type="submit">Login</button>
                                                                            </div>

                                                                        </form>
                                                                        </ValidationObserver>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
        
</template>

<script>
import {mapGetters, mapActions} from 'vuex';
import {ValidationObserver, ValidationProvider} from "vee-validate";

export default {
      title: 'Login | CriptoPompe',

components: {
            ValidationObserver,
            ValidationProvider
        },
        data() {
            return {
                form: {
                   email: '',
                    password: ''
                }
            }
        },
        computed: {
            ...mapGetters("auth", {
                loginErrors: "getLoginErrors"
            })
        },
        methods: {
             ...mapActions('auth',['sendMessage']),
            signIn() {
                this.$store
                    .dispatch("auth/login", {
                        email: this.form.email,
                        password: this.form.password
                    })
                    .then(() => this.$router.push({name: "dashboard"}));
            }
        }
    }
</script>

<style>
section.slice {
	margin-top: 0px;
}
</style>
