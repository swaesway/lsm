<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>User Dashboard</title>
    <style>
        /* General Styles */
        body, html {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background-color: #f8f9fa;
            height: 100%;
        }

        /* Sidebar styles */
        #sidebar {
            height: calc(100vh - 40px);
            width: 250px;
            background-color: #ffffff;
            color: #292929;
            padding: 20px;
            margin: 20px;
            position: fixed;
            top: 0;
            left: 0;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            z-index: 1000;
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
            margin-left: 310px;
            padding: 30px;
            height: calc(100vh - 40px); /* Match sidebar height */
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
            overflow-y: auto; /* Enable scrolling for overflow content */
            position: relative; /* Add position relative */
            display: flex; /* Add flex display */
            flex-direction: column; /* Stack children vertically */
        }

        /* Main content container */
        .container-fluid {
            flex: 1; /* Allow container to fill available space */
            display: flex;
            flex-direction: column;
        }

        /* Form container */
        #leaveForm {
            flex: 1; /* Allow form to fill available space */
            display: flex;
            flex-direction: column;
        }

        /* Updated Button styles */
        .btn-custom {
            background-color: #026701;
            color: #fff;
            border: none;
            padding: 12px 40px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #efb70b;
            color: #292929;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .submit-button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 30px;
            margin-bottom: 20px; /* Add some bottom margin */
        }
    </style>
</head>
<body>
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
                    <a class="nav-link" href="#">Apply for Leave</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Leave Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Leave Balance</a>
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
        <!-- Main Content -->
        <div class="container-fluid mt-0">
            <h1 class="p-3">Apply for Leave</h1>
            <form class="p-3" id="leaveForm">
                <div class="mb-3">
                    <label for="startDate" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="startDate" required>
                </div>
                <div class="mb-3">
                    <label for="endDate" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="endDate" required>
                </div>
                <div class="mb-3">
                    <label for="leaveType" class="form-label">Type of Leave</label>
                    <select class="form-select" id="leaveType" required>
                        <option value="">Select Leave Type</option>
                        <option value="sick">Sick</option>
                        <option value="casual">Casual</option>
                        <option value="personal">Personal</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="leaveReason" class="form-label">Reason for Leave</label>
                    <textarea class="form-control" id="leaveReason" rows="3" required></textarea>
                </div>
                <div class="submit-button-container">
                    <button type="submit" class="btn btn-custom">Submit Request</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="successModalLabel">Success!</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center p-4">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                    </div>
                    <h4>Leave Request Submitted Successfully!</h4>
                    <p class="text-muted">Your leave request has been submitted and is pending approval.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-success px-4" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Handle form submission
        document.getElementById('leaveForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent actual form submission
            
            // Show success modal
            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
            
            // Optional: Reset form after submission
            this.reset();
        });
    </script>
</body>
</html>