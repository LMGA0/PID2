<script>
import axios from 'axios'
import Layout from "../Shared/Layout.vue"
import CarouselExternalApi from "../Components/CarouselExternalApi.vue"

export default {
  components:{
    CarouselExternalApi
  },

  layout: Layout,

  computed: {
    username() {
      return this.$page.props.auth?.user?.name;
    },
  }
}

let x = [2.3,4]
</script>

<template>
    <Head title="Homepage" />
    <CarouselExternalApi />

</template>

<style scoped>
.flex p+p{
    margin-top: 2%;
}

.flex h2{
  font-weight: bold;
  font-size: 110%;
}

.flex-item{
  margin: 2%;
}

</style>