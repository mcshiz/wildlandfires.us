<?php

/* navbar_header.html */
class __TwigTemplate_e14a10000897771cd83cbd076d08502a71f228e121dcc02ebda09f650a6ec87c extends Twig_Template
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
        echo "<nav role=\"navigation\">
\t<ul class=\"linklist bulletin inventea-forum-menu\" role=\"menubar\">
\t\t";
        // line 3
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_pages', '__main__'));
        $this->env->loadTemplate('@phpbb_pages/event/overall_header_navigation_prepend.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 4
        echo "
\t\t";
        // line 5
        if (($context["U_SITE_HOME"] ?? null)) {
            echo "<li data-skip-responsive=\"true\"><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</a></li>";
        }
        // line 6
        echo "\t\t<li data-skip-responsive=\"true\"><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "\" role=\"menuitem\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</a></li>
\t\t<li><a href=\"";
        // line 7
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ");
        echo "</a></li>
\t\t";
        // line 8
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            echo "<li data-skip-responsive=\"true\"><a href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</a></li>";
        }
        // line 9
        echo "
\t\t";
        // line 10
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 11
            echo "\t\t\t";
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 12
            echo "\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 13
            echo "\t\t";
        }
        // line 14
        echo "
\t\t";
        // line 15
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 16
            echo "\t\t\t<li data-skip-responsive=\"true\"><a href=\"";
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t<li data-skip-responsive=\"true\"><a href=\"";
            // line 17
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t";
        }
        // line 19
        echo "
\t\t";
        // line 20
        if (($context["U_MCP"] ?? null)) {
            echo "<li><a href=\"";
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP_SHORT");
            echo "</a></li>";
        }
        // line 21
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            echo "<li><a href=\"";
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SHORT");
            echo "</a></li>";
        }
        // line 22
        echo "
\t\t";
        // line 23
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_pages', '__main__'));
        $this->env->loadTemplate('@phpbb_pages/event/overall_header_navigation_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 24
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 24,  138 => 23,  135 => 22,  124 => 21,  114 => 20,  111 => 19,  104 => 17,  97 => 16,  95 => 15,  92 => 14,  89 => 13,  80 => 12,  71 => 11,  69 => 10,  66 => 9,  58 => 8,  50 => 7,  41 => 6,  31 => 5,  28 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar_header.html", "");
    }
}
