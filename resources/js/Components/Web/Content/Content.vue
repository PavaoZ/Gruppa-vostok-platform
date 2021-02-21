<template>
    <div class="main-content-container">
        <div class="content-container">
            <content-item v-for="(item, index) in arrayy" :key="index" :itemContent="item" />
        </div>
    </div>
</template>

<script>
import ContentItem from './Partials/ContainerItem.vue'

export default {
    name: 'Content',
    components: {
        ContentItem,
    },
    props: {
        contentItems: {
            type: Array,
            required: false,
        },
    },
    data() {
        return {
            // These will be contentItems
            arrayy: [
                {
                    srcImage: '/assets/images/gruppa-vostok.png',
                    contentText: 'Airsoft is fun'
                },
                {
                    srcImage: '/assets/images/gruppa-vostok.png',
                    contentText: 'Airsoft is fun'
                },
                {
                    srcImage: '/assets/images/gruppa-vostok.png',
                    contentText: 'Airsoft is fun'
                },
                {
                    srcImage: '/assets/images/gruppa-vostok.png',
                    contentText: 'Airsoft is fun'
                },
                {
                    srcImage: '/assets/images/gruppa-vostok.png',
                    contentText: 'Airsoft is fun'
                },
                {
                    srcImage: '/assets/images/gruppa-vostok.png',
                    contentText: 'Airsoft is fun'
                }
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
.main-content-container {
    padding: 0 20% 80px 20%;
    color: #FFF;
    font-size: 18px;
    .content-container {
        padding: 10px;
        display: flex;
        flex-direction: column;
    }
}

// @media media type and (condition: breakpoint) {
  // CSS rules
// }

// @media (max-width: 480px) {
//   .text {
//     font-size: 16px;
//   }
// }

// 320px — 480px: Mobile devices
// 481px — 768px: iPads, Tablets
// 769px — 1024px: Small screens, laptops
// 1025px — 1200px: Desktops, large screens
// 1201px and more —  Extra large screens, TV

@media (max-width: 480px) {
    .main-content-container {
        padding: 0%;
    }
}

@media (min-width: 481px) and (max-width: 768px) {
    .main-content-container {
        padding: 0 5% 0 5%;
    }
}
</style>