<template>
    <form-component>
        <group-component>
            <title-component value="Leave us a feedback"></title-component>
        </group-component>

        <group-component v-if="error.show">
            <error-component :value="error.message"></error-component>
        </group-component>

        <group-component>
            <label-component value="Name"></label-component>
            <input-component v-model="bid.name"></input-component>
        </group-component>

        <group-component>
            <label-component value="Phone number"></label-component>
            <input-component v-model="bid.phone"></input-component>
        </group-component>

        <group-component>
            <label-component value="Your message"></label-component>
            <input-component v-model="bid.message" isTextarea></input-component>
        </group-component>

        <group-component>
            <button-component value="Send feedback"
                              :handleClick="handleForm"></button-component>
        </group-component>
    </form-component>
</template>

<script>
    import {
        FormComponent,
        GroupComponent,
        InputComponent,
        LabelComponent,
        TitleComponent,
        ButtonComponent,
        ErrorComponent } from '../../components/form';
    import {mapGetters} from 'vuex'

    export default {
        name: 'FeedbackForm',

        components: {
            FormComponent,
            GroupComponent,
            InputComponent,
            LabelComponent,
            TitleComponent,
            ButtonComponent,
            ErrorComponent
        },

        data() {
            return {
                bid: {
                    name: '',
                    phone: '',
                    message: ''
                }
            }
        },

        methods: {
            handleForm: function() {
                this.$store.dispatch('createBid', this.bid)
            }
        },

        computed: {
            ...mapGetters([
                'error'
            ])
        }
    }
</script>