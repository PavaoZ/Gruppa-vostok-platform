<template>
    <div class="navbar-navigation-list-container" :style="{ 'display': containerStyleDisplayObject, 'flex-direction': containerStyleFlexDirectionObject }">
        <div class="navbar-navigation-list-item" v-for="(item, index) in menu_items" :key="index">
            <a :href="item.url">
                {{ item.name }} 
                <img class="navbar-navigation-list-item-icon" :src="item.location" :alt="item.alt">
            </a>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Navigation',
    props: {
        menu_items: {
            type: Array,
            required: true,
            default: () => []
        },
        item_direction: {
            type: String,
            required: false,
            default: 'row'
        },
        item_display: {
            type: String,
            required: false,
            default: 'flex'
        }
    },
    computed: {
        containerStyleFlexDirectionObject: function() {
            return this.item_direction
        },
        containerStyleDisplayObject: function() {
            return this.item_display
        }
    }
}
</script>

<style lang="scss" scoped>
.navbar-navigation-list-container {
    .navbar-navigation-list-item {
        white-space: nowrap;
        display: flex;
        align-items: center;
        color: #FFF;
        font-size: 20px;
        padding: 10px;
        box-sizing: border-box;
        a {
            text-decoration: none;
            color: inherit;
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s;
            -ms-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
            .navbar-navigation-list-item-icon {
                height: 25px;
                filter: invert(42%) sepia(82%) saturate(2902%) hue-rotate(4deg) brightness(105%) contrast(105%);
            }
        }
        a:hover {
            color: #ff6600;
        }
    }
}
</style>