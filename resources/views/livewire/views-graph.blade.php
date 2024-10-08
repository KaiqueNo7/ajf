<div class="w-full bg-gray-700 shadow-lg rounded-lg flex justify-center items-center col-span-3 p-3">
    <div class="chart-container" style="position: relative; height:40vh; width:100%">
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var labels = @json($properties);
    var views = @json($views);

    var chart;

    function destroyChartIfExists() {
        if (chart) {
            chart.destroy();
        }
    }

    function createChart() {
        const ctx = document.getElementById('myChart');

        destroyChartIfExists();

        chart = new Chart(ctx, {
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
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        ticks: {
                            color: 'white'
                        }
                    },
                    y: {
                        ticks: {
                            color: 'white'
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: 'white'
                        }
                    }
                }
            }
        });
    }

    createChart();
</script>
</div>

