<template>
    <div class="navbar-language-container">
        <div class="navbar-current-language">
            <div class="navbar-current-language-text">{{ selectedLan.language }}</div>
            <country-flag :country="selectedLan.flag" :size="size" />
        </div>
        <div class="navbar-language-container-dropdown">
            <div class="navbar-language-dropdown-item" v-for="(item, index) in languageList" :key="index" @click="$i18n.locale = item.language_code, selectedLan = item">
                <div class="navbar-language-dropdown-item-text">{{ item.language }}</div>
                <country-flag :country='item.flag' :size="size" />
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
    data() {
        return {
            selectedLan: this.selectedLanguage,
        }
    },
    computed: {
        languageList: function() {
            return this.languages.filter(item => {
                return item.flag != this.selectedLan.flag
            })
        }
    },
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