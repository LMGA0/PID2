<script>
import Layout from "../Shared/Layout.vue"

export default {
  layout: Layout,

  computed: {
    username() {
      return this.$page.props.auth?.user?.name;
    }
  }
}

let x = [2.3,4]
</script>

<template>
    <Head title="Homepage" />

  <h1 v-if="username">Welcome {{username}}!</h1>
  <h1 v-else>You are not connected.</h1>
    <ul>

            <li v-for="show in shows">
                {{show.title}}

            </li>
    </ul>



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