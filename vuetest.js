// Vue.component('post-list', {
//     props:['post'],
//     template:
//       <div class="post-list">
//         <h3>{{ post.name }}</h3>
//         <button>
//           enlarge text
//         </button>
//         <div v-html="post.content"></div>
//       </div>
// })

Vue.component('blog-post', {
  props: ['post'],
  template: `
    <div class="blog-post">
      <h3>{{ post.title }} </h3>
  　  <div v-html="post.content"></div>
      <div v-html="post.comments"></div>
      <div v-html="post.publishedAt"></div>
    </div>
    `
})

new Vue ({
  el: '#blog-post-demo',
  data: {
    posts: [
      {  },
    ]
  }
})
// new Vue({
//     el: '#blog-posts-events-demo',
//     data: {
//       posts: [/*...*/],
//       postFontSize: 1
//     }
// })
console.log(list);
