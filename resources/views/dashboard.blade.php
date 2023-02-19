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
      <canvas id="nbrForm" class="chart"></canvas>
    </div>
  </div> 
</div>
<div class="col-md-4"> 
  <div class="card border-info mb-3 h-100" >
  <div class="card-header" style="color: #17A2B8">Nombre de candidat par formation</div>
  <div class="card-body text-primary"  style="background-color: rgb(228, 224, 255)">
    <canvas id="nbrCand" class="chart"></canvas>
  </div>
</div> 
</div>
   
    <div class="col-md-4">
        <div class="card border-secondary mb-3 h-100" >
        <div class="card-header" style="color: #6C757D">Repartition des formations par type</div>
        <div class="card-body text-secondary"  style="background-color: rgb(222, 222, 222)">
          <canvas id="repType" class="chart"></canvas>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var _yAgeData=JSON.parse('{!! json_encode($ages) !!}');
      var _xAgeData=JSON.parse('{!! json_encode($ageCount) !!}');
      var _ySexeData=JSON.parse('{!! json_encode($sexes) !!}');
      var _xSexeData=JSON.parse('{!! json_encode($sexeCount) !!}');
      var _yRefData=JSON.parse('{!! json_encode($ref) !!}');
      var _xRefData=JSON.parse('{!! json_encode($formCount) !!}');
      var _yCandData=JSON.parse('{!! json_encode($form) !!}');
      var _xCandData=JSON.parse('{!! json_encode($candCount) !!}');
      var _yTypeData=JSON.parse('{!! json_encode($types) !!}');
      var _xTypeData=JSON.parse('{!! json_encode($formCount2) !!}');
    
    </script>
    <script src="{{asset('age.js')}}"></script>
    <script src="{{asset('sexe.js')}}"></script>
    <script src="{{asset('formRef.js')}}"></script>
    <script src="{{asset('candForm.js')}}"></script>
    <script src="{{asset('formType.js')}}"></script>
</div>