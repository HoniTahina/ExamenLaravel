@include('home')
<div class="ml-5" style="color:antiquewhite" >
<h1>Referentiel : {{$referentiel->libelle}} </h1>
<h2>Type: {{$referentiel->type->libelle}}</h2>
<h2><u>Les formations </u></h2>
<ul>
    @foreach ($referentiel->formation as $f)
        <li>{{$f->nom}}</li>
    @endforeach
</ul>
</div>