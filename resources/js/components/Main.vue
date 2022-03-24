<template>
    <div>
        <ul>
            <li v-for="(post, index) in posts" :key="index">
                <ul>
                    <li>
                        Titolo: {{post.title}}
                    </li>
                    <li>
                        Contenuto: {{post.content}}
                    </li>
                    <li>
                        Autore: {{post.author}}
                    </li>
                    <li>
                        Categoria: {{post.category ? post.category.name  : '-'}}
                    </li>
                    <li>
                        Tag: 
                        <span v-for="(tag, index) in post.tags" :key="index">
                            <!-- non sono riuscito a lascirae "-" quando il tag è vuoto -->
                            {{tag.name ? tag.name : '-'}}
                        </span>
                    </li>
                </ul>
                <br>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "Main",
    data() {
        return {
            posts:[]
        }
    },
    created() {
        axios
        .get("/api/posts")
        .then((data_api)=>{
            this.posts = data_api.data
            console.log(this.posts);
        })
    }
}
</script>

<style>

</style>