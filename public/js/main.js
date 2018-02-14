new Vue({
  el: '#app',
  methods: {
    goTo(refName) {
    	var element = this.$refs[refName];
      console.log(element);
      var top = element.offsetTop;
      
      window.scrollTo(0, top);
    }
  }
})