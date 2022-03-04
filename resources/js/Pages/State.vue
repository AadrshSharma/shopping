<template>
   <div class="flex space-x-4">
      <div class="justify-between rounded-xl mt-4 p-4 bg-white shadow-lg">
        <h1 class="text-xl font-bold text-gray-800 mt-4">State
            <button  @click="openModal = true" class="border-2 border-blue-500 rounded-full font-bold ml-80 text-blue-500 px-3 py-1 transition duration-300 ease-in-out hover:bg-blue-500 hover:text-white mr-6">
              State
            </button>
        </h1>
        <div class="flow-root">
        <ul  role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
            <li  v-for="(item, index) in tableData" :key="index.id" class="py-3 sm:py-4">
                <div class="flex items-center space-x-4">

                    <div class="flex-1 min-w-0">
                        <p  @click="editModal(item)" class="text-sm font-medium text-gray-900 truncate dark:text-white">
                          {{item.id}} {{item.name}}
                        </p>

                    </div>
                    <button type="submit" @click.prevent="Destroy(item.id)" class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-red-500  " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                       </svg>
                    </button>
                </div>
            </li>
        </ul>
   </div>

           <div v-if="openModal" class="w-full h-screen-20 bg-gray-900 z-50 bg-opacity-50 fixed top-0 right-0 left-0 bottom-0">
            <div class="w-full h-full flex">
                <div class="bg-white rounded-md shadow-md m-auto p-6" style="width: 440px;">
                    <div class="flex items-center justify-between">
                        <div class="text-base font-medium">Add State</div>
                    </div>
                    <div class="w-full my-6">
                        <label  class="block mb-1 text-gray-600 font-semibold">Country</label>
                        <select v-model="country" class="text-sm font-medium text-gray-700 rounded w-full border border-gray-300 focus:outline-none" id="">
                         <option selected value="">Select One</option>
                          <option v-for="item in optionCountry" :value="item.id" :key="item.id">{{ item.name}}</option>
                        </select>
                        <label  class="block mb-1 text-gray-600 font-semibold">State</label>
                        <input v-model="name" maxlength="20" type="text" class="text-sm font-medium text-gray-700 rounded w-full border border-gray-300 focus:outline-none">
                        <!-- <span v-if="errors && errors.name" class="text-xs text-red-600">{{ errors.name[0]}}</span> -->

                    </div>
                    <div class="w-full flex items-center">
                        <button @click.prevent="openModal = false" class="px-4 py-2 rounded-md border border-red-500 hover:bg-red-500 hover:text-white text-sm font-medium text-red-500 focus:outline-none">Cancel</button>
                        <button type="submit" @click.prevent="submit" class="px-4 py-2 rounded-md bg-blue-500 hover:bg-blue-600 text-sm font-medium text-white focus:outline-none ml-6">Save</button>
                    </div>

                </div>
            </div>
        </div>

           <div v-if="openModal2" class="w-full h-screen-20 bg-gray-900 z-50 bg-opacity-50 fixed top-0 right-0 left-0 bottom-0">
            <div class="w-full h-full flex">
                <div class="bg-white rounded-md shadow-md m-auto p-6" style="width: 440px;">
                    <div class="flex items-center justify-between">
                        <div class="text-base font-medium">Update State</div>
                    </div>
                    <div class="w-full my-6">
                        <label  class="block mb-1 text-gray-600 font-semibold">Country</label>
                        <select v-model="st_country" class="text-sm font-medium text-gray-700 rounded w-full border border-gray-300 focus:outline-none" id="">
                         <!-- <option selected value="">Select One</option> -->
                           <option value=""></option>
                          <option v-for="item in optionCountry" :value="item.id" :key="item.id">{{ item.name}}</option>
                        </select>
                        <label  class="block mb-1 text-gray-600 font-semibold">State</label>
                        <input v-model="st_name" maxlength="20" type="text"  class="text-sm font-medium text-gray-700 rounded w-full border border-gray-300 focus:outline-none">

                    </div>
                    <div class="w-full flex items-center">
                        <button @click.prevent="openModal2 = false" class="px-4 py-2 rounded-md border border-red-500 hover:bg-red-500 hover:text-white text-sm font-medium text-red-500 focus:outline-none">Cancel</button>
                        <button type="submit" @click.prevent="editData(st_id)" class="px-4 py-2 rounded-md bg-blue-500 hover:bg-blue-600 text-sm font-medium text-white focus:outline-none ml-6">Update</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>



</template>
<script>
import layout from "../Components/Menus/layout";
export default{
    name:'State',
    components:{layout},
    data(){
        return{
             name:'',
             st_id:'',
             st_country:'',  
             st_name:'',  
             country:'',
             openModal: false,
             tableData:[],
             openModal2: false,
             optionCountry:[],
        }
    },
    methods:{
        editModal(ele){
            this.st_name = ele.name
            this.st_country = ele.c_id
            console.log(this.st_country)
            this.st_id = ele.id
            this.openModal2 = true
        },
        
        submit(){
            const payload= {
                c_id:this.country,
                name:this.name
            }
            axios.post('/api/state',payload).then(response =>{
                if(response.status === 200){
                    this.$inertia.get('reall');
                }
            })
        },
        fatchData(){
            axios.get('/api/state').then(response =>{
                if(response.status === 200){
                  this.tableData = response.data.data
                }
            })
            axios.get('/api/country').then(response =>{
                if(response.status === 200){
                  this.optionCountry = response.data.data
                }
            })
        },
        Destroy(id){
            // const payload = {
            //     // id: id
            //    }
             axios.delete('/api/state/'+id).then(response =>{
                if(response.status === 200){
                   this.$inertia.get('reall');
                }
            })
        },
        editData(st_id){
            const payload = { 
                // id:this.brand_id,
                c_id:this.st_country,
                name:this.st_name
               }
             axios.put('/api/state/'+st_id,payload).then(response =>{
                if(response.status === 200){
                   this.$inertia.get('reall');
                }
            })
        }
    
    },
    created(){
        this.fatchData();
        
        }

    }

</script>

