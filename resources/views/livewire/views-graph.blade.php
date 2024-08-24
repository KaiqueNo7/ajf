<div class="w-full bg-gray-700 shadow-lg rounded-lg flex justify-center items-center col-span-3 p-3">
    <div class="chart-container" style="position: relative; height:40vh; width:100%">
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
    var labels = @json($properties);
    var views = @json($views);

    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Visualizações',
                    data: views,
                    backgroundColor: '#fb923c',
                },
            ]
        },
        options: {
            responsive: true,  // Tornar o gráfico responsivo
            maintainAspectRatio: false,  // Permitir que o gráfico seja redimensionado sem manter a proporção
            scales: {
                x: {
                    ticks: {
                        color: 'white' // Cor das labels no eixo X
                    }
                },
                y: {
                    ticks: {
                        color: 'white' // Cor das labels no eixo Y
                    }
                }
            },
            plugins: {
                legend: {
                    labels: {
                        color: 'white' // Cor do texto da legenda
                    }
                }
            }
        }
    });
    </script>
</div>

