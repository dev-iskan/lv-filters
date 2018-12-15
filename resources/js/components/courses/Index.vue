<template>
    <div class="row">
        <div class="col-sm-3">
            <filters endpoint="/api/courses/filters"></filters>
        </div>
        <div class="col-sm-9">
            <div class="card">
                <div class="card-header">Courses</div>
                <div class="card-body">
                    <template v-if="courses.length">
                        <course v-for="course in courses" :key="course.id" :course="course"></course>
                        <pagination :meta="meta"></pagination>
                    </template>
                    <template v-else>
                        No results found
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Course from './partials/Course'
    import Filters from './partials/Filters'
    import Pagination from './partials/Pagination'
    export default {
        data () {
            return {
                courses: [],
                meta: null
            }
        },
        mounted () {
            this.getCourses()
        },
        watch: {
            '$route.query': {
                handler (query) {
                    this.getCourses(1,query)
                },
                deep: true
            }
        },
        components: {
            Course,
            Pagination,
            Filters
        },
        methods: {
            getCourses (page = this.$route.query.page, query = this.$route.query) {
                axios.get(`/api/courses`, {
                    params: {
                        page,
                        ...query
                    }
                })
                    .then(response => {
                        this.courses = response.data.data
                        this.meta = response.data.meta
                    })
                    .catch(err => console.log(err))
            }
        }
    }
</script>

<style scoped>

</style>