@include('home')
<h1 class="container">Modification</h1>
    
    <form action="{{'majFormation/'.$formation->id}}" method="POST" class="container my-5">
    {{csrf_field()}}
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" value="{{$formation->nom}}">
      </div>
      <div class="mb-3">
        <label for="referentiel" class="form-label">Referentiel</label>
        <select id="referentiel" name="referentiel" class="form-control">
          @foreach ($referentiel as $r)
               <option value="{{$r->id}}">{{$r->libelle}}</option>
          @endforeach
          </select>
        </div>
      <div class="mb-3">
        <label for="duree" class="form-label">Durée</label>
        <input type="number" class="form-control" name="duree" id="duree" value="{{$formation->duree}}">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" >{{$formation->description}}</textarea>
      </div>
      <div class="mb-3">
        <label for="isStarted" class="form-label">isStarted </label>
        <select id="isStarted" name="isStarted" class="form-control" value="{{$formation->isStarted}}">
            <option value="1">Oui</option>
            <option value="0">Non</option>
          </select>
      </div>
      <div class="mb-3">
        <label for="dateDebut" class="form-label">Date de début</label>
        <input type="date" class="form-control" id="dateDebut" name="dateDebut" value="{{$formation->dateDebut}}">
      </div>

      <button type="submit" class="btn btn-primary">Enregistrer</button>
      <a href="/listeFormation" class="btn btn-danger">Annuler</a>
      