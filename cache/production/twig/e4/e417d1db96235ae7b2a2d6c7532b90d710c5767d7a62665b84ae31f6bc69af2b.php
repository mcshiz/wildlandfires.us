<?php

/* forms/form_maker.html */
class __TwigTemplate_b12250cb880b3c30b85e10950283f5b6038f9c80be8f0c6a8c19c92f8309d719 extends Twig_Template
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
        echo "<fieldset class=\"fields2\">
\t";
        // line 2
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_DETAILS");
        echo "
</fieldset>

<fieldset class=\"fields2\">
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "form_apptemplate", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["form_apptemplate"]) {
            // line 7
            echo "\t<dl>
\t\t<dt class=\"dt10\">
\t\t\t<label for=\"templatefield_";
            // line 9
            echo $this->getAttribute($context["form_apptemplate"], "NAME", array());
            echo "\">";
            echo $this->getAttribute($context["form_apptemplate"], "NAME", array());
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>";
            echo $this->getAttribute($context["form_apptemplate"], "MANDATORY", array());
            echo "
\t\t</dt>
\t\t<dd class=\"dd10\">";
            // line 11
            echo $this->getAttribute($context["form_apptemplate"], "TYPE", array());
            echo "</dd>
\t</dl>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_apptemplate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t<div class=\"div_1\">* ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MANDATORY");
        echo "</div>
</fieldset>

<fieldset class=\"submit-buttons\">
<p>
\t";
        // line 19
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORMS_MOD_SAMPLE");
        echo "
</p>
</fieldset>";
    }

    public function getTemplateName()
    {
        return "forms/form_maker.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  56 => 14,  47 => 11,  37 => 9,  33 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/form_maker.html", "");
    }
}
