@include('home')
<h2>Formations ({{$referentiel->type->libelle}})</h2>
<form action="enregistrerType" method="post">
    <div class="mb-3">
        <label for="referentiel" class="form-label">Type</label>
        <select id="referentiel" name="referentiel" class="form-control">
          @foreach ($referentiel->type as $r)
               <option value="{{$r->id}}">{{$r->libelle}}</option>
          @endforeach
          </select>
      </div>
</form>
<ul>
    @foreach ($referentiel->formation as $f)
        <li>{{$referentiel->formation->nom}}</li>
    @endforeach
</ul>