<template>
    <div>
        <topbar></topbar>
        <sidebar></sidebar>
        <div>
            <div class="" style="padding-left: 240px; padding-top: 65px">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
import Topbar from "./Topbar";
import Sidebar from "./Sidebar";
export default {
    name: "layout",
    components: {Sidebar, Topbar}
}
</script>

<style scoped>

</style>
