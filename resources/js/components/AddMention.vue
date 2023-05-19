<template>
    <div>
        <h3 class="text-center">Ajouter Mention</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addMention">
                    <div class="form-group">
                        <label>Abreviation</label>
                        <input type="text" class="form-control" v-model="mention.name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="mention.description">
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
                mention: {}
            }
        },
        methods: {
            addMention() {
  
                this.axios
                    .post('http://127.0.0.1:8000/api/mention/add', this.mention)
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