<template>
    <div class="navbar-menu-container">
        <language-selector class="menu-language-container" :selectedLanguage="selectedLanguage" :languages="languages" />
        <div class="navbar-profile-container" @click="openSidebar()">
            {{ $t('navbar.menu') }}
        </div>
    </div>
</template>

<script>
import LanguageSelector from './LanguageSelector'

export default {
    name: 'Menu',
    components: {
        LanguageSelector,
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
        }
    },
    methods: {
        openSidebar() {
            this.$emit('open-sidebar')
        }
    }
}
</script>

<style lang="scss" scoped>
.navbar-menu-container {
    display: flex;
    .navbar-profile-container {
        color: #FFF;
        font-size: 20px;
        padding: 10px;
        box-sizing: border-box;
        display: flex;
        cursor: pointer;
        -webkit-transition: 0.5s;
        -moz-transition: 0.5s;
        -ms-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
    }
    .navbar-profile-container:hover {
        color: #ff6600;
    }
    .navbar-profile-container:hover .navbar-side-menu {
        width: 250px !important;
    }
}

@media (max-width: 481px) {
    .menu-language-container {
        display: none !important;
    }
}
</style>