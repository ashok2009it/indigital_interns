<?php
    include 'includes/header.html';
?>
<section>
      <div class="title"><h1>Employee Attendance</h1></div>
      <div class="title">
        <table style="width:80%;">
          <tr>
            <th class="table-border">E-id</th>
            <th class="table-border">Employee Name</th>
            <th class="table-border">Profession</th>
            <th class="table-border">In time</th>
            <th class="table-border">Out time</th>
            <th class="table-border">Action</th>
          </tr>
          <tr id="emp1">
            <td>1</td>
            <td>Ravi</td>
            <td>Frontend Engineer</td>
            <td>10:00</td>
            <td>12:00</td>
            <td><button class="view" onclick="appearRecord('emp1',['E-id','Employee Name','Profession','In time','Out time','Month','Day'])">View</button> / <button class="delete" onclick="showConfirmation('emp1')">Delete</button></td>
          </tr>
          <tr id="emp2">
            <td>2</td>
            <td>Pavi</td>
            <td>Cloud Engineer</td>
            <td>10:00</td>
            <td>12:00</td>
            <td><button class="view" onclick="appearRecord('emp2',['E-id','Employee Name','Profession','In time','Out time','Month','Day'])">View</button> / <button class="delete" onclick="showConfirmation('emp2')">Delete</button></td>
          </tr>
          <tr id="emp3">
            <td>3</td>
            <td>Ria</td>
            <td>Backend Engineer</td>
            <td>10:00</td>
            <td>12:00</td>
            <td><button class="view" onclick="appearRecord('emp3',['E-id','Employee Name','Profession','In time','Out time','Month','Day'])">View</button> / <button class="delete" onclick="showConfirmation('emp3')">Delete</button></td>
          </tr>
          <tr id="emp4">
            <td>4</td>
            <td>Subha</td>
            <td>Manager</td>
            <td>10:00</td>
            <td>12:00</td>
            <td><button class="view" onclick="appearRecord('emp4',['E-id','Employee Name','Profession','In time','Out time','Month','Day'])">View</button> / <button class="delete" onclick="showConfirmation('emp4')">Delete</button></td>
          </tr>
          <tr id="emp5">
            <td>5</td>
            <td>Raghu</td>
            <td>Project Head</td>
            <td>10:00</td>
            <td>12:00</td>
            <td><button class="view" onclick="appearRecord('emp5',['E-id','Employee Name','Profession','In time','Out time','Month','Day'])">View</button> / <button class="delete" onclick="showConfirmation('emp5')">Delete</button></td>
          </tr>
        </table>
      </div>
      <div id="confirmation" class="popup">
          <p>Please confirm if you want to delete this row</p>
          <div class="title">
            <button class="view" onclick="cancelConfirmation()">Cancel</button>
            <button class="delete" onclick="disappear()">Delete</button>
          </div>
      </div>
      <div class="title">
        <div id="individual-attendance"></div>
      </div>
</section>
<script src="assets/js/attendance.js"></script>

<?php
    include 'includes/footer.html';
?>    
