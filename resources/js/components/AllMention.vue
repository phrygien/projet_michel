<template>
    <div>
        <h3 class="text-center">Liste Mention</h3><br/>
  
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Abreviation</th>
                <th>Nom mention</th>
                <th>Date création</th>
                <th>Date modification</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="mention in mentions" :key="mention.id">
                <td>{{ mention.id }}</td>
                <td>{{ mention.name }}</td>
                <td>{{ mention.description }}</td>
                <td>{{ mention.created_at }}</td>
                <td>{{ mention.updated_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'editMention', params: { id: mention.id }}" class="btn btn-primary">Modifier
                        </router-link>
                        <button class="btn btn-danger" @click="deleteMention(mention.id)">Supprimer</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
  
<script>
    export default {
        data() {
            return {
                mentions: []
            }
        },
        created() {
            this.axios
                .get('http://127.0.0.1:8000/api/mentions') 
                .then(response => {
                    this.mentions = response.data;
                });
        },
        methods: {
            deleteMention(id) {
                this.axios
                    .delete(`http://127.0.0.1:8000/api/mention/delete/${id}`)
                    .then(response => {
                        let i = this.mentions.map(item => item.id).indexOf(id); // find index of your object
                        this.mentions.splice(i, 1)
                    });
            }
        }
    }
</script>