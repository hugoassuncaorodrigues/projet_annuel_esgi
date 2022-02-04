new Chart(document.getElementById("myChart"), { 
    type: 'line', 
    data: {
        labels: ['14h14', '15h15', '16h16', '17H17', '18h18'],
        datasets: [{
            label: 'single_Z0',
            data: [12, 19, 3, 5, 2, 3],
            borderColor: '#0080FF',
            fill: false,
        }]
    },
    options: {
        title: {
          display: true,
          text: 'DashBoard'
        }
      }
});
