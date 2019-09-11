/* Gráfico de linha */
var numeros = new Array(25);
for(var h=0; h <= 23; h++){
    numeros[h] = h;
}
window.onload = function charts(){
// caso tenha o valor no localStorage
if (nightModeStorage) {
    Chart.defaults.global.defaultFontColor = 'white';
}

 //alert("Funcionou!");
Chart.defaults.global.defaultFontSize = 16;
var ctx = document.getElementById('line-chart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: numeros, //Passando direto o nome do array ele organiza
        datasets: [{
            label: 'Consumo kWh',
            data: [12, 19, 3, 5, 2, 3],
            // backgroundColor:,
            borderWidth: 3,
            backgroundColor: '#aaa',
            borderColor: '#aaa',
            pointBorderWidth: 10,
            pointHitRadius: 15,
            fill: false,
            lineTension : 0
        }]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Gráfico de Consumo por hora'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

/* Gráfico de barras */

var ctx = document.getElementById("bar-chart").getContext("2d");
var myBarChart = new Chart(ctx,{
    type: 'bar',
    data:{
        labels: ["Janeiro", "Fevereiro", "Março", "Abril"],
        datasets: [{
            label: "Meu Consumo",
            data: [25, 59, 40, 41],
            backgroundColor: "#ddd",
            hoverBackgroundColor:"#808080",
            highlightFill: "#f8f9fa",
        },
        {
            label: "Minha Meta",
            backgroundColor: "#2e6171",
            hoverBackgroundColor:"#ffc107",
            lineTension: 0,
            data: [28, 48, 40, 19]
        }]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Gráfico de expectativas por mês'
        },
        tooltips: {
            mode: 'index',
            intersect: true
        },
        scales: {
            yAxes: [{
                type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                display: true,
                position: 'left',
                id: 'y-axis-1',
            }],
        }
    }
});
}