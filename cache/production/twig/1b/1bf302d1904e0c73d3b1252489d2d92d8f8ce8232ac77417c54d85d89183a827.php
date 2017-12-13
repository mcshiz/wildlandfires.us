<?php

/* @phpbb_pages/event/navbar_header_quick_links_before.html */
class __TwigTemplate_1c14634216e38a54fc5e3f30ed743d2bea77eee3dd0a3427b2e45f2763b6c588 extends Twig_Template
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
        if (($context["S_NAVBAR_HEADER_QUICK_LINKS_BEFORE"] ?? null)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["navbar_header_quick_links_before_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 3
                echo "\t\t<li ";
                if ( !$this->getAttribute($context["link"], "ICON_FONT", array())) {
                    echo "class=\"small-icon icon-pages icon-page-";
                    echo $this->getAttribute($context["link"], "LINK_ROUTE", array());
                    echo "\"";
                    if ($this->getAttribute($context["link"], "ICON_LINK", array())) {
                        echo " style=\"background-image: url('";
                        echo ($context["T_THEME_PATH"] ?? null);
                        echo "/images/";
                        echo $this->getAttribute($context["link"], "ICON_LINK", array());
                        echo "');\"";
                    }
                }
                echo ">
\t\t\t<a href=\"";
                // line 4
                echo $this->getAttribute($context["link"], "U_LINK_URL", array());
                echo "\" role=\"menuitem\">
\t\t\t\t";
                // line 5
                if ($this->getAttribute($context["link"], "ICON_FONT", array())) {
                    echo "<i class=\"icon fa-";
                    echo $this->getAttribute($context["link"], "ICON_FONT", array());
                    echo " fa-fw\" aria-hidden=\"true\"></i>";
                }
                echo "<span>";
                echo $this->getAttribute($context["link"], "LINK_TITLE", array());
                echo "</span>
\t\t\t</a>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_pages/event/navbar_header_quick_links_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@phpbb_pages/event/navbar_header_quick_links_before.html", "");
    }
}
