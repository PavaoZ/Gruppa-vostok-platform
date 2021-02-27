<template>
    <div class="updates-container">
        <update-item v-for="(item, index) in updates" :key="index" :content="item" />
    </div>
</template>

<script>
import CenterImageContainer from '../../Partials/CentralizedImageContainer.vue'
import UpdateItem from './Partials/UpdateItem.vue'

export default {
    name: 'LatestUpdates',
    components: {
        CenterImageContainer,
        UpdateItem,
    },
    props: {
        updates: {
            type: Array,
            required: false,
            default: () => [
                {
                    title: 'WE GOT LEGAL!',
                    date: '12. 02. 2020',
                    text: 'askdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskd'
                }
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
.updates-container {
    color: #FFF;
    font-size: 20px;
    padding: 0px 20% 80px 20%;
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