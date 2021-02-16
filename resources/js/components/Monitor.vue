<template>
  <div>
    <div v-for="(single, index) in monitors">
      <div
        :class="{
          'good': single == 'OK',
          'bad': single == 'DOWN',
        }"
        style="margin:1rem; color:white; padding:1rem;"
      >
        {{ index }} - {{ single }}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: [],
  data: function () {
    return {
      monitors: [],
    };
  },
  mounted() {
    axios.get("/monitor").then((response) => {
      console.log(response.data);
      this.monitors = response.data.monitors;
    });
    // var i = 1;                  //  set your counter to 1

    function myLoop() {
      //  create a loop function
      setTimeout(function () {
        //  call a 3s setTimeout when the loop is called
        axios.get("/monitor").then((response) => {
          console.log(response.data);
          this.monitors = response.data.monitors;
        });
        console.log("hello"); //  your code here
        // i++;                    //  increment the counter
        // if (i < 10) {           //  if the counter < 10, call the loop function
        myLoop(); //  ..  again which will trigger another
        // }                       //  ..  setTimeout()
      }, 30000);
    }

    myLoop(); //  start the loop
  },
  methods: {},
};
</script>
<style>
.good{
    background-color:green;
}
.bad{
    background-color:red;
}</style>