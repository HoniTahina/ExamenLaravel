Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var elt = document.getElementById("nbrCand")
var graph = new Chart(elt, {
    type: 'bar',
    data: {
        labels: _yCandData,
        datasets: [{
          label: " Candidat",
          backgroundColor: "#8BCFF7",
          borderColor: "#8BCFF7",
          data: _xCandData,
        }],
      },
      options: {
        scales: {
          xAxes: [{
            time: {
              unit: 'formation'
            },
            gridLines: {
              display: false
            },
            ticks: {
              
            }
          }],
          yAxes: [{
            ticks: {
              min: 0,
              
              
            },
            gridLines: {
              display: true
            }
          }],
        },
        legend: {
          display: false
        }
      }
    });