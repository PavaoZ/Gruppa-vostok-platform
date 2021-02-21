<template>
    <div class="updates-container">
        <div class="update-container-item">
            asdasdasd
        </div>
    </div>
</template>

<script>
import CenterImageContainer from '../../Partials/CentralizedImageContainer.vue'

export default {
    name: 'LatestUpdates',
    components: {
        CenterImageContainer,
    },
    props: {
        updates: {
            type: Array,
            required: false,
            default: () => []
        }
    }
}
</script>

<style lang="scss" scoped>
.updates-container {
    color: #FFF;
    font-size: 20px;
    padding: 0px 10% 80px 10%;
    .update-container-item {
        padding: 40px;
    }
}

@media (min-width: 481px) and (max-width: 768px) {
    .updates-container {
        padding: 0 5% 0 5%;
    }
}

@media (max-width: 480px) {
    .updates-container {
        padding: 0%;
    }
}
</style>