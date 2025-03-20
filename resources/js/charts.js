// resources/js/charts.js
document.addEventListener('DOMContentLoaded', () => {
    // Initialize after slight delay to ensure DOM readiness
    setTimeout(initializeCharts, 100);
});

function initializeCharts() {
    // Single Area Chart
    buildChart('#hs-single-area-chart', (mode) => ({
        chart: {
            height: 300,
            type: 'area',
            toolbar: { show: false },
            zoom: { enabled: false },
            fontFamily: 'Inter, ui-sans-serif'
        },
        series: [{
            name: 'Visitors',
            data: [180, 51, 60, 38, 88, 50, 40, 52, 88, 80, 60, 70]
        }],
        legend: { show: false },
        dataLabels: { enabled: false },
        stroke: {
            curve: 'straight',
            width: 2,
            colors: ['#2563eb']
        },
        grid: {
            strokeDashArray: 2,
            borderColor: '#e5e7eb'
        },
        fill: {
            type: 'gradient',
            gradient: {
                type: 'vertical',
                shadeIntensity: 1,
                opacityFrom: 0.2,
                opacityTo: 0.4,
                stops: [0, 100]
            }
        },
        xaxis: {
            type: 'category',
            categories: [
                '25 Jan 2023', '26 Jan 2023', '27 Jan 2023', '28 Jan 2023',
                '29 Jan 2023', '30 Jan 2023', '31 Jan 2023', '01 Feb 2023',
                '02 Feb 2023', '03 Feb 2023', '04 Feb 2023', '05 Feb 2023'
            ],
            axisBorder: { show: false },
            axisTicks: { show: false },
            labels: {
                style: {
                    colors: '#6b7280',
                    fontSize: '12px',
                    fontFamily: 'Inter, ui-sans-serif'
                },
                formatter: (value) => {
                    if (!value) return '';
                    const [day, month] = value.split(' ');
                    return `${day} ${month}`;
                }
            },
            tooltip: { enabled: false }
        },
        yaxis: {
            labels: {
                style: {
                    colors: '#6b7280',
                    fontSize: '12px',
                    fontFamily: 'Inter, ui-sans-serif'
                },
                formatter: (value) => value >= 1000 ? `${value/1000}k` : value
            }
        },
        tooltip: {
            x: { show: false },
            y: {
                formatter: (value) => `${value} Visitors`,
                title: {
                    formatter: (seriesName) => ''
                }
            },
            custom: ({ series, seriesIndex, dataPointIndex }) => {
                return `
                    <div class="bg-white dark:bg-gray-800 p-2 shadow-lg rounded-lg border border-gray-200 dark:border-gray-700">
                        <div class="text-xs font-semibold text-gray-500 dark:text-gray-400">
                            ${this.w.globals.labels[dataPointIndex]}
                        </div>
                        <div class="text-sm font-medium text-gray-900 dark:text-white">
                            ${series[seriesIndex][dataPointIndex]} Visitors
                        </div>
                    </div>
                `;
            }
        }
    }));

    // Single Bar Chart
    buildChart('#hs-single-bar-chart', (mode) => ({
        chart: {
            type: 'bar',
            height: 300,
            toolbar: { show: false },
            zoom: { enabled: false },
            fontFamily: 'Inter, ui-sans-serif'
        },
        series: [{
            name: 'Sales',
            data: [23000, 44000, 55000, 57000, 56000, 61000, 58000, 63000, 60000, 66000, 34000, 78000]
        }],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '70%',
                borderRadius: 4
            }
        },
        colors: ['#3b82f6'],
        dataLabels: { enabled: false },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            axisBorder: { show: false },
            labels: {
                style: {
                    colors: '#6b7280',
                    fontSize: '12px',
                    fontFamily: 'Inter, ui-sans-serif'
                }
            }
        },
        yaxis: {
            labels: {
                style: {
                    colors: '#6b7280',
                    fontSize: '12px',
                    fontFamily: 'Inter, ui-sans-serif'
                },
                formatter: (value) => `$${value >= 1000 ? `${value/1000}k` : value}`
            }
        },
        tooltip: {
            y: {
                formatter: (value) => `$${value.toLocaleString()}`,
                title: {
                    formatter: () => ''
                }
            }
        }
    }));

    // Doughnut Chart
    buildChart('#hs-doughnut-chart', () => ({
        chart: {
            type: 'donut',
            height: 320,
            fontFamily: 'Inter, ui-sans-serif'
        },
        series: [47, 23, 30],
        labels: ['Active Users', 'New Users', 'Returning'],
        colors: ['#3b82f6', '#60a5fa', '#93c5fd'],
        dataLabels: { enabled: false },
        plotOptions: {
            pie: {
                donut: {
                    size: '65%',
                    labels: {
                        show: true,
                        total: {
                            show: true,
                            label: 'Total Users',
                            fontSize: '14px',
                            color: '#6b7280'
                        }
                    }
                }
            }
        },
        legend: {
            position: 'bottom',
            fontSize: '14px',
            labels: {
                colors: '#6b7280'
            }
        }
    }));

    // Pie Chart
    buildChart('#hs-pie-chart', () => ({
        chart: {
            type: 'pie',
            height: 320,
            fontFamily: 'Inter, ui-sans-serif'
        },
        series: [70, 18, 12],
        labels: ['Direct', 'Organic', 'Referral'],
        colors: ['#3b82f6', '#60a5fa', '#93c5fd'],
        dataLabels: {
            enabled: true,
            style: {
                fontSize: '14px',
                fontFamily: 'Inter, ui-sans-serif',
                colors: ['#fff', '#fff', '#1f2937']
            }
        },
        legend: {
            position: 'bottom',
            fontSize: '14px',
            labels: {
                colors: '#6b7280'
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: { width: 200 },
                legend: { position: 'bottom' }
            }
        }]
    }));
}
