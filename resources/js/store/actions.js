import axios from 'axios'

let actions = {
    createBid({commit}, post) {
        axios.post('/bid/create', post)
            .then(res => {
                let data = res.data;

                if (data.status == 0) {
                    commit('SET_ERROR', { show: true, message: data.message })
                } else {
                    commit('CREATE_BID', post)
                    commit('SET_ERROR', { show: false, message: '' })
                }
            }).catch(err => {
            console.log(err)
        })

    },
    fetchBids({commit}) {
        axios.get('/bid/getAll')
            .then(res => {
                commit('FETCH_BIDS', res.data)
            }).catch(err => {
            console.log(err)
        })
    },
};

export default actions