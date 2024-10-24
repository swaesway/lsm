<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>User Dashboard</title>
    <style>
        /* General Styles */
        body,
        html {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background-color: #f8f9fa;
        }

        /* Main container */
        .dashboard-container {
            display: flex;
            padding: 20px;
            gap: 20px;
        }

        /* Sidebar styles */
        #sidebar {
            height: calc(100vh - 40px);
            width: 250px;
            background-color: #ffffff;
            color: #292929;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: fixed;
        }

        #sidebar .app-name {
            text-align: center;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        #sidebar .user-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        #sidebar .nav-link {
            color: #292929;
            padding: 10px 15px;
            border-radius: 5px;
        }

        #sidebar .nav-link:hover {
            color: #ffffff;
            background-color: #026701;
        }
       


        /* Bottom section of the sidebar for user info */
        .sidebar-bottom {
            text-align: center;
            margin-top: auto;
            padding-top: 20px;
        }
              

        /* Content wrapper */
        .content-wrapper {
            flex: 1;
            margin-left: 270px;
            padding: 20px;
        }

        /* Card styles for requests */
        .request-card {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }

        .request-card i {
            font-size: 1.5rem;
            margin-right: 10px;
        }

        .request-card.border-pending {
            border-top: 5px solid #007bff;
        }

        .request-card.border-approved {
            border-top: 5px solid #28a745;
        }

        .request-card.border-rejected {
            border-top: 5px solid #dc3545;
        }

        /* Table styles */
        .table-wrapper {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .action-button {
            font-size: 0.875rem;
            padding: 0.375rem 0.75rem;
            margin-right: 5px;
            background-color: #efb70;
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div id="sidebar">
            <div>
                <div class="app-name">
                    <img src="https://via.placeholder.com/80" alt="App Logo" class="user-image">
                    <h5>Leave Management App</h5>
                </div>
                <hr class="border-secondary">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Request Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Request Type</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
            </div>
            <!-- User info at the bottom -->
            <div class="sidebar-bottom">
                <img src="https://via.placeholder.com/30" alt="User Avatar" class="user-image mb-2">
                <p>User Name</p>
                <a class="nav-link" href="#">Logout</a>
            </div>
        </div>

        <!-- Content Area -->
        <div class="content-wrapper">
            <!-- Request Summary Cards -->
            <div class="row">
                <div class="col-md-4">
                    <div class="request-card border-pending">
                        <i class="bi bi-hourglass-split text-primary"></i>
                        <div>
                            <h5>Pending Requests</h5>
                            <p class="text-muted">Number of pending requests: 10</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="request-card border-approved">
                        <i class="bi bi-check-circle-fill text-success"></i>
                        <div>
                            <h5>Approved Requests</h5>
                            <p class="text-muted">Number of approved requests: 15</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="request-card border-rejected">
                        <i class="bi bi-x-circle-fill text-danger"></i>
                        <div>
                            <h5>Rejected Requests</h5>
                            <p class="text-muted">Number of rejected requests: 5</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search and Table of Request Information -->
            <div class="table-wrapper mt-4">
                <h5>Recent Requests</h5>
                <table class="table table-striped table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Request Date</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Type of Leave</th>
                            <th>Status</th>
                            <th>Reason</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2024-10-10</td>
                            <td>2024-11-01</td>
                            <td>2024-11-10</td>
                            <td>Sick</td>
                            <td>Pending</td>
                            <td>Medical checkup</td>
                            <td>
                                <button class="btn btn-primary action-button" data-bs-toggle="modal"
                                    data-bs-target="#actionModal" onclick="populateModal(1)">
                                    Manage
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2024-09-15</td>
                            <td>2024-10-01</td>
                            <td>2024-10-05</td>
                            <td>Personal</td>
                            <td>Approved</td>
                            <td>Family event</td>
                            <td>
                                <button class="btn btn-primary action-button" data-bs-toggle="modal"
                                    data-bs-target="#actionModal" onclick="populateModal(2)">
                                    Manage
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2024-09-20</td>
                            <td>2024-10-10</td>
                            <td>2024-10-12</td>
                            <td>Casual</td>
                            <td>Rejected</td>
                            <td>Insufficient balance</td>
                            <td>
                                <button class="btn btn-primary action-button" data-bs-toggle="modal"
                                    data-bs-target="#actionModal" onclick="populateModal(3)">
                                    Manage
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal for Action -->
    <div class="modal fade" id="actionModal" tabindex="-1" aria-labelledby="actionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="actionModalLabel">Request Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="requestDetails">
                        <!-- Details to be dynamically populated -->
                    </div>
                    <div class="mt-3">
                        <h6>Admin Decision</h6>
                        <button class="btn btn-success btn-sm me-2" onclick="handleDecision('approved')">Approve</button>
                        <button class="btn btn-danger btn-sm me-2" onclick="handleDecision('rejected')">Reject</button>
                        <button class="btn btn-primary btn-sm" onclick="handleDecision('pending')">Pend</button>
                    </div>
                    <div class="mt-3">
                        <label for="adminReason" class="form-label">Reason (Optional)</label>
                        <textarea class="form-control" id="adminReason" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="submitDecision()">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Placeholder for JavaScript -->
    <script>
        // Function to populate the modal with request information
        function populateModal(requestId) {
            const requestDetails = document.getElementById('requestDetails');
            // You can replace this with actual data fetching based on the requestId
            requestDetails.innerHTML = `
                <p><strong>Request ID:</strong> ${requestId}</p>
                <p><strong>Request Date:</strong> 2024-10-10</p>
                <p><strong>Start Date:</strong> 2024-11-01</p>
                <p><strong>End Date:</strong> 2024-11-10</p>
                <p><strong>Type of Leave:</strong> Sick</p>
                <p><strong>Status:</strong> Pending</p>
                <p><strong>Reason:</strong> Medical checkup</p>
            `;
        }

        // Function to handle decision buttons
        function handleDecision(decision) {
            console.log(`Admin decision: ${decision}`);
            // Perform actions based on the decision (like sending it to the server)
        }

        // Function to submit the decision
        function submitDecision() {
            const reason = document.getElementById('adminReason').value;
            console.log(`Decision reason: ${reason}`);
            // Send the decision to the server
            alert('Decision has been submitted.');
        }
    </script>
</body>

</html>
