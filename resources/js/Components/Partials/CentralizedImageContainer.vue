<template>
    <div class="image-container">
        <img :src="image.src" :alt="image.alt" />
    </div>
</template>

<script>
export default {
    name: 'CenteredImage',
    props: {
        image: {
            type: Object,
            required: false,
            default: function() {
                return {
                    src: '/assets/images/gruppa-vostok-transparent.png',
                    alt: 'Logo'
                }
            }
        }
    }
}
</script>

<style lang="scss" scoped>
.image-container {
    // padding: 20px;
    img {
        width: 100%;
        max-width: 500px;
    }
}
</style>