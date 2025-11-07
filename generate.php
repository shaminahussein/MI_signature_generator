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


<div class="signature" id="signatureOutput">
<table cellpadding="0" cellspacing="0" style="font-family: Arial, sans-serif; font-size: 14px;line-height: 20px;">
  <tr>
    <td style="padding: 10px 0;">
      <!-- Logo -->
      <p style="margin:0;">
        <img src="https://www.mindroom.edu.au/wp-content/uploads/2026/mi_logo.png" alt="Mindroom Institute" width="250" style="display: block;">
      </p>

      <!-- Name and Title -->
      <p style="margin: 14px 0 0 0; font-weight: bold;color: #ED1227;"><?= $firstName ?> <?= $lastName ?></p>
      <p style="margin: 0;"><?= $jobTitle ?></p>

      <!-- Contact Info -->
      <p style="margin: 14px 0 0 0;"><?= $otherPhone ?>
      +61 07 5535 8013<span style="color: #ED1227;">  |  </span> 
        <a href="mailto:<?= $email ?>" style="color:#1a73e8; text-decoration: none;"><?= $email ?></a>
      </p>
      <p style="margin:0;">1/37 Connor St, Burleigh Heads QLD 4220</p>

      <p style="margin: 14px 0 14px 0;">
        <a href="https://www.mindroom.edu.au/" style="color:#ED1227; text-decoration: none; font-weight: bold;">mindroom.edu.au</a>
      </p>


      <table cellpadding="0" cellspacing="0" style="margin-top: 4px;">
        <tr>
                  <td style="padding-right: 6px;">

              <img src="https://www.mindroom.edu.au/wp-content/uploads/2026/setA/icon_followus.png" alt="Follow Us" width="90" style="display:block;">

          </td>
          
          <td style="padding-right: 4px;">
            <a href="https://www.facebook.com/mindroominstitute" target="_blank">
              <img src="https://www.mindroom.edu.au/wp-content/uploads/2026/setB/icon_facebook.png" alt="Facebook" width="25" style="display:block;">
            </a>
          </td>
          <td style="padding-right: 4px;">
            <a href="https://au.linkedin.com/school/mindroom-innovation/" target="_blank">
              <img src="https://www.mindroom.edu.au/wp-content/uploads/2026/setB/icon_linkedin.png" alt="Linked In" width="25" style="display:block;">
            </a>
          </td>          <td style="padding-right: 4px;">
            <a href="https://www.instagram.com/mindroominstitute/" target="_blank">
              <img src="https://www.mindroom.edu.au/wp-content/uploads/2026/setB/icon_instagram.png" alt="Instagram" width="25" style="display:block;">
            </a>
          </td>          <td style="padding-right: 4px;">
            <a href="https://www.threads.com/@mindroominstitute" target="_blank">
              <img src="https://www.mindroom.edu.au/wp-content/uploads/2026/setB/icon_threads.png" alt="Threads" width="25" style="display:block;">
            </a>
          </td>
                    <td style="padding-right: 4px;">
            <a href="https://www.tiktok.com/@mindroominnovation" target="_blank">
              <img src="https://www.mindroom.edu.au/wp-content/uploads/2026/setB/icon_tiktok.png" alt="Tiktok" width="25" style="display:block;">
            </a>
          </td>
                    <td style="padding-right: 15px;">
            <a href="https://www.youtube.com/@mindroominnovation" target="_blank">
              <img src="https://www.mindroom.edu.au/wp-content/uploads/2026/setB/icon_youtube.png" alt="Youtube" width="25" style="display:block;">
            </a>
          </td>
       <td style="padding-right: 4px;font-size: 10px;vertical-align: middle;">

        CRICOS 03586M<span style="color: #ED1227;">  |  </span>RTO 45137
          </td>
        </tr>
      </table>
            <p style="margin: 14px 0 0 0; font-size: 10px;">
        Mindroom Innovation Pty Ltd (ABN 70 613 600 552) trading as Mindroom Institute.
      </p>
    </td>
  </tr>
</table>
</div>

<button onclick="copySignature()">Copy Signature (for Outlook)</button> <button onclick="copyHTML()">Copy Signature (HTML Version)</button>

<script>
function copySignature() {
    const sig = document.getElementById('signatureOutput').innerHTML;
    navigator.clipboard.write([new ClipboardItem({ "text/html": new Blob([sig], { type: "text/html" }) })])
    .then(()=>alert('Signature copied! Paste into Outlook.'))
    .catch(()=>alert('Clipboard blocked. Use Chrome or Edge.'));
}

function copyHTML() {
    const sig = document.getElementById('signatureOutput').innerHTML;
    navigator.clipboard.writeText(sig)
    .then(() => alert('HTML code copied to clipboard!'))
    .catch(() => alert('Clipboard blocked. Use Chrome or Edge.'));
}
</script>

</body>
</html>
