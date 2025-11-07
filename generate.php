<?php
// generate.php

function capitalize($str) {
    return ucfirst(strtolower(trim($str)));
}

$fixedDomain = "@mindroom.edu.au";
$firstName = isset($_POST['firstName']) ? capitalize($_POST['firstName']) : '';
$lastName = isset($_POST['lastName']) ? capitalize($_POST['lastName']) : '';
$jobTitle = isset($_POST['jobTitle']) ? trim($_POST['jobTitle']) : '';
$otherPhone = !empty($_POST['otherPhone']) ? trim($_POST['otherPhone']) . ' <span style="color:#ED1227;">  |  </span>' : '';
$email = strtolower($firstName) . $fixedDomain;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Your Email Signature</title>
<style>
body { font-family: Arial, sans-serif; margin:40px; }
.signature { font-family: Arial; font-size:14px; line-height:20px; }
button { padding:10px 20px; background:#ed2127; color:white; border:none; border-radius:4px; cursor:pointer; }
</style>
</head>
<body>

<h2>Signature Preview</h2>

<div class="signature" id="signatureOutput">
<table cellpadding="0" cellspacing="0">
<tr>
<td>
<p style="margin:0;"><img src="https://www.mindroom.edu.au/wp-content/uploads/2026/mi_logo.png" width="250"></p>
<p style="margin:14px 0 0 0; font-weight:bold; color:#ED1227;"><?= $firstName ?> <?= $lastName ?></p>
<p style="margin:0;"><?= $jobTitle ?></p>
<p style="margin:14px 0 0 0;"><?= $otherPhone ?>+61 07 5535 8013 <span style="color:#ED1227;">  |  </span>
<a href="mailto:<?= $email ?>" style="color:#1a73e8; text-decoration:none;"><?= $email ?></a></p>
<p style="margin:0;">1/37 Connor St, Burleigh Heads QLD 4220</p>
<p style="margin:14px 0 14px 0;"><a href="https://www.mindroom.edu.au/" style="color:#ED1227; text-decoration:none; font-weight:bold;">mindroom.edu.au</a></p>
</td>
</tr>
</table>
</div>

<button onclick="copySignature()">Copy Signature</button>

<script>
function copySignature() {
    const sig = document.getElementById('signatureOutput').innerHTML;
    navigator.clipboard.write([new ClipboardItem({ "text/html": new Blob([sig], { type: "text/html" }) })])
    .then(()=>alert('Signature copied! Paste into Outlook.'))
    .catch(()=>alert('Clipboard blocked. Use Chrome or Edge.'));
}
</script>

</body>
</html>
