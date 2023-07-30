<template>
    <div>
        <button class="btn btn-primary ms-4" @click="followUser">Follow</button>
    </div> 
</template>

<script>
    export default {
        propsrrr: ['userId'],

        mounted() {
            console.log('Component mounted.');
        },

        methods: 
        {
            followUser()
            {                
                axios.post('/follow/' + this.userId)
                        .then(response =>{
                            console.log(response.data);
                            //alert(response.data);
                       });
            }
        }
</script>
