import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Data from '../views/Data.vue'
import Form from '../views/Form.vue'

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
        path: '/form', 
        component: Form 
    },
    { 
        path: '/data', 
        component: Data 
    }
]