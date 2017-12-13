<?php

/* @dmzx_formcreator/event/posting_editor_buttons_after.html */
class __TwigTemplate_b6f1f7dee121da9af4639a9a61643d58f989732ffc151e87371c10dfd30c3f86 extends Twig_Template
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
        if ((($context["MODE"] ?? null) == "edit")) {
            echo "<div class=\"form_help\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_HELP_1");
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "@dmzx_formcreator/event/posting_editor_buttons_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@dmzx_formcreator/event/posting_editor_buttons_after.html", "");
    }
}
