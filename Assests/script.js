
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
        // popup
        const modalContainer = document.createElement("div");
        modalContainer.style.display = "flex";
        modalContainer.style.justifyContent = "center";
        modalContainer.style.alignItems = "center";
        modalContainer.style.position = "fixed";
        modalContainer.style.top = "0";
        modalContainer.style.right = "0";
        modalContainer.style.bottom = "0";
        modalContainer.style.left = "0";
        modalContainer.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
        modalContainer.style.zIndex = "999";
      
        // Create modal content
        const modalContent = document.createElement("div");
        modalContent.style.backgroundColor = "#fff";
        modalContent.style.padding = "20px";
        modalContent.style.borderRadius = "10px";
        modalContent.style.boxShadow = "0px 0px 10px 0px rgba(0, 0, 0, 0.5)";
        modalContent.style.width = "50%"; 
        modalContent.style.display = "flex";
        modalContent.style.justifyContent = "center";
        modalContent.style.alignItems = "center"; 
      
        const table = document.createElement("table");
      
       
        table.setAttribute("style", "max-width: 80%;");
      
        // table rows 
        const nameRow = document.createElement("tr");
        const monthRow = document.createElement("tr");
        const dateRow = document.createElement("tr");
        const checkinRow = document.createElement("tr");
        const checkoutRow = document.createElement("tr");
       
      
        // table cells 
        const nameCell = document.createElement("td");
        const monthCell = document.createElement("td");
        const dateCell = document.createElement("td");
        const checkinCell = document.createElement("td");
        const checkoutCell = document.createElement("td");
       
      
        // Set employee details 
        nameCell.textContent = `Employee Name: ${name}`;
        checkinCell.textContent = `Check-in Time: ${checkin.toLocaleTimeString()}`;
        checkoutCell.textContent = `Check-out Time: ${checkout.toLocaleTimeString()}`;
        monthCell.textContent = `Month: ${checkin.toLocaleString('default', { month: 'long' })}`;
        dateCell.textContent = `Date: ${checkin.getDate()}`;
      
        // Append table cells to table rows
        nameRow.appendChild(nameCell);
        monthRow.appendChild(monthCell);
        dateRow.appendChild(dateCell);
        checkinRow.appendChild(checkinCell);
        checkoutRow.appendChild(checkoutCell);
       
      
        // Append table rows to table
        
        table.appendChild(nameRow);
        table.appendChild(dateRow);
        table.appendChild(monthRow);
        table.appendChild(checkinRow);
        table.appendChild(checkoutRow);
       
        // Append table to modal content
        modalContent.appendChild(table);
      
        // Append modal content to modal container
        modalContainer.appendChild(modalContent);
      
        // Append modal container to body
        document.body.appendChild(modalContainer);
      
        // Close modal when clicking outside of modal content
        modalContainer.addEventListener("click", function(event) {
          if (event.target === modalContainer) {
            modalContainer.remove();
          }
        });
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



