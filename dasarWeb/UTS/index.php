<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Planner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Budget Planner</h1>

        <a href="home.php" class="btn btn-secondary mb-3">Back to Home</a>
        <a href="add.php" class="btn btn-primary mb-3">Add New Expense</a>

        <div id="confirmModal">
            <div class="modal-content">
                <h2>Are you sure you want to delete this expense?</h2>
                <button id="confirmDelete" class="btn btn-confirm">Yes</button>
                <button id="cancelDelete" class="btn btn-cancel">No</button>
            </div>
        </div>

        <?php
        session_start();

        if (!isset($_SESSION['expenses'])) {
            $_SESSION['expenses'] = [];
        }

        $totalBudget = 0;
        if (count($_SESSION['expenses']) > 0) {
            foreach ($_SESSION['expenses'] as $expense) {
                $totalBudget += $expense['amount'];
            }
        }

        if (count($_SESSION['expenses']) == 0) {
            echo "<p class='text-center'>No expenses found</p>";
        }
        ?>

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (count($_SESSION['expenses']) > 0) {
                    foreach ($_SESSION['expenses'] as $index => $expense) {
                        $formattedDate = date("d F Y", strtotime($expense['date']));
                        echo "<tr>
                            <td>{$expense['description']}</td>
                            <td>" . number_format($expense['amount'], 2) . "</td>
                            <td>{$formattedDate}</td>
                            <td>
                                <a href='edit.php?id={$index}' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='delete.php?id={$index}' class='btn btn-danger btn-sm'>Delete</a>
                            </td>
                        </tr>";
                    }
                }
                ?>
            </tbody>
        </table>

        <div class="mt-3">
            <h3>Total Budget: <span class="badge bg-success"><?= number_format($totalBudget, 2) ?></span></h3>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>