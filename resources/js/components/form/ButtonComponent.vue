<template>
    <button class="form-button" @click="handleClick">{{ value }}</button>
</template>

<script>
    export default {
        props: {
            value: {
                type: String,
                required: true
            },
            handleClick: {
                type: Function,
                required: true
            }
        }
    }
</script>

<style lang="scss">
    .form-button {
        width: 100%;
        border-radius: 3px;
        background: #1ABC9C;
        border: none;
        color: #fff;
        font-size: 18px;
        padding: 12px 0;
        font-weight: bold;

        &:hover {
            background: #1ca78c;
            cursor: pointer;
        }
    }
</style>