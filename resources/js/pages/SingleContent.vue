<template>
    <div>
        <!-- Single News Start-->
        <div class="single-news">
            <b-container>
                <b-row>
                    <Detail/>
                    <Sidebar/>
                </b-row>
            </b-container>
        </div>
    </div>
</template>
<script>
    import Detail from '../components/Detail.vue'
    import Card from '../components/Card.vue'
    import Sidebar from '../components/Sidebar.vue'
    
    export default {
        name: 'SingleContent',
        components: {
            Card,
            Sidebar,
            Detail,
        }
    }
</script>