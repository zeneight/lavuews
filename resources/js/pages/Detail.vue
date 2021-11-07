<template>
    <div>
        <b-container class="bv-example-row">
            <b-row>
                <b-col>
                    <b-tabs content-class="mt-3">
                        <b-tab title="First" active>
                            <p>I'm the first tab <a href="/">home</a></p>
                        </b-tab>
                        <b-tab title="Second">
                            <p>I'm the second tab</p>
                        </b-tab>
                        <b-tab title="Disabled" disabled>
                            <p>I'm a disabled tab!</p>
                        </b-tab>
                    </b-tabs>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>
<script>
    export default {
        name: 'Detail',
    }
</script>

