<?php

/* @phpbb_mediaembed/event/posting_editor_buttons_custom_tags_before.html */
class __TwigTemplate_6d5751eef1202343ea9b1f090ae5757b35c424c655adb99db7a2d2c641ece85a extends Twig_Template
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
        if (($context["S_BBCODE_MEDIA"] ?? null)) {
            // line 2
            echo "<button type=\"button\" class=\"button button-icon-only bbcode-media\" accesskey=\"m\" name=\"addmedia\" value=\"Media\" onclick=\"bbfontstyle('[media]', '[/media]');\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_MEDIA_HELP");
            echo "\">
\t<i class=\"icon fa-video-camera fa-fw\" aria-hidden=\"true\"></i>
</button>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_mediaembed/event/posting_editor_buttons_custom_tags_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@phpbb_mediaembed/event/posting_editor_buttons_custom_tags_before.html", "");
    }
}
