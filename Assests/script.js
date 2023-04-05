
   //bar graph
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
  
  
      // random user generator
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

 	// Array of employee names
   const names = ["Alice", "Bob", "Charlie", "David", "Eva", "Frank", "Grace", "Henry", "Iris", "John"];

  // Generate 10 rows of random data
   for (let i = 0; i < 10; i++) {
     // Generate a random date within the last week
     const date = new Date(Date.now() - Math.floor(Math.random() * 7) * 24 * 60 * 60 * 1000);

     // Generate a random employee name
     const name = names[Math.floor(Math.random() * names.length)];
     
     // Generate a random check-in time between 8:00 AM and 10:00 AM
     const checkin = new Date(date);
     checkin.setHours(8 + Math.floor(Math.random() * 2));
     checkin.setMinutes(Math.floor(Math.random() * 60));

     // Generate a random check-out time between 4:00 PM and 6:00 PM
     const checkout = new Date(date);
     checkout.setHours(16 + Math.floor(Math.random() * 2));
     checkout.setMinutes(Math.floor(Math.random() * 60));

     // Create a new table row
     const row = document.createElement("tr");

     // Add the date column
     const dateCell = document.createElement("td");
     dateCell.textContent = date.toLocaleDateString();
     row.appendChild(dateCell);

     // Add the employee name column
     const nameCell = document.createElement("td");
     nameCell.textContent = name;
     row.appendChild(nameCell);

     // Add the check-in time column
     const checkinCell = document.createElement("td");
     checkinCell.textContent = checkin.toLocaleTimeString();
     row.appendChild(checkinCell);

     // Add the check-out time column
     const checkoutCell = document.createElement("td");
     checkoutCell.textContent = checkout.toLocaleTimeString();
     row.appendChild(checkoutCell);

     // Add the action column
      const actionCell = document.createElement("td");
			const viewLink = document.createElement("a");
			viewLink.textContent = "view";
			viewLink.href = "#"; 
      viewLink.style.color="#d76ca2";
			actionCell.appendChild(viewLink);
    
      
      viewLink.addEventListener("click", function() {
        
        const modal = document.getElementById("modal");
      
        // Set employee details 
        document.getElementById("name-cell").textContent = `Employee Name: ${name}`;
        document.getElementById("checkin-cell").textContent = `Check-in Time: ${checkin.toLocaleTimeString()}`;
        document.getElementById("checkout-cell").textContent = `Check-out Time: ${checkout.toLocaleTimeString()}`;
        document.getElementById("month-cell").textContent = `Month: ${checkin.toLocaleString('default', { month: 'long' })}`;
        document.getElementById("date-cell").textContent = `Date: ${checkin.getDate()}`;
      
        modal.style.display = "block";
      
        // Close modal when clicking outside of modal content
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        };
      });
      
      
      
      
     
			const deleteLink = document.createElement("a");
      deleteLink.textContent = "Delete";
      deleteLink.addEventListener("click", function() {
        const confirmed = confirm("Are you sure you want to delete this record?");
        if (confirmed) {
          row.style.display = "none";
        }
      });  

 

      deleteLink.style.color="#0b7c92";
      deleteLink.style.cursor="pointer";
			actionCell.appendChild(deleteLink);
			row.appendChild(actionCell);

    
     const tableBody = document.getElementById("table-body");
     tableBody.appendChild(row);

      const monthNames = ["January","February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
      const month = monthNames[Math.floor(Math.random() * monthNames.length)];
      document.getElementById("month").textContent = month;
   }



