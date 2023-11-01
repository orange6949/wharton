<template>
    <div class="area-whartonSurvey">
        <div class="subVisual">
            <h3 class="title">Wharton Survey</h3>
            <img src="/img/subVisual04.jpg" alt="">
        </div>

        <div class="subContent">
            <div class="wrap">
                <div class="visual">
                    <div class="content">
                        <h3 class="title">Take our survey</h3>
                        <p class="body">
                            Our surveys are anonymous and
                            <br/>help us improve our service!
                        </p>
                    </div>
                    <img src="/img/base-vote.png" alt="">
                </div>

                <div class="links-wrap">
                    <h3 class="title">Choose a survey</h3>

                    <div class="links">
                        <div class="link-wrap">
                            <a href="https://eprovesurveys.advanc-ed.org/surveys/#/action/217387/59843" class="link" target="_blank">
                                <h3 class="title">Student Survey</h3>
                                <img src="/img/vote1.png" alt="">
                            </a>
                        </div>
                        <div class="link-wrap">
                            <a href="https://eprovesurveys.advanc-ed.org/surveys/#/action/217388/59843" class="link" target="_blank">
                                <h3 class="title">Staff Survey</h3>
                                <img src="/img/vote2.png" alt="">

                            </a>
                        </div>
                        <div class="link-wrap">
                            <a href="https://eprovesurveys.advanc-ed.org/surveys/#/action/217389/59843" class="link" target="_blank">
                                <h3 class="title">Parent Survey</h3>
                                <img src="/img/vote3.png" alt="">

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import {Link} from "@inertiajs/inertia-vue";

export default {
    components: {Link},
    data() {
        return {
            form: this.$inertia.form({
                email: null,
                password: null
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
        },

        login(){
            this.form.post("/login", {
                preserveScroll: true
            });
        }
    },

    mounted(){
        AOS.init();
    }
}
</script>
