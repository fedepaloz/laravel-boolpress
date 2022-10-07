<template>
  <div class="card" style="width: 18rem">
    <img class="card-img-top" :src="post.image" alt="Card image cap" />
    <div class="card-body">
      <h5 class="card-title">{{ post.title }}</h5>
      <router-link
        :to="{ name: 'post-detail', params: { id: post.id } }"
        class="btn btn-info"
        >vedi</router-link
      >
      <p class="card-text">{{ post.content }}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "PostCard",
  props: {
    post: Object,
  },
};
</script>

<style>
</style>