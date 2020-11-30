<template>
     <div class="container">
        <div class="row centered-form">
        <div class="m-auto details-form">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title text-center">Enter Details</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form @submit.prevent="uploadUrl">
                                <div class="form-group">
			                        <input v-model="form.title"  type="text" name="title" id="title" class="form-control" placeholder="Title">
                                   <div v-if="errors && errors.title" class="text-danger">{{ errors.title[0] }}</div>
                                </div>
			    				<div class="form-group">
                                    <textarea  v-model="form.description" class="form-control" placeholder="Description"  rows="3"></textarea>
                                    <div v-if="errors && errors.description" class="text-danger">{{ errors.description[0] }}</div>
                                </div>
			    			<div class="form-group">
			    				<input type="text" v-model="form.url"  name="url" id="url" class="form-control" placeholder="Enter the url">
                                <div v-if="errors && errors.url" class="text-danger">{{ errors.url[0] }}</div>
                            </div>

			    			
			    			<input type="submit"  value="Uplaod" class="btn btn-info btn-block">
			    		
			    		</form>
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
            form:{
                title: '',
                description: '',
                url:'',
            },
            title:'',
            errors:[]
        }
    },
    methods:{
        uploadUrl(){
            this.errors = {};
            alert('Uploaded successfully');
 
            console.log(this.form)
            axios.post('/api/upload', this.form).then(() =>{
               
                window.location.reload()
               
            }).catch((error) =>{
                  if (error.response.status === 422) {
                    this.errors = error.response.data.errors || {};
                    console.log(this.errors)
                }
            }) 
            
          
                
            
        }

    }
}
</script>