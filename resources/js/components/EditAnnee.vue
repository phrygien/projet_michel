<template>
    <div>
        <h3 class="text-center">Modifier Année</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateAnnee">
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
        created() {
            this.axios
                .get(`http://127.0.0.1:8000/api/annee/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.annee = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateAnnee() {
                this.axios
                    .post(`http://127.0.0.1:8000/api/annee/update/${this.$route.params.id}`, this.annee)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>