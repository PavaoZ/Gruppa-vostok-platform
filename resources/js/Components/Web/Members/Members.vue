<template>
    <div class="members-main-container">
        <large-text-item :text="overheadText" />
        <div class="members-container">
            <member v-for="(member, index) in membersTemp" :key="index" :member="member" />
        </div>
    </div>
</template>

<script>
import Member from './Partials/Member.vue'
import LargeTextItem from './Partials/LargeTextItem.vue'

export default {
    name: 'Members',
    components: {
        Member,
        LargeTextItem,
    },
    props: {
        members: {
            type: Array,
            required: false,
            default: () => []
        },
        overheadText: {
            type: String,
            required: false,
            default: 'Our members are great'
        }
    },
    data() {
        return {
            membersTemp: [
                {
                    name: 'Pavo',
                    description: 'This is a God',
                    image: {
                        src: '/assets/images/team-photo1.png',
                        alt: 'Member'
                    }
                },
                {
                    name: 'Zila',
                    description: 'This is a big boy',
                    image: {
                        src: '/assets/images/team-photo1.png',
                        alt: 'Member'
                    }
                }
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
.members-main-container {
    display: flex;
    flex-direction: column;
    padding: 0 20% 80px 20%;
    color: #FFF;
    .members-container {
        margin-top: 50px;
    }
}

@media (max-width: 480px) {
    .members-main-container {
        padding: 0%;
        padding-bottom: 120px;
    }
}

@media (min-width: 481px) and (max-width: 768px) {
    .member-main-container {
        padding: 0 5% 0 5%;
    }
}
</style>