// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily =
    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#292b2c";

function getData(event = null, year = new Date().getFullYear()) {
    if (event != null) {
        year = $(event.target).val();
    }
    $.ajax({
        type: "GET",
        url: "/order-income",
        data: { year: year },
        success: function (data) {
            income = data.success;
            const bulan = [
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
            ];
            let months_income = {
                Januari: 0,
                Februari: 0,
                Maret: 0,
                April: 0,
                Mei: 0,
                Juni: 0,
                Juli: 0,
                Agustus: 0,
                September: 0,
                Oktober: 0,
                November: 0,
                Desember: 0,
            };
            for (let i = 0; i < data.success.length; i++) {
                months_income[bulan[income[i].months - 1]] = income[i].total;
            }

            var ctx = document.getElementById("myAreaChart");
            var myLineChart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: Object.keys(months_income),
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
                            data: Object.values(months_income),
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
                                    min: 0,
                                    max: 10000000,
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
        },
    });
}

getData();
