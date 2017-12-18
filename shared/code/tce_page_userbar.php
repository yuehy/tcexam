<?php
//============================================================+
// File name   : tce_page_userbar.php
// Begin       : 2004-04-24
// Last Update : 2012-12-30
//
// Description : Display user's bar containing copyright
//               information, user status and language
//               selector.
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//
// License:
//    Copyright (C) 2004-2013 Nicola Asuni - Tecnick.com LTD
//    See LICENSE.TXT file for more information.
//============================================================+

/**
 * @file
 * Display user's bar containing copyright information, user status and language selector.
 * @package com.tecnick.tcexam.shared
 * @author Nicola Asuni
 * @since 2004-04-24
 */
echo '<section id="footer">'.K_NEWLINE;
echo '<div class="userbar">'.K_NEWLINE;
if ($_SESSION['session_user_level'] > 0) {
    // display user information
    echo '<span title="'.$l['h_user_info'].'">'.$l['w_user'].': '.$_SESSION['session_user_name'].'</span>';
    // display logout link
    echo ' <a href="tce_logout.php" class="logoutbutton" title="'.$l['h_logout_link'].'">'.$l['w_logout'].'</a>'.K_NEWLINE;
} else {
    // display login link
    echo ' <a href="tce_login.php" class="loginbutton" title="'.$l['h_login_button'].'">'.$l['w_login'].'</a>'.K_NEWLINE;
}
echo '</div>'.K_NEWLINE;

echo '<div class="minibutton" dir="ltr">';
echo '<span class="copyright">Smartbird Exam</a> ver. '.K_TCEXAM_VERSION.' - Copyright &copy; 2017 Nanjing Smartbird Intelligence Technology Co.,Ltd </span>';
echo '</div>'.K_NEWLINE;
echo '</section>';
//============================================================+
// END OF FILE
//============================================================+
