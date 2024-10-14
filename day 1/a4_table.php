<?php
// Simulated database data (retrieved as an associative array)
$data = [
    ["id" => 1, "name" => "John Doe", "email" => "john@example.com"],
    ["id" => 2, "name" => "Jane Smith", "email" => "jane@example.com"],
    ["id" => 3, "name" => "Sam Brown", "email" => "sam@example.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        button {
            padding: 5px 10px;
            margin: 2px;
        }
    </style>
</head>
<body>

    <h2>Data Table</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <button onclick="editData(<?php echo $row['id']; ?>)">Edit</button>
                        <button onclick="deleteData(<?php echo $row['id']; ?>)">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script>
        function editData(id) {
            alert("Editing record with ID: " + id);
            // Code to handle editing
        }

        function deleteData(id) {
            if (confirm("Are you sure you want to delete the record with ID: " + id + "?")) {
                alert("Deleted record with ID: " + id);
                // Code to handle deletion
            }
        }
    </script>

</body>
</html>
