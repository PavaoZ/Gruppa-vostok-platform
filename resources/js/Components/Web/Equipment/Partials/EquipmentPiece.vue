<template>
    <div class="equipment-piece-container">
        <center-image-container :image="equipmentPiece.image" />
        <div class="equipment-piece-details-container">
            <div class="equipment-piece-name">
                {{ equipmentPiece.name }}
            </div>
            <div class="equipment-piece-description">
                {{ equipmentPiece.description }}
            </div>
        </div>
    </div>
</template>

<script>
import CenterImageContainer from '../../../Partials/CentralizedImageContainer.vue'

export default {
    name: 'EquipmentPiece',
    components: {
        CenterImageContainer,
    },
    props: {
        equipmentPiece: {
            type: Object,
            required: false,
        }
    }
}
</script>

<style lang="scss" scoped>
.equipment-piece-container {
    padding: 20px;
    display: flex;
    .equipment-piece-details-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        .equipment-piece-name {
            padding: 5px 5px 5px 10px;
            font-size: 25px;
            font-weight: bold;
            word-break: break-word;
        }
        .equipment-piece-description {
            padding: 5px 5px 5px 10px;
            font-size: 20px;
            word-break: break-word;
        }
    }
}

@media (max-width: 781px) {
    .equipment-piece-container {
        flex-direction: column;
    }
}
</style>