<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample PHP + MySQL Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🌸 Welcome Chellam 🌸</h1>

        <form id="addForm" action="" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter a Name" required>
            <button type="submit">Add</button>
        </form>

        <div id="result">
            <h2>Saved Names</h2>
            <ul>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['name'])) {
                    $newName = $conn->real_escape_string($_POST['name']);
                    $conn->query("INSERT INTO sample_table (name) VALUES ('$newName')");
                }

                $sql = "SELECT id, name FROM sample_table ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><strong>" . $row["id"]. "</strong> - " . $row["name"]. "</li>";
                    }
                } else {
                    echo "<li>No data yet.</li>";
                }

                $conn->close();
                ?>
            </ul>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
