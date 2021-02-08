<template>
    <div class="navbar-side-menu">
        <div class="navbar-side-menu-close-container">
            <img class="navbar-side-menu-close-button" src="/assets/icons/random/cancel-button.svg" @click="closeSidebar()" />
        </div>
        <slot-item class="language-slot slot-item">
            <language-selector :selectedLanguage="selectedLanguage" :languages="languages" size="big" />
        </slot-item>
        <slot-item class="slot-item">
            <navigation :menu_items="menu_items" item_direction="column" />
        </slot-item>
    </div>
</template>

<script>
import LanguageSelector from './LanguageSelector'
import SlotItem from './SidebarSlotItem'
import Navigation from './Navigation'

export default {
    name: 'Sidebar',
    components: {
        LanguageSelector,
        SlotItem,
        Navigation,
    },
    props: {
        selectedLanguage: {
            type: Object,
            required: false
        },
        languages: {
            type: Array,
            required: false,
            default: () => []
        },
        menu_items: {
            type: Array,
            required: false,
            default: () => []
        }
    },
    methods: {
        closeSidebar() {
            document.getElementById('navbar-side-menu').style.width = '0px'
        }
    }
}
</script>

<style lang="scss" scoped>
.navbar-side-menu {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    color: #FFF;
    .navbar-side-menu-close-container {
        padding: 10px;
        height: 72px;
        display: flex;
        justify-content: flex-end;
        .navbar-side-menu-close-button {
            height: 30px;
            cursor: pointer;
        }
    }
    .slot-item {
        display: block;
    }
}

@media (min-width: 481px) {
    .language-slot {
        display: none !important;
    }
}
</style>