<?php

/* board_announcements.html */
class __TwigTemplate_342e48ddc8c2a09e7f444360b67ad6355bf50d1c37c1da399a7e758570eeb6d4 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "board_announcements.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<script>
\tvar form_name = 'acp_board_announcements';
\tvar text_name = 'board_announcements_text';
\tvar load_draft = false;
\tvar upload = false;
\tvar imageTag = false;
</script>

<a id=\"maincontent\"></a>

<h1>";
        // line 13
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_ANNOUNCEMENTS_SETTINGS");
        echo "</h1>

<p>";
        // line 15
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_ANNOUNCEMENTS_SETTINGS_EXPLAIN");
        echo "</p>

";
        // line 17
        if (($context["ERRORS"] ?? null)) {
            // line 18
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 19
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 20
            echo ($context["ERRORS"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 23
        echo "
<form id=\"acp_board_announcements\" method=\"post\" action=\"";
        // line 24
        echo ($context["U_ACTION"] ?? null);
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 26
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GENERAL_OPTIONS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"board_announcements_enable\">";
        // line 28
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_ANNOUNCEMENTS_ENABLE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"board_announcements_enable\" name=\"board_announcements_enable\" value=\"1\"";
        // line 30
        if (($context["BOARD_ANNOUNCEMENTS_ENABLED"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"board_announcements_enable\" value=\"0\"";
        // line 31
        if ( !($context["BOARD_ANNOUNCEMENTS_ENABLED"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"board_announcements_dismiss\">";
        // line 35
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_ANNOUNCEMENTS_DISMISS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"board_announcements_dismiss\" name=\"board_announcements_dismiss\" value=\"1\"";
        // line 37
        if (($context["BOARD_ANNOUNCEMENTS_DISMISS"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"board_announcements_dismiss\" value=\"0\"";
        // line 38
        if ( !($context["BOARD_ANNOUNCEMENTS_DISMISS"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"board_announcements_users\">";
        // line 42
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_ANNOUNCEMENTS_USERS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<select name=\"board_announcements_users\">";
        // line 44
        echo ($context["S_BOARD_ANNOUNCEMENTS_USERS"] ?? null);
        echo "</select>
\t\t\t</dd>
\t\t</dl>
\t</fieldset>

\t";
        // line 49
        if (($context["BOARD_ANNOUNCEMENTS_PREVIEW"] ?? null)) {
            // line 50
            echo "\t\t<fieldset>
\t\t\t<legend>";
            // line 51
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_ANNOUNCEMENTS_PREVIEW");
            echo "</legend>
\t\t\t<div style=\"padding:10px; font-size:1.0em; overflow: auto; ";
            // line 52
            if (($context["BOARD_ANNOUNCEMENTS_BGCOLOR"] ?? null)) {
                echo "background-color:#";
                echo ($context["BOARD_ANNOUNCEMENTS_BGCOLOR"] ?? null);
            }
            echo "\">";
            echo ($context["BOARD_ANNOUNCEMENTS_PREVIEW"] ?? null);
            echo "</div>
\t\t</fieldset>
\t";
        }
        // line 55
        echo "
\t<fieldset>
\t\t<legend>";
        // line 57
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_ANNOUNCEMENTS_TEXT");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"board_announcements_expiry\">";
        // line 59
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_ANNOUNCEMENTS_EXPIRY");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_ANNOUNCEMENTS_EXPIRY_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<input name=\"board_announcements_expiry\" type=\"text\" id=\"board_announcements_expiry\" value=\"";
        // line 61
        echo ($context["BOARD_ANNOUNCEMENTS_EXPIRY"] ?? null);
        echo "\" size=\"20\" maxlength=\"20\" /> <samp>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_ANNOUNCEMENTS_EXPIRY_FORMAT");
        echo "</samp>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"board_announcements_bgcolor\">";
        // line 65
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_ANNOUNCEMENTS_BGCOLOR");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_ANNOUNCEMENTS_BGCOLOR_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<input name=\"board_announcements_bgcolor\" type=\"text\" id=\"board_announcements_bgcolor\" value=\"";
        // line 67
        echo ($context["BOARD_ANNOUNCEMENTS_BGCOLOR"] ?? null);
        echo "\" size=\"6\" maxlength=\"6\" ";
        if (($context["BOARD_ANNOUNCEMENTS_BGCOLOR"] ?? null)) {
            echo "style=\"border-right:20px solid #";
            echo ($context["BOARD_ANNOUNCEMENTS_BGCOLOR"] ?? null);
            echo "\"";
        }
        echo " />
\t\t\t</dd>
\t\t</dl>

\t\t<br />

\t\t";
        // line 73
        $location = "acp_posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("acp_posting_buttons.html", "board_announcements.html", 73)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 74
        echo "
\t\t<dl class=\"responsive-columns\">
\t\t\t<dt style=\"width: 90px;\" id=\"color_palette_placeholder\" data-orientation=\"v\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dt>
\t\t\t<dd style=\"margin-";
        // line 77
        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
        echo ": 90px;\">
\t\t\t\t<textarea name=\"board_announcements_text\" rows=\"10\" cols=\"60\" style=\"width: 95%;\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" data-bbcode=\"true\">";
        // line 78
        echo ($context["BOARD_ANNOUNCEMENTS_TEXT"] ?? null);
        echo "</textarea>
\t\t\t</dd>
\t\t\t<dd style=\"margin-";
        // line 80
        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
        echo ": 90px; margin-top: 5px;\">
\t\t\t\t";
        // line 81
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            // line 82
            echo "\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_bbcode\"";
            if (($context["S_BBCODE_DISABLE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_BBCODE");
            echo "</label>
\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t";
        if (($context["S_SMILIES_ALLOWED"] ?? null)) {
            // line 85
            echo "\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_smilies\"";
            if (($context["S_SMILIES_DISABLE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_SMILIES");
            echo "</label>
\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t";
        if (($context["S_LINKS_ALLOWED"] ?? null)) {
            // line 88
            echo "\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_magic_url\"";
            if (($context["S_MAGIC_URL_DISABLE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_MAGIC_URL");
            echo "</label>
\t\t\t\t";
        }
        // line 90
        echo "\t\t\t</dd>
\t\t\t<dd style=\"margin-";
        // line 91
        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
        echo ": 90px; margin-top: 10px;\"><strong>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo " </strong>";
        echo ($context["BBCODE_STATUS"] ?? null);
        echo " :: ";
        echo ($context["IMG_STATUS"] ?? null);
        echo " :: ";
        echo ($context["FLASH_STATUS"] ?? null);
        echo " :: ";
        echo ($context["URL_STATUS"] ?? null);
        echo " :: ";
        echo ($context["SMILIES_STATUS"] ?? null);
        echo "</dd>
\t\t</dl>
\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 96
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"submit\" name=\"preview\" value=\"";
        // line 97
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIEW");
        echo "\" />
\t\t";
        // line 98
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
</form>

";
        // line 102
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "board_announcements.html", 102)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "board_announcements.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 102,  315 => 98,  311 => 97,  307 => 96,  286 => 91,  283 => 90,  273 => 88,  270 => 87,  260 => 85,  257 => 84,  247 => 82,  245 => 81,  241 => 80,  236 => 78,  232 => 77,  227 => 74,  215 => 73,  200 => 67,  192 => 65,  183 => 61,  175 => 59,  170 => 57,  166 => 55,  155 => 52,  151 => 51,  148 => 50,  146 => 49,  138 => 44,  132 => 42,  121 => 38,  113 => 37,  107 => 35,  96 => 31,  88 => 30,  82 => 28,  77 => 26,  72 => 24,  69 => 23,  63 => 20,  59 => 19,  56 => 18,  54 => 17,  49 => 15,  44 => 13,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "board_announcements.html", "");
    }
}
