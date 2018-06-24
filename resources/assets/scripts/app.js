import Vue from "vue";

import './booking';

new Vue({
  el: '#app',

  methods: {
    handleScroll (event) {
      // console.log(this.footerHeight, this.footerFontSize);
      const el = document.scrollingElement || document.documentElement;
      let offset = el.scrollTop + window.innerHeight;
      let height = el.offsetHeight-10;
      if (offset > height && offset-this.oldOffset > 0) {
        this.footerHeight += 2;
        this.footerFontSize += 2;
      } else if (offset-this.oldOffset < 0) {
        if (this.footerHeight > 10){
          this.footerHeight -= 10;
          this.footerFontSize -= 10;
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
  data: {
    oldOffset: 0,
    footerHeight: 0,
    footerFontSize: 14
  },
  computed: {
    footerHeightInPixels() {
      return this.footerHeight + 'px'
    },
    footerFontSizeInPixels() {
      return this.footerFontSize + 'px'
    }
  }
})

// require('intersection-observer')
// require('./scroll')
