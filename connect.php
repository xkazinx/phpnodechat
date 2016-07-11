<?
  $user = "";
  if ($_POST)
  {
    if (isset($_POST['user']))
    {
      $user = $_POST['user'];
    }
  }

  if (strlen($user) == 0)
  {
    header("location: index.php?id=1");
  }
?>
