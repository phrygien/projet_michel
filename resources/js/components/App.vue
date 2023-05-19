<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <span class="text-secondary">Gestion scolarité - EMIT</span>
        </div>
  
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/mentions" class="nav-item nav-link">Mention</router-link>
                    <router-link to="/addMention" class="nav-item nav-link">Ajouter Mention</router-link>
                    <router-link to="/annees" class="nav-item nav-link">Année universitaire</router-link>
                    <router-link to="/addAnnee" class="nav-item nav-link">Ajouter Année</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>
  
<script>
    export default {}
</script>