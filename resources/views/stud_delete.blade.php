<html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      <table border = "1">
         <tr>
            <td><strong>ID</strong></td>
            <td><strong>Name</strong></td>
            <td><strong>Address</strong></td>
            <td><strong>DOB</strong></td>
            <td><strong>Graduation</strong></td>
            <td><strong>Is Active?</strong></td>
            <td><strong>Phone Number</strong></td>
            <td>Edit</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->date_of_birth }}</td>
            <td>{{ $user->graduation }}</td>
            <td>{{ $user->is_active }}</td>
            <td>{{ $user->phonenumber }}</td>
            <td><a href = 'softdelete/{{ $user->id }}'>Delete</a></td>
         </tr>
         @endforeach
      </table>
      <a href = "/">Go back to Home Page</a>
   </body>
</html>