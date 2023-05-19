<template>
    <div>
        <h3 class="text-center">Liste Année</h3><br/>
  
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Date debut</th>
                <th>Date fin</th>
                <th>Etat</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="annee in annees" :key="annee.id">
                <td>{{ annee.id }}</td>
                <td>{{ annee.date_debut }}</td>
                <td>{{ annee.date_fin }}</td>
                <td>{{ annee.etat }}</td>
                <td>{{ annee.created_at }}</td>
                <td>{{ annee.updated_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: annee.id }}" class="btn btn-primary">Modifier
                        </router-link>
                        <button class="btn btn-danger" @click="deleteAnnee(annee.id)">Supprimer</button>
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
                annees: []
            }
        },
        created() {
            this.axios
                .get('http://127.0.0.1:8000/api/annees') 
                .then(response => {
                    this.annees = response.data;
                });
        },
        methods: {
            deleteAnnee(id) {
                this.axios
                    .delete(`http://127.0.0.1:8000/api/annee/delete/${id}`)
                    .then(response => {
                        let i = this.annees.map(item => item.id).indexOf(id); // find index of your object
                        this.annees.splice(i, 1)
                    });
            }
        }
    }
</script>