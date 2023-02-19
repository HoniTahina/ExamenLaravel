@include('home')
<div class="card card-header-actions mb-1">
    <div class="card-header">
        <form class="container" action="{{'ajoutF/'. $candidat->id}}" method="POST">
            {{csrf_field()}}
            
            <label for="formation">Les formations</label>
            <select id="formation" name="formation" class="form-control">
                @foreach ($formation as $f)
                    <option value="{{$f->id}}">{{$f->nom}}</option>
                @endforeach
                
                
              </select>
            <button class="btn btn-sm btn-primary" type="submit">Ajouter</button>
        </form>
    </div>
    <div class="card-body px-0">
    <h1>Ses formations</h1>
        @foreach ($candidat->formations as $f)
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                    <div class="ms-4">
                        <div class="text-xs text-muted">Formation : {{$f->nom}}</div>
                        <div class="text-xs text-muted">Date : {{$f->dateDebut}}</div>
                      </div>
                </div>
            
            </div>
            <hr>
        @endforeach
        
    </div>
</div>