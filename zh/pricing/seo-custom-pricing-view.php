<?php

include 'config.php';

// Handle deletion
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $stmt = $conn->prepare("DELETE FROM seo_custom_pricing_form_data WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Fetch data
$result = $conn->query("SELECT * FROM seo_custom_pricing_form_data");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Engine Optimization Custom Pricing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2c3e50;
            color: #ecf0f1;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .table-container {
            width: 100%;
            max-width: 1500px;
            margin: 20px;
            padding: 20px;
            background-color: #34495e;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
            color: #ecf0f1;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #7f8c8d;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #2c3e50;
            color: #ecf0f1;
        }

        tr:nth-child(even) {
            background-color: #3a3a3a;
        }

        tr:nth-child(odd) {
            background-color: #2c3e50;
        }

        tr:hover {
            background-color: #6C63FF;
            color: #ecf0f1;
        }

        .btn {
            background-color: #e74c3c;
            color: #ecf0f1;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #c0392b;
        }

        .actions {
            display: flex;
            gap: 10px;
        }
    </style>
</head>

<body>
    <div class="table-container">
        <h1>Search Engine Optimization Custom Pricing</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Keyword Research</th>
                    <th>On-Page Search Engine Optimization</th>
                    <th>Technical SEO Audit</th>
                    <th>Content Optimization</th>
                    <th>Local Search Engine Optimization</th>
                    <th>Link Building</th>
                    <th>Competitor Analysis</th>
                    <th>Monthly Report</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['companyName']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['keyword']; ?></td>
                        <td><?php echo $row['pageSEO']; ?></td>
                        <td><?php echo $row['audit']; ?></td>
                        <td><?php echo $row['blogPost']; ?>,
                            <?php echo $row['content']; ?>
                        </td>
                        <td><?php echo $row['optimization']; ?></td>
                        <td><?php echo $row['building']; ?></td>
                        <td><?php echo $row['analysis']; ?></td>
                        <td><?php echo $row['report']; ?></td>
                        <td>
                            <a class="btn" href="?delete=<?php echo $row['id']; ?>"
                                onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                        </td>

                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
$conn->close();
?>