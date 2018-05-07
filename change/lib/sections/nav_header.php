<?php
if((isset($_SESSION['user']) )) {
    // select loggedin users detail
    $res=mysqli_query($db,"SELECT * FROM tbl_users WHERE id_user=".$_SESSION['user']);
    $userinfo=mysqli_fetch_array($res);
    $userID = $userinfo['id_user'];
    $userName = $userinfo['tx_username'];
    $userEmail = $userinfo['tx_email'];
}
?>
<style>
h2{color:#34495e;font-weight:bold;}
    .page-container {
        max-width: 1630px;
    }
    .container {
        width: 100%;
    }
    .a-cookie {color: rgb(255, 255, 255); text-decoration: underline; opacity: .8;}
    .a-cookie:hover {
        text-decoration: none; color: rgb(255, 255, 255); opacity: 1;
    }
</style>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
    window.addEventListener("load", function(){
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#252e39"
                },
                "button": {
                    "background": "transparent",
                    "text": "#0FBE7C",
                    "border": "#0FBE7C"
                }
            },
            "position": "top",
            "content": {
                "message": "By using Coinschedule you agree to our <a class='a-cookie' href='https://www.coinschedule.com/terms.php'>Terms and Conditions</a>, <a class='a-cookie' href='https://www.coinschedule.com/disclaimer.php'>Disclaimer</a> and",
                "dismiss": "Don't show again for 30 days",
                "link": "Cookies Policy",
                "href": "https://www.coinschedule.com/cookies_policy.php"
            },
            "cookie": {
                "expiryDays": 30
            }
        })});
</script>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container" <? if (!$is_mobile){ echo 'style="width: 85%;"'; }?>>
        <table style="width: 100%;">
            <tr>
                <td>
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                       <? require_once('logo.php'); ?>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse" style="padding-right: 10px;">
                        <ul class="nav navbar-nav navbar-right" >
                            <li<? echo $page=="index"||$page=="project"?' class="active"':''; ?>><a href="<? echo $page=="index"?'#page-top':'https://www.coinschedule.com'; ?>">ICOs</a></li>
                            <li><a class="page-scroll" page-scroll href="<? echo $page=="index"?'#blog':'https://www.coinschedule.com#blog'; ?>">Blog</a></li>
                            <li><a class="page-scroll" page-scroll href="<? echo $page=="index"?'#events':'https://www.coinschedule.com#events'; ?>">Events</a></li>
                            <li<? echo $page=="results"?' class="active"':''; ?>><a href="https://www.coinschedule.com/icos.php">Results</a></li>
                            <li<? echo $page=="stats"?' class="active"':''; ?>><a href="https://www.coinschedule.com/stats.php">Stats</a></li>
                            <li<? echo $page=="submit"?' class="active"':''; ?>><a href="https://www.coinschedule.com/submit_entry.php">Submit</a></li>
                            <li<? echo $page=="advertise"?' class="active"':''; ?>><a href="https://www.coinschedule.com/advertise.php">Advertise</a></li>
                            <? if((isset($_SESSION['user']) )){ echo''; }else{ echo'<li'.($page=="login"?' class="active"':'').'><a href="https://www.coinschedule.com/login">Login</a></li>'; } ?>
                        </ul>
                    </div>
    </div>
    </td>
    <? if((isset($_SESSION['user']) )){ ?>
        <td valign="top" align="right" <? echo !$is_mobile?'width="20"':''; ?>>
            <div class="dropdown" style="padding-top: 8px;">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="mnu_main"><? echo $is_mobile?strtoupper(substr($userinfo['tx_username'],0,1)):$userinfo['tx_username'].' <span class="caret"></span>'; ?>
                </button>
                <ul class="dropdown-menu" <? echo $is_mobile?'style="left: -110px;top:30px;font-size: 1.1em;"':'style="left: -80px;font-size: 1.1em;"';?>>
                    <!--<li><a href="https://www.coinschedule.com/alerts.php"><span style="padding-right: 15px;"><? echo $icon_alert; ?></span>Alerts</a></li>-->
                    <li><a href="https://www.coinschedule.com/profile.php"><span style="padding-right: 15px;"><? echo $icon_profile; ?></span>Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="https://www.coinschedule.com/listings.php"><span style="padding-right: 15px;"><? echo $icon_listings; ?></span>Listings</a></li>
                    <!--<li><a href="https://www.coinschedule.com/widgets.php"><span style="padding-right: 15px;"><? echo $icon_widgets; ?></span>Widgets</a></li>-->
                    <!--<li class="divider"></li>-->
                    <!--<li><a href="https://www.coinschedule.com/contact.php"><span style="padding-right: 15px;"><? echo $icon_contact; ?></span>Contact</a></li>-->
                    <li class="divider"></li>
                    <li><a href="https://www.coinschedule.com/logout.php"><span style="padding-right: 15px;"><? echo $icon_logout; ?></span>Logout</a></li>
                </ul>
            </div>

        </td>
    <? } ?>
    </tr>
    </table>

</nav>
