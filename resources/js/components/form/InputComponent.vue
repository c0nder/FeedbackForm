<script>
    export default {
        props: {
            value: {
                type: String,
                required: true
            },

            isTextarea: {
                type: Boolean,
                required: false
            }
        },

        methods: {
            updateValue(val) {
                this.$emit('input', val);
            }
        },

        render: function(createElement) {
            let newElementSettings = {
                attrs: {
                    'class': 'form-text-input'
                },
                domProps: {
                    value: this.value
                },
            };

            if (this.isTextarea) {
                return createElement('div', {
                    attrs: {
                        contenteditable: true,
                        'class': 'form-text-input'
                    },
                    domProps: {
                        value: this.value
                    },
                    on: {
                        input: e => this.updateValue(e.target.innerHTML)
                    }
                })
            }

            return createElement('input', {
                attrs: {
                    type: 'text',
                    'class': 'form-text-input'
                },
                domProps: {
                    value: this.value
                },
                on: {
                    input: e => this.updateValue(e.target.value)
                }
            })
        }
    }
</script>

<style lang="scss">
    .form-text-input {
        padding: 10px 20px;
        border: 1px solid #D9D9D9;
        border-radius: 3px;
        background: #F9F9F9;
        font-size: 14px;
    }
</style>