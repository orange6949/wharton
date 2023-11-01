<template>
    <div>
        <div class="subVisual">
            <h3 class="title">Login</h3>
            <img src="/img/subVisual03.jpg" alt="">
        </div>

        <div class="subContent area-login">
            <div class="wrap">
                <img src="/img/login01.jpg" alt="" class="img">

                <div class="box-login">
                    <div class="content">
                        <h3 class="title">Login</h3>

                        <form @submit.prevent="login">
                            <div class="m-input-wrap type01">
                                <div class="m-input-text type01">
                                    <input type="text" placeholder="Email" v-model="form.email">

                                    <p class="m-input-error" v-if="form.errors.email">{{form.errors.email}}</p>
                                </div>
                            </div>

                            <div class="m-input-wrap type01">
                                <div class="m-input-text type01">
                                    <input type="password" placeholder="Password" v-model="form.password">
                                </div>

                                <p class="m-input-error" v-if="form.errors.password">{{form.errors.password}}</p>
                            </div>

                            <button class="m-btn type01 bg-primary">Login</button>
                        </form>

                        <div class="links">
                            <Link href="/passwordResets/create" class="link">Forgot your password?</Link>
                            <Link href="/users/create" class="link" style="margin-left:10px;">Register</Link>
                        </div>
                    </div>
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
                password: null
            })
        }
    },

    methods: {
        login(){
            this.form.post("/login", {
                preserveScroll: true
            });
        }
    }
}
</script>
