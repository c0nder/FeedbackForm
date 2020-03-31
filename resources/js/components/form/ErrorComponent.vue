<template>
    <div class="form-error">
        {{ value }}
    </div>
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
    .form-error {
        text-align: center;
        background: #e74c3c;
        color: #fff;
        padding: 15px 0;
    }
</style>