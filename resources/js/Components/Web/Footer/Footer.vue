<template>
    <div class="footer-container">
        <div>
            {{ $t('footer.copyright') }}
            <div>Some icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
        </div>
        <div class="footer-social-container">
            <a v-for="(item, index) in socialIcons" :key="index" :href="item.link">
                <font-awesome-icon style="width: 2em; height: 2em; margin-left: 5px" :icon="{ prefix: 'fab', iconName: item.icon }"/>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Footer',
    data() {
        return {
            socialIcons: [
                {
                    icon: 'facebook',
                    link: '/',
                },
                {
                    icon: 'instagram',
                    link: '/',
                },
                {
                    icon: 'twitter',
                    link: '/',
                },
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
.footer-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #FFF;
    margin-top: 20px;
    padding: 10px;
    .footer-social-container {
        a {
            color: inherit;
        }
    }
}

@media (max-width: 480px) {
    .footer-container {
        flex-direction: column;
        text-align: center;
    }
}
</style>