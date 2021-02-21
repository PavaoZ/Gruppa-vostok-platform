<template>
    <div class="equipment-container">
        <large-text-item :text="overheadText" />
        <div class="equipment-pieces-container">
            <equipment-piece v-for="(equipmentItem, index) in equipments" :key="index" :equipment-piece="equipmentItem" />
        </div>
    </div>
</template>

<script>
import EquipmentPiece from './Partials/EquipmentPiece.vue'
import LargeTextItem from './Partials/LargeTextItem.vue'

export default {
    name: 'Equipment',
    components: {
        EquipmentPiece,
        LargeTextItem,
    },
    props: {
        equipment: {
            type: Array,
            required: false,
            default: () => []
        },
        overheadText: {
            type: String,
            required: false,
            default: 'Our equipment is based around special, police or other military units that are part of the Russian armed forces. The inpiration for these loadauts came from two reasons. The first reason would be uniqueness as in our country there are almost no airsoft teams that practice these loadauts and the other reason is interest in Russian military units. We find the equipment fascinating and interesting so we put these loadauts into practice. Underneath you can see some of our equipment. Hope you enjoy!'
        }
    },
    data() {
        return {
            equipments: [
                {
                    name: 'Rifle',
                    description: 'This is a big rifle',
                    image: {
                        src: '/assets/images/team-photo1.png',
                        alt: 'Logo'
                    }
                },
                {
                    name: 'Rifle',
                    description: 'This is a big rifle',
                    image: {
                        src: '/assets/images/team-photo1.png',
                        alt: 'Logo'
                    }
                }
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
.equipment-container {
    display: flex;
    flex-direction: column;
    padding: 0 10% 80px 10%;
    color: #FFF;
    .equipment-pieces-container {
        margin-top: 50px;
    }
}

@media (max-width: 480px) {
    .equipment-container {
        padding: 0%;
        padding-bottom: 120px;
    }
}

@media (min-width: 481px) and (max-width: 768px) {
    .equipment-container {
        padding: 0 5% 0 5%;
    }
}
</style>