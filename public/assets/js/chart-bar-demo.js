// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily =
    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#292b2c";

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
    type: "bar",
    data: {
        labels: [
            "Kobo Kanaeru",
            "Hatsune Miku",
            "Nezuko KnY",
            "Yae Miko",
            "Raiden (Ei)",
            "Nahida",
        ],
        datasets: [
            {
                label: "Dirental",
                backgroundColor: "rgba(2,117,216,1)",
                borderColor: "rgba(2,117,216,1)",
                data: [140, 120, 100, 50, 32, 21],
            },
        ],
    },
    options: {
        scales: {
            xAxes: [
                {
                    gridLines: {
                        display: false,
                    },
                    ticks: {
                        maxTicksLimit: 10,
                    },
                },
            ],
            yAxes: [
                {
                    ticks: {
                        min: 0,
                        max: 300,
                        maxTicksLimit: 5,
                    },
                    gridLines: {
                        display: true,
                    },
                },
            ],
        },
        legend: {
            display: false,
        },
    },
});
