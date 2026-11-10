<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowing Log</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #eef2ff 0%, #f8f9fa 100%); min-height: 100vh; }
        .card { border: none; border-radius: 1rem; }
        .log-table thead th {
            background: #f1f3f5;
            font-size: .8rem;
            text-transform: uppercase;
            letter-spacing: .05em;
            color: #495057;
            border-bottom: 2px solid #dee2e6;
            padding: 1rem;
        }
        .log-table tbody td { vertical-align: middle; padding: .9rem 1rem; }
        .log-table tbody tr:hover { background-color: #f8f9ff; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="#">
                <i class="bi bi-box-seam me-2"></i>Equipment Lending
            </a>
            <a href="borrow.php" class="btn btn-light btn-sm">
                <i class="bi bi-plus-lg me-1"></i>New Request
            </a>
        </div>
    </nav>

    <div class="container py-5">

        <div class="mb-4">
            <h2 class="fw-bold mb-1">Borrowing Log</h2>
            <p class="text-muted mb-0">All equipment borrow requests.</p>
        </div>

        <div class="card shadow-lg">
            <div class="table-responsive">
                <table class="table log-table align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Equipment Name</th>
                            <th class="text-center">Quantity</th>
                            <th>Borrow Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require 'config.php';

                            $sql = "SELECT * FROM borrow_requests";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["student_id"] . "</td>";
                                    echo "<td>" . $row["equipment"] . "</td>";
                                    echo "<td>" . $row["quantity"] . "</td>";
                                    echo "<td>" . $row["borrow_date"] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4' class='text-center py-5 text-muted'>No records found</td></tr>";
                            }

                            $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>