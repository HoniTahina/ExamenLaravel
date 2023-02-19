Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var elt = document.getElementById("repSexe");
var graph = new Chart(elt, {
  type: 'pie',
  data: {
    labels: _ySexeData,
    datasets: [{
        label: 'My First Dataset',
        data: _xSexeData,
        backgroundColor: [
            'rgb(54, 162, 235)',
            'rgb(255, 99, 132)'
        ],
        hoverOffset: 4
      }],
  }
  
});