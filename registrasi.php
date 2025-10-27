<?php
// Start session untuk menyimpan error/old value jika dibutuhkan
session_start();

// Fungsi untuk menampilkan nilai lama (old input)
function old($name) {
  return isset($_POST[$name]) ? htmlspecialchars($_POST[$name]) : '';
}

// Fungsi untuk menampilkan error (dummy jika nanti mau dikembangkan)
function form_error($name) {
  if (isset($_SESSION['errors'][$name])) {
    return '<div class="text-danger small mt-1">'.$_SESSION['errors'][$name].'</div>';
  }
  return '';
}

// Fungsi untuk simpan error validasi (contoh sederhana)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['errors'] = [];

  if (empty($_POST['name'])) $_SESSION['errors']['name'] = 'Name is required.';
  if (empty($_POST['nim'])) $_SESSION['errors']['nim'] = 'NIM is required.';
  if (empty($_POST['email'])) $_SESSION['errors']['email'] = 'Email is required.';
  if (empty($_POST['password'])) $_SESSION['errors']['password'] = 'Password is required.';
  if ($_POST['password'] !== $_POST['confirm_password'])
    $_SESSION['errors']['confirm_password'] = 'Passwords do not match.';

  if (empty($_SESSION['errors'])) {
    // Simpan data ke database di sini (contoh)
    echo "<script>alert('Registration successful!');</script>";
    session_destroy();
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Student Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <style>
    body {
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      background: #f5f5f5;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 30px 15px;
    }
    .register-container {
      background: white;
      max-width: 650px;
      width: 100%;
      padding: 30px 35px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      border: 1px solid #e0e0e0;
    }
    .register-container h3 {
      text-align: center;
      font-weight: 600;
      font-size: 22px;
      color: #1e3a8a;;
      margin-bottom: 20px;
    }
    .alert-info {
      background: #ffffff;
      border-left: 3px solid #2196f3;
      padding: 12px 15px;
      font-size: 13px;
      color: #333333;
      margin-bottom: 25px;
      border-radius: 4px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }
    .section-title {
      font-weight: 600;
      font-size: 16px;
      margin: 25px 0 18px;
      color: #333;
      text-align: center;
    }
    label {
      font-size: 13px;
      font-weight: 500;
      color: #555;
      margin-bottom: 6px;
      display: block;
    }
    label .text-danger {
      color: #d32f2f;
      margin-left: 2px;
    }
    .form-control, .form-select {
      font-size: 13px;
      padding: 8px 12px;
      height: 38px;
      border-radius: 4px;
      border: 1px solid #d0d0d0;
      transition: all 0.2s ease;
      background-color: #fff;
    }
    .form-control:focus, .form-select:focus {
      border-color: #2196f3;
      outline: none;
      box-shadow: 0 0 0 2px rgba(33, 150, 243, 0.1);
      background-color: white;
    }
    .form-control::placeholder {
      color: #999;
      font-size: 13px;
    }
    .form-control:disabled, .form-control[readonly] {
      background-color: #f5f5f5;
      cursor: not-allowed;
      color: #999;
    }
    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 15px;
      margin-bottom: 15px;
    }
    .form-group { 
      margin-bottom: 15px; 
    }
    .password-requirements {
      font-size: 12px;
      color: #555;
      margin-top: 10px;
      margin-bottom: 15px;
      line-height: 1.6;
    }
    .password-requirements strong {
      display: block;
      margin-bottom: 8px;
      color: #333;
    }
    .password-requirements ul {
      margin: 0;
      padding-left: 18px;
    }
    .password-requirements li {
      margin-bottom: 4px;
    }
    .terms-checkbox {
      display: flex;
      align-items: flex-start;
      gap: 8px;
      margin: 20px 0;
      font-size: 13px;
      color: #555;
    }
    .terms-checkbox input[type="checkbox"] {
      margin-top: 3px;
      cursor: pointer;
    }
    .terms-checkbox a {
      color: #2196f3;
      text-decoration: none;
    }
    .terms-checkbox a:hover {
      text-decoration: underline;
    }
    .btn-group {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
      margin-top: 25px;
    }
    .btn-home {
      background: #f5f5f5;
      font-weight: 500;
      font-size: 14px;
      border-radius: 4px;
      padding: 10px 20px;
      color: #555;
      border: 1px solid #d0d0d0;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      cursor: pointer;
      transition: all 0.2s ease;
      text-decoration: none;
    }
    .btn-home:hover {
      background: #e8e8e8;
      color: #333;
    }
    .btn-signin {
      background: #2196f3;
      font-weight: 500;
      font-size: 14px;
      border-radius: 4px;
      padding: 10px 20px;
      color: white;
      border: none;
      transition: all 0.2s ease;
      cursor: pointer;
    }
    .btn-signin:hover {
      background: #1976d2;
    }
    .password-field {
      position: relative;
    }
    .password-toggle {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #999;
      font-size: 14px;
    }
    @media (max-width: 576px) {
      .form-row {
        grid-template-columns: 1fr;
      }
      .register-container {
        padding: 25px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h3>Student Registration</h3>

    <div class="alert-info">
      Before you start using MyInternship to manage your internship data, please register an account by filling out the form below.
    </div>

    <form method="POST">
      <div class="section-title">Student Information</div>

      <div class="form-group">
        <label for="name">Name <span class="text-danger">*</span></label>
        <input id="name" name="name" class="form-control" type="text" value="<?= old('name') ?>" placeholder="Enter Your Name" />
        <?= form_error('name') ?>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="nim">NIM <span class="text-danger">*</span></label>
          <input id="nim" name="nim" class="form-control" type="text" value="<?= old('nim') ?>" placeholder="Enter Your Student Number (NIM)" />
          <?= form_error('nim') ?>
        </div>
        <div class="form-group">
          <label for="email">E-Mail <span class="text-danger">*</span></label>
          <input id="email" name="email" class="form-control" type="email" value="<?= old('email') ?>" placeholder="Enter Your Email" />
          <?= form_error('email') ?>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="university">University or Polytechnic <span class="text-danger">*</span></label>
          <select id="university" name="university" class="form-select">
            <option value="" selected disabled>-Select University or Polytechnic-</option>
            <option value="polbatam">Politeknik Negeri Batam</option>
          </select>
        </div>
        <div class="form-group">
          <label for="study">Study Program <span class="text-danger">*</span></label>
          <select id="study" name="study" class="form-select">
            <option selected disabled>- Select Study Program -</option>
            <option style="font-weight: bold;">Manajemen Bisnis | Business Management</option>
            <option>D4-Administrasi Bisnis Terapan (D4-Appliaed Business Administration)</option>
            <option>D3-Akuntansi (D3-Accounting)</option>
            <option>D4-Akuntansi Manajerial (D4-Managerial Accounting)</option>
            <option>D2-Distribusi Barang (D2-Goods Distribution)</option>
            <option>D4-Logistik Perdagangan Internasional (D4-International Trade Logistic)</option>
            <option style="font-weight: bold;">Teknik Elektronika | Electrical Enginering</option>
            <option>D3-Elektronika Manufaktur (D3-Manufacturing Electronics Engineering)</option>
            <option>D4-Teknik Mekatronika (D4-Mechatronic Engineering)</option>
            <option>D2-Teknik Otomasi (D2-Automation Engineering)</option>
            <option>D4-Teknik Robotika (D4-Robotics Engineering)</option>
            <option>D3-Teknik Instrumentasi (D3 Instrumentation Engineering)</option>
            <option>D4-Teknologi Rekayasa Pembangkit Energi </option>
            <option>D4-Teknologi Rekayasa Elektronika (D4 Electrical Engineering)</option>
            <option style="font-weight: bold;">Teknik Informatika (Informatics Engineering)</option>
            <option>D4-Animasi (D4 Animation)</option>
            <option>D3-Teknologi Geomatika (D3 Geomatics Technology)</option>
            <option>D3-Teknik Informatika (D3 Informatics Engineering)</option>
            <option>D4-Teknologi Rekayasa Multimedia (D4 Multimedia Engineering)</option>
            <option>D4-Rekayasa Keamanan Siber (D4 Cyber Security Engineering)</option>
            <option>D4-Teknologi Rekayasa Perangkat Lunak (D4 Software Development Engineering)</option>
            <option style="font-weight: bold;">Teknik Mesin | Mechaniacal Engineering</option>
            <option>D3-Teknik Mesin (D3 Mechanical Engineering)</option>
            <option>Profesi-Program Profesi Insinyur (Profesi-Professional Engineer Program)</option>
            <option>D3-Teknik Perawatan Pesawat Udara (D3 Aircraft Maintenance Engineering)</option>
            <option>D4-Teknologi Rekayasa Konstruksi Perkapalan (D4-Ship Construction Engineering)</option>
            <option>D4-Teknologi Rekayasa Pengelasan dan Fabrikasi </option>
          </select>
        </div>
      </div>

      <div class="section-title">Account Information</div>

      <div class="form-row">
        <div class="form-group">
          <label for="username">Username <span class="text-danger">*</span></label>
          <input id="username" name="username" class="form-control" type="text" placeholder="Your Username will be the same as NIM" value="<?= old('username') ?>" readonly />
        </div>
        <div class="form-group">
          <label for="wa">Whatsapp Number <span class="text-danger">*</span></label>
          <input id="wa" name="wa" class="form-control" type="tel" value="<?= old('wa') ?>" placeholder="Insert WhatsApp Number, e.g., 6281234568xxxx" />
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="password">Password <span class="text-danger">*</span></label>
          <div class="password-field">
            <input id="password" name="password" class="form-control" type="password" placeholder="Enter Your Password" />
            <i class="fas fa-eye password-toggle" onclick="togglePassword('password', this)"></i>
          </div>
          <?= form_error('password') ?>
        </div>
        <div class="form-group">
          <label for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
          <div class="password-field">
            <input id="confirm_password" name="confirm_password" class="form-control" type="password" placeholder="Confirm Your Password" />
            <i class="fas fa-eye password-toggle" onclick="togglePassword('confirm_password', this)"></i>
          </div>
          <?= form_error('confirm_password') ?>
        </div>
      </div>

      <div class="password-requirements">
        <strong>Password Requirements:</strong>
        <ul>
          <li>At least 8 characters long</li>
          <li>Must include both uppercase and lowercase letters</li>
          <li>Must contain at least one number</li>
          <li>Must have at least one special character (e.g., !, @, #, $, etc.)</li>
          <li>Cannot include your username or email address</li>
        </ul>
      </div>

      <div class="terms-checkbox">
        <input type="checkbox" id="terms" name="terms" required />
        <label for="terms" style="margin-bottom: 0; font-weight: 400;">
          I agree to the <a href="#">Terms and Conditions</a>
        </label>
      </div>

      <div class="btn-group">
        <a href="landing_page.php" class="btn-home"><i class="fas fa-home"></i> Go to Home</a>
        <button class="btn-signin" type="submit">Submit</button>
      </div>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script>
    // Auto-fill username dari NIM
    document.getElementById('nim').addEventListener('input', function(e) {
      document.getElementById('username').value = e.target.value;
    });

    // Toggle password visibility
    function togglePassword(fieldId, icon) {
      const field = document.getElementById(fieldId);
      if (field.type === 'password') {
        field.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        field.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    }
  </script>
</body>
</html>
