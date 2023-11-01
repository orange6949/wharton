<template>
    <div>
        <div class="subVisual">
            <h3 class="title">Request Password Reset</h3>
            <img src="/img/subVisual03.jpg" alt="">
        </div>

        <div class="subContent area-register">
            <div class="wrap">
                <form class="m-form type01" @submit.prevent="submit">
                    <h3 class="title" style="text-align:left;">Send Password Reset Mail</h3>

                    <div class="m-input-wrap type01 mt-40">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="Email Address *" v-model="form.email">
                        </div>

                        <p class="m-input-error type01" v-if="form.errors.email">{{ form.errors.email }}</p>
                    </div>

                    <button class="m-btn type01 bg-primary mt-20">Send Mail</button>
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
            })
        }
    },

    methods: {
        submit() {
            this.form.post("/passwordResets",{
                onSuccess: (response) => {
                    alert(response.props.message);
                }
            });
        }
    }
}
</script>
