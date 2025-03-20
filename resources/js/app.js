import 'preline';
import './bootstrap';
import _ from 'lodash'; // Lodash
import ApexCharts from 'apexcharts';
import 'preline/dist/helper-apexcharts.js';

window.ApexCharts = ApexCharts;

document.addEventListener('DOMContentLoaded', () => {
    // Bar Chart with Dynamic Data
    var barOptions = {
        chart: { type: 'bar', height: 350 },
        series: [{ name: 'Sales', data: window.chartData.amounts }],
        xaxis: { categories: window.chartData.categories }
    };
    var barChart = new ApexCharts(document.querySelector("#chart"), barOptions);
    barChart.render();

    // Area Chart (unchanged)
    var areaOptions = {
        chart: {
            height: 300,
            type: 'area',
            toolbar: { show: false },
            zoom: { enabled: false }
        },
        series: [
            {
                name: 'Visitors',
                data: [180, 51, 60, 38, 88, 50, 40, 52, 88, 80, 60, 70]
            }
        ],
        legend: { show: false },
        dataLabels: { enabled: false },
        stroke: { curve: 'straight', width: 2 },
        grid: { strokeDashArray: 2 },
        fill: {
            type: 'gradient',
            gradient: {
                type: 'vertical',
                shadeIntensity: 1,
                opacityFrom: 0.1,
                opacityTo: 0.8,
                stops: [0, 90, 100]
            }
        },
        colors: ['#2563eb'],
        xaxis: {
            type: 'category',
            tickPlacement: 'on',
            categories: [
                '25 January 2023',
                '26 January 2023',
                '27 January 2023',
                '28 January 2023',
                '29 January 2023',
                '30 January 2023',
                '31 January 2023',
                '1 February 2023',
                '2 February 2023',
                '3 February 2023',
                '4 February 2023',
                '5 February 2023'
            ],
            labels: { style: { colors: '#9ca3af' } }
        },
        yaxis: {
            labels: { style: { colors: '#9ca3af' } }
        }
    };
    var areaChart = new ApexCharts(document.querySelector("#hs-single-area-chart"), areaOptions);
    areaChart.render();
});
