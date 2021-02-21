<template>
    <div class="about-content-block-container">
        <center-image-container :image="content.image" />
        <div class="about-content-block-text-container">
            {{ content.text }}
        </div>
    </div>
</template>

<script>
import CenterImageContainer from '../../../Partials/CentralizedImageContainer.vue'

export default {
    name: 'ContentBlock',
    components: {
        CenterImageContainer,
    },
    props: {
        content: {
            type: Object,
            required: true,
        }
    }
}
</script>

<style lang="scss" scoped>
.about-content-block-container {
    padding: 20px;
    color: #FFF;
    display: flex;
    flex-direction: column;
    max-width: 540px;
    .about-content-block-text-container {
        padding: 10px;
        font-size: 20px;
        word-break: break-all;
    }
}
</style>