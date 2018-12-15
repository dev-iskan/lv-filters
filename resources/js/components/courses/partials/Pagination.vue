<template>
    <ul class="pagination" role="navigation">
        <li class="page-item" :class="{'disabled' : meta.current_page === 1}" aria-disabled="true">
            <a href="#" class="page-link" @click.prevent="switched(meta.current_page -1)">
            <span>&laquo</span>
            </a>
        </li>
        <li class="page-item" :class="{'active': meta.current_page === x}" v-for="x in meta.last_page">
            <a href="" class="page-link" @click.prevent="switched(x)"> {{x}}</a>
        </li>
        <li class="page-item" :class="{'disabled' : meta.current_page === meta.last_page}" aria-disabled="true">
            <a href="#" class="page-link" @click.prevent="switched(meta.current_page +1)">
            <span>&raquo</span>
            </a>
        </li>
    </ul>
</template>

<script>
    export default {
        props: ['meta'],
        methods: {
            switched (page) {
                if(this.pageIsOutOfBounds()) {
                    return
                }
                this.$router.replace({
                    query: Object.assign({}, this.$route.query, {page})
                })
            },
            pageIsOutOfBounds (page) {
                return page <= 0 || page > this.meta.last_page
            }
        }
    }
</script>

<style scoped>

</style>