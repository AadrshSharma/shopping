<template>

<layout>
    <!-- Country Section -->
 <div class="flex gap-4">
     <div class="ml-6">
       <brand>

       </brand>
     </div>
   <div class="ml-6 flex">
     <category>

      </category>
   </div>
 </div>
  <div class="flex gap-4">
     <div class="ml-6">
        <country>

       </country>
     </div>
   <div class="ml-6 flex">
     <state>

     </state>
   </div>
 </div>
 <div class="flex gap-4">
     <div class="ml-6">
        <city>

        </city>
     </div>
   <!-- <div class="ml-6 flex">
     <state>
         
     </state>
   </div> -->
 </div>
</layout>
 <!-- <div class="ml-6" style="margin-left:200px">
     <brand>

     </brand>
 </div> -->

</template>
<script>
import layout from "../Components/Menus/layout";
import Brand from "./Brand";
import Category from "./Category";
import Country from "./Country";
import State from "./State";
import City from "./City";
export default {
name:'Reall',
components:{Brand,Category,layout,Country,State,City},
}
</script>
