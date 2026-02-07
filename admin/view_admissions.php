<?php
include "auth.php";
include "../db.php";

/* ===============================
   HANDLE CONTACTED TOGGLE
================================ */
if (isset($_GET['toggle_contacted'])) {
    $id = (int)$_GET['toggle_contacted'];
    mysqli_query($conn, "UPDATE admissions SET contacted = IF(contacted=1,0,1) WHERE id=$id");
    header("Location: view_admissions.php");
    exit;
}

/* ===============================
   HANDLE DELETE
================================ */
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    mysqli_query($conn, "DELETE FROM admissions WHERE id=$id");
    header("Location: view_admissions.php");
    exit;
}

$result = mysqli_query($conn, "SELECT * FROM admissions ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Admissions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f9;
        }

        .header {
            background: #1e3c72;
            color: #fff;
            padding: 15px 20px;
            font-size: 20px;
        }

        .container {
            padding: 20px;
        }

        h2 {
            margin-bottom: 15px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
            text-align: left;
        }

        th {
            background: #eef2f7;
        }

        tr:hover {
            background: #f9fbff;
        }

        .status {
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
        }

        .yes {
            background: #d4edda;
            color: #155724;
        }

        .no {
            background: #f8d7da;
            color: #721c24;
        }

        .action-btn {
            text-decoration: none;
            padding: 6px 10px;
            border-radius: 4px;
            font-size: 12px;
            margin-right: 5px;
            display: inline-block;
        }

        .contact-btn {
            background: #007bff;
            color: white;
        }

        .delete-btn {
            background: #dc3545;
            color: white;
        }

        .contact-btn:hover { background: #0056b3; }
        .delete-btn:hover { background: #b52a37; }

        .back {
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            background: #555;
            color: #fff;
            padding: 8px 14px;
            border-radius: 4px;
            font-size: 14px;
        }

        .back:hover {
            background: #333;
        }

        /* Mobile view */
        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            thead {
                display: none;
            }

            tr {
                margin-bottom: 15px;
                border: 1px solid #ddd;
                border-radius: 6px;
                padding: 10px;
            }

            td {
                border: none;
                padding: 6px 0;
            }

            td::before {
                content: attr(data-label);
                font-weight: bold;
                display: block;
                color: #555;
                margin-bottom: 3px;
            }
        }
    </style>
</head>
<body>

<div class="header">Admission Applications</div>

<div class="container">
    <h2>All Admission Enquiries</h2>

    <table>
        <thead>
            <tr>
                <th>Student</th>
                <th>Grade</th>
                <th>Parent</th>
                <th>Email</th>
                <th>Phone</th>
                <th>DOB</th>
                <th>Submitted</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        <?php if ($result && mysqli_num_rows($result) > 0) { ?>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td data-label="Student"><?= htmlspecialchars($row['student_name']) ?></td>
                    <td data-label="Grade"><?= htmlspecialchars($row['grade']) ?></td>
                    <td data-label="Parent"><?= htmlspecialchars($row['parent_name']) ?></td>
                    <td data-label="Email"><?= htmlspecialchars($row['parent_email']) ?></td>
                    <td data-label="Phone"><?= htmlspecialchars($row['parent_phone']) ?></td>
                    <td data-label="DOB">
                        <?= $row['dob'] ? date("d M Y", strtotime($row['dob'])) : "-" ?>
                    </td>
                    <td data-label="Submitted">
                        <?= date("d M Y, h:i A", strtotime($row['submitted_at'])) ?>
                    </td>
                    <td data-label="Status">
                        <span class="status <?= $row['contacted'] ? 'yes' : 'no' ?>">
                            <?= $row['contacted'] ? 'Contacted ✔️' : 'Not Contacted' ?>
                        </span>
                    </td>
                    <td data-label="Action">
                        <a class="action-btn contact-btn"
                           href="?toggle_contacted=<?= $row['id'] ?>">
                            ✔️ Toggle
                        </a>
                        <a class="action-btn delete-btn"
                           href="?delete=<?= $row['id'] ?>"
                           onclick="return confirm('Are you sure you want to delete this admission?');">
                            🗑 Delete
                        </a>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="9" style="text-align:center;padding:20px;color:#666;">
                    No admission enquiries found.
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <a href="dashboard.php" class="back">⬅ Back to Dashboard</a>
</div>

</body>
</html>
