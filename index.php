<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Email Signature Generator - Mindroom Innovation</title>
<style>
body { font-family: Arial, sans-serif; margin:40px; display:flex; gap:40px;}
form { width:400px; }
label { font-weight:bold; display:block; margin-top:10px; }
input { width:100%; padding:6px; margin-top:4px; border:1px solid #ccc; border-radius:4px; }
button { padding:10px 20px; background:#ed2127; color:white; border:none; border-radius:4px; cursor:pointer; }
div{font-family: Arial; font-size:14px; line-height:20px; }
</style>
</head>
<body>
  <div>

<form action="generate.php" method="POST">
  <label>First Name:</label>
  <input type="text" name="firstName" placeholder="Jane" required>

  <label>Last Name:</label>
  <input type="text" name="lastName" placeholder="Smith" required>

  <label>Job Title:</label>
  <input type="text" name="jobTitle" placeholder="Your Job Title" required>

  <label>Other Phone (optional):</label>
  <input type="text" name="otherPhone" placeholder="Other Phone Contact">

<div style="margin-top: 20px; display: flex; gap: 10px; justify-content: flex-end;">
  <button type="reset" style="flex: 1; padding: 10px;">Reset</button>
  <button type="submit" style="flex: 1; padding: 10px;">Generate Signature</button>
</div>


</form>
</div>


</body>
</html>
