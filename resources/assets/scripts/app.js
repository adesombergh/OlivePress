import Vue from "vue";
import vNav from "./v-nav";

import './booking';

new Vue({
  el: '#app',
  data: {
    effectActivated: false,
    oldOffset: 0,
    footerHeight: 0,
    footerFontSize: 14
  },
  components: {
    'v-nav' : vNav
  },
  methods: {
    handleScroll (event) {

      const el = document.scrollingElement || document.documentElement;
      let offset = el.scrollTop + window.innerHeight;
      let height = el.offsetHeight-10;
      // console.log(offset, height);

      if (offset >= height) {
        let timeout = setTimeout(() => {
          clearTimeout(timeout);
          this.effectActivated = true
        }, 5000);
      }

      if (offset > height && offset-this.oldOffset > 0) {
        if (this.effectActivated === false) {
          return
        }
        this.footerHeight += 2;
        this.footerFontSize += 2;
      } else if (offset-this.oldOffset < 0) {
        if (this.footerHeight > 10){
          this.footerHeight -= 10;
          this.footerFontSize -= 10;
          this.effectActivated = false;
        }
      }
      this.oldOffset = offset;
    }
  },
  created () {
    window.addEventListener('scroll', this.handleScroll);
  },
  destroyed () {
    window.removeEventListener('scroll', this.handleScroll);
  },
  computed: {
    footerHeightInPixels() {
      return this.footerHeight + 'px'
    },
    footerFontSizeInPixels() {
      return this.footerFontSize + 'px'
    }
  },
  delimiters: ["#{","}"]

})

// require('intersection-observer')
// require('./scroll')
