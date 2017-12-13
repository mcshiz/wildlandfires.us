<?php

/* overall_footer.html */
class __TwigTemplate_418708894645e8c65dc662b1de1efc1b998fef46b400861e7810864b7b5ec309 extends Twig_Template
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
        echo "\t\t";
        // line 2
        echo "\t\t";
        // line 3
        echo "\t</div>
</div>

";
        // line 6
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 7
        echo "
<div class=\"inventea-footer-wrapper\">
\t<div id=\"page-footer\" class=\"inventea-footer\" role=\"contentinfo\">
\t\t<div class=\"inventea-widgets-wrapper\">
\t\t\t";
        // line 11
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 12
            echo "\t\t\t\t<div class=\"inventea-widget inventea-list-widget\">
\t\t\t\t\t<h4 class=\"inventea-widget-title\">";
            // line 13
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
            echo "</h4>

\t\t\t\t\t<ul class=\"inventea-widget-links\">
\t\t\t\t\t\t";
            // line 16
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                echo ($context["U_FEED"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\">";
                echo ($context["SITENAME"] ?? null);
                echo "</a></li>";
            }
            // line 17
            echo "\t\t\t\t\t\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                echo ($context["U_FEED"] ?? null);
                echo "?mode=news\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_NEWS");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_NEWS");
                echo "</a></li>";
            }
            // line 18
            echo "\t\t\t\t\t\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                echo ($context["U_FEED"] ?? null);
                echo "?mode=forums\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t\t\t\t\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                echo ($context["U_FEED"] ?? null);
                echo "?mode=topics\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_NEW");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_NEW");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t\t\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                echo ($context["U_FEED"] ?? null);
                echo "?mode=topics_active\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_ACTIVE");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_ACTIVE");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t\t\t\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                echo ($context["U_FEED"] ?? null);
                echo "?f=";
                echo ($context["S_FORUM_ID"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "</a></li>";
            }
            // line 22
            echo "\t\t\t\t\t\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-rss fa-fw\"></i> <a href=\"";
                echo ($context["U_FEED"] ?? null);
                echo "?f=";
                echo ($context["S_FORUM_ID"] ?? null);
                echo "&amp;t=";
                echo ($context["S_TOPIC_ID"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "</a></li>";
            }
            // line 23
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t";
        }
        // line 26
        echo "
\t\t\t<div class=\"inventea-widget inventea-list-widget\">
\t\t\t\t<h4 class=\"inventea-widget-title\">";
        // line 28
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_PAGE");
        echo "</h4>

\t\t\t\t<ul class=\"inventea-widget-links\">
\t\t\t\t\t";
        // line 31
        if ((($context["U_WATCH_FORUM_LINK"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-star fa-fw\"></i> <a href=\"";
            echo ($context["U_WATCH_FORUM_LINK"] ?? null);
            echo "\" title=\"";
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-text=\"";
            echo ($context["S_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\" data-toggle-url=\"";
            echo ($context["U_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\">";
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "</a></li>";
        }
        // line 32
        echo "\t\t\t\t\t";
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-search fa-fw\"></i> <a href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "</a></li>";
        }
        // line 33
        echo "\t\t\t\t\t";
        if (($context["S_REGISTERED_USER"] ?? null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-user fa-fw\"></i> <a href=\"";
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "</a></li>";
        }
        // line 34
        echo "\t\t\t\t\t";
        if (($context["U_MCP"] ?? null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-tachometer fa-fw\"></i> <a href=\"";
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo "</a></li>";
        }
        // line 35
        echo "\t\t\t\t\t";
        if (($context["U_ACP"] ?? null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-cog fa-fw\"></i> <a href=\"";
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "</a></li>";
        }
        // line 36
        echo "\t\t\t\t\t";
        if (($context["U_CONTACT_US"] ?? null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-envelope fa-fw\"></i> <a href=\"";
            echo ($context["U_CONTACT_US"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 37
        echo "\t\t\t\t\t";
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"fa fa-trash fa-fw\"></i> <a href=\"";
            echo ($context["U_DELETE_COOKIES"] ?? null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_COOKIES");
            echo "</a></li>";
        }
        // line 38
        echo "\t\t\t\t\t<li class=\"inventea-widget-links-item\"><i class=\"fa fa-clock-o fa-fw\"></i> ";
        echo ($context["S_TIMEZONE"] ?? null);
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<!--
\t\t\tShort description about your website or project. If you don't like to display
\t\t\tthis widget, just remove the whole <div> (lines 46-63) or comment it.
\t\t\tFeel free to modify the social buttons below. For more icons visit:
\t\t\thttp://fortawesome.github.io/Font-Awesome/icons/#brand
\t\t\t-->
\t\t\t<div class=\"inventea-widget inventea-text-widget\">
\t\t\t\t<h4 class=\"inventea-widget-title\">About us</h4>

\t\t\t\t<p>Wildlandfires.us is a forum built by firefighters for firefighters. We encourage everyone to use this site to post information about recent wildfires.
\t\t\t\t\tThis forum is a work in progress so if you would like to see something added or changed please send us a message and we will be happy to take action.
\t\t\t\t\t<br /<
\t\t\t\t\tPlease keep your posts clean and friendly.
\t\t\t\t</p>
\t\t\t\t<!-- 12/05/17 BJM Turned off social icons -->
\t\t\t\t<ul class=\"inventea-social-icons\">
\t\t\t\t\t<li class=\"inventea-social-icons-item\"><a href=\"https://www.facebook.com/search/top/?q=national%20fires%20r.%20o.%20c.\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t<!--<li class=\"inventea-social-icons-item\"><a href=\"https://plus.google.com/+INVENTEA\"><i class=\"fa fa-google-plus\"></i></a></li>-->
\t\t\t\t\t<!--<li class=\"inventea-social-icons-item\"><a href=\"https://twitter.com/inventea\"><i class=\"fa fa-twitter\"></i></a></li>-->
\t\t\t\t\t<!--<li class=\"inventea-social-icons-item\"><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>-->
\t\t\t\t\t<!--<li class=\"inventea-social-icons-item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>-->
\t\t\t\t\t<!--<li class=\"inventea-social-icons-item\"><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>-->
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"inventea-breadcrumbs-container\">
\t\t\t<ul class=\"linklist inventea-breadcrumbs\">
\t\t\t\t";
        // line 70
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 71
        echo "\t\t\t\t";
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_pages', '__main__'));
        $this->env->loadTemplate('@phpbb_pages/event/overall_header_breadcrumbs_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 72
        echo "\t\t\t\t<li class=\"small-icon icon-home inventea-breadcrumbs\" data-skip-responsive=\"true\">
\t\t\t\t\t";
        // line 73
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
        // line 74
        echo "\t\t\t\t\t";
        // line 75
        echo "\t\t\t\t\t<span class=\"crumb\"";
        echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
        echo "><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span></a></span>
\t\t\t\t\t";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 77
            echo "\t\t\t\t\t\t";
            // line 78
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
            // line 79
            // line 80
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t\t\t\t";
        // line 82
        echo "\t\t\t\t</li>
\t\t\t\t";
        // line 83
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_pages', '__main__'));
        $this->env->loadTemplate('@phpbb_pages/event/overall_header_breadcrumbs_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 84
        echo "\t\t\t</ul>
\t\t</div>

\t\t<footer class=\"inventea-credits\" role=\"contentinfo\">
\t\t\t";
        // line 88
        // line 89
        echo "\t\t\t";
        echo ($context["CREDIT_LINE"] ?? null);
        echo "<br />
\t\t\tStyle we_clearblue created by <a href=\"https://inventea.com\" title=\"phpBB styles, HTML5 &amp; CSS3 templates\">INVENTEA</a>
\t\t\t";
        // line 91
        if (($context["TRANSLATION_INFO"] ?? null)) {
            echo "<br />";
            echo ($context["TRANSLATION_INFO"] ?? null);
        }
        // line 92
        echo "\t\t\t";
        // line 93
        echo "\t\t\t";
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            echo "<br />";
            echo ($context["DEBUG_OUTPUT"] ?? null);
        }
        // line 94
        echo "\t\t</footer>
\t</div>
</div>

<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 98
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t<div id=\"darken\">&nbsp;</div>
</div>

<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 102
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t<a href=\"#\" class=\"alert_close\"></a>
\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
</div>
<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t<a href=\"#\" class=\"alert_close\"></a>
\t<div class=\"alert_text\"></div>
</div>

</div>

<script type=\"text/javascript\" src=\"";
        // line 113
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 114
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 115
        echo "<script type=\"text/javascript\" src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 116
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('6');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 117
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('6');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 118
        echo "
";
        // line 119
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_formcreator', '__main__'));
        $this->env->loadTemplate('@dmzx_formcreator/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 120
        echo "
";
        // line 121
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 121)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 122
        echo $this->getAttribute(($context["definition"] ?? null), "SCRIPTS", array());
        echo "

";
        // line 124
        // line 125
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 125,  489 => 124,  484 => 122,  470 => 121,  467 => 120,  458 => 119,  455 => 118,  444 => 117,  433 => 116,  426 => 115,  418 => 114,  414 => 113,  398 => 102,  383 => 98,  377 => 94,  371 => 93,  369 => 92,  364 => 91,  358 => 89,  357 => 88,  351 => 84,  346 => 83,  343 => 82,  341 => 81,  335 => 80,  334 => 79,  321 => 78,  319 => 77,  315 => 76,  306 => 75,  304 => 74,  292 => 73,  289 => 72,  283 => 71,  280 => 70,  244 => 38,  235 => 37,  226 => 36,  215 => 35,  204 => 34,  193 => 33,  182 => 32,  168 => 31,  162 => 28,  158 => 26,  153 => 23,  132 => 22,  113 => 21,  100 => 20,  87 => 19,  74 => 18,  61 => 17,  49 => 16,  43 => 13,  40 => 12,  38 => 11,  32 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_footer.html", "");
    }
}
