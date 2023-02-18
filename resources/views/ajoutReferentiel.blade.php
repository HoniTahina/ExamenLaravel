@include('home')
<h1 class="container">Ajout d'un référentiel</h1>
    
    <form action="enregistrerReferentiel" method="POST" class="container my-5">
    {{csrf_field()}}
    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control" name="type" id="type">
    </div>
        <div class="md-6">
            <label for="libelle" class="form-label">Libelle</label>
            <input type="text" class="form-control" id="libelle" name="libelle" placeholder="libellé">
        </div>
        <div class="mb-3">
          <label for="validite" class="form-label">Validité</label>
          <select id="validite" name="validite" class="form-control">
              <option selected value="1" >Oui</option>
              <option value="0">Non</option>
          </select>
        </div>
      <div class="mb-3">
        <label for="horaire" class="form-label">Horaire</label>
        <input type="number" class="form-control" name="horaire" id="horaire" min="0" step="0.01">
      </div>
      
      <button type="submit" class="btn btn-primary">Ajouter</button>
      <a href="/listeReferentiel" class="btn btn-primary">Voir la liste des référentiels</a>
    </form>
      