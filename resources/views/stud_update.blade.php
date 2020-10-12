<html>
   
   <head>
      <title>Student Management | Edit</title>
   </head>
   
   <body>
      <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = 'text' name = 'stud_name' 
                     value = '<?php echo$users[0]->name;?>'/>
               </td>
               
               <td>Address</td>
               <td>
                  <input type = 'text' name = 'stud_add' 
                     value = '<?php echo$users[0]->address; ?>'/>
               </td>
               
               <td>
                  <input type = 'date' name = 'stud_dob' 
                     value = '<?php echo$users[0]->date_of_birth; ?>'/>
               </td>
               
               <td>
                  <input type = 'text' name = 'stud_grad' 
                     value = '<?php echo$users[0]->graduation; ?>'/>
               </td>
               
               <td>
                  <input type = 'text' name = 'stud_active' 
                     value = '<?php echo$users[0]->is_active; ?>'/>
               </td>
               
               <td>
                  <input type = 'text' name = 'stud_phone' 
                     value = '<?php echo$users[0]->phonenumber; ?>'/>
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update student" />
               </td>
            </tr>
         </table>
         
      </form>
   </body>
</html>