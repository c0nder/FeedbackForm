<template>
    <label class="form-label">{{ value }}</label>
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

<style>
    .form-label {
        margin-bottom: 10px;
        color: #364350;
        font-size: 16px;
        font-weight: bold;
    }
</style>