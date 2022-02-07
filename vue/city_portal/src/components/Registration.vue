<template>
  <div class="Container">
    
   
  </div>

</template>


<script>
const EventHandlingApp = {
  data() {
    return {
      message: 'Тут чет должно быть'
    }
  },
  methods: {
    reverseMessage() {
      this.message = this.message
        .split('')
        
        .join('')
    }
  }
}

Vue.createApp(EventHandlingApp).mount('#event-handling')

export default {
  name: 'HelloWorld',
 
  props: {
    msg: String,
  
  }
 
}

</script>