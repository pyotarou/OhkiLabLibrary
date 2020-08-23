<template>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">タイトル</th>
                    <th scope="col">著者</th>
                    <th scope="col">出版社</th>
                    <th scope="col">貸出状況</th>
                </tr>
            </thead>
            <tbody>
                <tr scope="row" v-for="book in books" :key="book.id" @click="detail(book.id)">
                    <td>{{ book.id }}</td>
                    <td>{{ book.title }}</td>
                    <td>{{ book.author }}</td>
                    <td>{{ book.publisher }}</td>
                    <td>aaa</td>
                </tr>
            </tbody>
        </table>    
    </div>
</template>

<script>
    export default {
        data() {
            return {
                books: []
            }
        },
        detail() {

        },
        mounted() {
            axios.get('/api/book').then(res => {
                this.books = res.data.data
            })
        }
    }
</script>