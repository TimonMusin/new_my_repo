
const app = Vue.createApp({
    data() {
        return {
            asd: 'asssd'
        }
    }
  })
  
const vm = app.mount('#app')
console.log(vm.$data.asd)

