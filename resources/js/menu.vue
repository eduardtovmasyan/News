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
    <div class="col-2 p-5" style="min-height: 100vh;background: #eee;overflow: overlay;">
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
            <p class="card-text">{{ item.news.substr(0, item.news.length - (item.news.length - 20)) + " ..." }}</p>
            <a to='details' class="float-right" v-bind:data-id="item.id" style="color: rgb(0 86 179);cursor: pointer;" @click="readMore">read more ... </a>
          </div>
          <div class="card-footer text-muted">
            {{ item.created_at }}
          </div>
        </div>
        <!--  -->
    <div class="btn-group pt-4 float-right" role="group" aria-label="Button group with nested dropdown" v-show="page">
  <button type="button" class="btn btn-secondary" @click="paginationPrev" v-show="prev"><< Prev</button>
    <button type="button" class="btn btn-secondary">
     <span class="badge badge-light">{{currentPage}}</span>
    </button>
  <button type="button" class="btn btn-secondary" @click="paginationNext" v-show="next">Next >></button>
</div>
    <!--  -->
      </div>
      <div class="container py-4 " v-if="details !== null">
        <div class="card">
          <div class="card-header">
            {{ details.title }}
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p>{{ details.news }}</p>
            <footer class="blockquote-footer" >{{ details.created_at }}<cite title="Source Title"></cite></footer>
          </blockquote>
        </div>
      </div>
      <div class="bd-example">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" v-if="details.images[0]" data-src=" slide" alt="Second slide [800x400]" v-bind:src="'storage/' + details.images[0].path" data-holder-rendered="true">
            </div>
            <div class="carousel-item" v-for="img in details.images">
              <img class="d-block w-100" v-bind:src="'storage/' + img.path" data-src=" slide" data-holder-rendered="true">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
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
            return {
                data: null,
                info: null,
                selectedType: 'Political',
                type_id: 5,
                details: null,
                next: '',
                prev: '',
                currentPage: null,
                page: true
            }
        },
        mounted() {
            this.axios.get('api/latest-news/filter/5',  
              {
              headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
              }
              })
              .then(response => {
                this.info = response.data.data
                this.prev = response.data.links.prev
                this.next = response.data.links.next
                this.currentPage = response.data.meta.current_page
                if (this.next == null && this.prev === null) {
                  this.page = false
                } else {
                  this.page = true
                }
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
            var filter_id = e.target.getAttribute('data-id')
            
            this.axios.get('api/latest-news/filter/' + filter_id,  
              {
              headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
              }
              })
              .then(response => {
                this.info = response.data.data
                this.prev = response.data.links.prev
                this.next = response.data.links.next
                this.currentPage = response.data.meta.current_page
                if (this.next === null && this.prev === null) {
                  this.page = false
                } else {
                  this.page = true
                }
              })

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
          },
          paginationNext(e) {
            
            this.details = null

            this.axios.get(this.next,  
              {
              headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
              }
              })
              .then(response => {
                this.info = response.data.data
                this.prev = response.data.links.prev
                this.next = response.data.links.next
                this.currentPage = response.data.meta.current_page
                if (this.next == null && this.prev === null) {
                  this.page = false
                } else {
                  this.page = true
                }

              })
          },
          paginationPrev(e) {
            this.details = null

            this.axios.get(this.prev,  
              {
              headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
              }
              })
              .then(response => {
                this.info = response.data.data
                this.prev = response.data.links.prev
                this.currentPage = response.data.meta.current_page
                this.next = response.data.links.next
                if (this.next == null && this.prev === null) {
                  this.page = false
                } else {
                  this.page = true
                }
              })
          }
        }
}
</script>
