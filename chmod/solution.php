<html>
<head>
  <title>Chmod Calculator</title>
</head>
<body>
  <?php
  $owner=0;
  $group=0;
  $other=0;
  if (isset($_REQUEST['owner4'])) {
    $owner=$owner+4;
  }
  if (isset($_REQUEST['owner2'])) {
    $owner=$owner+2;
  }
  if (isset($_REQUEST['owner1'])) {
    $owner=$owner+1;
  }
  if (isset($_REQUEST['group4'])) {
    $group=$group+4;
  }
  if (isset($_REQUEST['group2'])) {
    $group=$group+2;
  }
  if (isset($_REQUEST['group1'])) {
    $group=$group+1;
  }
  if (isset($_REQUEST['other4'])) {
    $other=$other+4;
  }
  if (isset($_REQUEST['other2'])) {
    $other=$other+2;
  }
  if (isset($_REQUEST['other1'])) {
    $other=$other+1;
  }
  echo "Your permission: " .$owner. "" .$group. "" . $other;
  ?>
</body>
</html>