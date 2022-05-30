<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>index</title>
        <link rel="stylesheet" href="{{asset('css/admin.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        

    </head>
    <body>
    
        <div class = "content">
                <div class = "text">
                   <h1><font color="#8A191D">Admin Dashboard</font></h1>
                </div>
                <div class = "room">
                    <h2>Room Information</h2>
                    <table>
                        <tr><th>Room Number</th><th>Location</th><th>Rate</th><th>Type</th><th>Booked</th><th colspan="2">Actions</th>
                        </tr>
                        <tr><td>201</td><td>Second Floor</td><td>5000</td><td>Standard</td><td>Yes</td>
                        <td><form action = "edit.php" method="post">
                            <button>Edit</button>
                        </form></td>
                    <td><form action="delete.php" method="POST">
                        <button>Delete</button>
                    </form></td></tr>
                    </table>
                </div>
            </div>
    </body>
</html>