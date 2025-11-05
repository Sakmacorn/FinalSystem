<?php
include '../db/db_connect.php'; // ✅ adjust path if needed
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Appointments | Princess Touch</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="admin-temp.css">
</head>

<body>
    <nav class="admin-navbar">
        <div class="container">
            <h2 class="brand">PRINCESS TOUCH</h2>
            <ul class="nav-links">
                <li><a href="admin-stock.php">Stock</a></li>
                <li><a href="admin-sales.php">Sales</a></li>
                <li><a href="admin-appointment.php" class="active">Appointments</a></li>
                <li><a href="../login.php" class="logout-btn">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="admin-box">
        <h3 class="admin-title">APPOINTMENT SCHEDULE</h3>

        <!-- Search & Filter -->
        <div class="admin-controls">
            <input type="text" id="apptSearch" class="form-control" placeholder="Search client or service...">

            <select id="serviceFilter" class="form-select">
                <option value="">All Services</option>
                <option value="Makeup Session">Makeup Session</option>
                <option value="Hair & Makeup">Hair & Makeup</option>
                <option value="Facial">Facial</option>
            </select>
        </div>

        <!-- Table -->
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Date</th>
                        <th>Service</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="appointmentTableBody">
                    <?php
                    // ✅ Fetch data from appointments table
                    $sql = "SELECT * FROM appointment ORDER BY date ASC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "
              <tr>
                <td>{$row['Client_name']}</td>
                <td>{$row['Date']}</td>
                <td>{$row['Service']}</td>
                <td>{$row['Time']}</td>
                <td>{$row['Status']}</td>
                <td>
                  <button class='btn-edit' data-id='{$row['id']}'>Edit</button>
                  <button class='btn-delete' data-id='{$row['id']}'>Delete</button>
                </td>
              </tr>
              ";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center'>No appointments found</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const apptSearch = document.getElementById('apptSearch');
        const serviceFilter = document.getElementById('serviceFilter');
        const appointmentTableBody = document.getElementById('appointmentTableBody');

        // 🔍 Filter Appointments
        function filterAppointments() {
            const searchValue = apptSearch.value.toLowerCase();
            const serviceValue = serviceFilter.value.toLowerCase();

            Array.from(appointmentTableBody.rows).forEach(row => {
                const clientName = row.cells[0].textContent.toLowerCase();
                const service = row.cells[2].textContent.toLowerCase();

                const matchesSearch = clientName.includes(searchValue) || service.includes(searchValue);
                const matchesService = serviceValue === "" || service === serviceValue;

                row.style.display = (matchesSearch && matchesService) ? "" : "none";
            });
        }

        apptSearch.addEventListener('input', filterAppointments);
        serviceFilter.addEventListener('change', filterAppointments);

        // ✏️ Edit / Delete logic
        appointmentTableBody.addEventListener('click', function (event) {
            const target = event.target;

            // 🗑 Delete
            if (target.classList.contains('btn-delete')) {
                const id = target.getAttribute('data-id');
                if (confirm("Are you sure you want to delete this appointment?")) {
                    fetch('delete_appointment.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                        body: new URLSearchParams({ id })
                    })
                        .then(res => res.text())
                        .then(data => {
                            if (data.trim() === 'success') {
                                alert("Appointment deleted!");
                                target.closest('tr').remove();
                            } else {
                                alert("Error deleting appointment.");
                            }
                        });
                }
            }

            // ✏️ Edit
            if (target.classList.contains('btn-edit')) {
                const row = target.closest('tr');
                const id = target.getAttribute('data-id');

                if (target.textContent === 'Edit') {
                    for (let i = 0; i < 5; i++) {
                        const cell = row.cells[i];
                        if (i === 4) {
                            // ✅ Replace status with dropdown
                            const currentStatus = cell.textContent.trim();
                            cell.innerHTML = `
                <select class="form-select status-select">
                  <option ${currentStatus === 'Pending' ? 'selected' : ''}>Pending</option>
                  <option ${currentStatus === 'Done' ? 'selected' : ''}>Done</option>
                  <option ${currentStatus === 'Cancelled' ? 'selected' : ''}>Cancelled</option>
                </select>`;
                        } else {
                            cell.contentEditable = true;
                        }
                    }
                    target.textContent = 'Save';
                } else {
                    const updatedData = {
                        id: id,
                        client_name: row.cells[0].textContent.trim(),
                        date: row.cells[1].textContent.trim(),
                        service: row.cells[2].textContent.trim(),
                        time: row.cells[3].textContent.trim(),
                        status: row.querySelector('.status-select').value
                    };

                    fetch('update_appointment.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                        body: new URLSearchParams(updatedData)
                    })
                        .then(res => res.text())
                        .then(data => {
                            if (data.trim() === 'success') {
                                alert('Appointment updated successfully!');
                                row.cells[4].textContent = updatedData.status;
                            } else {
                                alert('Error updating appointment.');
                            }
                        });

                    for (let i = 0; i < 5; i++) {
                        row.cells[i].contentEditable = false;
                    }
                    target.textContent = 'Edit';
                }
            }
        });
    </script>
</body>

</html>