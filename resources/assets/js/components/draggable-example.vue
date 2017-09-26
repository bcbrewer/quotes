<template>
    <nav class="level">
        <div class="container">
            <div class="level-item has-text-centered">
                <p class="heading">Draggable Component</p>
            </div>
            <draggable v-model="myArray" :options="{group:'people'}" @start="drag=true" @end="drag=false">
                <div v-for="element in myArray">
                    <div class="level-item has-text-centered">
                        <p class="title">
                            {{element}}
                        </p>
                    </div>
                </div>
            </draggable>
        </div>
    </nav>

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