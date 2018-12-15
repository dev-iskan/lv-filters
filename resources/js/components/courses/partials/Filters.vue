<template>
    <div class="filters">
        <p>
            <a href="#"
            @click.prevent="clearFilters">Clear all filters</a>
        </p>
        <div class="list-group my-4" v-for="(map, key) in filters" :key="key">
            <a href=""
               v-for="(filter, value) in map"
               class="list-group-item list-group-item-action"
               :class="{'active' : selectedFilters[key] === value}"
               @click.prevent="activateFilter(key, value)"
            >
                {{filter}}
            </a>
            <a href="#"
               v-if="selectedFilters[key]"
               @click.prevent="clearFilter(key)"
               class="list-group-item list-group-item-info">&times; Clear this filter </a>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                filters: {},
                selectedFilters: _.omit(this.$route.query, ['page'])
            }
        },
        props: [
            'endpoint'
        ],
        mounted () {
            axios.get(`${this.endpoint}`)
                .then(response => {
                    this.filters = response.data.data
                })
                .catch(err => console.log(err))
        },
        computed: {
            filtersInUse () {
                return !_.isEmpty(this.selectedFilters)
            }
        },
        methods: {
            activateFilter(key, value) {
                this.selectedFilters = Object.assign({},this.selectedFilters, { [key] : value })
                this.updateQueryString()
            },
            clearFilter(key) {
                this.selectedFilters = _.omit(this.selectedFilters, key)
                this.updateQueryString()
            },
            clearFilters () {
                this.selectedFilters = {}
                this.$router.replace({
                    query: {}
                })
            },
            updateQueryString () {
                this.$router.replace({
                    query: {
                        ...this.selectedFilters,
                        page: 1
                    }
                })
            }
        }
    }
</script>

<style scoped>

</style>