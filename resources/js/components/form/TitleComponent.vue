<template>
    <span class="form-title">{{ value }}</span>
</template>

<script>
    export default {
        props: {
            value: {
                type: String,
                required: true
            }
        }
    }
</script>

<style lang="scss">
    .form-title {
        font-size: 35px;
        color: #364350;
        font-weight: bold;
    }
</style>