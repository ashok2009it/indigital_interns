
    const labels = ["Present", "Absent"];
    const data = {
      labels: labels,
      datasets: [{
        label: "Number of Days",
        backgroundColor: ["rgba(75, 192, 192, 0.2)", "rgba(255, 99, 132, 0.2)"],
        borderColor: ["rgba(75, 192, 192, 1)", "rgba(255, 99, 132, 1)"],
        borderWidth: 1,
        data: [Math.floor(Math.random() * 31), Math.floor(Math.random() * 31)],
      }]
    };
    const config = {
      type: 'bar',
      data: data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };
    var myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  
  

    $.ajax({
      url: 'https://randomuser.me/api/?results=4',
      dataType: 'json',
      success: function(data) {
        $.each(data.results, function(i, result) {
          $('.team-member').eq(i).find('.member-image').attr('src', result.picture.large);
          $('.team-member').eq(i).find('.member-name').text(result.name.first + ' ' + result.name.last);
          $('.team-member').eq(i).find('.member-role').text('Role: ' + result.login.username);
        });
      }
    });
