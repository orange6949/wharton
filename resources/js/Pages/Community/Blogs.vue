<template>
    <div>
        <div class="subVisual">
            <h3 class="title">Blogs</h3>
            <img src="/img/subVisual04.jpg" alt="">
        </div>

        <div class="subContent area-item">
            <div class="wrap">
                <div class="m-boards-top type01" data-aos="fade-up" data-aos-duration="1500">
                    <span class="count">{{count}} Blogs</span>

                    <div class="m-search-input-wrap">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="Search">
                            <img src="/img/search-black.png" alt="" class="m-input-text-deco">
                        </div>
                    </div>
                </div>

                <div class="m-boards type01">
                    <Link :href="`/community/blogs/${item.id}`" class="m-board" data-aos="fade-up" data-aos-duration="1500" v-for="item in items.data" :key="item.id">
                        <h3 class="title">
                            {{ item.title }}
                            <span class="subtitle" style="margin-left:auto;">{{item.created_at}}</span>
                        </h3>
<!--                        <p class="body">
                            {{item.description}}
                        </p>-->

                        <div class="utils">
                            <!--<button :class="`${item.bookmark ? 'util active' : 'util'}`" @click="(event) => bookmark(event, item)">
                                <img src="/img/bookmark-primary.png" alt="" class="icon inactive">
                                <img src="/img/bookmark-active.png" alt="" class="icon active">

                                Bookmark
                            </button>
                            -->

                            <button :class="`${item.subscribe ? 'util active' : 'util'}`" @click="(event) => subscribe(event, item)">
                                <img src="/img/mail-primary.png" alt="" class="icon inactive">
                                <img src="/img/mail-active.png" alt="" class="icon active">

                                Subscribe
                            </button>

                            <div class="util">
                                <img src="/img/board-primary.png" alt="" class="icon">

                                {{item.count_post}} Posts
                            </div>
                        </div>
                    </Link>

                    <div class="m-empty type01" v-if="items.data.length === 0" data-aos-duration="1500" data-aos="fade-up">
                        There is no data.
                    </div>
                </div>

                <div class="m-pagination type01" data-aos-duration="1500" data-aos="fade-up"  v-if="items.data.length !== 0">
                    <Link :href="items.first" class="m-pagination-btn m-pagination-first">
                        <img src="/img/arrowSmallDoubleLeft-black.png" alt="">
                    </Link>
                    <Link :href="items.prev" class="m-pagination-btn m-pagination-prev">
                        <img src="/img/arrowSmallLeft-black.png" alt="">
                    </Link>

                    <div class="m-pagination-pages">
                        <Link :href="link.url"
                              :class="link.label == items.meta.current_page ? 'm-pagination m-pagination-page active' : 'm-pagination m-pagination-page'"
                              v-for="(link, index) in items.meta.links" :key="link.label"
                              v-if="index !== 0 && index !== items.meta.links.length - 1">
                            {{ link.label }}
                        </Link>
                    </div>


                    <Link :href="items.links.next" class="m-pagination-btn m-pagination-next">
                        <img src="/img/arrowSmallLeft-black.png" alt="">
                    </Link>
                    <Link :href="items.links.last" class="m-pagination-btn m-pagination-last">
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
            items: this.$page.props.blogs,
            params: this.$inertia.form({
                page: this.$page.props.blogs.meta.current_page,
                word: ""
            }),
            bookmarkForm: this.$inertia.form({
                blog_id: null
            }),
            subscribeForm: this.$inertia.form({
                blog_id: null
            }),
            count: this.$page.props.count
        }
    },

    mounted() {
        AOS.init();
    },

    methods: {
        filter() {
            this.params.get("/community/blogs", {
                preserveScroll: true,
            });
        },

        subscribe(event, item){
            event.preventDefault();
            event.stopPropagation();

            this.bookmarkForm.blog_id = item.id;

            this.bookmarkForm.post("/subscribes",{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.items = response.props.blogs;

                    if(response.props.flash.success)
                        alert(response.props.flash.success);
                }
            });
        },

        bookmark(event, item){
            event.preventDefault();
            event.stopPropagation();

            this.bookmarkForm.blog_id = item.id;

            this.bookmarkForm.post("/bookmarks",{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.items = response.props.blogs;

                    if(response.props.flash.success)
                        alert(response.props.flash.success);
                }
            });
        }
    }
}
</script>
