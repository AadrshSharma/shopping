<template>
    <layout>
       
<section class="py-1 bg-blueGray-50">
<div class="w-full  mb-12 xl:mb-0 px-4 mx-auto mt-24">
  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
          <h3 class="font-semibold text-base text-blueGray-700">Product Details</h3>
        </div>
        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
          <button @click="openModal = true" class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Add Products</button>
        </div>
      </div>
    </div>
        <div v-if="openModal" class="w-full h-screen-20 bg-gray-900 z-50 bg-opacity-50 fixed top-0 right-0 left-0 bottom-0">
            <div class="w-full h-full flex">
                <div class="bg-white rounded-md shadow-md m-auto p-6" style="width: 440px;">
                    <div class="flex items-center justify-between">
                        <div class="text-base font-medium">Add State</div>
                    </div>
                    <div class="w-full my-6">
                       <label  class="block mb-1 text-gray-600 font-semibold">Product Name</label>
                        <input v-model="st_name" maxlength="20" type="text"  class="text-sm font-medium text-gray-700 rounded w-full border border-gray-300 focus:outline-none">
                        <label  class="block mb-1 text-gray-600 font-semibold">Description</label>
                        <input v-model="st_name" maxlength="20" type="text"  class="text-sm font-medium text-gray-700 rounded w-full border border-gray-300 focus:outline-none">                      
                        <label  class="block mb-1 text-gray-600 font-semibold">Price</label>
                        <input v-model="st_name" maxlength="20" type="text"  class="text-sm font-medium text-gray-700 rounded w-full border border-gray-300 focus:outline-none">
                        <label  class="block mb-1 text-gray-600 font-semibold">Image</label>
                        <input v-model="st_name" maxlength="20" type="text"  class="text-sm font-medium text-gray-700 rounded w-full border border-gray-300 focus:outline-none">
                        <label  class="block mb-1 text-gray-600 font-semibold">slug</label>
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
    <div class="block w-full overflow-x-auto">
      <table class="items-center bg-transparent w-full border-collapse ">
        <thead>
          <tr>
            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Product name
                        </th>
          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Description
                        </th>
           <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Price
                        </th>
          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Featured Image
                        </th>
          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                         Slug
                        </th>
          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Action
                        </th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
              /argon/
            </th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
              4,569
            </td>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              340
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
              46,53%
            </td>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              340
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
             <button type="submit"  class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                       <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
             </button>
             <button type="submit"  class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-red-500  " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                       </svg>
             </button>
            </td>
          </tr>
          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700">
              /argon/index.html
            </th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              3,985
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              319
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
              46,53%
            </td>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              340
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
             <button type="submit"  class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                       <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
             </button>
             <button type="submit"  class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-red-500  " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                       </svg>
             </button>
            </td>
          </tr>
          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700">
              /argon/charts.html
            </th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              3,513
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              294
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
              36,49%
            </td>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              340
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
             <button type="submit"  class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                       <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
             </button>
             <button type="submit"  class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-red-500  " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                       </svg>
             </button>
            </td>
          </tr>
          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700">
              /argon/tables.html
            </th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              2,050
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              147
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
              50,87%
            </td>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              340
            </td>
             <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
             <button type="submit"  class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                       <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
             </button>
             <button type="submit"  class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-red-500  " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                       </svg>
             </button>
            </td>
          </tr>
          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700">
              /argon/profile.html
            </th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              1,795
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              190
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-arrow-down text-red-500 mr-4"></i>
              46,53%
            </td>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              340
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
             <button type="submit"  class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                       <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
             </button>
             <button type="submit"  class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-red-500  " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                       </svg>
             </button>
            </td>
          </tr>
        </tbody>

      </table>
    </div>
  </div>
</div>

<footer class="relative pt-8 pb-6 mt-16">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-6/12 px-4 mx-auto text-center">
        <div class="text-sm text-blueGray-500 font-semibold py-1">
          Made with Aadrsh And Creative Team
        </div>
      </div>
    </div>
  </div>
</footer>

</section>
  
    </layout>
</template>
<script>
import layout from "../Components/Menus/layout";
export default{
    name:'Product',
    components:{layout},
    data(){
        return{
             openModal: false,
        }
    }
}
</script>
