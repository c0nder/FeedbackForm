let mutations = {
    CREATE_BID(state, bid) {
        state.bids.total += 1
        state.bids.all.unshift(bid)
    },
    FETCH_BIDS(state, bids) {
        return state.bids = bids
    },
    SET_ERROR(state, data) {
        state.error.show = data['show']
        state.error.message = data['message']
    }
};
export default mutations