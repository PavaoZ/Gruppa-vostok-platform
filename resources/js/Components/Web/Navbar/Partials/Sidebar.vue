<template>
    <div class="navbar-side-menu">
        <div class="navbar-side-menu-close-container">
            <img class="navbar-side-menu-close-button" src="/assets/icons/random/cancel-button.svg" @click="closeSidebar()" />
        </div>
        <slot-item class="responsive-mobile-display">
            <language-selector :selectedLanguage="selectedLanguage" :languages="languages" size="big" />
        </slot-item>
        <slot-item>
            <text-item text='navbar.profile' />
        </slot-item>
        <slot-item class="responsive-mobile-display-large">
            <navigation :menu_items="menu_items" item_direction="column" item_display="flex" />
        </slot-item>
        <slot-item>
            <text-item text='navbar.login.login' />
            <text-item text='navbar.logout.logout' />
        </slot-item>
    </div>
</template>

<script>
import LanguageSelector from './LanguageSelector'
import SlotItem from './SidebarSlotItem'
import Navigation from './Navigation'
import Profile from './Profile'
import TextItem from '../../../Partials/TextItem'

export default {
    name: 'Sidebar',
    components: {
        LanguageSelector,
        SlotItem,
        Navigation,
        Profile,
        TextItem,
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
        },
    },
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
    -webkit-transition: 0.5s;
    -moz-transition: 0.5s;
    -ms-transition: 0.5s;
    -o-transition: 0.5s;
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
}

.navbar-side-menu::-webkit-scrollbar {
    display: none;
}

@media (max-width: 480px) {
    .responsive-mobile-display {
        display: block !important;
    }
}

@media (min-width: 481px) {
    .responsive-mobile-display {
        display: none !important;
    }
}

@media (min-width: 1200px) {
    .responsive-mobile-display-large {
        display: none !important;
    }
}
</style>