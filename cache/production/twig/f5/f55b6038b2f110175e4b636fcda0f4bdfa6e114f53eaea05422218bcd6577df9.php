<?php

/* @phpbb_boardannouncements/event/overall_header_content_before.html */
class __TwigTemplate_c7ef9589b81c681c2b9cb2b36a122c0b717d46f7c46ca85be9d83dd2f8e8dbe6 extends Twig_Template
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
        if (($context["S_BOARD_ANNOUNCEMENT"] ?? null)) {
            // line 2
            echo "\t";
            $asset_file = "@phpbb_boardannouncements/js/boardannouncements.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('6');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 3
            echo "\t<div id=\"phpbb_announcement\"";
            if (($context["BOARD_ANNOUNCEMENT_BGCOLOR"] ?? null)) {
                echo " style=\"background-color:#";
                echo ($context["BOARD_ANNOUNCEMENT_BGCOLOR"] ?? null);
                echo "\"";
            }
            echo ">
\t\t";
            // line 4
            if (($context["S_BOARD_ANNOUNCEMENT_DISMISS"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_BOARD_ANNOUNCEMENT_CLOSE"] ?? null);
                echo "\" data-ajax=\"close_announcement\" data-overlay=\"false\" class=\"close clearfix\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_ANNOUNCEMENT_CLOSE");
                echo "\"></a>";
            }
            // line 5
            echo "\t\t<div>";
            echo ($context["BOARD_ANNOUNCEMENT"] ?? null);
            echo "</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_boardannouncements/event/overall_header_content_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  42 => 4,  33 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@phpbb_boardannouncements/event/overall_header_content_before.html", "");
    }
}
