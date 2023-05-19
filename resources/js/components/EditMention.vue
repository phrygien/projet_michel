<template>
    <div>
        <h3 class="text-center">Modifier Mention</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateMention">
                    <div class="form-group">
                        <label>Abreviation</label>
                        <input type="text" class="form-control" v-model="mention.name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="mention.description">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
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
        created() {
            this.axios
                .get(`http://127.0.0.1:8000/api/mention/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.mention = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateMention() {
                this.axios
                    .post(`http://127.0.0.1:8000/api/mention/update/${this.$route.params.id}`, this.mention)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>