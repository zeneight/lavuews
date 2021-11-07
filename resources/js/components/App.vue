<template>
    <div id="app">
        <Top/>
        <Navbar/>
        <!-- main -->
        <router-view/>

        <Foot/>
    </div>
</template>

<script>
    import Top from './Top.vue'
    import Navbar from './Navbar.vue'
    import Foot from './Foot.vue'

    export default {
        name: 'App',
        components: {
            Top,
            Navbar,
            Foot,
        }
    }
</script>

<style>
</style>