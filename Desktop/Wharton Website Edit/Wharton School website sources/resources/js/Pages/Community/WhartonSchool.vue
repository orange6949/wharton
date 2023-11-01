<template>
    <div class="area-whartonSchool">
        <section :class="`${$page.props.user ? 'section section01 already' : 'section section01' }`">
            <img src="/img/whartonSchool01.jpg" alt="" class="visual">

            <div class="wrap">
                <div class="box-text" data-aos="fade-right" data-aos-duration="1500">
                    <h3 class="title">
                        WHARTON
                        <br/>SCHOOL
                    </h3>

                    <p class="body">
                        Enabling Anytime, Anywhere Learning!
                    </p>
                </div>

                <form class="m-form type01" @submit.prevent="login" data-aos="fade-left" data-aos-duration="1500">
                    <h3 class="title">Login</h3>

                    <div class="m-input-wrap type01 mt-40">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="Email" v-model="form.email">
                        </div>

                        <p class="m-input-error" v-if="form.errors.email">{{form.errors.email}}</p>
                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="password" placeholder="Password" v-model="form.password">
                        </div>

                        <p class="m-input-error" v-if="form.errors.password">{{form.errors.password}}</p>
                    </div>

                    <button class="m-btn type01 bg-primary">Login</button>

                    <div class="links">
                        <Link href="/passwordResets/create" class="link">Forgot your password?</Link>
                        <Link href="/users/create" class="link" style="margin-left:10px;">Register</Link>
                    </div>
                </form>
            </div>

            <img src="/img/icon-scroll.png" alt="" class="icon">
        </section>

        <section class="section section02">
            <div class="wrap">
                <h3 class="title" data-aos="fade-up" data-aos-duration="1500">
                    Create futures and
                    <br/>make online learning
                    <br/>better everyday!
                </h3>

                <div class="bodies">
                    <p class="body" data-aos="fade-up" data-aos-duration="1500">
                        Wharton School offers Advanced Placement courses recognized by the
                        <br/>College Board as an AP Online Provider (Code: 598) and maintains all AP courses by passing
                        <br/>AP Audits each academic year.
                    </p>
                    <p class="body" data-aos="fade-up" data-aos-duration="1500">
                        We are also one of the Distance Education Program course providers approved
                        <br/>by the Department of Education, Nevada. With a global vision and an aggressive entrepreneurial
                        <br/>focus in developing joint educational programs between China and USA, WCLI supports young
                        <br/>students and professionals to begin or continue their learning journeys at high schools, colleges,
                        <br/>universities, in-person or online in the USA.
                    </p>
                    <p class="body" data-aos="fade-up" data-aos-duration="1500">
                        Our mission is to provide the best possible online learning experience and to support people's lifelong
                        <br/>learning with the goal to create a versatile life by acquiring useful knowledge, practical skills,
                        <br/>and field studies worldwide.
                    </p>
                </div>
            </div>
        </section>
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
