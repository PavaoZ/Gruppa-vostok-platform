<template>
    <div class="about-container">
        <content-block v-for="(block, index) in contentBlocks" :key="index" :content="block" />
        <!-- <center-image-container :image="image" />
        <center-image-container :image="image" />
        <center-image-container :image="image" /> -->
    </div>
</template>

<script>
import CenterImageContainer from '../../Partials/CentralizedImageContainer.vue'
import ContentBlock from './Partials/AboutContentBlock.vue'

export default {
    name: 'About',
    components: {
        CenterImageContainer,
        ContentBlock,
    },
    data() {
        return {
            contentBlocks: [
                {
                    image: {
                        src: '/assets/images/team-photo1.png',
                        alt: 'Team photo'
                    },
                    text: 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd'
                },
                {
                    image: {
                        src: '/assets/images/team-photo2.png',
                        alt: 'Team photo'
                    },
                    text: 'asdasdasd'
                },
                {
                    image: {
                        src: '/assets/images/team-photo1.png',
                        alt: 'Team photo'
                    },
                    text: 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd'
                },
                {
                    image: {
                        src: '/assets/images/team-photo2.png',
                        alt: 'Team photo'
                    },
                    text: 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd'
                },
            ],
        }
    }
}
</script>

<style lang="scss" scoped>
.about-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-bottom: 80px;
}

@media (max-width: 480px) {
    .about-container {
        padding-bottom: 120px;
    }
}
</style>