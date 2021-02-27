<template>
    <div class="update-container-item">
        <div class="update-head">
            <div class="update-title">
                {{ content.title }}
            </div>
            <div class="update-date">
                {{ content.date }}
            </div>
        </div>
        <div class="update-description">
            {{ content.text }}
        </div>
    </div>
</template>

<script>
export default {
    name: 'UpdateItem',
    props: {
        content: {
            type: Object,
            required: true,
        }
    }
}
</script>

<style lang="scss" scoped>
.update-container-item {
    padding: 40px 40px 20px 40px;
    border-bottom: 1px solid #FFF;
    .update-head {
        display: flex;
        .update-title {
            font-weight: bold;
            padding: 0px 10px;
        }
        .update-date {
            padding: 0px 10px;
            font-size: 14px;
            display: flex;
            align-items: center;
        }
    }
    .update-description {
        padding: 0px 40px;
        margin-top: 20px;
        word-break: break-word;
    }
}
</style>