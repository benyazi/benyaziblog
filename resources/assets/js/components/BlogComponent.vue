<template>
    <div class="list-group">
        <div v-if="filterTags.length > 0">

        </div>
        <div class="list-group-item list-group-item-action flex-column align-items-start" v-for="post in posts">
            <div class="media">
                <img class="align-self-start mr-3 rounded-circle" src="https://pbs.twimg.com/profile_images/771335511365607424/ikK4dno8_normal.jpg" alt="Generic placeholder image">
                <div class="media-body">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="mt-0">{{post.author.name}}</h5>
                        </div>
                        <div class="col-4 text-right">
                            <span class="badge badge-pill badge-light">{{post.published_at_formatted}}</span>
                        </div>
                    </div>
                    <div v-html="post.intro_html"></div>
                    <div class="row">
                        <div class="col-8">
                            Tags: <span class="badge badge-light ml-1" @click="showTag(tag)" v-for="tag in post.tags">{{tag.name}}</span>
                        </div>
                        <div class="col-4 text-right">
                            <a :href="post.url" class="btn btn-sm">Read More</a>
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
                'posts': [],
                'page': 1,
                'perPage': 10,
                'filterTags': []
            }
        },
        methods: {
            showTag(tag) {

            },
            getPosts() {
                let _this = this;
                axios.get('/api/posts?page'+this.page+'&perPage='+this.perPage)
                    .then(function (r) {
                    _this.posts = r.data;
                }).catch(function (e) {
                    alert(e);
                });
            }
        },
        mounted() {
            this.getPosts();
        }
    }
</script>
