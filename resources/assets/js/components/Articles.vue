<template>
  <div>
    <h2>Articles</h2>
    <!-- modal to add article -->
        <!-- button to launch modal -->
        <b-btn v-b-modal.modalAdd class="btn btn-primary btn-round">Add Article</b-btn>
        <!-- modal mini up -->
        <b-modal id="modalAdd" hide-footer hide-header ref="refModalAdd">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <i class="now-ui-icons design-2_ruler-pencil"></i>
                </div>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Title" v-model="article.title">
            </div>
            <div class="form-group">
                <textarea type="text" class="form-control" placeholder="Body" v-model="article.body"></textarea>
            </div>
            <b-btn type="submit" class="btn btn-primary btn-round" @click="addArticle">Save</b-btn>
            <b-btn type="button" class="btn btn-normal btn-round pull-right" @click="hideAddArticle">Cancel</b-btn>
        </b-modal>
        <!-- modal mini up -->
    <!-- form to add article -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
            <a class="page-link" href="#!"
            @click="fetchArticles(pagination.prev_page_url)">Previous</a>
            </li>
            <li class="page-item disabled"><a class="page-link text-dark" href="#!">Page {{pagination.current_page}} of {{pagination.last_page}}</a></li>
            <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li> -->
            <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
            <a class="page-link" href="#!" 
            @click="fetchArticles(pagination.next_page_url)">Next</a>
            </li>
        </ul>
    </nav>
    <div class="row">
        <div class="col-md-6 ml-auto" v-for="article in articles" v-bind:key="article.id">
            <div class="card card-background card-background-product card-raised" style="background-image: url('../assets/img/project8.jpg')">
                <div class="card-body">
                    <h3 class="card-title">{{ article.title }}</h3>
                    <p class="card-description">{{ article.body }}</p>
                    <label @click="editArticle(article)" class="badge badge-warning">Edit</label>
                    <label @click="deleteArticle(article.id)" class="badge badge-danger">Delete</label>
                </div>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
    export default {
        data(){
            return {
                articles:[],
                article: {
                    id: '',
                    title: '',
                    body: ''
                }, 
                article_id: '',
                pagination: {},
                edit: false
            }
        },

        created() {
            this.fetchArticles();
        },

        methods: {
            fetchArticles(page_url){
                let vm = this;
                page_url = page_url || '/api/articles'
                fetch(page_url)
                    .then(res=> res.json())
                    .then(res=> {
                        // console.log(res.data);
                        this.articles = res.data;
                        vm.makePagination(res.meta, res.links);
                    })
                    .catch(err = console.log(err));
            },
            makePagination(meta, links) {
                let pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev,
                }

                this.pagination = pagination;
            },
            deleteArticle(id) {
                if(confirm('Are you sure?')) {
                    fetch (`api/article/${id}`, {
                        method: 'delete'
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.fetchArticles();

                    })
                    .catch(err => console.log(err));
                }
            },
            addArticle() {
                if(this.edit === false) {
                    //add
                    fetch('api/article',{
                        method: 'post',
                        body: JSON.stringify(this.article),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.article.title = '';
                        this.article.body = '';
                        // alert('Article Added');
                        this.fetchArticles();
                    })
                    .catch(err => console.log(err));
                    this.$refs.refModalAdd.hide()
                } else {
                    //update
                     fetch('api/article',{
                        method: 'post',
                        body: JSON.stringify(this.article),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.article.title = '';
                        this.article.body = '';
                        // alert('Article updated');
                        this.fetchArticles();
                    })
                    .catch(err => console.log(err));
                    this.$refs.refModalAdd.hide();
                }
            },
            hideAddArticle() {
                this.edit = false;
                this.$refs.refModalAdd.hide();
            },
            editArticle(article) {
                this.edit = true;
                this.article.id = article.id;
                this.article.artilce_id = article.id;
                this.article.title = article.title;
                this.article.body = article.body;
                this.$refs.refModalAdd.show();
            }
        }
    };
</script>

