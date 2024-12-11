<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1, h2 {
            color: #333;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-row {
            display: flex;
            gap: 10px;
        }
        .form-row > div {
            flex: 1;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Page</h1>
        <form>
            <!-- Section I: Personal Information -->
            <h2>Personal Information</h2>
            <div class="form-group">
                <label for="id">ID (Unique)</label>
                <input type="text" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="profile-pic">Profile Picture</label>
                <input type="file" id="profile-pic" name="profile-pic">
            </div>
            <div class="form-group form-row">
                <div>
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>
                <div>
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>
                <div>
                    <label for="middlename">Middle Name</label>
                    <input type="text" id="middlename" name="middlename">
                </div>
            </div>
            <div class="form-group">
                <label>Address</label>
                <div class="form-row">
                    <div>
                        <label for="region">Region</label>
                        <input type="text" id="region" name="region" required>
                    </div>
                    <div>
                        <label for="province">Province</label>
                        <input type="text" id="province" name="province" required>
                    </div>
                </div>
                <div class="form-row">
                    <div>
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                    <div>
                        <label for="barangay">Barangay</label>
                        <input type="text" id="barangay" name="barangay" required>
                    </div>
                </div>
                <div class="form-row">
                    <div>
                        <label for="residence">Residence (House No./Block/Lot)</label>
                        <input type="text" id="residence" name="residence">
                    </div>
                    <div>
                        <label for="street">Street (Zone or Purok/Sitio)</label>
                        <input type="text" id="street" name="street">
                    </div>
                </div>
            </div>
            <div class="form-group form-row">
                <div>
                    <label for="birth-month">Birth Month</label>
                    <select id="birth-month" name="birth-month" required>
                        <option value="">Select Month</option>
                        <!-- Populate with months -->
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <!-- Continue options -->
                    </select>
                </div>
                <div>
                    <label for="birth-day">Birth Date</label>
                    <input type="number" id="birth-day" name="birth-day" min="1" max="31" required>
                </div>
                <div>
                    <label for="birth-year">Birth Year</label>
                    <input type="number" id="birth-year" name="birth-year" required>
                </div>
            </div>
            <div class="form-group">
                <label for="birth-place">Birth Place</label>
                <input type="text" id="birth-place" name="birth-place" required>
            </div>
            <div class="form-group">
                <label for="marital-status">Marital Status</label>
                <select id="marital-status" name="marital-status" required>
                    <option value="">Select Status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                </select>
            </div>
            <!-- Add more fields following similar structure -->

            <button type="submit">Submit Registration</button>
        </form>
    </div>
</body>
</html>
