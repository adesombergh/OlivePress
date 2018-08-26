export default {
  props: {
    homeurl : {
      type: String,
      required: true
    }
  },
  data () {
    return {
      links: [
        {
          title: 'NEWS',
          href: this.homeurl + '/news',
          customClass: 'first'
        },
        {
          title: 'ARTISTS',
          href: this.homeurl + '/artist',
          customClass: 'second'
        },
        {
          title: 'RELEASES',
          href: this.homeurl + '/release',
          customClass: 'third'
        },
      ],
      customClass: '',
    }
  },
  computed: {
  },
  methods: {
    changeClass (newClass) {
      this.customClass = newClass;
    }
  },
  delimiters: ["#{","}"]
}