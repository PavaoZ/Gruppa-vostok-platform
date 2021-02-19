<template>
    <div class="navbar-main-container">
        <logo-container imageSrc="/assets/images/gruppa-vostok-transparent.png" linkHref="/" title="navbar.club.name" />
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
            // s bekenda ide
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
            // ovo ce s bekenda ici
            list: [
                {
                    name: 'Home',
                    location: '/assets/icons/military/010-tent.svg',
                    url: '/'
                },
                {
                    name: 'About',
                    location: '/assets/icons/military/insignia.svg',
                    url: '/about'
                },
                {
                    name: 'Equipment',
                    location: '/assets/icons/military/helmet.svg',
                    url: '/'
                },
                {
                    name: 'Members',
                    location: '/assets/icons/military/soldier.svg',
                    url: '/'
                },
                {
                    name: 'Latest updates',
                    location: '/assets/icons/military/radar.svg',
                    url: '/'
                },
                {
                    name: 'Contact us',
                    location: '/assets/icons/military/walkie-talkie.svg',
                    url: '/'
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
    margin-bottom: 30px;
}

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