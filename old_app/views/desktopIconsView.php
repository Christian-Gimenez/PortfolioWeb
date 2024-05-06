<?php
function createDesktopIcon($iconName, $iconImg, $iconTitle, $url = "") {
  $icon = "
  <form class='formIcon' action=' " . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='GET' id='$iconName' draggable='true'>
    <button type='submit' name='$iconName'>
      <img src='$iconImg' alt='' draggable='false'/>
      <h3>$iconTitle</h3>
    </button>";
  if($url !== "") {
    $icon .= "<input type='hidden' name='url' value='$url'/>";
  }
  $icon .= "</form>";

  return $icon;
}

function createIconsArray()
{
  $iconsArr = [];
  array_push(
    $iconsArr,
    createDesktopIcon("mypc", "./win95-icons/png/computer_explorer_cool-0.png", "My Computer"),
    createDesktopIcon("network", "./win95-icons/png/network_normal_two_pcs-5.png", "Network Configuration"),
    createDesktopIcon("linkedin", "./win95-icons/png/user_world-1.png", "Linkedin", "https://www.linkedin.com/in/christian-m-gp"),
    createDesktopIcon("github", "./win95-icons/png/console_prompt-0.png", "Github", "https://github.com/Christian-Gimenez"),
    createDesktopIcon("inbox", "./win95-icons/png/mailbox_world-2.png", "Inbox"),
    createDesktopIcon("recyclebin", "./win95-icons/png/recycle_bin_full-2.png", "Recycle Bin")
  );
  return $iconsArr;
}

function createAdminIconsArray()
{
  $iconsArr = [];
  array_push(
    $iconsArr,
    createDesktopIcon("controlpanel", "./win95-icons/png/monitor_tweakui-0.png", "Control Panel"),
    createDesktopIcon("mypc", "./win95-icons/png/computer_explorer_cool-0.png", "My Computer"),
    createDesktopIcon("network", "./win95-icons/png/network_normal_two_pcs-5.png", "Network Configuration"),
    createDesktopIcon("linkedin", "./win95-icons/png/user_world-1.png", "Linkedin", "https://www.linkedin.com/in/christian-m-gp"),
    createDesktopIcon("github", "./win95-icons/png/console_prompt-0.png", "Github", "https://github.com/Christian-Gimenez"),
    createDesktopIcon("inbox", "./win95-icons/png/mailbox_world-2.png", "Inbox"),
    createDesktopIcon("recyclebin", "./win95-icons/png/recycle_bin_full-2.png", "Recycle Bin")
  );
  return $iconsArr;
}

function createDesktopTemplate($rows, $cols, $iconsArr)
{
  echo "<main class='desktopIconsContainer'>";
  for ($i = 0; $i < ($rows * $cols); $i++) {
    echo "<div class='iconContainer'>";
    if ($i < count($iconsArr)) {
      echo $iconsArr[$i];
    }
    echo "</div>";
  }
  echo "</main>";
}



/**Because they banned iframe I must create this:
 * Linkedin:
 * <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
 * <div class="badge-base LI-profile-badge" data-locale="es_ES" data-size="large" data-theme="light" data-type="HORIZONTAL" data-vanity="christian-m-gp" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://es.linkedin.com/in/christian-m-gp?trk=profile-badge">Christian M. G.</a></div>
 
 * Github:
 * 
 */
?>