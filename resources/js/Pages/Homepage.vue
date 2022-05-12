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

  <p>Bienvenue sur le site de partage d'informations sur les actualités théatrales.</p>
  <h1 v-if="username">You are connected: {{username}}</h1>
  <h1 v-else>YOU ARE NOT CONNECTED</h1>
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