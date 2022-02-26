import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Data from '../views/Data.vue'

export const routes = [
    { 
        path: '/', 
        component: Home 
    },
    { 
        path: '/about', 
        component: About 
    },
    { 
        path: '/data', 
        component: Data 
    }
]