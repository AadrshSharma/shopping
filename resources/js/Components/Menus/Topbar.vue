<template>
    <div class="w-full family-poppins fixed top-0 bg-white border-b border-gray-50 flex items-center z-40 justify-between px-5" style="height: 65px; box-shadow: 0px 10px 30px 0px rgb(82 63 105 / 8%);">
        <div class="flex h-full items-center">
            <div class="" style="width: 240px;"></div>
        </div>

        <!-- <div @click="dropdown = !dropdown" class="flex items-center cursor-pointer hover:text-blue-600">
            <div class="w-11 h-11 rounded-full bg-gray-700 flex items-center justify-center">
                <span class="text-lg font-semibold text-white">{{ user.first_name.charAt(0 )+ ' ' + user.last_name.charAt(0) }}</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-0.5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </div>
        <div v-if="dropdown" class="w-52 rounded-md bg-gray-700 absolute shadow-xl right-6" style="top:65px">
            <div class="relative flex p-2">
                <div class="w-full z-20">
                    <a href="/my-account" class="flex items-center text-gray-200 cursor-pointer hover:text-white px-3 py-2.5 hover:bg-gray-600 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-sm font-normal">Manage account</span>
                    </a>
                    <div @click.prevent="logout" class="flex items-center text-gray-200 cursor-pointer hover:text-white px-3 py-2.5 hover:bg-gray-600 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <span class="text-sm font-normal">Logout</span>
                    </div>
                </div>
                <div class="absolute h-4 w-4 rotate-45 transform bg-gray-700" style="top: -4px; right:31px"></div>
            </div>
        </div> -->
    </div>
</template>

<script>
export default {
    name: "Topbar",
    data(){
        return{
            dropdown: false,
            user: this.$page.props.user
        }
    },

}
</script>

<style scoped>

</style>
