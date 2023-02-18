@include('home')
<h1 class="container">Ajout d'un candidat</h1>
    
    <form action="enregistrerCandidat" method="POST" class="container my-5">
    {{csrf_field()}}
    <div class="row gx-3 mb-3">
        <div class="col-md-6">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer le nom du candidat">
        </div>
        <div class="col-md-6">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer le prénom du candidat">
        </div>
    </div>
      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="ex: rak@example.com">
      </div>
      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" name="age" id="age" min="8" max="35">
      </div>
      <div class="mb-3">
        <label for="niveauEtude" class="form-label">Niveau d'étude</label>
        <select id="niveauEtude" name="niveauEtude" class="form-control">
            <option selected >Bacc</option>
            <option>L1-L2</option>
            <option>L3</option>
            <option>M1</option>
            <option>M2</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="sexe" class="form-label">Sexe</label>
        <select id="sexe" name="sexe" class="form-control">
            <option selected >Homme</option>
            <option>Femme</option> 
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Ajouter</button>
      <a href="/listeCandidat" class="btn btn-primary">Voir la liste des candidats</a>
    </form>
      