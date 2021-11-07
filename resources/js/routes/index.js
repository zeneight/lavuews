// import Homepage from '../pages/Homepage.vue'
import Home from '../pages/Home.vue'
import SingleContent from '../pages/SingleContent.vue'
// import About from '../pages/About.vue'
// import Contact from '../pages/Contact.vue'
// import Blog from '../pages/Blog.vue'

export default {
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/detail',
            name: 'detail',
            component: SingleContent
        },
        
    ]
}
