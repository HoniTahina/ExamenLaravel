@include('home')
<h1>Liste des formations <a class="btn btn-info" href="/ajoutFormation">Ajouter un formation </a></h1>
<table class="table table-dark table-striped">
<thead>
<tr>
  <th scope="col">#</th>
  <th scope="col">Nom</th>
  <th scope="col">Durée</th>
  <th scope="col">Description</th>
  <th scope="col">isStarted</th>
  <th scope="col">Date de début</th>
  <th scope="col"></th>
</tr>
</thead>
<tbody>
@foreach($formation as $f)
    <tr>
        <td>{{$f->id}}</td>
        <td>{{$f->nom}}</td>
        <td>{{$f->duree}}</td>
        <td>{{$f->description}}</td>
        <td>{{$f->isStarted}}</td>
        <td>{{$f->dateDebut}}</td>
        <td>
            <a href="{{'modifierFormation/' . $f->id}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
            <a href="{{'supprimerFormation/' . $f->id}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
            <a href="{{'plusReferentiel/' . $f->id}}" class="btn btn-primary"><i class="bi bi-plus-lg"></i></a>
       
        </td>
    </tr>
@endforeach
</tr>

</tbody>
</table>
