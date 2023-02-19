@include('home')
<h1 class="container">Ajout d'une formation</h1>
    
    <form action="enregistrerFormation" method="POST" class="container my-5">
    {{csrf_field()}}
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer le nom de la formation">
      </div>
     
      <div class="mb-3">
        <label for="duree" class="form-label">Durée</label>
        <input type="number" class="form-control" name="duree" id="duree">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description"></textarea>
      </div>
      <div class="mb-3">
        <label for="isStarted" class="form-label">isStarted </label>
        <select id="isStarted" name="isStarted" class="form-control">
            <option value="1" >Oui</option>
            <option value="0">Non</option>
          </select>
      </div>
      <div class="mb-3">
        <label for="dateDebut" class="form-label">Date de début</label>
        <input type="date" class="form-control" id="dateDebut" name="dateDebut" placeholder="Date de début du projet">
      </div>

      <button type="submit" class="btn btn-primary">Ajouter</button>
      <a href="/listeFormation" class="btn btn-primary">Voir la liste des formations</a>
      