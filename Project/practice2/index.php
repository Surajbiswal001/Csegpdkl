<?php
include('db.php');

$student_details = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query = $_POST['query'];
    
    // Prepare SQL query to search by name or registration number
    $sql = "SELECT * FROM students WHERE name LIKE ? OR reg_number LIKE ?";
    $stmt = $conn->prepare($sql);
    $search_term = "%" . $query . "%";  // Add wildcards for LIKE query
    $stmt->bind_param('ss', $search_term, $search_term);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $student_details = $result->fetch_assoc();
    } else {
        $student_details = null;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #3498db, #9b59b6);
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            flex-direction: column;
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        /* Glassmorphism Form Style */
        .glass-form {
            background: rgba(255, 255, 255, 0.1);  /* Transparent white background */
            border-radius: 15px;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            backdrop-filter: blur(10px);  /* Frosted glass effect */
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #fff;
        }

        .glass-form h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .glass-form input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 1em;
            outline: none;
            transition: 0.3s;
        }

        .glass-form input:focus {
            border-color: rgba(255, 255, 255, 0.7);
            background: rgba(255, 255, 255, 0.3);
        }

        .glass-form button {
            width: 100%;
            padding: 12px;
            background: rgba(0, 123, 255, 0.8);
            border: none;
            color: #fff;
            border-radius: 8px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .glass-form button:hover {
            background-color: rgba(0, 123, 255, 1);
        }

        /* Styling for the student details section */
        .student-details {
            margin-top: 30px;
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        .student-details p {
            margin: 10px 0;
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <h1>Enter Your Name or Registration Number</h1>
    
    <!-- Form to search for student -->
    <form method="POST">
        <input type="text" name="query" placeholder="Enter name or registration number" required>
        <button type="submit">Submit</button>
    </form>

    <?php if ($student_details): ?>
        <h2>Student Details</h2>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($student_details['name']); ?></p>
        <p><strong>Registration Number:</strong> <?php echo htmlspecialchars($student_details['reg_number']); ?></p>
        <p><strong>Father Name:</strong> <?php echo htmlspecialchars($student_details['father_name']); ?></p>
        <p><strong>Mother Name:</strong> <?php echo htmlspecialchars($student_details['mother_name']); ?></p>
        <p><strong>Address:</strong> <?php echo htmlspecialchars($student_details['Address']); ?></p>
    <?php elseif ($student_details === null && $_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <p>No student found with that information.</p>
    <?php endif; ?>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
