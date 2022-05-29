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
    <Head title="Representation_bis" />

<h1>Liste des artistes</h1>

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
               <td>{{artist.firstname}}</td> 
               <td>{{artist.lastname}}</td>
            </tr> 
            </tbody>
    </table>
    </ul>


</template>
