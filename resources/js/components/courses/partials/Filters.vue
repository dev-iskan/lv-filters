<template>
    <div class="filters">
        <div class="list-group my-4" v-for="(map, key) in filters" :key="key">
            <a href=""
               v-for="(filter, value) in map"
               class="list-group-item list-group-item-action"
               @click.prevent="activateFilter(key, value)"
            >
                {{filter}}
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                filters: {},
                selectedFilters: {}
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
        methods: {
            activateFilter(key, value) {
                this.selectedFilters = Object.assign({},this.selectedFilters, { [key] : value })

                this.$router.replace({
                    query: {
                        ...this.selectedFilters
                    }
                })
            }
        }
    }
</script>

<style scoped>

</style>