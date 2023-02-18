@include('home')
<h1 class="container">Modification</h1>
    
    <form action="{{'majReferentiel/'.$referentiel->id}}" method="POST" class="container my-5">
    {{csrf_field()}}
    <div class="row gx-3 mb-3">
      <div class="col-md-6">
          <label for="libelle" class="form-label">Libelle</label>
          <input type="text" class="form-control" id="libelle" name="libelle" value="{{$referentiel->libelle}}">
      </div>
      <div class="mb-3">
        <label for="horaire" class="form-label">Horaire</label>
        <input type="number" class="form-control" name="horaire"  min="0" id="horaire" value="{{$referentiel->horaire}}">
      </div>
      <div class="mb-3">
        <label for="validite" class="form-label">Validité</label>
        <select id="niveauEtude" name="validite" class="form-control" value="{{$referentiel->validite}}">
            <option value="1" >Oui</option>
            <option value="0">Non</option>
        </select>
      <button type="submit" class="btn btn-primary">Enregistrer</button>
      <a href="/listeReferentiel" class="btn btn-danger">Annuler</a>
      