<template>
    <div>
        <div class="subVisual">
            <h3 class="title">Reset Password</h3>
            <img src="/img/subVisual03.jpg" alt="">
        </div>

        <div class="subContent area-register">
            <div class="wrap">
                <form class="m-form type01" @submit.prevent="submit" @keyup="form.clearErrors()">
                    <h3 class="title" style="text-align:left;">Reset Password</h3>

                    <div class="m-input-wrap type01 mt-20">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="Email" v-model="form.email">
                        </div>

                        <p class="m-input-error type01" v-if="form.errors.email">{{ form.errors.email }}</p>
                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="password" placeholder="New Password" v-model="form.password">
                        </div>
                        <p class="m-input-error type01" v-if="form.errors.password">{{ form.errors.password }}</p>
                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="password" placeholder="New Confirm Password" v-model="form.password_confirmation">
                        </div>

                        <p class="m-input-error type01" v-if="form.errors.password_confirmation">{{ form.errors.password_confirmation }}</p>
                    </div>

                    <button class="m-btn type01 bg-primary mt-20">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            form: this.$inertia.form({
                email: null,
                password: null,
                password_confirmation: null,
                token: location.pathname.split("/")[2]
            })
        }
    },

    methods: {
        submit() {
            this.form.patch("/passwordResets/" + this.form.token,{
                onSuccess: (response) => {
                    alert(response.props.message);
                }
            });
        },
    }
}
</script>
