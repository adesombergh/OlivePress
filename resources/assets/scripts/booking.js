import Vue from "vue";
Vue.component('booking-button', {
  template: `
  <div class="booking">
    <a href="#" v-on:click.prevent="showItToMe = !showItToMe">BOOKING</a>
    <transition name="fade">
      <p v-if="showItToMe">{{ address }}</p>
    </transition>
  </div>
  `,
  props: {
    address: String
  },
  data() {
    return {
      showItToMe: false
    }
  }
})
