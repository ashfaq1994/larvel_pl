<template>
     <div>
     <button v-on:click="addRoom">Hello</button>
    </div>
</template>

<script>
export default {
    // mounted() {
    //     console.log('Bookign Form');
    // },

    data(){
        return {
            inputs: [],
        }
    },


    methods:{
      addRoom: function(){
          console.log('hello world');
      }
    }
}
</script>