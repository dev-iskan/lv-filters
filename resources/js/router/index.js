import VueRouter from 'vue-router'
import Vue from 'vue'
import CourseIndex from '../components/courses/Index.vue'
Vue.use(VueRouter)

export default new VueRouter ({
    mode:'history',
    routes: [
        {
            path: '/courses',
            name: 'CourseIndex',
            component: CourseIndex
        }
    ]
})