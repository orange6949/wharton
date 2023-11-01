<template>
    <div>
        <div class="subVisual">
            <h3 class="title">{{ course.title }}</h3>
            <img src="/img/subVisual02.jpg" alt="">
        </div>

        <div class="subContent area-courses">
            <div class="wrap">
                <div class="m-detail type01">
                    <div class="box-title">
                        <span :class="`m-tag type01 ${course.category.title}`">{{ course.category.title }}</span>
                        <h3 class="title">{{ course.title }}</h3>
                        <p class="body">
                            Open to Grades: {{course.grade}} / Unit: {{course.unit}}
                        </p>
                    </div>

                    <p class="body">
                        {{course.description}}
                    </p>

                    <div class="btns">
                        <Link class="m-btn type01 bg-primary" :href="`/academics/${course.school === 'Middle School' ? 'middleSchool' : 'highSchool'}`">See All Courses</Link>
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
    data() {
        return {
            course: this.$page.props.course,

        }
    },

    mounted() {
        AOS.init();
    },

    methods: {

    }
}
</script>
