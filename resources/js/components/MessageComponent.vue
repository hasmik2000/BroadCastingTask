<!--<template>-->
    <!--<div class="container">-->
        <!--<div class="row">-->
            <!--<div class="col-md-8 col-md-offset-2">-->
                <!--<div class="panel panel-default" v-for="message in messages">-->
                    <!--<div class="panel-heading"><strong>{{ message.user.name }}</strong></div>-->
                    <!--<div class="panel-body">-->
                        <!--<p>{{ message.message }}</p>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
<!--</template>-->
<!--<script>-->
    <!--export default {-->
        <!--props: ['messages'],-->
        <!--mounted() {-->
            <!--console.log(this.message);-->
        <!--}-->
    <!--}-->
<!--</script>-->
<template>
    <div>
        <li class="list-group-item" :class="className"><slot></slot></li>
        <small class="badge float-right" :class="badgeClass">You</small>
    </div>
</template>

<script>
    export default {
        props: [
            'color'
        ],
        computed: {
            className() {
                return 'list-group-item-' + this.color;
            },
            badgeClass() {
                return 'badge-' + this.color;
            }
        }
    }
</script>