@include('home')
<h1 class="container">Formulaire d'ajout</h1>
    
    <form action="{{'majCandidat/'.$candidat->id}}" method="POST" class="container my-5">
    {{csrf_field()}}
    <div class="row gx-3 mb-3">
      <div class="col-md-6">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" id="nom" name="nom" value="{{$candidat->nom}}">
      </div>
      <div class="col-md-6">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" id="prenom" name="prenom" value="{{$candidat->prenom}}">
      </div>
  </div>
      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$candidat->email}}">
      </div>
      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" name="age" max="35" min="8" id="age" value="{{$candidat->age}}">
      </div>
      <div class="mb-3">
        <label for="niveauEtude" class="form-label">Niveau d'étude</label>
        <select id="niveauEtude" name="niveauEtude" class="form-control" value="{{$candidat->niveauEtude}}">
            <option >Debutant</option>
            <option>Moyen</option>
            <option>Expert</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="sexe" class="form-label">Sexe</label>
        <select id="sexe" name="sexe" class="form-control" value="{{$candidat->sexe}}">
            <option  >Homme</option>
            <option>Femme</option> 
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Enregistrer</button>
      <a href="/listeCandidat" class="btn btn-danger">Annuler</a>
      