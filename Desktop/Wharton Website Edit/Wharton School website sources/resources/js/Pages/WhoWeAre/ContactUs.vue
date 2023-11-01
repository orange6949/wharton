<template>
    <div>
        <div class="subVisual">
            <h3 class="title">Contact Us</h3>
            <img src="/img/subVisual01.jpg" alt="">
        </div>

        <div class="subContent area-contactUs">
            <div class="wrap">
                <div class="boxes">
                    <div class="box-wrap">
                        <div class="box">
                            <img src="/img/circleLocation.png" alt="">

                            <div class="content">
                                <h3 class="title">Address</h3>
                                <p class="body">
                                    3960 Howard Hughes Parkway, Suite
                                    500, Las Vegas, USA
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="box-wrap">
                        <div class="box">
                            <img src="/img/circleEmail.png" alt="">

                            <div class="content">
                                <h3 class="title">Email</h3>
                                <p class="body">
                                    support@wharton.education
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="box-wrap">
                        <div class="box">
                            <img src="/img/circlePhone.png" alt="">

                            <div class="content">
                                <h3 class="title">Phone</h3>
                                <p class="body">
                                    1-702-9903555
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fragments mt-40">
                    <div class="fragment-wrap">
                        <div class="fragment box-contact">
                            <h3 class="title">Contact Us</h3>

                            <p class="body">
                                Complete the form below to get a free program guide and email updates
                                with learning tips and more.
                            </p>

                            <form @submit.prevent="store" class="mt-40">
                                <div class="m-input-wrap type01">
                                    <div class="m-input-text type01">
                                        <input type="text" placeholder="First name *" v-model="form.first_name">
                                    </div>
                                    <p class="m-input-error" v-if="form.errors.first_name">{{form.errors.first_name}}</p>

                                </div>

                                <div class="m-input-wrap type01">
                                    <div class="m-input-text type01">
                                        <input type="text" placeholder="Last name *" v-model="form.last_name">
                                    </div>
                                    <p class="m-input-error" v-if="form.errors.last_name">{{form.errors.last_name}}</p>

                                </div>

                                <div class="m-input-wrap type01">
                                    <div class="m-input-text type01">
                                        <input type="text" placeholder="Phone *" v-model="form.phone">
                                    </div>
                                    <p class="m-input-error" v-if="form.errors.phone">{{form.errors.phone}}</p>

                                </div>

                                <div class="m-input-wrap type01">
                                    <div class="m-input-text type01">
                                        <input type="text" placeholder="Email *" v-model="form.email">
                                    </div>
                                    <p class="m-input-error" v-if="form.errors.email">{{form.errors.email}}</p>
                                </div>

                                <div class="m-input-wrap type01">
                                    <div class="m-input-select type01">
                                        <select name="" id="" v-model="form.interest">
                                            <option value="" selected disabled>Interest *</option>
                                            <option value="Standard high school full-time enrollment">Standard high school full-time enrollment</option>
                                            <option value="AP courses">AP courses</option>
                                            <option value="Chinese Proficiency Test HSK preparation courses">Chinese Proficiency Test HSK preparation courses</option>
                                            <option value="Individual courses">Individual courses</option>
                                        </select>
                                    </div>

                                    <p class="m-input-error" v-if="form.errors.interest">{{form.errors.interest}}</p>
                                </div>

                                <div class="m-input-wrap type01">
                                    <div class="m-input-textarea type01">
                                        <textarea name="" id="" placeholder="Tell us about your interest in Wharton!" v-model="form.comment"></textarea>
                                    </div>

                                    <p class="m-input-error" v-if="form.errors.comment">{{form.errors.comment}}</p>
                                </div>

                                <button class="m-btn type01 bg-primary">SUBMIT</button>
                            </form>
                        </div>
                    </div>

                    <div class="fragment-wrap">
                        <div class="box-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3223.0433719452813!2d-115.15939448443945!3d36.11680108009507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8c4458f18a375%3A0x1360755701a2bdaa!2s3960%20Howard%20Hughes%20Pkwy%20%23500-A%2C%20Las%20Vegas%2C%20NV%2089169%2C%20USA!5e0!3m2!1sen!2skr!4v1632661111732!5m2!1sen!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            form: this.$inertia.form({
                "first_name" : null,
                "last_name": null,
                "phone": null,
                "email": null,
                "interest" : "",
                "comment" : null,
                "checked" : null
            })
        }
    },

    methods: {
        store(){
            this.form.post("/contacts", {
                preserveScroll: true,
                onSuccess: (response) => {
                    alert(response.props.flash.success);

                    this.form.reset()
                }
            })
        }
    },

    mounted(){
        AOS.init();
    }
}
</script>
