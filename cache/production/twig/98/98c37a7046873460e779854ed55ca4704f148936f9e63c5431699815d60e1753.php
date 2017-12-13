<?php

/* overall_header.html */
class __TwigTemplate_d920ce42933fc286dc40a4871a0a2316a3c59c4f8350f8f29d6651c37d57b99a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-110746551-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110746551-1');
</script>
<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: \"ca-pub-8465176290847810\",
    enable_page_level_ads: true
  });
</script>
<meta name=\"description\" content=\"Wildlandfires.us is a community for wildland firefighters to share and discuss recent wildfire activity, information and firefighting job openings.\"/>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta property=\"og:title\" content=\"";
        // line 23
        echo ($context["PAGE_TITLE"] ?? null);
        echo "\"/>
<meta property=\"og:type\" content=\"website\"/>
<meta property=\"og:url\" content=\"";
        // line 25
        echo ($context["BOARD_URL"] ?? null);
        echo ($context["SCRIPT_NAME"] ?? null);
        echo ".php\"/>
<meta property=\"og:site_name\" content=\"";
        // line 26
        echo ($context["SITENAME"] ?? null);
        echo "\"/>
<meta property=\"og:image\" content=\"http://wildlandfires.us/images/wlff-badge.jpg\"/>
<meta property=\"og:description\" content=\"";
        // line 28
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 30
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 31
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

";
        // line 33
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 34
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo ($context["U_FEED"] ?? null);
                echo "\">";
            }
            // line 35
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo ($context["U_FEED"] ?? null);
                echo "?mode=news\">";
            }
            // line 36
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo ($context["U_FEED"] ?? null);
                echo "?mode=forums\">";
            }
            // line 37
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo ($context["U_FEED"] ?? null);
                echo "?mode=topics\">";
            }
            // line 38
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo ($context["U_FEED"] ?? null);
                echo "?mode=topics_active\">";
            }
            // line 39
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo ($context["U_FEED"] ?? null);
                echo "?f=";
                echo ($context["S_FORUM_ID"] ?? null);
                echo "\">";
            }
            // line 40
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo ($context["U_FEED"] ?? null);
                echo "?f=";
                echo ($context["S_FORUM_ID"] ?? null);
                echo "&amp;t=";
                echo ($context["S_TOPIC_ID"] ?? null);
                echo "\">";
            }
            // line 41
            echo "\t";
        }
        // line 43
        echo "
";
        // line 44
        if (($context["U_CANONICAL"] ?? null)) {
            // line 45
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 47
        echo "
<!--
\tphpBB style name: we_clearblue
\tBased on style:   prosilver (this is the default phpBB3 style)
sdjhgsdjghsdjkghdsgjksdh;gafdjshk\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by:      nextgen ( http://xeronix.org/ )
-->

";
        // line 55
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 56
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 71
        echo "<link href=\"https://fonts.googleapis.com/css?family=Vollkorn+SC\" rel=\"stylesheet\">
<link href=\"";
        // line 72
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/prosilver/theme/stylesheet.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 73
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 74
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/prosilver/theme/responsive.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\" media=\"all and (max-width: 700px)\">
<link href=\"";
        // line 75
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/responsive.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\" media=\"all and (max-width: 700px)\">

";
        // line 77
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 78
            echo "\t<link href=\"";
            echo ($context["ROOT_PATH"] ?? null);
            echo "styles/prosilver/theme/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 80
        echo "
";
        // line 81
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 82
            echo "\t<link href=\"";
            echo ($context["ROOT_PATH"] ?? null);
            echo "styles/prosilver/theme/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 84
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 86
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/prosilver/theme/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 89
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_formcreator', '__main__'));
        $this->env->loadTemplate('@dmzx_formcreator/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_boardannouncements', '__main__'));
        $this->env->loadTemplate('@phpbb_boardannouncements/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_pages', '__main__'));
        $this->env->loadTemplate('@phpbb_pages/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 90
        echo "
";
        // line 91
        echo $this->getAttribute(($context["definition"] ?? null), "STYLESHEETS", array());
        echo "

";
        // line 93
        // line 94
        echo "
<!--[if lt IE 9]>
\t<script type=\"text/javascript\" src=\"";
        // line 96
        echo ($context["T_TEMPLATE_PATH"] ?? null);
        echo "/html5shiv.min.js\"></script>
<![endif]-->

</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 100
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo " logged-in";
        } else {
            echo " logged-out";
        }
        echo "\">

";
        // line 102
        // line 103
        echo "
<div id=\"wrap\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>

\t<div class=\"inventea-wrapper\">
\t\t<nav class=\"inventea-user-bar\">
\t\t\t";
        // line 109
        $location = "navbar_responsive_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_responsive_header.html", "overall_header.html", 109)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 110
        echo "
