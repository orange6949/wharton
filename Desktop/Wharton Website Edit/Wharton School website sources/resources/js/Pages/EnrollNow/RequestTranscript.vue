<template>
    <div>
        <div class="subVisual">
            <h3 class="title">Transcript Request Form</h3>
            <img src="/img/subVisual05.jpg" alt="">
        </div>

        <div class="subContent area-requestTranscript">
            <div class="wrap">
                <form class="m-form type01"  data-aos-duration="1500" data-aos="fade-up" @submit.prevent="store">
                    <h3 class="title" style="text-align: left;">Transcript Request From</h3>

                    <div class="m-input-wrap type01 mt-40">
                        <h3 class="m-input-title">Request Date *</h3>
                        <div class="m-input-text type01">
                            <input type="date" placeholder="Request Date *" v-model="form.request_date">
                        </div>
                        <p class="m-input-error" v-if="form.errors.request_date">{{form.errors.request_date}}</p>
                    </div>

                    <div class="m-input-wrap type01">
                        <h3 class="m-input-title">Birth Date *</h3>
                        <div class="m-input-text type01">
                            <input type="date" placeholder="Birth Date *" v-model="form.birth_date">
                        </div>
                        <p class="m-input-error" v-if="form.errors.birth_date">{{form.errors.birth_date}}</p>
                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="First Name *" v-model="form.first_name">
                        </div>
                        <p class="m-input-error" v-if="form.errors.first_name">{{form.errors.first_name}}</p>
                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="Last Name *" v-model="form.last_name">
                        </div>
                        <p class="m-input-error" v-if="form.errors.last_name">{{form.errors.last_name}}</p>
                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="Course *" v-model="form.course">
                        </div>
                        <p class="m-input-error" v-if="form.errors.course">{{form.errors.course}}</p>
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
                        <div class="m-input-text type01">
                            <input type="text" placeholder="Address *" v-model="form.address">
                        </div>
                        <p class="m-input-error" v-if="form.errors.address">{{form.errors.address}}</p>
                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-textarea type01">
                            <textarea name="" id="" v-model="form.send_transcript_to" placeholder="Send Transcript(s) To *"></textarea>
                        </div>

                        <p class="m-input-error" v-if="form.errors.send_transcript_to">{{form.errors.send_transcript_to}}</p>
                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="number" placeholder="Requested number *" v-model="form.requested_number">
                        </div>
                        <p class="m-input-error" v-if="form.errors.requested_number">{{form.errors.requested_number}}</p>
                    </div>

                    <div class="m-input-wrap type01">
                        <h3 class="m-input-title">Student ID Photo</h3>
                        <input type="file" @input="form.file = $event.target.files[0]"/>
                        <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                            {{ form.progress.percentage }}%
                        </progress>

                        <p class="m-input-error" v-if="form.errors.file">{{form.errors.file}}</p>
                    </div>

                    <button class="m-btn type01 bg-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            form: this.$inertia.form({
                request_date: null,
                birth_date: null,
                first_name: null,
                last_name: null,
                course: null,
                address: null,
                phone: null,
                email: null,
                send_transcript_to: null,
                requested_number: null,
                file: null,
            })
        }
    },

    methods: {
        store(){
            this.form.post("/requestTranscripts",{
                forceFormData: true,
                preserveScroll: true,
                onSuccess: (response) => {
                    alert(response.props.flash.success);

                    this.form.reset();
                }
            })
        },

        focusDate(e){
            $(e.target).hide().next().css('display', "block").focus()
        }
    },

    mounted(){
        AOS.init();
    }
}
</script>
