<template>
    <div class="form-block">
        <slot></slot>
    </div>
</template>

<script>
    export default {}
</script>

<style lang="scss">
    .form-block {
        display: flex;
        flex-direction: column;

        &:not(:last-child) {
             margin-bottom: 20px;
        }
    }
</style>