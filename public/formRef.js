Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var elt = document.getElementById("nbrForm")
var graph = new Chart(elt, {
    type: 'bar',
    data: {
        labels: _yRefData,
        datasets: [{
          label: " Formation",
          backgroundColor: "#DC3545",
          borderColor: "#DC3545",
          data: _xRefData,
        }],
      },
      options: {
        scales: {
          xAxes: [{
            time: {
              unit: 'reference'
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