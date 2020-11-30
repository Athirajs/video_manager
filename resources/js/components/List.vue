<template>
    <div>
        <div class="video_details">
        <div v-for="upload in uploads" :key="upload.id">
            
                <div class="video_detail">
                <div class="video">
                     <iframe width="470" height="360"  :src=" upload.url" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="title">{{ upload.title }}</div>
                <div class="description">{{ upload.description }}
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
export default {
    data(){
        return{
            uploads: ''
        }
    },
    mounted () {
    this.getUploads()
    },
    methods:{
       getUploads(){
            axios.get('/api/upload').then((res) =>{

                this.uploads = res.data

                console.log(this.uploads)
               
            }).catch((error) =>{
                console.log(error)
            })
        } 
    }

}
</script>