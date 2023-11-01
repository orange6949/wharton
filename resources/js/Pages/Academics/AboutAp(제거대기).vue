<template>
    <div>
        <div class="subVisual">
            <h3 class="title">About AP</h3>
            <img src="/img/subVisual02.jpg" alt="">
        </div>

        <div class="subContent area-aboutAp">
            <div class="wrap">
                <div class="m-box-img type01">
                    <img src="/img/aboutAp.jpg" alt="">

                    <div class="box-text">
                        <h3 class="title">COMMING SOON</h3>
                        <p class="body">more AP courses are coming</p>
                    </div>
                </div>

                <div class="m-section type01 mt-80" data-aos="fade-up" data-aos-duration="1500">
                    <div class="section-title">About AP</div>

                    <div class="section-body">
                        <p class="body">
                            Advanced Placement (AP) is a program in the United States and Canada created by the College Board which offers
                            college-level curricula and examinations to high school students. American colleges and universities may grant placement
                            and course credit to students who obtain high scores on the examinations.
                        </p>
                        <p class="body mt-20">
                            Advanced Placement online classes at Wharton are intended for the very, well-prepared and highly motivated student.
                            Inborn intelligence is not the primary ingredient for success at these classes. Far more important is a higher level of
                            initiative, personal discipline, time management skills, academic maturity and collaborative learning. If grades are
                            essential to you, please make ready for taking an Advanced Placement class here before enrolling in.
                        </p>
                    </div>
                </div>

                <div class="m-section type01" data-aos="fade-up" data-aos-duration="1500">
                    <div class="section-title">AP Courses</div>

                    <div class="section-body">
                        <div class="courses-wrap" v-for="category in categories" :key="category.id" v-if="category.courses.length !== 0">
                            <h3 class="title">{{ category.title }}</h3>

                            <div class="courses">
                                <div class="course-wrap" v-for="course in category.courses" :key="course.id">
                                    <Link :href="`/academics/courses/${course.id}`" class="course">
                                        {{ course.title }}
                                    </Link>
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
import {Link} from '@inertiajs/inertia-vue';

export default {
    components: {Link},
    data(){
        return {
            categories: this.$page.props.categories
        }
    },

    methods: {

    },

    mounted(){
        AOS.init();
    }
}
</script>
