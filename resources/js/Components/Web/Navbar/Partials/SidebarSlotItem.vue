<template>
    <div class="slot-container">
        <div class="slot-sub-container">
            <slot />
        </div>
    </div>
</template>

<style lang="scss" scoped>
.slot-container {
    padding: 10px;
    box-sizing: border-box;
    .slot-sub-container {
        border-bottom: 1px solid #FFF;
    }
}
</style>