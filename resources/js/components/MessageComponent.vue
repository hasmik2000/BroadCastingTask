<template>
    <div>
        <ul class="chat">
            <li class="left clearfix" v-for="message in messages">
                <div class="chat-body clearfix">
                    <p>
                        {{ message.message }}
                    </p>
                </div>
            </li>
        </ul>
        <div class="input-group">
          <input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here..." v-model="newMessage.message" @keyup.enter="sendMessage">
            <span class="input-group-btn">
                <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">
                    Send
                </button>
            </span>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'messages',
            'from',
            'to'
        ],
        data() {
            return {
                newMessage: {
                    message: ''
                }
            }
        },
        methods: {
            sendMessage() {
                axios.post('/send', {
                    message: this.newMessage.message,
                    from: this.from,
                    to: this.to,
                })
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                },
        },
        mounted() {
//            Echo.private('message.{newMessage}')
//                .listen('MessageSent', (e) => {
//                    console.log(e);
////                    this.messages.push({
////                       message:e.message.message
////                    });
//                });
        }
    };
</script>
<!--<script>-->
    <!--export default {-->
        <!--props: [-->
            <!--'color',-->
            <!--'messages'-->
        <!--],-->
        <!--computed: {-->
            <!--className() {-->
                <!--return 'list-group-item-' + this.color;-->
            <!--},-->
            <!--badgeClass() {-->
                <!--return 'badge-' + this.color;-->
            <!--}-->
        <!--},-->
        <!--mounted() {-->
            <!--console.log(this.messages);-->
        <!--}-->
    <!--}-->
<!--</script>-->