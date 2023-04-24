ScrollReveal({
    reset:true,
    distance:'60px',
    duration: 2500,
    delay:400
}
);
ScrollReveal().reveal('.scroll',{delay:100,origin:'top'});

function showConfirmation(rowId) {
	const confirmationEl = document.getElementById('confirmation');
	confirmationEl.style.display = 'block';
	// Store the ID of the row to delete in a data attribute of the confirmation element
	confirmationEl.dataset.rowId = rowId;
  }
  
function hideConfirmation() {
	const confirmationEl = document.getElementById('confirmation');
	confirmationEl.style.display = 'none';
	// Remove the stored row ID from the data attribute
	confirmationEl.removeAttribute('data-row-id');
  }
  
function disappear() {
	const rowId = document.getElementById('confirmation').dataset.rowId;
	const empEl = document.getElementById(rowId);
	empEl.style.display = 'none';
	hideConfirmation();
  }

  function edit(rowId,headings)
  {
	  const row1El = document.getElementById(rowId)
	  const row2Data = []
	  for(let i=0;i<row1El.cells.length-1;i++)
	  {
		  const cellData = row1El.cells[i].innerHTML
		  row2Data.push(cellData)
	  }
	  const tableEl = document.createElement('table')
	  const headerRow = tableEl.insertRow()
	  headerRow.style.backgroundColor = 'black'
	  headerRow.style.color = 'white'
	  for(let i=0;i<headings.length;i++)
	  {
		  const headerCell = headerRow.insertCell(i)
		  headerCell.innerHTML = headings[i]
		  //headerCell.classList.add('allcells')
	  }
	  const dataRow = tableEl.insertRow()
	  for(let i=0;i<row2Data.length;i++)
	  {
		  const dataCell = dataRow.insertCell(i)
		  dataCell.innerHTML = row2Data[i];
	  }
	  const monthcell= dataRow.insertCell(4)
	  monthcell.innerHTML='January'
	  const individualAttendanceTable = document.getElementById('attendance-record')
	  individualAttendanceTable.innerHTML = ''
	  individualAttendanceTable.appendChild(tableEl)
	  individualAttendanceTable.classList.add("clearpopup")
	  const closeBtn = document.createElement('button')
      closeBtn.classList.add('popup-delete','ri-close-line')
      individualAttendanceTable.appendChild(closeBtn)
      closeBtn.addEventListener('click',() =>
    {
        individualAttendanceTable.style.display = 'none'
    })
	  individualAttendanceTable.style.display="flex"
  }
  
function addRow() {
    var table = document.getElementById("main");
	var rws = table.rows;
	var cols = table.rows[0].cells.length;
    var row = table.insertRow(rws.length);
	var cell;
	for(var i=0;i<cols;i++){
		cell = row.insertCell(i);
		cell.innerHTML ='<input type="text" placeholder="Enter Value">';
	}
}

function addColumn() {
    var table = document.getElementById("main");
	var rws = table.rows;
	var cols = table.rows[0].cells.length;
	var cell;
	for(var i=0;i<rws.length;i++){
		cell = rws[i].insertCell(cols-1);
		cell.innerHTML ='<input type="text" placeholder="Enter Value">';
	}
}