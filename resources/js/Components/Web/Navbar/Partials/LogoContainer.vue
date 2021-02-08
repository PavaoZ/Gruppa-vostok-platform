<template>
    <div class="navbar-index-image-navigation">
        <a href="/">
            <img class="navbar-index-image" src="/assets/images/gruppa-vostok-transparent.png" alt="Website logo">
            <div class="navbar-title">{{ $t('navbar.club.name') }}</div>
        </a>
    </div>
</template>

<script>
export default {
    name: 'Logo',
}
</script>

<style lang="scss" scoped>
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
</style>