<html>
   <head>
      <title>Student Management | Add</title>
   </head>

   <body>
      <form action = "/create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>Name</td>
               <td><input type='text' name='stud_name' /></td>
            </tr>
            <tr>
               <td>Address</td>
               <td><input type='text' name='stud_add' /></td>
            </tr>
            <tr>
               <td>DOB</td>
               <td><input type='date' name='stud_dob' /></td>
            </tr>
            <tr>
               <td>Graduation</td>
               <td><input type='text' name='stud_grad' /></td>
            </tr>
            <tr>
               <td>Is_active?</td>
               <td><input type='text' name='stud_active' /></td>
            </tr>
            
            <tr>
               <td>Phone Number</td>
               <td><input type='text' name='stud_phone' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add student"/>
               </td>
            </tr>
         </table>
      </form>
      
   </body>
</html>