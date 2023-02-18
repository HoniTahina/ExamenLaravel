@include('home')
<div class="card card-header-actions mb-1">
    <div class="card-header">
        <form class="container" action="{{'ajoutR/'. $formation->id}}" method="POST">
            {{csrf_field()}}
            
            <label for="referentiel">Les Rréférentiels</label>
            <select id="referentiel" name="referentiel" class="form-control">
                @foreach ($referentiel as $r)
                    <option value="{{$r->id}}">{{$r->id}} : {{$r->libelle}}</option>
                @endforeach
                
                
              </select>
            <button class="btn btn-sm btn-primary" type="submit">Ajouter</button>
        </form>
    </div>
    <div class="card-body px-0">
    <h1>Ses formations</h1>
        @foreach ($formation->referentiel as $f)
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                    <div class="ms-4">
                        <div class="text-xs text-muted">Libeelé: {{$f->libelle}}</div>
                        <div class="text-xs text-muted">Horaire: {{$f->horaire}} h</div>
                    </div>
                </div>
            
            </div>
            <hr>
        @endforeach
        
    </div>
</div>