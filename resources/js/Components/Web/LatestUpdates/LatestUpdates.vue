<template>
    <div class="updates-container">
        <div class="update-container-item">
            <div class="update-head">
                <div class="update-title">
                    WE GOT LEGAL!
                </div>
                <div class="update-date">
                    12. 02. 2020
                </div>
            </div>
            <div class="update-description">
                askdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskdaskd
            </div>
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
    padding: 0px 20% 80px 20%;
    .update-container-item {
        padding: 40px 40px 20px 40px;
        border-bottom: 1px solid #FFF;
        .update-head {
            display: flex;
            .update-title {
                font-weight: bold;
                padding: 0px 10px;
            }
            .update-date {
                padding: 0px 10px;
                font-size: 14px;
                display: flex;
                align-items: center;
            }
        }
        .update-description {
            padding: 0px 40px;
            margin-top: 20px;
            word-break: break-all;
        }
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