\t\t\t";
        // line 111
        // line 112
        echo "
\t\t\t<ul class=\"linklist bulletin inventea-user-menu\" role=\"menubar\">
\t\t\t\t";
        // line 114
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_pages', '__main__'));
        $this->env->loadTemplate('@phpbb_pages/event/navbar_header_quick_links_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 115
        echo "
\t\t\t\t";
        // line 116
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 117
            echo "\t\t\t\t\t";
            // line 118
            echo "\t\t\t\t\t<li id=\"username_logged_in\" class=\"rightside ";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
\t\t\t\t\t\t";
            // line 119
            // line 120
            echo "\t\t\t\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t\t\t\t<a href=\"";
            // line 121
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
            } else {
                echo "<img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/no_avatar.gif\" alt=\"\" />";
            }
            echo " ";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t\t";
            // line 125
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                echo "<li class=\"small-icon icon-restore-permissions\"><a href=\"";
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 126
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 127
            // line 128
            echo "
\t\t\t\t\t\t\t\t\t<li class=\"small-icon icon-ucp\"><a href=\"";
            // line 129
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"small-icon icon-profile\"><a href=\"";
            // line 130
            echo ($context["U_USER_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
            echo "</a></li>

\t\t\t\t\t\t\t\t\t";
            // line 132
            // line 133
            echo "
\t\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t\t<li class=\"small-icon icon-logout\"><a href=\"";
            // line 135
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 139
            // line 140
            echo "\t\t\t\t\t</li>
\t\t\t\t\t";
            // line 141
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 142
                echo "\t\t\t\t\t\t<li class=\"small-icon icon-pm rightside\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t<a href=\"";
                // line 143
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\"><span class=\"responsive-hide\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVATE_MESSAGES");
                echo "</span><span class=\"hidden responsive-show-inline\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PM");
                echo "</span> ";
                if ((($context["PRIVATE_MESSAGE_COUNT"] ?? null) > 0)) {
                    echo " (<strong>";
                    echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                    echo "</strong>)";
                }
                echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 146
            echo "\t\t\t\t\t";
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 147
                echo "\t\t\t\t\t\t<li class=\"small-icon icon-notification dropdown-container dropdown-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t<a href=\"";
                // line 148
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                if ((($context["NOTIFICATIONS_COUNT"] ?? null) > 0)) {
                    echo " (<strong>";
                    echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                    echo "</strong>)";
                }
                echo "</a>
\t\t\t\t\t\t\t";
                // line 149
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "overall_header.html", 149)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 150
                echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 152
            echo "\t\t\t\t\t";
            // line 153
            echo "\t\t\t\t";
        } else {
            // line 154
            echo "\t\t\t\t\t<li class=\"small-icon icon-logout rightside\" data-skip-responsive=\"true\"><a href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t";
            // line 155
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 156
                echo "\t\t\t\t\t\t<li class=\"small-icon icon-register rightside\" data-skip-responsive=\"true\"><a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 158
            echo "\t\t\t\t\t";
            // line 159
            echo "\t\t\t\t";
        }
        // line 160
        echo "
\t\t\t\t";
        // line 161
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 162
            echo "\t\t\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                echo "<li class=\"small-icon rightside responsive-hide\" data-skip-responsive=\"true\"><a href=\"";
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                echo "</a></li>";
            }
            // line 163
            echo "\t\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                echo "<li class=\"small-icon rightside responsive-hide\" data-skip-responsive=\"true\"><a href=\"";
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNREAD");
                echo "</a></li>";
            }
            // line 164
            echo "\t\t\t\t\t";
            if (($context["S_REGISTERED_USER"] ?? null)) {
                echo "<li class=\"small-icon rightside responsive-hide\" data-skip-responsive=\"true\"><a href=\"";
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_SELF");
                echo "</a></li>";
            }
            // line 165
            echo "\t\t\t\t";
        }
        // line 166
        echo "
\t\t\t\t";
        // line 167
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_pages', '__main__'));
        $this->env->loadTemplate('@phpbb_pages/event/navbar_header_quick_links_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 168
        echo "
\t\t\t\t<li class=\"small-icon leftside\">";
        // line 169
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo ($context["LAST_VISIT_DATE"] ?? null);
        } else {
            echo ($context["CURRENT_TIME"] ?? null);
        }
        echo "</li>
\t\t\t</ul>
\t\t</nav>
\t</div>

\t<header class=\"inventea-header\">
\t\t<div class=\"inventea-dashboard\" role=\"banner\">
\t\t";
        // line 176
        echo "\t\t
