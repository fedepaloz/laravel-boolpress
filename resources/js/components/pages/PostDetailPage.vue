<template>
  <div id="post-detail-page">
    <h1>dettaglio post</h1>
    <PostCard :post="post"></PostCard>
  </div>
</template>

<script>
import PostCard from "../posts/PostCard.vue";
export default {
  name: "PostDetailPage",
  data() {
    return {
      post: null,
    };
  },
  methods: {
    fetchPost() {
      axios
        .get("http://127.0.0.1:8000/api/posts/" + this.$route.params.id)
        .then((res) => {
          this.post = res.data;
        });
    },
  },
  mounted() {
    this.fetchPost();
  },
  components: { PostCard },
};
</script>

<style>
</style>