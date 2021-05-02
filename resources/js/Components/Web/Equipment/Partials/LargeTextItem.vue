<template>
    <div class="overhead-text-container">
        {{ text }}
    </div>
</template>

<script>
export default {
    name: 'OverheadTextItem',
    props: {
        text: String
    }
}
</script>

<style lang="scss" scoped>
.overhead-text-container {
    word-break: break-word;
    text-align: center;
    font-size: 20px;
    padding: 10px;
}
</style>