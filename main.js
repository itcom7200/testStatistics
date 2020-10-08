var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["08-09.59","10-11.59","12-13.59","14-15.59","16-17.59"],
        datasets: [{
            // label: '# of Votes',
            data: [64, 182, 336, 183, 245],
            backgroundColor: [
                // "#F7464A",
                // "#F7464A",
                // "#F7464A",
                // "#F7464A",
                // "#F7464A",
                // "#F7464A",

                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)'

                // 'rgba(54, 162, 235, 0.2)',
                // 'rgba(255, 206, 86, 0.2)',
                // 'rgba(75, 192, 192, 0.2)',
                // 'rgba(153, 102, 255, 0.2)',
                // 'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 1)'
                // 'rgba(54, 162, 235, 1)',
                // 'rgba(255, 206, 86, 1)',
                // 'rgba(75, 192, 192, 1)',
                // 'rgba(153, 102, 255, 1)',
                // 'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            labels: {
                render: 'value'
            }
        },
        legend: {
            display: false
        }
    }
});

var ctx2 = document.getElementById('myChart2').getContext('2d');
var myChart2 = new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ["ศิลปศาสตร์", "การจัดการ", "รัฐศาสตร์และนิติศาสตร์", "เภสัชศาสตร์", "สหเวชศาสตร์"],
        datasets: [{
            label: '# of Votes',
            data: [156, 234, 112, 116, 121],
            backgroundColor: [
                "#F7464A",
                "#46BFBD",
                "#FDB45C",
                "#949FB1",
                "#46BFBD",
            ],
            // borderColor: [
            //     'rgba(255, 99, 132, 1)',
            //     'rgba(54, 162, 235, 1)',
            //     'rgba(255, 206, 86, 1)',
            //     'rgba(75, 192, 192, 1)',
            //     'rgba(153, 102, 255, 1)'
            // ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
            labels: {
                // fontSize: 16 
            }
        },
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            labels: [
                // {
                //     render: 'label',
                //     position: 'outside'
                // },
                // {
                //     render: 'percentage'
                // }
                {
                    render: 'percentage',
                    // fontColor: ['green', 'white', 'red'],
                    // precision: 2
                    // fontSize: 16
                }
            ]
        }
        // legend: {
        //     display: false
        // }

    }
});