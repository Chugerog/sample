<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
 
</head>
<body>
    <div class="container">
        <h1>Registration Page</h1>
        <form>
            <!-- Section I: Personal Information -->
            <h2>Personal Information</h2>
            
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
                    <select id="region" name="region" required>
                        <option value="">Select Region</option>
                        <!-- Populate with months -->
                        <option value="4B">4B</option>
                        <!-- Continue options -->
                    </select>
                </div>

                <div class="form-row">
    <div>
        <label for="province">Province</label>
        <select id="province" name="province" required>
            <option value="">Select Province</option>
            <option value="oriental-mindoro">Oriental Mindoro</option>
            <option value="occidental-mindoro">Occidental Mindoro</option>
            <!-- Continue options -->
        </select>
    </div>
</div>

<div class="form-row">
    <div>
        <label for="city">City/Municipality</label>
        <select id="city" name="city" required disabled>
            <option value="">Select City/Municipality</option>
            <!-- Oriental Mindoro cities -->
            <optgroup label="Oriental Mindoro" id="oriental-mindoro-cities" style="display: none;">
                <option value="calapan">City of Calapan</option>
                <option value="roxas">City of Roxas</option>
                <option value="puertogalera">Puerto Galera</option>
                <option value="santeodoro">San Teodoro</option>
                <option value="baco">Baco</option>
                <option value="naujan">Naujan</option>
                <option value="victoria">Victoria</option>
                <option value="socorro">Socorro</option>
                <option value="pola">Pola</option>
                <option value="pinamalayan">Pinamalayan</option>
                <option value="gloria">Gloria</option>
                <option value="bansud">Bansud</option>
                <option value="bongabong">Bongabong</option>
                <option value="mansalay">Mansalay</option>
                <option value="bulalacao">Bulalacao</option>
            </optgroup>
            <!-- Occidental Mindoro cities can be added similarly -->
        </select>
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


    <script>
    const provinceSelect = document.getElementById('province');
    const citySelect = document.getElementById('city');
    const orientalMindoroCities = document.getElementById('oriental-mindoro-cities');

    provinceSelect.addEventListener('change', function () {
        citySelect.disabled = true;
        orientalMindoroCities.style.display = 'none';

        if (this.value === 'oriental-mindoro') {
            orientalMindoroCities.style.display = 'block';
            citySelect.disabled = false;
        } else if (this.value === 'occidental-mindoro') {
            // Handle Occidental Mindoro similarly
            citySelect.disabled = false;
        } else {
            citySelect.disabled = true;
        }
    });
</script>
</body>
</html>
