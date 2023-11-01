<template>
    <div>
        <div class="subVisual">
            <h3 class="title">Register</h3>
            <img src="/img/subVisual03.jpg" alt="">
        </div>

        <div class="subContent area-register">
            <div class="wrap">
                <div class="m-form type01">
                    <h3 class="title" style="text-align:left;">User Registration</h3>

                    <form @submit.prevent="register">
                        <div class="m-input-wrap type01 mt-40">
                            <div class="m-input-text type01">
                                <input type="text" placeholder="Email Address *" v-model="form.email">
                            </div>

                            <p class="m-input-error" v-if="form.errors.email">{{form.errors.email}}</p>
                        </div>

                        <div class="m-input-wrap type01">
                            <div class="m-input-text type01">
                                <input type="password" placeholder="Password *" v-model="form.password">
                            </div>

                            <p class="m-input-error" v-if="form.errors.email">{{form.errors.password}}</p>
                        </div>

                        <div class="m-input-wrap type01">
                            <div class="m-input-text type01">
                                <input type="password" placeholder="Confirm Password *" v-model="form.password_confirmation">
                            </div>

                            <p class="m-input-error" v-if="form.errors.email">{{form.errors.password_confirmation}}</p>
                        </div>

                        <div class="m-input-wrap type01">
                            <div class="m-input-text type01">
                                <input type="text" placeholder="First Name *" v-model="form.first_name">
                            </div>

                            <p class="m-input-error" v-if="form.errors.email">{{form.errors.first_name}}</p>
                        </div>

                        <div class="m-input-wrap type01">
                            <div class="m-input-text type01">
                                <input type="text" placeholder="Last Name *" v-model="form.last_name">
                            </div>

                            <p class="m-input-error" v-if="form.errors.last_name">{{form.errors.last_name}}</p>
                        </div>

                        <button class="m-btn type01 bg-primary mt-20">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import {Link} from '@inertiajs/inertia-vue';
export default {
    components: {Link},
    data(){
        return {
            form: this.$inertia.form({
                email: null,
                password: null,
                password_confirmation: null,
                first_name: null,
                last_name: null,
            })
        }
    },

    methods: {
        register(){
            this.form.post("/users", {
                preserveScroll: true,
                onSuccess: (response) => {
                    alert(response.props.flash.success);
                }
            });
        }
    }
}
</script>
