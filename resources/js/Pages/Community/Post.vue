<template>
    <div>
        <div class="subVisual">
            <h3 class="title">{{ item.data.title }}</h3>
            <img src="/img/subVisual04.jpg" alt="">
        </div>

        <div class="subContent area-courses">
            <div class="wrap">
                <div class="m-detail type01">
                    <div class="box-title" data-aos="fade-up" data-aos-duration="1500">
                        <h3 class="title">{{ item.data.title }}</h3>
                        <p class="body">
                            {{item.data.created_at}}
                        </p>
                    </div>

                    <div class="markdown" v-html="item.data.description"></div>

                    <div class="btns mt-100" data-aos="fade-up" data-aos-duration="1500">
                        <Link class="m-btn type01 bg-primary" :href="`/community/blogs/${item.data.blog_id}`">See All Posts</Link>
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
            item: this.$page.props.post,
        }
    },

    mounted() {
        AOS.init();
    },

    methods: {

    }
}
</script>
