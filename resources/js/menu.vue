<template>
<div>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #eee;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand pl-3" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="row">
    <div class="col-2 p-5" style="height: 100vh;background: #eee;">
      <nav class="nav flex-column pt-3">
        <a class="nav-link disabled" href="#">Types</a>
        <router-link to = '/' class="nav-link" v-for="item in data">{{item.type}}</router-link>
      </nav>
    </div>
    <div class="col-9 py-5 px-2">
      <div class="container py-5">
        <router-view></router-view>
      </div>
    </div>
    <div class="col-1">3</div>
  </div>
  <footer class="site-footer fixed-bottom">
    
  </footer>
</div>
</template>
<script>
export default{
        data(){
            return{
                data: null,
            }
        },
        mounted() {
            this.axios.get('api/types',  
            {
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json',
            }
            })
            .then(response => {

                this.data = response.data.data
                console.log(response.data.data)
            })
        },
        methods:{
        
        }
}

</script>