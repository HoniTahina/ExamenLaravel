Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var elt = document.getElementById("repType")
var graph = new Chart(elt, {
    type: 'line',
    data: {
        labels: _yTypeData,
        datasets: [{
          label: " Formation",
          backgroundColor: "rgba(180, 137, 125,0.5)",
          borderColor: "#B4897D",
          data: _xTypeData,
          lineTension: 0.3,
          pointRadius: 5,
          pointBackgroundColor: "#B4897D",
          pointBorderColor: "rgba(255,255,255,0.8)",
          pointHoverRadius: 5,
          pointHoverBackgroundColor: "rgba(2,117,216,1)",
          pointHitRadius: 50,
          pointBorderWidth: 2,
        }],
      },
      options: {
        scales: {
          xAxes: [{
            time: {
              unit: 'type'
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