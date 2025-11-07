<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Email Signature Generator - Mindroom Innovation</title>
<style>
body { font-family: Arial, sans-serif; margin:40px; display:flex; gap:40px; }
form { width:300px; }
label { font-weight:bold; display:block; margin-top:10px; }
input { width:100%; padding:6px; margin-top:4px; border:1px solid #ccc; border-radius:4px; }
.preview { flex:1; border-left:2px solid #ed2127; padding-left:20px; }
.signature { font-family: Arial; font-size:14px; color:#000; }
.buttons { display:flex; flex-wrap:wrap; gap:8px; justify-content:center; margin-top:15px; }
.buttons button { width:30%; background:#ed2127; color:white; border:none; padding:8px 14px; border-radius:4px; cursor:pointer; }
.buttons button.reset { background:#555; }
</style>
</head>
<body>

<form action="generate.php" method="POST">
  <h2>Signature Generator</h2>
  <label>First Name:</label>
  <input type="text" name="firstName" placeholder="Jane" required>

  <label>Last Name:</label>
  <input type="text" name="lastName" placeholder="Smith" required>

  <label>Job Title:</label>
  <input type="text" name="jobTitle" placeholder="Your Job Title" required>

  <label>Other Phone (optional):</label>
  <input type="text" name="otherPhone" placeholder="Other Phone Contact">

  <div class="buttons">
    <button type="reset" class="reset">Reset</button>
    <button type="submit">Generate Signature</button>
  </div>
</form>

</body>
</html>
