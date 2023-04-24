<div class="full-page">
<?php
    include 'includes/header.html';
?>
 <table id="main" class="scroll">
          <caption class="cap-1">Developers Rating</caption>
          <thead>
            <tr>
              <td >Day</td>
              <td >EmpName</td>
              <td >Intime</td>
              <td >OutTime</td>
              <td >Action</td>
            </tr>
          </thead>
          <tbody>
            <tr id="e1">
              <td >1</td>
              <td >Prithi</td>
              <td >10:00</td>
              <td >04:00</td>
              <td > <button class="button-1" onclick="edit('e1',['Day','EmpName','Intime','Outtime','Month'])" type="button"> View</button> <button class="button-2"  onclick="showConfirmation('e1')" type="button">
                  Delete</button></td>
            </tr>
            <tr id="e2">
              <td >2</td>
              <td >Naruto</td>
              <td >11:00</td>
              <td >05:00</td>
              <td > <button class="button-1" onclick="edit('e2',['Day','EmpName','Intime','Outtime','Month'])" type="button"> View</button> <button class="button-2"  onclick="showConfirmation('e2')"  type="button">
                  Delete</button></td>
            </tr>
            <tr id="e3">
              <td >3</td>
              <td >krithi</td>
              <td >11:30</td>
              <td >05:30</td>
              <td > <button class="button-1" onclick="edit('e3',['Day','EmpName','Intime','Outtime','Month'])" type="button"> View</button> <button class="button-2"  onclick="showConfirmation('e3')"  type="button">
                  Delete</button></td>
            </tr>
            <tr id="e4">
              <td>4</td>
              <td>Indu</td>
              <td>12:00</td>
              <td>06:00</td>
              <td> <button class="button-1" onclick="edit('e4',['Day','EmpName','Intime','Outtime','Month'])" type="button"> View</button> <button class="button-2"   onclick="showConfirmation('e4')" type="button">
                  Delete</button></td>
            </tr>
            <tr id="e5">
              <td>5</td>
              <td>hinata</td>
              <td>12:30</td>
              <td>06:30</td>
              <td> <button class="button-1" onclick="edit('e5',['Day','EmpName','Intime','Outtime','Month'])" type="button"> View</button> <button class="button-2"   onclick="showConfirmation('e5')"  type="button">
                  Delete</button></td>
            </tr>
            <tr id="e6">
              <td>6</td>
              <td>Jasmine</td>
              <td>09:00</td>
              <td>12:00</td>
              <td> <button class="button-1" onclick="edit('e6',['Day','EmpName','Intime','Outtime','Month'])" type="button"> View</button> <button class="button-2"   onclick="showConfirmation('e6')"   type="button">
                  Delete</button></td>
            </tr>
          </tbody>
          <div id="confirmation" class="popup">
            <p>Are you sure you want to delete this row?</p>
            <button class="delete-btn" onclick="disappear()">Delete</button>
            <button class="cancel-btn" onclick="hideConfirmation()">Cancel</button>
          </div>
        </table>

        <div id="attendance-record">

       
   <script src="assests/js/Attendance.js"></script>
<?php
    include 'includes/footer.html';
?>
</div>