function disappear()
{
    const rowId = document.getElementById('confirmation').dataset.rowId
    const empEl = document.getElementById(rowId)
    empEl.style.display = 'none'
    cancelConfirmation()
}

function showConfirmation(rowId)
{ 
    const confirmEl = document.getElementById('confirmation')
    confirmEl.style.display = 'block'
    confirmEl.dataset.rowId = rowId
}

function cancelConfirmation()
{
    const confirmEl = document.getElementById('confirmation')
    confirmEl.style.display = 'none'
    confirmEl.removeAttribute('data-row-id')
}

function appearRecord(rowId,headings)
{
    const rowEl = document.getElementById(rowId)
    const rowData = []
    for(let i=0;i<rowEl.cells.length-1;i++)
    {    
        const cellData = rowEl.cells[i].innerHTML
        rowData.push(cellData)    
    }
    const tableEl = document.createElement('table')
    const headerRow = tableEl.insertRow()
    for(let i=0;i<headings.length;i++)
    {
        const headerCell = headerRow.insertCell(i)
        headerCell.innerHTML = headings[i]
        headerCell.classList.add('table-border')
    }
    const dataRow = tableEl.insertRow()
    for(let i=0;i<rowData.length;i++)
    {
        const dataCell = dataRow.insertCell(i)
        dataCell.innerHTML = rowData[i];
    }
    const monthCell = dataRow.insertCell(5)
    monthCell.innerHTML = 'January'
    const dayCell = dataRow.insertCell(6)
    dayCell.innerHTML = 'Monday'
    const individualAttendanceTable = document.getElementById('individual-attendance')
    individualAttendanceTable.innerHTML = ''
    individualAttendanceTable.classList.add('view-popup')
    individualAttendanceTable.appendChild(tableEl)
    const closeBtn = document.createElement('button')
    closeBtn.classList.add('view-delete','ri-close-line')
    const closeContainer = document.createElement('div')
    closeContainer.appendChild(closeBtn)
    closeContainer.style.display = 'flex'
    individualAttendanceTable.appendChild(closeContainer)
    closeBtn.addEventListener('click',() =>
    {
        individualAttendanceTable.style.display = 'none'
    })

    individualAttendanceTable.style.display = 'flex'
}