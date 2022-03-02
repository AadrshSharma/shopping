<template>
    <layout>
       <div class=" ml-6">
         <button type="button" class="relative flex justify-center items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize   bg-black rounded-md hover:bg-gray-900  focus:outline-none   transition duration-300 transform active:scale-95 ease-in-out">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
               <g>
                  <rect fill="none" height="24" width="24"></rect>
               </g>
               <g>
                  <g>
                     <path d="M19,13h-6v6h-2v-6H5v-2h6V5h2v6h6V13z"></path>
                  </g>
               </g>
            </svg>
            <span class="pl-2 mx-1">Add Brand</span>
         </button>
    <div class=" bg-white flex ml-4">
       <div class="py-3 px-3  bg-white rounded shadow-xl">

           <div class="mb-3">
               <label for="name" class=" text-gray-800 font-bold">Name:</label>
               <input v-model="name" type="text" id="name" placeholder="username" class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600" />
           </div>
           <button type="submit" @click.prevent="submit" class="cursor-pointer py-2 px-4  mt-6 bg-indigo-500 text-white font-bold  text-center rounded">Add</button>

      </div>
    </div>
  </div>


    </layout>
</template>
<script>
import layout from "../Components/Menus/layout";
export default{
    name:'Brand',
    components:{layout},
    data(){
        return{
            name:''
        }
    },
    methods:{
        submit(){
            const payload= {
                name:this.name
            }
            axios.post('/api/brand',payload).then(response =>{
                if(response.status === 200){
                    // this.$inertia.get('view');
                }
            })
        }

    }
}
</script>
