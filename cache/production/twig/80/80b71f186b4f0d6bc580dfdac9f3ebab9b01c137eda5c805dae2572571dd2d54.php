<?php

/* navbar_responsive_header.html */
class __TwigTemplate_950e155a80f03c201b4c1488219982d79e0cbcaad3d8301d011274ecd46d8a1a extends Twig_Template
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
        echo "<div class=\"dropdown-container hidden inventea-mobile-dropdown-menu\">
    <a href=\"#\" class=\"dropdown-trigger inventea-toggle\"><i class=\"fa fa-bars\"></i></a>
    <div class=\"dropdown hidden\">
        <div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
        <ul class=\"dropdown-contents\" role=\"menubar\">
            ";
        // line 6
        if (($context["U_SITE_HOME"] ?? null)) {
            echo "<li><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-home\"></i> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</a></li>";
        }
        // line 7
        echo "            <li><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" role=\"menuitem\"><i class=\"fa fa-fw ";
        if (($context["U_SITE_HOME"] ?? null)) {
            echo "fa-globe";
        } else {
            echo "fa-home";
        }
        echo "\"></i> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</a></li>

            ";
        // line 9
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_pages', '__main__'));
        $this->env->loadTemplate('@phpbb_pages/event/overall_header_navigation_prepend.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 10
        echo "
            <li><a href=\"";
        // line 11
        echo ($context["U_FAQ"] ?? null);
        echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-info-circle\"></i> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ");
        echo "</a></li>

            ";
        // line 13
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_pages', '__main__'));
        $this->env->loadTemplate('@phpbb_pages/event/navbar_header_quick_links_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 14
        echo "
            ";
        // line 15
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 16
            echo "                <li><a href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-search\"></i> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</a></li>
                ";
            // line 17
            if (($context["S_REGISTERED_USER"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-comments-o\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_SELF");
                echo "</a></li>";
            }
            // line 18
            echo "                ";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-comment\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                echo "</a></li>";
            }
            // line 19
            echo "                ";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-comments\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNREAD");
                echo "</a></li>";
            }
            // line 20
            echo "                <li><a href=\"";
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-comment-o\"></i> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
                <li><a href=\"";
            // line 21
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-check-circle-o\"></i> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
            ";
        }
        // line 23
        echo "
            ";
        // line 24
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_pages', '__main__'));
        $this->env->loadTemplate('@phpbb_pages/event/navbar_header_quick_links_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 25
        echo "
            ";
        // line 26
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 27
            echo "                ";
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-users\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 28
            echo "                ";
            if (($context["U_TEAM"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-shield\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 29
            echo "            ";
        }
        // line 30
        echo "
            ";
        // line 31
        if (($context["U_MCP"] ?? null)) {
            echo "<li><a href=\"";
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP_SHORT");
            echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-tachometer\"></i> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo "</a></li>";
        }
        // line 32
        echo "            ";
        if (($context["U_ACP"] ?? null)) {
            echo "<li><a href=\"";
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SHORT");
            echo "\" role=\"menuitem\"><i class=\"fa fa-fw fa-cog\"></i> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "</a></li>";
        }
        // line 33
        echo "
            ";
        // line 34
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_pages', '__main__'));
        $this->env->loadTemplate('@phpbb_pages/event/overall_header_navigation_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 35
        echo "        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_responsive_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 35,  181 => 34,  178 => 33,  167 => 32,  157 => 31,  154 => 30,  151 => 29,  142 => 28,  133 => 27,  131 => 26,  128 => 25,  123 => 24,  120 => 23,  113 => 21,  106 => 20,  97 => 19,  88 => 18,  80 => 17,  73 => 16,  71 => 15,  68 => 14,  63 => 13,  56 => 11,  53 => 10,  48 => 9,  34 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar_responsive_header.html", "");
    }
}
