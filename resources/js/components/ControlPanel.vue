<template>
    <div>
        <form class="w-6/12">
            <div>
                <h2 class="font-bold text-xl mb-4">Speed</h2>
                <input type="radio" name="speed" value=".25" v-model="time">
                <label for="speed">0.25x</label><br>
                <input type="radio" name="speed" value="1" v-model="time">
                <label for="speed">0.5x</label><br>
                <input type="radio" name="speed" value="1" v-model="time">
                <label for="speed">1x</label><br>
                <input type="radio" name="speed" value="2" v-model="time">
                <label for="speed">2x</label><br>
                <input type="radio" name="speed" value="3" v-model="time">
                <label for="speed">3x</label> 
            </div>

            <div>
                <h2 class="font-bold text-xl my-4">Injects: {{injects}}</h2>
                <vue-slider v-model="injects" :min="1" :max="42" />
            </div>

            <h2 class="font-bold text-2xl mt-4">Simulation Duration: {{(time * normalDuration * injects).toFixed(2)}} hours</h2>


            <button class="mt-8 px-4 py-2 border rounded bg-green-500 font-bold text-2xl text-white">Start</button>
        </form>
    </div>
</template>

<script>
    import axios from 'axios';
    import VueSlider from 'vue-slider-component'
    import 'vue-slider-component/theme/antd.css'
    export default{

        data: function(){
            return{
                time : 1,
                normalDuration : 1/42 * 6,
                injects: 42
            }
        },
        methods: {

        },
        components:{
            VueSlider
        }
    }
</script>