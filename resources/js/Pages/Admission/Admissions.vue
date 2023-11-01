<template>
    <div>
        <div class="subVisual">
            <h3 class="title">Admissions</h3>
            <img src="/img/subVisual03.jpg" alt="">
        </div>

        <div class="subContent area-admissions">
            <div class="wrap">
<!--                <div class="box-video">
                    <div class="m-ratioBox-wrap">
                        <div class="m-ratioBox">
                            <div class="box-img" v-if="stop">
                                <img src="/img/thumbnail.png" alt="" class="thumbnail">
                                <img src="/img/play-circle.png" alt="" class="btn" @click="play">
                            </div>
                            <video ref="video" src="/file/daniel.mp4" controls></video>
                        </div>
                    </div>
                </div>-->

                <div class="m-section type01" data-aos-duration="1500" data-aos="fade-up">
                    <div class="section-title">
                        Admission
                        Requirements
                    </div>
                    <div class="section-body">
                        <!--                        <p class="body">
                                                    Wharton admits students of any race, color, national and ethnic origin to all the rights, privileges and activities generally accorded
                                                    or made available to students at the school. It does not discriminate on the basis of race, color, national and ethnic origin in
                                                    administration of its educational practices, admissions policies, scholarship, and athletic and other school-administered programs.
                                                </p>-->

                        <p class="body mt-20">
                            For students entering Wharton, the following documents are required before enrollment can be
                            completed. Students must have
                            completed eighth grade as evidenced by a school transcript.
                        </p>

                        <h3 class="m-title type01 mt-20" style="margin-bottom:10px;">
                            Middle School
                        </h3>

                        <div class="bodies type01">
                            <p class="body m-before-square">
                                Official transcripts from the previous two (2) school years (and most up-to-date
                                progress report).
                            </p>
                            <p class="body m-before-square">
                                English Proficiency Test Result- If your first language is not English, you must take
                                the <span class="bold">Test of English as a Foreign Language (TOEFL) and score a minimum of 55 or above,
                                International English Language Testing System (IELTS) and score a minimum of 5.0 or
                                above, or the Duolingo English Test (DET) and score a minimum of 85 or above.</span> If English
                                is your first language, but you speak another language at home, you may consider
                                submitting English proficiency results to demonstrate fluency or take Wharton 16-Weeks
                                intensive ESL course.
                            </p>
                            <p class="body m-before-square">
                                Official birth certificate (or other acceptable proof of age, he or she is considered
                                "age-appropriate" for ninth grade and may enroll in Wharton program).
                            </p>
                            <p class="body m-before-square">
                                Documentation of Financial Support.
                            </p>
                            <p class="body m-before-square">
                                Official government provided an identity card.
                            </p>
                            <div class="body m-before-square">
                                Admissions Essay

                                <div class="bodies type01">
                                    <p class="body m-before-hyphen">
                                        What about being a student at Wharton School most excites you?
                                    </p>
                                </div>
                            </div>
                        </div>

                        <h3 class="m-title type01 mt-20" style="margin-bottom:10px;">
                            High School
                        </h3>

                        <div class="bodies type01">

                            <p class="body m-before-square">
                                Official transcripts from the previous two (2) school years (and most up-to-date progress report).
                            </p>
                            <p class="body m-before-square">
                                One (1) standardized test score from the previous two years ( If the student does not have standardized test records (i.e. SSAT, ISEE, PSAT, SAT, or ACT.) contact the Office of Admissions and arrangements will be made for Math and English standardized testing).
                            </p>
                            <p class="body m-before-square">
                                English Proficiency Test Result- If your first language is not English, you must take the <span class="bold">Test of English as a Foreign Language (TOEFL) and score a minimum of 60 or above, International English Language Testing System (IELTS) and score a minimum of 5.5 or above, or the Duolingo English Test (DET) and score a minimum of 90 or above.</span> If English is your first language, but you speak another language at home, you may consider submitting English proficiency results to demonstrate fluency or take Wharton 16-Weeks intensive ESL course.
                            </p>
                            <p class="body m-before-square">
                                Official birth certificate (or other acceptable proof of age, he or she is considered "age-appropriate" for ninth grade and may enroll in Wharton program).
                            </p>
                            <p class="body m-before-square">
                                Documentation of Financial Support.
                            </p>
                            <p class="body m-before-square">
                                Official government provided an identity card.
                            </p>

                            <div class="body m-before-square">
                                Two(2) Admissions Essays

                                <div class="bodies type01">
                                    <p class="body m-before-hyphen">
                                        (1) What about being a student at Wharton School most excites you?
                                    </p>
                                    <p class="body m-before-hyphen">
                                        (2) Tell a story from your life, describing an experience demonstrating your character or what has helped shape it.
                                    </p>
                                </div>
                            </div>
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
            stop: true,
        }
    },

    methods: {
        play() {
            this.stop = false;

            this.$refs.video.play();
        }
    },

    mounted() {
        AOS.init();
    }
}
</script>
