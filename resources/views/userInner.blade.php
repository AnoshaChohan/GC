<h1>This is the list of users</h1>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email Address</th>
            <th>User Type</th>
            <!--  <th>Contact Number</th> -->
            <th>Joined Date</th>
            <th>Action</th> 
            
        </tr>
    </thead>updateUser
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
             <th>{{ $user->role }}</th>
            <!-- <th>Contact Number</th>--> 
            <th>{{ $user->created_at }}</th>
            <td>
            <a href={{"/updateUser/".$user['id']}}>Edit
        </br>
        </br>

        <a href={{"deleteUser/".$user['id']}}>Delete </td>

        </tr>
        @endforeach
    </tbody>
</table>


