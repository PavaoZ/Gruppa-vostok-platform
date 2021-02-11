<template>
    <div class="navbar-language-container">
        <div class="navbar-current-language">
            <div class="navbar-current-language-text">{{ selectedLanguage.language }}</div>
            <country-flag :country="selectedLanguage.flag" :size="size" />
        </div>
        <div class="navbar-language-container-dropdown">
            <div class="navbar-language-dropdown-item" v-for="(country, index) in languageList" :key="index">
                <div class="navbar-language-dropdown-item-text">{{ country.language }}</div>
                <country-flag :country='country.flag' :size="size" />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'LanguageSelector',
    props: {
        size: {
            type: String,
            required: false,
            default: 'normal'
        },
        selectedLanguage: {
            type: Object,
            required: true
        },
        languages: {
            type: Array,
            required: false,
            default: () => []
        }
    },
    computed: {
        languageList: function() {
            return this.languages.filter(item => {
                return item.flag != this.selectedLanguage.flag
            })
        }
    }
}
</script>

<style lang="scss" scoped>
.navbar-language-container {
    display: block;
    position: relative;
    padding: 10px;
    cursor: pointer;
    .navbar-current-language {
        height: 100%;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        color: #FFF;
        .navbar-current-language-text {
            margin-right: 5px;
            opacity: 0;
            visibility: hidden;
        }
    }
    .navbar-language-container-dropdown {
        display: none;
        position: absolute;
        opacity: 0;
        visibility: hidden;
        right: 0;
        color: #FFF;
        background-color: #111;
        box-shadow: 0px 8px 16px 0px #00000033;
        z-index: 1;
        padding: 10px;
        .navbar-language-dropdown-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
            width: 100%;
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s;
            -ms-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
            .navbar-language-dropdown-item-text {
                margin-right: 5px;
            }
        }
        .navbar-language-dropdown-item:hover {
            color: #ff6600;
        }
    }
}
.navbar-language-container:hover {
    .navbar-language-container-dropdown, .navbar-current-language-text {
        display: block;
        animation: fade 1s;
        visibility: visible;
        opacity: 1;
    }
}

@keyframes fade {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}
</style>