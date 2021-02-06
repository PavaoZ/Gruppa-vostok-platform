<template>
    <div class="navbar-main-container">
        <div class="navbar-index-image-navigation">
            <a href="/">
                <img class="navbar-index-image" src="/assets/images/gruppa-vostok-transparent.png" alt="Website logo">
                <div class="navbar-title">Группа Восток</div>
            </a>
        </div>
        <div class="navbar-navigation-list-container">
            <div class="navbar-navigation-list-item" v-for="(item, index) in list" :key="index">
                <a href="/">
                    {{ item.name }} 
                    <img class="navbar-navigation-list-item-icon" :src="item.location" :alt="item.alt">
                </a>
            </div>
        </div>
        <div class="navbar-profile-container">
            {{ $t('profile') }}
        </div>
    </div>
</template>

<script>
export default {
    name: "Navbar",
    props: {

    },
    data() {
        return {
            list: [
                {
                    name: 'Home',
                    icon: 'fighter-jet',
                    location: '/assets/icons/military/010-tent.svg'
                },
                {
                    name: 'About',
                    icon: 'fighter-jet',
                    location: '/assets/icons/military/insignia.svg'
                },
                {
                    name: 'Equipment',
                    icon: 'fighter-jet',
                    location: '/assets/icons/military/helmet.svg'
                },
                {
                    name: 'Members',
                    icon: 'fighter-jet',
                    location: '/assets/icons/military/soldier.svg'
                },
                {
                    name: 'Latest updates',
                    icon: 'fighter-jet',
                    location: '/assets/icons/military/radar.svg'
                },
                {
                    name: 'Contact us',
                    icon: 'coffee',
                    location: '/assets/icons/military/walkie-talkie.svg'
                },
            ]
        }
    }
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
    .navbar-index-image-navigation {
        display: flex;
        a {
            text-decoration: none;
            display: flex;
            .navbar-title {
                height: 100%;
                color: #FFF;
                font-size: 20px;
                display: flex;
                padding: 10px;
                align-items: center;
                box-sizing: border-box;
                -webkit-transition: 0.5s;
                -moz-transition: 0.5s;
                -ms-transition: 0.5s;
                -o-transition: 0.5s;
                transition: 0.5s;
            }
            .navbar-title:hover {
                color: #ff6600;
            }
            .navbar-index-image {
                height: 50px;
            }
        }
    }
    .navbar-navigation-list-container {
        display: none;
        .navbar-navigation-list-item {
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

@media (min-width: 1201px) {
    .navbar-main-container .navbar-navigation-list-container {
        display: flex;
    }
}
</style>