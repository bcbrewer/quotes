<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Draggable Component</div>

                    <draggable v-model="myArray" :options="{group:'people'}" @start="drag=true" @end="drag=false">
                        <div v-for="element in myArray">{{element}}</div>
                    </draggable>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import draggable from 'vuedraggable'

    export default {
        name: 'example-draggable',

        components: {
            draggable
        },

        data() {
            return {
                myArray: ['One', 'Two', 'Three']
            }
        },
        mounted() {
            console.log('Draggable mounted.')
        }
    }
</script>