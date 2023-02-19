Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var elt = document.getElementById("trancheAge")
var graph = new Chart(elt, {
    type: 'bar',
    data: {
        labels: _yAgeData,
        datasets: [{
          label: " Age",
          backgroundColor: "rgba(40, 167, 69,0.7)",
          borderColor: "rgba(40, 167, 70,1)",
          data: _xAgeData,
        }],
      },
      options: {
        scales: {
          xAxes: [{
            time: {
              unit: 'age'
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
              max:10
              
              
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