<template>
  <div>
    <div class="card text-center mt-5" v-for="item in info">
          <div class="card-header">
            {{item.type.type}}
          </div>
          <div class="card-body">
            <h5 class="card-title">
            {{item.title}}
            </h5>
            <p class="card-text">{{item.news}}</p>
            <a href="#" class=" float-right">read more ... </a>
          </div>
          <div class="card-footer text-muted">
            {{item.created_at}}
          </div>
        </div>
      </div>
</template>

<script>
    export default{
        data(){
            return{
                info: null,
            }
        },
        mounted() {
            this.axios.get('api/latest-news',  
            {
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json',
            }
            })
            .then(response => {
                this.info = response.data.data
                console.log(response.data.data)
            })
        },
        methods:{
        
        }
}
</script>
