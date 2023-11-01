<template>
    <div>
        <div class="subVisual">
            <h3 class="title">Courses</h3>
            <img src="/img/subVisual02.jpg" alt="">
        </div>

        <div class="subContent area-courses">
            <div class="wrap">
                <div class="boxes">
                    <div class="box-wrap">
                        <div class="box">
                            <div class="content">
                                <p class="count"><span class="number">{{number}}</span>+</p>
                                <p class="sub">Courses</p>
                            </div>
                        </div>
                    </div>

                    <div class="box-wrap">
                        <div class="box">
                            <h3 class="title">Courses of Instruction</h3>
                            <a href="/file/course_catalog.pdf">
                                See our Handbook
                            </a>
                        </div>
                    </div>

                    <div class="box-wrap">
                        <div class="box">
                            <h3 class="title">COURSE</h3>
                            <a href="/academics/courses/27">
                                English 1
                            </a>
                            <p class="body">
                                This course concentrates on the fundamental language skills of reading, writing, conventions of written and oral language, research, and listening/speaking in an effort to build a foundation for student success in advanced high school English classes.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="m-boards-top type01">
                    <span class="count">{{ courses.total }} Courses</span>


                    <div class="m-search-input-wrap">
                        <div class="m-input-select type01">
                            <select name="" id="" v-model="params.category_id" @change="filter">
                                <option value="" selected>All</option>
                                <option :value="category.id" v-for="category in categories" :key="category.id">
                                    {{ category.title }}
                                </option>
                            </select>
                        </div>
                        <div class="m-input-text type01">
                            <form @submit.prevent="filter">
                                <input type="text" placeholder="Search" v-model="params.word">
                                <img src="/img/search-black.png" alt="" class="m-input-text-deco" style="cursor:pointer" @click="filter">
                            </form>

                        </div>
                    </div>
                </div>

                <div class="m-boards type01">
                    <Link :href="`/academics/courses/${course.id}`" class="m-board" v-for="course in courses.data"
                          :key="course.id" data-aos-duration="1500" data-aos="fade-up">
                        <span :class="`m-tag type01 ${course.category.title.replace(' ', '')}`">{{ course.category.title }}</span>

                        <h3 class="title">
                            {{ course.title }}
                            <span class="subtitle">Open to Grades: {{ course.grade }} / Unit: {{ course.unit }}</span>
                        </h3>
                        <p class="body">
                            {{ course.description }}
                        </p>
                    </Link>

                    <div class="m-empty type01" v-if="courses.data.length === 0">
                        There is no data.
                    </div>
                </div>

                <div class="m-pagination type01" data-aos-duration="1500" data-aos="fade-up"  v-if="courses.data.length !== 0">
                    <Link :href="courses.first_page_url" class="m-pagination-btn m-pagination-first">
                        <img src="/img/arrowSmallDoubleLeft-black.png" alt="">
                    </Link>
                    <Link :href="courses.prev_page_url" class="m-pagination-btn m-pagination-prev">
                        <img src="/img/arrowSmallLeft-black.png" alt="">
                    </Link>

                    <div class="m-pagination-pages">
                        <Link :href="link.url"
                              :class="link.label == courses.current_page ? 'm-pagination m-pagination-page active' : 'm-pagination m-pagination-page'"
                              v-for="(link, index) in courses.links" :key="link.label"
                              v-if="index !== 0 && index !== courses.links.length - 1">
                            {{ link.label }}
                        </Link>
                    </div>


                    <Link :href="courses.next_page_url" class="m-pagination-btn m-pagination-next">
                        <img src="/img/arrowSmallLeft-black.png" alt="">
                    </Link>
                    <Link :href="courses.last_page_url" class="m-pagination-btn m-pagination-last">
                        <img src="/img/arrowSmallDoubleLeft-black.png" alt="">
                    </Link>
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
            courses: this.$page.props.courses,
            categories: this.$page.props.categories,
            params: this.$inertia.form({
                category_id: this.$page.props.category_id ? this.$page.props.category_id : "",
                page: this.$page.props.courses.current_page,
                word: ""
            }),
            number: 0,
        }
    },

    mounted() {
        AOS.init();

        let self = this;

        setTimeout(function(){
            self.add();
        }, 1000);
    },

    methods: {
        filter() {
            this.params.get("/academics/highSchool", {
                preserveScroll: true,
            });
        },

        add(){
            let self = this;

            this.number += 1;

            if(this.number === 100)
                return null;

            setTimeout(function(){
                self.add();
            }, 30);
        }
    }
}
</script>
