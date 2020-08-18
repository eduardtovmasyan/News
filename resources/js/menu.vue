<template>
<div>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #eee;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand pl-3" href="/">News LLC</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <!-- <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li> -->
      </ul>
    </div>
  </nav>
  <div class="row">
    <div class="col-2 p-5" style="min-height: 100vh;background: #eee;">
      <nav class="nav flex-column pt-3">
        <a class="nav-link disabled" href="#">Types</a>
        <a v-for="item in data" class="nav-link" @click="changeType" style="cursor:pointer" v-bind:data-id="item.id">{{ item.type }}</a>
      </nav>
    </div>
    <div class="col-9 py-5 px-2 content" id="content">
      <h1 style="width: 100%;text-align: center;" v-if="details === null"><strong>{{selectedType}}</strong></h1>
      <div class="container py-4" v-if="details === null">
        <div class="card text-center mt-5" v-for="item in info" v-if="item.type.id == type_id">
          <div class="card-header">
            {{ item.type.type }}
          </div>
          <div class="card-body">
            <h5 class="card-title">
            {{ item.title }}
            </h5>
            <p class="card-text">{{ item.news.substr(0, item.news.length - (item.news.length - 20)) + "..." }}</p>
            <a to='details' class="float-right" v-bind:data-id="item.id" style="color: rgb(0 86 179)" @click="readMore">read more ... </a>
          </div>
          <div class="card-footer text-muted">
            {{ item.created_at }}
          </div>
        </div>
      </div>
      <div class="container py-4 " v-if="details != null">
        <div class="card">
          <div class="card-header">
            {{ details.title }}
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p>{{ details.news }}</p>
            <footer class="blockquote-footer">{{ details.created_at }}<cite title="Source Title"></cite></footer>
          </blockquote>
        </div>
      </div>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" v-for="img in details.images" >
            <img v-bind:src="'storage/' + img.path" height="400">
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </div>
  <div class="col-1"></div>
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
                info: null,
                selectedType: 'Political',
                type_id: 5,
                details: null,
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
            })

            this.axios.get('api/types',  
            {
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json',
            }
            })
            .then(response => {
              this.data = response.data.data
            })
        },
        methods:{
          changeType(e) {
            this.details = null
            this.selectedType = e.target.innerHTML
            this.type_id = e.target.getAttribute('data-id')
          },
          readMore(e) {
            var news_id = e.target.getAttribute('data-id')
              this.axios.get('api/latest-news/' + news_id,  
              {
              headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
              }
              })
              .then(response => {
                this.details = response.data.data
              })
          }
        }
}
</script>
