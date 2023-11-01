<template>
    <div>
        <div class="subVisual">
            <h3 class="title">Document Downloads</h3>
            <img src="/img/subVisual05.jpg" alt="">
        </div>

        <div class="subContent area-documents">
            <div class="wrap">
                <div class="m-section type01">
                    <div class="section-title">
                        Documents
                    </div>
                    <div class="section-body">
                        <!-- 수정필요 #3-->
                        <div class="downloads">
                            <div class="download-wrap" v-for="document in documents.data" :key="document.id">
                                <a :href="document.file.url" class="download">
                                    <img src="/img/download-primary.png" alt="">

                                    <span class="text">{{document.title}}</span>
                                </a>
                            </div>
                        </div>

                        <div class="m-empty type01" v-if="documents.data.length === 0" style="border:none;">
                            There is no data.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            documents: this.$page.props.documents
        }
    },
    mounted(){
        AOS.init();
    }
}
</script>
