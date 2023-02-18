@include('home')
<h1>Liste des formations <a class="btn btn-info" href="/ajoutCandidat">Ajouter un cadidat </a></h1>
<table class="table table-dark table-striped">
<thead>
<tr>
  <th scope="col">#</th>
  <th scope="col">Nom</th>
  <th scope="col">Prénom</th>
  <th scope="col">E-mail</th>
  <th scope="col">Age</th>
  <th scope="col">Niveau d'étude</th>
  <th scope="col">Sexe</th>
  <th scope="col"></th>
</tr>
</thead>
<tbody>
@foreach($candidat as $c)
    <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->nom}}</td>
        <td>{{$c->prenom}}</td>
        <td>{{$c->email}}</td>
        <td>{{$c->age}}</td>
        <td>{{$c->niveauEtude}}</td>
        <td>{{$c->sexe}}</td>
        <td>
            <a href="{{'modifierCandidat/' . $c->id}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
            <a href="{{'supprimerCandidat/' . $c->id}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
            <a href="{{'plus/' . $c->id}}" class="btn btn-primary"><i class="bi bi-plus-lg"></i></a>
        </td>
    </tr>
@endforeach
</tr>

</tbody>
</table>
