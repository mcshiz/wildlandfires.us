<?php

/* @dmzx_formcreator/event/posting_editor_message_after.html */
class __TwigTemplate_c4600a7ea236a77e12c8852ce787cba8b204052bf87f0284f459b28e7a90a8ba extends Twig_Template
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
        if ((( !($context["S_SHOW_DRAFTS"] ?? null) && ( !$this->getAttribute(($context["definition"] ?? null), "SIG_EDIT", array()) == 1)) && ($context["S_FORM_MAKER"] ?? null))) {
            // line 2
            echo "<div id=\"form_hide\" class=\"panels\">
\t<div class=\"inner\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
            // line 5
            if ((($context["MODE"] ?? null) == "post")) {
                // line 6
                echo "\t\t\t<input type=\"button\" class=\"button2\" accesskey=\"f\" name=\"useform\" onclick=\"toggle_forms()\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPEN_FORM_EXPLAIN");
                echo "\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPEN_FORM");
                echo "\"/>
\t\t\t";
            }
            // line 8
            echo "\t\t\t";
            echo ($context["S_HIDDEN_ADDRESS_FIELD"] ?? null);
            echo "
\t\t\t";
            // line 9
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t";
            // line 10
            // line 11
            echo "\t\t\t";
            if (($context["S_HAS_DRAFTS"] ?? null)) {
                echo "<input type=\"submit\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOAD_DRAFT");
                echo "\" class=\"button2\" onclick=\"load_draft = true;\" />&nbsp; ";
            }
            // line 12
            echo "\t\t\t";
            if (($context["S_SAVE_ALLOWED"] ?? null)) {
                echo "<input type=\"submit\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SAVE_DRAFT");
                echo "\" class=\"button2\" />&nbsp; ";
            }
            // line 13
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"preview\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIEW");
            echo "\" class=\"button1\"";
            if ( !($context["S_PRIVMSGS"] ?? null)) {
                echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
            }
            echo " />&nbsp;
\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
            // line 14
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" class=\"button1 default-submit-action\" />&nbsp;
\t\t</fieldset>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@dmzx_formcreator/event/posting_editor_message_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  60 => 13,  53 => 12,  46 => 11,  45 => 10,  41 => 9,  36 => 8,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@dmzx_formcreator/event/posting_editor_message_after.html", "");
    }
}
