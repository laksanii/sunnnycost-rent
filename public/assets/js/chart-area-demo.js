// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily =
    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#292b2c";

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
    type: "line",
    data: {
        labels: [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember",
        ],
        datasets: [
            {
                label: "Income",
                lineTension: 0.3,
                backgroundColor: "rgba(2,117,216,0.2)",
                borderColor: "rgba(2,117,216,1)",
                pointRadius: 5,
                pointBackgroundColor: "rgba(2,117,216,1)",
                pointBorderColor: "rgba(255,255,255,0.8)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(2,117,216,1)",
                pointHitRadius: 50,
                pointBorderWidth: 2,
                data: [
                    10000000, 8500000, 7000000, 9000000, 12000000, 6500000,
                    5600000, 10000000, 14000000, 9000000, 12500000, 7800000,
                ],
            },
        ],
    },
    options: {
        scales: {
            xAxes: [
                {
                    time: {
                        unit: "date",
                    },
                    gridLines: {
                        display: false,
                    },
                },
            ],
            yAxes: [
                {
                    ticks: {
                        min: 1000000,
                        max: 15000000,
                        maxTicksLimit: 7,
                    },
                    gridLines: {
                        color: "rgba(0, 0, 0, .125)",
                    },
                },
            ],
        },
        legend: {
            display: false,
        },
    },
});
