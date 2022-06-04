<script>
import Layout from "../Shared/Layout.vue";

export default {
  layout: Layout,

props: {
    artists : Object,
    resource : String
}
}   

</script>
<template>
    <Head title="Fiche d'un artiste" />

<h1>Détail de l'artiste</h1>

    <ul>
        <table>
           <thead>
               <tr>
                <th>Firstname</th>
                <th>Lastname</th>
               </tr>
           </thead>
           <tbody>
            <tr v-for="artist in artists">
               <td><h1>{{ artist.firstname }} {{ artist.lastname }}</h1></td> 
              
            </tr> 
            </tbody>
    </table>
    </ul>


    <!-- <nav><a href="{{ route('artist_index') }}">Retour à l'index</a></nav> -->




</template>