\t\t\t<div class=\"inventea-sitename\">
\t\t\t\t<h1><a href=\"";
        // line 178
        if (($context["U_SITE_HOME"] ?? null)) {
            echo ($context["U_SITE_HOME"] ?? null);
        } else {
            echo ($context["U_INDEX"] ?? null);
        }
        echo "\" title=\"";
        if (($context["U_SITE_HOME"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        }
        echo "\">";
        echo ($context["SITENAME"] ?? null);
        echo "</a></h1>
\t\t\t\t<span>";
        // line 179
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "</span>
\t\t\t</div>
\t\t";
        // line 181
        // line 182
        echo "\t\t</div>
\t</header>

\t<div class=\"inventea-wrapper\">
\t\t<div class=\"inventea-forum-bar\">
\t\t\t";
        // line 187
        // line 188
        echo "\t\t\t";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 188)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 189
        echo "\t\t</div>

\t\t<div class=\"inventea-content\" role=\"main\">
\t\t\t";
        // line 192
        // line 193
        echo "
\t\t\t<ul id=\"nav-breadcrumbs\" class=\"linklist\" role=\"menubar\">
\t\t\t\t";
        // line 195
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 196
        echo "\t\t\t\t";
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_pages', '__main__'));
        $this->env->loadTemplate('@phpbb_pages/event/overall_header_breadcrumbs_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 197
        echo "\t\t\t\t<li class=\"small-icon icon-home inventea-breadcrumbs\" data-skip-responsive=\"true\">
\t\t\t\t\t";
        // line 198
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO");
        echo ": ";
        if (($context["U_SITE_HOME"] ?? null)) {
            echo "<span class=\"crumb\"";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
            echo "><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span></a></span>";
        }
        // line 199
        echo "\t\t\t\t\t";
        // line 200
        echo "\t\t\t\t\t<span class=\"crumb\"";
        echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
        echo "><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span></a></span>
\t\t\t\t\t";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 202
            echo "\t\t\t\t\t\t";
            // line 203
            echo "\t\t\t\t\t\t<span class=\"crumb\"";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></span>
\t\t\t\t\t\t";
            // line 204
            // line 205
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "\t\t\t\t\t";
        // line 207
        echo "\t\t\t\t</li>
\t\t\t\t";
        // line 208
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_pages', '__main__'));
        $this->env->loadTemplate('@phpbb_pages/event/overall_header_breadcrumbs_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 209
        echo "\t\t\t</ul>

\t\t\t";
        // line 211
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 212
            echo "\t\t\t\t<div id=\"information\" class=\"rules\">
\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t<strong>";
            // line 214
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_DISABLED");
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 218
        echo "
\t\t\t";
        // line 219
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_boardannouncements', '__main__'));
        $this->env->loadTemplate('@phpbb_boardannouncements/event/overall_header_content_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  754 => 219,  751 => 218,  741 => 214,  737 => 212,  735 => 211,  731 => 209,  726 => 208,  723 => 207,  721 => 206,  715 => 205,  714 => 204,  701 => 203,  699 => 202,  695 => 201,  686 => 200,  684 => 199,  672 => 198,  669 => 197,  663 => 196,  660 => 195,  656 => 193,  655 => 192,  650 => 189,  637 => 188,  636 => 187,  629 => 182,  628 => 181,  623 => 179,  607 => 178,  603 => 176,  589 => 169,  586 => 168,  581 => 167,  578 => 166,  575 => 165,  566 => 164,  557 => 163,  548 => 162,  546 => 161,  543 => 160,  540 => 159,  538 => 158,  530 => 156,  528 => 155,  519 => 154,  516 => 153,  514 => 152,  510 => 150,  498 => 149,  487 => 148,  482 => 147,  479 => 146,  463 => 143,  460 => 142,  458 => 141,  455 => 140,  454 => 139,  443 => 135,  439 => 133,  438 => 132,  429 => 130,  421 => 129,  418 => 128,  417 => 127,  414 => 126,  406 => 125,  389 => 121,  386 => 120,  385 => 119,  378 => 118,  376 => 117,  374 => 116,  371 => 115,  366 => 114,  362 => 112,  361 => 111,  358 => 110,  346 => 109,  338 => 103,  337 => 102,  323 => 100,  316 => 96,  312 => 94,  311 => 93,  306 => 91,  303 => 90,  290 => 89,  282 => 86,  278 => 84,  270 => 82,  268 => 81,  265 => 80,  257 => 78,  255 => 77,  248 => 75,  242 => 74,  238 => 73,  232 => 72,  229 => 71,  212 => 56,  210 => 55,  200 => 47,  194 => 45,  192 => 44,  189 => 43,  186 => 41,  169 => 40,  154 => 39,  143 => 38,  132 => 37,  121 => 36,  110 => 35,  99 => 34,  97 => 33,  72 => 31,  68 => 30,  63 => 28,  58 => 26,  53 => 25,  48 => 23,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_header.html", "");
    }
}
