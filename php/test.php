<!-- index.php -->
<?php
$conn = mysqli_connect("localhost", "root", "", "restaurant");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create user
if (isset($_POST['create'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    
    $sql = "INSERT INTO users (nom, email, phone) VALUES ('$name', '$email', '$phone')";
    mysqli_query($conn, $sql);
    header("Location: index.php");
}

// Update user
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    
    $sql = "UPDATE users SET nom='$name', email='$email', phone='$phone' WHERE id=$id";
    mysqli_query($conn, $sql);
    header("Location: index.php");
}

// Delete user
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM users WHERE id=$id");
    header("Location: index.php");
}

// Fetch all users
$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .container {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        form {
            display: grid;
            gap: 10px;
            max-width: 400px;
            margin: 20px 0;
        }
        input[type="text"],
        input[type="email"] {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button.edit {
            background-color: #2196F3;
        }
        button.delete {
            background-color: #f44336;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Management System</h2>
        
        <!-- Create Form -->
        <form id="createForm" method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <button type="submit" name="create">Add User</button>
        </form>

        <!-- Update Form -->
        <form id="updateForm" method="POST" class="hidden">
            <input type="hidden" name="id" id="updateId">
            <input type="text" name="name" id="updateName" placeholder="Name" required>
            <input type="email" name="email" id="updateEmail" placeholder="Email" required>
            <input type="text" name="phone" id="updatePhone" placeholder="Phone" required>
            <button type="submit" name="update">Update User</button>
            <button type="button" onclick="cancelUpdate()">Cancel</button>
        </form>

        <!-- Users Table -->
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td>
                            <button class="edit" onclick="showUpdateForm(<?php 
                                echo $row['id']; ?>, 
                                '<?php echo $row['nom']; ?>', 
                                '<?php echo $row['email']; ?>', 
                                '<?php echo $row['phone']; ?>'
                            )">Edit</button>
                            <button class="delete" onclick="deleteUser(<?php echo $row['id']; ?>)">Delete</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script>
        function showUpdateForm(id, name, email, phone) {
            document.getElementById('createForm').classList.add('hidden');
            document.getElementById('updateForm').classList.remove('hidden');
            
            document.getElementById('updateId').value = id;
            document.getElementById('updateName').value = name;
            document.getElementById('updateEmail').value = email;
            document.getElementById('updatePhone').value = phone;
        }

        function cancelUpdate() {
            document.getElementById('updateForm').classList.add('hidden');
            document.getElementById('createForm').classList.remove('hidden');
        }

        function deleteUser(id) {
            if (confirm('Are you sure you want to delete this user?')) {
                window.location.href = index.php?delete=${id};
            }
        }
    </script>
</body>
</html>