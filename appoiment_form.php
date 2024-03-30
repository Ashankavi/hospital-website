<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script defer src="./form.js"></script>
    <title>APPOIMENT FORM</title>
    
    <!--<title>Responsive Regisration Form </title>--> 
</head>
<body>
        <!-------------------------Patient Details------------------------------> 

    <div class="container">
        <header>APPOINTMENT FORM</header>

        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Patient Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" id="fullname" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" id="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>ID Number</label>
                            <input type="text" id="idnumber"placeholder="Enter your id number" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" id="mobilenumber" placeholder="Enter mobile number" required>
                        </div>
                    </div>           
                    
        <!--------------------Patient Details-----------------------> 

                    <span class="title">The Unit Patient Want</span>
                    
                    <div class="fields">
                        <div class="input-field">
                            <label>Select Doctor</label>
                            <select required>
                                <option disabled selected>Select Doctor</option>
                                <option>Dr. Perera</option>
                                <option>Dr. Kokila</option>
                                <option>Dr. Mahindha</option>
                                <option>Dr. Pradeep</option>
                                <option>Dr. Rameesh</option>
                                <option>Dr. Dilum</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Select Medical Unit</label>
                            <select required>
                                <option disabled selected>Select Unit</option>
                                <option>O P D</option>
                                <option>Dentail Unit</option>
                                <option>Eye Unit</option>
                                <option>X-Ray Unit</option>
                                <option>Coronary Care Unit</option>
                                <option>Cancer Center</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Room Number</label>
                            <select required>
                                <option disabled selected>Select room</option>
                                <option>No. 01</option>
                                <option>No. 02</option>
                                <option>No. 03</option>
                                <option>No. 04</option>
                                <option>No. 05</option>
                                <option>No. 06</option>
                            </select>
                        </div> 
                    </div>

        <!-------------------------Submit Button--------------------------> 

                    <button class="nextBtn" id ="submit" >
                        <span class="btnText">REGISTER</span>
                        <i class="uil uil-navigator"></i>
                    </button>
            </div>
        </form>
    </div>
</body>
</html>
