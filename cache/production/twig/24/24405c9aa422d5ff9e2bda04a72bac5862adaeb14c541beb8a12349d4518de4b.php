<?php

/* @dmzx_formcreator/forms/form_maker.html */
class __TwigTemplate_5e0bafb693466ce38b7c857a51bbf63633e23c0f785b4cd931f8fef7c4538d49 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
// <![CDATA[

/* This is part of the form_maker mod for phpBB3 copyright phpbbireland.com 2012 */

function postform_check()
{
\tif (document.forms.postform.subject.value == '')
\t{
\t\talert('";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBJECT_REQUIRED"), "js");
        echo "');
\t\tdocument.forms.postform.subject.focus();
\t\treturn(false);
\t}
}

// ]]>
</script>

";
        // line 19
        if ((($context["MODE"] ?? null) == "post")) {
            // line 20
            echo "<div id=\"thisform\" style=\"display:none; width:auto; margin-left:auto; margin-right:auto;\" class=\"panels\">
\t<div class=\"inner\">
\t\t<div class=\"mand\"><span class=\"mandatory\">*</span> ";
            // line 22
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MANDATORY");
            echo "</div>
\t\t<fieldset class=\"fields2\">
\t\t\t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "form_apptemplate", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["form_apptemplate"]) {
                // line 25
                echo "\t\t\t<dl>
\t\t\t\t";
                // line 26
                echo $this->getAttribute($context["form_apptemplate"], "FORMAT_BUTTONS", array());
                echo "
\t\t\t\t<dt><label for=\"templatefield_";
                // line 27
                echo $this->getAttribute($context["form_apptemplate"], "NAME", array());
                echo "\">";
                echo $this->getAttribute($context["form_apptemplate"], "NAME", array());
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label>";
                echo $this->getAttribute($context["form_apptemplate"], "MANDATORY", array());
                echo "</dt>

\t\t\t\t<dd>";
                // line 29
                echo $this->getAttribute($context["form_apptemplate"], "TYPE", array());
                echo "</dd>
\t\t\t</dl>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_apptemplate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t</fieldset>
\t\t<div class=\"form_chk_msg\">";
            // line 33
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHECKBOX_MSG");
            echo "</div>
\t</div>
\t<div class=\"panels\">
\t\t<div class=\"inner\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
            // line 38
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t\t<input type=\"button\" class=\"button2\" accesskey=\"f\" name=\"useform\" value=\"";
            // line 39
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CLOSE_FORM");
            echo "\" style=\"font-weight:normal; width: 50px\" onclick=\"toggle_forms()\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CLOSE_FORM_EXPLAIN");
            echo "\" />
\t\t\t\t<input type=\"reset\" name=\"reset\" value=\"";
            // line 40
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" class=\"button2\" />
\t\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
            // line 41
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" class=\"button1 default-submit-action\" onclick=\"return postform_check();\" />
\t\t\t</fieldset>
\t\t</div>
\t</div>
</div>

<div id=\"lblValues\"></div>

<script type=\"text/javascript\">
// <![CDATA[
function toggle_validation()
{
\t/*
\tTurn off postform html5 validation so we can switch on/off for our new form...
\tOtherwise posting for new topics (in this forum) will only work if the new form is used...
\t*/

\tvar \$_hidden = 0;
\tvar \$_empty = 0;
\tvar myform = 'postform';

\t\$_hidden = is_hidden('thisform');

\tif (\$_hidden == 0)
\t{
\t\tdocument.forms.postform.noValidate=true;
\t}
\telse
\t{
\t\tdocument.forms.postform.noValidate=false;
\t}
}
// ]]>
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@dmzx_formcreator/forms/form_maker.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 41,  104 => 40,  98 => 39,  94 => 38,  86 => 33,  83 => 32,  74 => 29,  64 => 27,  60 => 26,  57 => 25,  53 => 24,  48 => 22,  44 => 20,  42 => 19,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@dmzx_formcreator/forms/form_maker.html", "");
    }
}
