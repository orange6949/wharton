<template>
    <div>
        <div class="subVisual">
            <h3 class="title">{{ blog.data.title }}</h3>
            <img src="/img/subVisual04.jpg" alt="">
        </div>

        <div class="subContent area-courses">
            <div class="wrap">
                <div class="m-detail type01">
                    <div class="box-title" data-aos="fade-up" data-aos-duration="1500">
                        <h3 class="title">{{ blog.data.title }}</h3>
                        <p class="body">
                            {{blog.data.created_at}}
                        </p>
                    </div>

                    <div v-html="blog.data.description" class="markdown body" data-aos="fade-up" data-aos-duration="1500">
                        {{blog.data.description}}
                    </div>

                    <div class="m-boards type01">
                        <Link :href="`/community/posts/${post.id}`" class="m-board" data-aos="fade-up" data-aos-duration="1500" v-for="post in posts.data" :key="post.id">
                            <h3 class="title">
                                {{ post.title }}
                                <span class="subtitle" style="margin-left:auto;">{{post.created_at}}</span>
                            </h3>
<!--                            <p class="body">
                                {{post.description}}
                            </p>-->
                        </Link>

                        <div class="m-empty type01" v-if="posts.data.length === 0" data-aos-duration="1500" data-aos="fade-up">
                            There is no data.
                        </div>
                    </div>

                    <div class="m-pagination type01" data-aos-duration="1500" data-aos="fade-up"  v-if="posts.data.length !== 0">
                        <Link :href="posts.first" class="m-pagination-btn m-pagination-first">
                            <img src="/img/arrowSmallDoubleLeft-black.png" alt="">
                        </Link>
                        <Link :href="posts.prev" class="m-pagination-btn m-pagination-prev">
                            <img src="/img/arrowSmallLeft-black.png" alt="">
                        </Link>

                        <div class="m-pagination-pages">
                            <Link :href="link.url"
                                  :class="link.label == posts.meta.current_page ? 'm-pagination m-pagination-page active' : 'm-pagination m-pagination-page'"
                                  v-for="(link, index) in posts.meta.links" :key="link.label"
                                  v-if="index !== 0 && index !== posts.meta.links.length - 1">
                                {{ link.label }}
                            </Link>
                        </div>


                        <Link :href="posts.links.next" class="m-pagination-btn m-pagination-next">
                            <img src="/img/arrowSmallLeft-black.png" alt="">
                        </Link>
                        <Link :href="posts.links.last" class="m-pagination-btn m-pagination-last">
                            <img src="/img/arrowSmallDoubleLeft-black.png" alt="">
                        </Link>
                    </div>

                    <div class="btns mt-100" data-aos="fade-up" data-aos-duration="1500">
                        <Link class="m-btn type01 bg-primary" href="/community/blogs">See All Blogs</Link>
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
            blog: this.$page.props.blog,
            posts: this.$page.props.posts,
            params: this.$inertia.form({
                page: this.$page.props.posts.meta.current_page,
                word: ""
            }),
        }
    },

    mounted() {
        AOS.init();
    },

    methods: {
        filter() {
            this.params.get("/community/blogs/".this.blog.id, {
                preserveScroll: true,
            });
        }
    }
}
</script>
