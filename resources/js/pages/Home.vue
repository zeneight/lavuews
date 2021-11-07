<template>
    <div>
        <TopNews/>
        <CategoryNews/>
        <TabNews/>
        <MainNews/>
    </div>
</template>

<script>
    import TopNews from '../components/TopNews.vue'
    import CategoryNews from '../components/CategoryNews.vue'
    import TabNews from '../components/TabNews.vue'
    import MainNews from '../components/MainNews.vue'

    export default {
        name: 'Home',
        computed: {
            
        },
        components: {
            TopNews,
            CategoryNews,
            TabNews,
            MainNews,
        }
    }

</script>
