
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('message', require('./components/MessageComponent.vue'));
// Vue.component('sent-message', require('./components/SentComponent.vue'));

const app = new Vue({
    el: '#app',
    data: {
        message: '',
        chat: {
            message: []
        }
    },
    methods: {
        send() {
            if  (this.message.length != 0) {
                this.chat.message.push(this.message);
                this.message = ''
            }
        }
    }
});
// data: {
//     messages: []
// },
// mounted() {
//     this.fetchMessages();
//     Echo.private('chats')
//         .listen('MessageSent', (e) => {
//             this.messages.push({
//                 message: e.message.message,
//                 user: e.user
//     })
//         })
// },
// methods: {
//     addMessage(message) {
//         this.messages.push(message)
//         axios.post('/messages/user/{id}', message).then(response => {
//
//         })
//     },
//     fetchMessages() {
//         axios.get('/messages/user/{id}').then(response => {
//             this.messages = response.data
//         })
//     }
// }
