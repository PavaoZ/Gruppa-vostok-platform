<template>
    <div class="content-container-item">
        <img class="content-container-item-image" :src="itemContent.srcImage" alt="Index page image" />
        <div class="container-item-content">
            {{ itemContent.contentText }}
            asdasfasdasfasdasfasdasfa
            sdasfasdasfasdasfasdasfasdasfasdasfa
            sdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfas dasfasdasfas
            dasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasfasdasf
        </div>
    </div>
</template>

<script>
export default {
    name: 'Container-item',
    props: {
        itemContent: {
            type: Object,
            required: true,
        }
    }
}
</script>

<style lang="scss" scoped>
.content-container-item {
    padding: 10px 0 10px 0;
    .content-container-item-image {
        border-radius: 50%;
        margin: 0px 30px 0px 30px;
        max-width: 160px;
        max-height: 160px;
        float: left;
    }
    .container-item-content {
        margin: 30px 20px 0px 20px;
        word-break: break-word;
    }
}

.content-container-item:nth-child(2n) .content-container-item-image {
    float: right;
}
</style>