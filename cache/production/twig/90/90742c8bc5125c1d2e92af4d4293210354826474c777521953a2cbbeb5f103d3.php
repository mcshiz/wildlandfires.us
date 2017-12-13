<?php

/* @dmzx_formcreator/event/posting_editor_buttons_before.html */
class __TwigTemplate_0b191b0c74bfa5cf451674e2acd738f08d88929478e3004514988deaad60e372 extends Twig_Template
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
        if ((($context["MODE"] ?? null) == "post")) {
            // line 2
            echo "<!--<button type=\"button\" class=\"button\" accesskey=\"f\" name=\"useform\" onclick=\"toggle_forms()\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPEN_FORM_EXPLAIN");
            echo "\" />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPEN_FORM");
            echo "</button>-->
";
        } elseif ((        // line 3
($context["MODE"] ?? null) == "edit")) {
            // line 4
            echo "<!-- may add edit in form option later -->
";
        }
    }

    public function getTemplateName()
    {
        return "@dmzx_formcreator/event/posting_editor_buttons_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@dmzx_formcreator/event/posting_editor_buttons_before.html", "");
    }
}
