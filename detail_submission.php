<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <title>Internship Details</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/atlantis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <style>
        body {
            background-color: #f4f6f9;
            padding: 20px;
        }
        
        .form-container {
            background: #fff;
            border-radius: 6px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.1);
            padding: 40px;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            font-weight: 500;
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #333;
        }
        
        .form-control {
            background: #e9ecef;
            border: none;
            border-radius: 6px;
            height: 38px;
            padding: 8px 12px;
            font-size: 14px;
        }
        
        .form-control:focus {
            background: #e9ecef;
            outline: none;
            box-shadow: 0 0 0 2px rgba(30, 115, 232, 0.2);
        }
        
        /* Radio button style */
        .radio-group {
            display: flex;
            gap: 25px;
        }
        
        .radio-group label {
            font-weight: 400;
            cursor: not-allowed;
            display: flex;
            align-items: center;
        }
        
        .radio-group input[type="radio"] {
            margin-right: 8px;
            cursor: not-allowed;
        }
        
        /* Semester inline style */
        .form-group.semester-inline {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .form-group.semester-inline label {
            margin: 0;
        }
        
        .form-group.semester-inline select {
            width: 80px;
            text-align-last: center;
            pointer-events: none;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="POST">
            <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" value="3312401009" readonly style="width:70%;">
            </div>

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" value="Clauresia Valerie Birvindea" readonly style="width:70%;">
            </div>

            <div class="form-group">
                <label>Study Program</label>
                <input type="text" class="form-control" value="D4 - Cyber Security Engineering" readonly style="width:70%;">
            </div>

            <div class="form-group">
                <label>Departement</label>
                <input type="text" class="form-control" value="Informatics Engineering" readonly style="width:70%;">
            </div>

            <div class="form-group">
                <label style="margin-bottom: 10px;">Class</label>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="class" value="regular" checked disabled> Regular class
                    </label>
                    <label>
                        <input type="radio" name="class" value="evening" disabled> Evening class
                    </label>
                </div>
            </div>

            <div class="form-group semester-inline">
                <label>Semester</label>
                <select class="form-control" style="width:80px; text-align-last:center;" disabled>
                    <option>1</option>
                    <option>3</option>
                    <option selected>5</option>
                </select>
            </div>

            <div class="form-group">
                <label>Internship Coordinator</label>
                <input type="text" class="form-control" value="Ibu Sartikha" readonly style="width:70%;">
            </div>

            <div class="form-group">
                <label>Company Name</label>
                <input type="text" class="form-control" value="PT McDermott Indonesia" readonly style="width:70%;">
            </div>

            <div class="form-group">
                <label>Company Address</label>
                <input type="text" class="form-control" value=" Jl. Bawal No.1, Batu Merah, Kec. Batu Ampar, Kota Batam, Kepulauan Riau 29452." readonly style="width:70%;">
            </div>

            <div class="form-group" style="display:flex; gap:15px;">
                <div style="flex:1; max-width: calc(35% - 7.5px);">
                    <label>Start Date</label>
                    <input type="date" class="form-control" name="start_date" value="2025-07-01" readonly>
                </div>
                <div style="flex:1; max-width: calc(35% - 7.5px);">
                    <label>End Date</label>
                    <input type="date" class="form-control" name="end_date" value="2026-01-01" readonly>
                </div>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" value="clauresiavalerie@gmail.com" readonly style="width:70%;">
            </div>

            <div class="form-group">
                <label>Active WhatsApp Number</label>
                <input type="text" class="form-control" value="08123456789" readonly style="width:70%;">
            </div>
        </form>
    </div>

    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/atlantis.min.js"></script>
</body>
</html>
