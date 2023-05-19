<template>
    <div>
        <h3 class="text-center">Ajouter Année</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addAnnee">
                    <div class="form-group">
                        <label>Date debut</label>
                        <input type="date" class="form-control" v-model="annee.date_debut">
                    </div>
                    <div class="form-group">
                        <label>Date fin</label>
                        <input type="date" class="form-control" v-model="annee.date_fin">
                    </div>
                    <div class="form-group">
                        <label>Date debut</label>
                        <select v-model="annee.etat">
                            <option value="1">Ouvert</option>
                            <option value="0">Fermer</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</template>
  
<script>
    export default {
        data() {
            return {
                annee: {}
            }
        },
        methods: {
            addAnnee() {
  
                this.axios
                    .post('http://127.0.0.1:8000/api/annee/add', this.annee)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>