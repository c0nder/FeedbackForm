import Vue from 'vue'

import store from '../store/index'
import FeedbackForm from '../elements/feedbackForm'
import ShowBids from '../elements/showBids'

new Vue({
    el: '#app',
    components: { FeedbackForm, ShowBids },
    store
});