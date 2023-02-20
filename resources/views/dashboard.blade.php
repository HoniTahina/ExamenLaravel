@include('home')
<div class="row">
  <div class="col-md-6">
      <div class="card border-success mb-3 h-100" >
          <div class="card-header" style="color: rgb(11, 149, 43)">Les tranches d'âge</div>
          <div class="card-body text-success"  style="background-color: rgb(220, 255, 222)">
             <canvas id="trancheAge" class="chart"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6"> 
            <div class="card border-light mb-3 h-100" >
            <div class="card-header" style="color: rgb(51, 51, 51)">Repartion des candidats par sexe</div>
            <div class="card-body text-primary"  style="background-color: rgb(224, 253, 255)">
              <canvas id="repSexe" class="chart"></canvas>
            </div>
          </div> 
        </div>
  <div class="col-md-4"> 
    <div class="card border-danger mb-3 h-100" >
    <div class="card-header" style="color: #DC3545">Nombre de formation par ref</div>
    <div class="card-body text-primary"  style="background-color: rgb(255, 233, 233)">
      <table class="table table-light table-striped">
        <thead>
          <tr>
            <th>Referentiels</th>
           <th>Nombre de formations </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($referentiel as $ref)
            <tr>  
                  <td>{{$ref->libelle}}</td>
                  <td>{{count($ref->formation)}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div> 
</div>
<div class="col-md-4"> 
  <div class="card border-info mb-3 h-100" >
  <div class="card-header" style="color: #17A2B8">Nombre de candidat par formation</div>
  <div class="card-body text-primary"  style="background-color: rgb(228, 224, 255)">
    <table class="table table-light table-striped">
      <thead>
        <tr>
          <th>Formations</th>
         <th>Nombre de candidats </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($formation as $f)
          <tr>  
                <td>{{$f->nom}}</td>
                <td>{{count($f->candidat)}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div> 
</div>
   
    <div class="col-md-4">
        <div class="card border-secondary mb-3 h-100" >
        <div class="card-header" style="color: #6C757D">Repartition des formations par type</div>
        <div class="card-body text-secondary"  style="background-color: rgb(222, 222, 222)">
         
          <table  class="table table-light table-striped">
            <thead>
              <tr>
                <th>Types</th>
                <th>Nombre de formations</th>
              </tr>
            </thead>
            <tbody>
              
              @foreach ($referentiel as $ref)
           
                  <tr>
                    <td>{{$ref->type->libelle}}</td>

                    <td>
                      <ul><li>{{count($ref->formation) }}</li></ul>
                    </td>
                  </tr>
              
                  @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var _yAgeData=JSON.parse('{!! json_encode($ages) !!}');
      var _xAgeData=JSON.parse('{!! json_encode($ageCount) !!}');
      var _ySexeData=JSON.parse('{!! json_encode($sexes) !!}');
      var _xSexeData=JSON.parse('{!! json_encode($sexeCount) !!}');
    
    </script>
    <script src="{{asset('age.js')}}"></script>
    <script src="{{asset('sexe.js')}}"></script>
</div>