<template>
    <div class="media my-3">
        <a href=""><img src="https://semantic-ui.com/images/wireframe/image.png" class="mr-3" height="64" alt=""></a>
        <div class="media-body">
            <h5 class="mt-0"> {{course.name}}</h5>

            <ul class="list-inline" v-if="course.subjects">
                <li class="list-inline-item" v-for="subject in course.subject" :key="subject"> {{subject.name}} </li>
            </ul>

            <ul class="list-inline">
                <li class="list-inline-item">{{ course.formattedAccess }}</li>
                <li class="list-inline-item">{{ course.formattedDifficulty }}</li>
                <li class="list-inline-item">{{ course.formattedType }}</li>
                <li class="list-inline-item">{{ course.formattedStarted }}</li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['course']
    }
</script>

<style scoped>

</style>