<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions - Our School</title>

    <!-- Main CSS -->
    <link rel="stylesheet" href="styles.css">
<body>
    <!-- Page Specific CSS -->
    <style>
        .form-section {
            padding: 80px 20px;
            background-color: var(--light-bg);
        }
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 3rem;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        .form-header h2 {
            color: var(--primary-color);
            font-size: 2rem;
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .form-section-title {
            background: var(--light-bg);
            padding: 1rem;
            margin: 2rem 0 1rem;
            border-left: 4px solid var(--secondary-color);
            font-weight: bold;
        }
        .checkbox-group {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }
        .submit-btn {
            background: var(--secondary-color);
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
        }
        .reset-btn {
            background: #95a5a6;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 8px;
            width: 100%;
        }
        .button-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        @media (max-width: 768px) {
            .form-row,
            .button-group {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<?php include 'header.php'; ?>

<main>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Online Admission Form</h1>
            <p>Register Your Child Today</p>
        </div>
    </section>

    <!-- Admission Form -->
    <section class="form-section">
        <div class="form-container">

            <div class="form-header">
                <h2>Student Admission Registration</h2>
                <p>Please fill all required fields carefully</p>
            </div>

            <form id="admissionForm" method="post" action="">

                <div class="form-section-title">👤 Student Information</div>

                <div class="form-row">
                    <div class="form-group">
                        <label>First Name *</label>
                        <input type="text" id="firstName" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name *</label>
                        <input type="text" id="lastName" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Date of Birth *</label>
                        <input type="date" required>
                    </div>
                    <div class="form-group">
                        <label>Gender *</label>
                        <select required>
                            <option value="">Select</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>

                <div class="form-section-title">👨‍👩‍👧 Parent Information</div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Father Name *</label>
                        <input type="text" required>
                    </div>
                    <div class="form-group">
                        <label>Father Phone *</label>
                        <input type="tel" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" id="parentEmail" required>
                </div>

                <div class="form-section-title">📍 Address</div>

                <div class="form-group">
                    <textarea placeholder="Full Address" required></textarea>
                </div>

                <div class="form-group">
                    <input type="checkbox" required>
                    I agree to terms & conditions
                </div>

                <div class="button-group">
                    <button type="submit" class="submit-btn">Submit</button>
                    <button type="reset" class="reset-btn">Reset</button>
                </div>

            </form>
        </div>
    </section>

</main>

<?php include 'footer.php'; ?>

<script>
document.getElementById('admissionForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert("Application submitted successfully!");
    this.reset();
});
</script>

</body>
</html>
