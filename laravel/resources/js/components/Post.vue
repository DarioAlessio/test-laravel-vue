<template>
    <div id="miocomp" class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" @click="changeState()">
                    <div class="card-header"><h1>{{ title }}</h1></div>
                    <div class="card-body">
                        {{ stateContent }} <br><br>
                        <small>{{ likes }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data: function() {
            return {
                open: false
            };
        },
        methods: {
            changeState: function() {
                this.open = !this.open;
            }
        },
        computed: {
            shortContent: function() {
                return (this.content.length > 100)
                    ? this.content.substring(0, 100) + '...'
                    : this.content;
            },
            stateContent: function() {
                return this.open
                    ? this.content
                    : this.shortContent;
            }
        },
        props: {
            title: String,
            content: String,
            likes: Number
        },
        mounted() {
        }
    }
</script>
