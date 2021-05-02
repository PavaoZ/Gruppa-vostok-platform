<template>
    <div class="member-container">
        <center-image-container :image="member.image" />
        <div class="member-details-container">
            <div class="member-name">
                {{ member.name }}
            </div>
            <div class="member-description">
                {{ member.description }}
            </div>
        </div>
    </div>
</template>

<script>
import CenterImageContainer from '../../../Partials/CentralizedImageContainer.vue'

export default {
    name: 'Member',
    components: {
        CenterImageContainer,
    },
    props: {
        member: {
            type: Object,
            required: false,
        }
    }
}
</script>

<style lang="scss" scoped>
.member-container {
    padding: 20px;
    display: flex;
    .member-details-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        .member-name {
            padding: 5px 5px 5px 10px;
            font-size: 25px;
            font-weight: bold;
            word-break: break-word;
        }
        .member-description {
            padding: 5px 5px 5px 10px;
            font-size: 20px;
            word-break: break-word;
        }
    }
}

@media (max-width: 781px) {
    .member-container {
        flex-direction: column;
    }
}
</style>