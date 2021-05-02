<template>
    <div class="text-container">
        <a :href="destinationUrl">
            <span>
                {{ $t(text) }}
            </span>
        </a>
    </div>
</template>

<script>
export default {
    name: 'Profile',
    props: {
        text: {
            type: String,
            required: false,
        },
        destinationUrl: {
            type: String,
            required: false,
            default: '/'
        }
    }
}
</script>

<style lang="scss" scoped>
.text-container {
    padding: 10px;
    font-size: 20px;
    :first-child {
        text-decoration: none;
        :first-child {
            cursor: pointer;
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s;
            -ms-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
        }
        :first-child:hover {
            color: #ff6600;
        }
    }
}
</style>