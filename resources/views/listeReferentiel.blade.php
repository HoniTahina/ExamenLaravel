@include('home')
<h1>Liste des référentiels <a class="btn btn-info" href="/ajoutReferentiel">Ajouter un référentiel </a></h1>
<table class="table table-dark table-striped">
<thead>
<tr>
  <th scope="col">#</th>
  <th scope="col">Libelle</th>
  <th scope="col">Validité</th>
  <th scope="col">Horaire</th>
  <th scope="col"></th>
</tr>
</thead>
<tbody>
@foreach($referentiel as $ref)
    <tr>
        <td>{{$ref->id}}</td>
        <td>{{$ref->libelle}}</td>
        <td>{{$ref->validite}}</td>
        <td>{{$ref->horaire}}</td>
        <td>
            <a href="{{'modifierReferentiel/' . $ref->id}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
            <a href="{{'supprimerReferentiel/' . $ref->id}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
            <a href="{{'info/' . $ref->id}}" class="btn btn-primary"><i class="bi bi-info-circle"></i></a>
        </td>
    </tr>
@endforeach
</tr>

</tbody>
</table>
