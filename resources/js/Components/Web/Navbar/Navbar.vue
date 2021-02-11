<template>
    <div class="navbar-main-container">
        <logo-container />
        <navigation class="responsive-mobile-display-large" :menu_items="list" item_direction="row" item_display="flex" />
        <menu-container :selectedLanguage="selectedLanguage" :languages="flags" @open-sidebar="openSidebar()" />
        <sidebar :menu_items="list" :selectedLanguage="selectedLanguage" :languages="flags" id="navbar-side-menu" />
    </div>
</template>

<script>
import LanguageSelector from './Partials/LanguageSelector.vue'
import Navigation from './Partials/Navigation.vue'
import MenuContainer from './Partials/Menu.vue'
import LogoContainer from './Partials/LogoContainer.vue'
import Sidebar from './Partials/Sidebar.vue'

export default {
    name: "Navbar",
    components: {
        LanguageSelector,
        Navigation,
        MenuContainer,
        LogoContainer,
        Sidebar,
    },
    props: {
        menu_items: {
            type: Array,
            required: false,
            default: () => [],
        },
        flagsa: {
            type: Array,
            required: false,
            default: () => [],
        },
    },
    data() {
        return {
            // Ovo ce biti kroz sesiju setano svakako
            selectedLanguage: {
                flag: 'ba',
                language: 'Local'
            },
            flags: [
                {
                    flag: 'ba',
                    language: 'Local'
                },
                {
                    flag: 'gb-eng',
                    language: 'English'
                },
                {
                    flag: 'hr',
                    language: 'Hrv'
                }
            ],
            list: [
                {
                    name: 'Home',
                    location: '/assets/icons/military/010-tent.svg'
                },
                {
                    name: 'About',
                    location: '/assets/icons/military/insignia.svg'
                },
                {
                    name: 'Equipment',
                    location: '/assets/icons/military/helmet.svg'
                },
                {
                    name: 'Members',
                    location: '/assets/icons/military/soldier.svg'
                },
                {
                    name: 'Latest updates',
                    location: '/assets/icons/military/radar.svg'
                },
                {
                    name: 'Contact us',
                    location: '/assets/icons/military/walkie-talkie.svg'
                },
            ]
        }
    },
    methods: {
        openSidebar() {
            document.getElementById('navbar-side-menu').style.width = '250px';
        },
    },
}
</script>

<style lang="scss" scoped>
.navbar-main-container {
    padding: 10px;
    font-size: 16px;
    display: flex;
    justify-content: space-between;
    background-image: url('/assets/images/black_camo_image1.jpg');
    background-size: cover;
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

}

@media (min-width: 481px) and (max-width: 768px) {

}

@media (min-width: 769px) and (max-width: 1024px) {

}

@media (min-width: 1025px) and (max-width: 1200px) {

}

@media (max-width: 1201px) {
    .responsive-mobile-display-large {
        display: none !important;
    }
}
</style>