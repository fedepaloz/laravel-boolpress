<template>
  <div class="content">
    <TheHeader :title="title"></TheHeader>
   <main>
   <router-view></router-view>
   </main>
  </div>
</template>

 
 <script>

import TheHeader from "./TheHeader.vue";


export default {
  name: "App",
  components: {
    TheHeader,
   
   
},
  data() {
    return {
      title: "BOOLPRESS",
    }; 
  },
};
</script>


 