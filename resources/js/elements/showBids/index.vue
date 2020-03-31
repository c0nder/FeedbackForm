<template>
    <div class="container-col">
        <h1 class="page-h1">Всего({{ bids.total }}):</h1>

        <div class="bid" v-for="bid in bids.all">
            <div class="bid__text">{{ bid.message }}</div>
            <div class="bid__info">
                <span class="bid__username">{{ bid.name }}</span>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex'

    export default {
        name: 'ShowBids',

        mounted() {
            this.$store.dispatch('fetchBids')
        },

        computed: {
            ...mapGetters([
                'bids'
            ])
        }
    }
</script>

<style lang="scss">
    .page-h1 {
        color: #364350;
        font-weight: normal;
    }

    .bid {
        font-size: 18px;

        &__info {
            margin-top: 10px;
        }

        &__username {
            color: #364350;
        }

        &:not(:last-child) {
            margin-bottom: 30px;
        }
    }
</style>