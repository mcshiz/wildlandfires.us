<?php

/* acp_form_maker.html */
class __TwigTemplate_5cdc401f8468d9270fdb4e89a06130459a08fe4a46356f381e2e753f171d0839 extends Twig_Template
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
        $asset_file = "form_mod.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('6');
        }
        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);        // line 2
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_form_maker.html", 2)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 3
        $asset_file = "jquery-2.1.3.min.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('6');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 4
        $asset_file = "form_mod.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('6');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 5
        echo "
<div id=\"dvLoading\"></div>
<a name=\"maincontent\"></a>

<h1>";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FORM_MAKER");
        echo "&nbsp;";
        echo ($context["FORM_MAKER_VERS"] ?? null);
        echo "</h1>

<p id=\"info2\" title=\"";
        // line 11
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HOW_TO_MORE");
        echo "\" onclick=\"ShowHide('info1');ShowHide('info2');\" style=\"cursor:pointer;\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FORM_MAKER_EXPLAIN");
        echo " <img id=\"info\" alt=\"\" /></p>

<fieldset id=\"info1\" style=\"display:none; border-radius: 5px; margin-top: 8px; width: 90%;\">
\t<p>";
        // line 14
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HOW_TO");
        echo "</p>
\t<hr />
\t<p style=\"cursor:pointer; float:right; margin-top: -35px;\" onclick=\"ShowHide('info1');ShowHide('info2');\">";
        // line 16
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HOW_TO_HIDE");
        echo "</p>
\t<p>";
        // line 17
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FORM_MAKER_EXPLAIN_2");
        echo "</p>
</fieldset>

<p>";
        // line 20
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FORM_MOD_NOTE");
        echo "</p>

<form method=\"post\" action=\"";
        // line 22
        echo ($context["F_ADD_CONFIG"] ?? null);
        echo "\" id=\"acp_apply\">

<fieldset>
\t<legend>";
        // line 25
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FORM_CURRENT");
        echo "</legend>
\t<dl>
\t\t<dt class=\"dt100\"><label>";
        // line 27
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_MANAGE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_MANAGE_EXPLAIN");
        echo "</dt>
\t</dl>
\t<table cellspacing=\"1\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"th_current\"> ";
        // line 32
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CURRENT_FORM");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo " &nbsp; &nbsp;
\t\t\t\t\t<select name=\"form_id\" class=\"input\" style=\"font-size: 11px\" onchange=\"update_form();\">
\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "forms", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
            // line 35
            echo "\t\t\t\t\t\t<option\tname=\"form_id\" ";
            echo $this->getAttribute($context["forms"], "SELECT", array());
            echo " value=\"";
            echo $this->getAttribute($context["forms"], "FORUM_ID", array());
            echo "\">(";
            echo $this->getAttribute($context["forms"], "FORUM_ID", array());
            echo ") ";
            echo $this->getAttribute($context["forms"], "FORUM_NAME", array());
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t\t</select>
\t\t\t\t</th>
\t\t\t</tr>
\t\t</thead>
\t</table>
\t<table cellspacing=\"1\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"th_action\">";
        // line 45
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTION");
        echo "</th>
\t\t\t\t<th class=\"th_ndx\">";
        // line 46
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NDX");
        echo "</th>
\t\t\t\t<th class=\"th_type\">";
        // line 47
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_ELEMENT_TYPE");
        echo "</th>
\t\t\t\t<th class=\"th_mand\" title=\"";
        // line 48
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MANDATORY");
        echo "\">&#8730;</th>
\t\t\t\t<th class=\"th_mand\" title=\"";
        // line 49
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORMAT_BUTTONS");
        echo "\">Format Buttons</th>
\t\t\t\t<th class=\"th_name\">";
        // line 50
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_ELEMENT_NAME");
        echo "</th>
\t\t\t\t<th class=\"th_hint\">";
        // line 51
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_ELEMENT_HINT");
        echo "</th>
\t\t\t\t<th class=\"th_option\">";
        // line 52
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_ELEMENT_OPTIONS");
        echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr><td></td></tr><!-- in order to validate I need this code -->
\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "form_template", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["form_template"]) {
            // line 58
            echo "\t\t\t\t";
            if (($this->getAttribute(($context["ranks_row"] ?? null), "S_ROW_COUNT", array()) % 2 == 0)) {
                // line 59
                echo "\t\t\t<tr class=\"row1\">
\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t<tr class=\"row2\">
\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t<td class=\"th_action\" style=\"padding: 1px;\">
\t\t\t\t\t<span style=\"padding: 3px;\">
\t\t\t\t\t\t";
            // line 65
            if ((($this->getAttribute($context["form_template"], "NDX_ORDER", array()) <= 1) &&  !($context["PREVIOUS_PAGE"] ?? null))) {
                // line 66
                echo "\t\t\t\t\t\t\t";
                echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 68
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["form_template"], "U_MOVE_UP", array());
                echo "\">";
                echo ($context["ICON_MOVE_UP"] ?? null);
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 70
            echo "
\t\t\t\t\t\t";
            // line 71
            if (($this->getAttribute($context["form_template"], "S_LAST_ROW", array()) &&  !($context["NEXT_PAGE"] ?? null))) {
                // line 72
                echo "\t\t\t\t\t\t\t";
                echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 74
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["form_template"], "U_MOVE_DOWN", array());
                echo "\">";
                echo ($context["ICON_MOVE_DOWN"] ?? null);
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 76
            echo "
\t\t\t\t\t\t<a href=\"";
            // line 77
            echo $this->getAttribute($context["form_template"], "U_DELETE", array());
            echo "\">";
            echo ($context["ICON_DELETE"] ?? null);
            echo "</a>
\t\t\t\t\t</span>
\t\t\t\t</td>
\t\t\t\t<td class=\"th_com\" title=\"";
            // line 80
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NDX_ORDER");
            echo "\">
\t\t\t\t\t<input style=\" text-align:right;\" size=\"2\" maxlength=\"3\" type=\"text\" name=\"q_ndx_order[";
            // line 81
            echo $this->getAttribute($context["form_template"], "ID", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["form_template"], "NDX_ORDER", array());
            echo "\" />
\t\t\t\t</td>
\t\t\t\t<td class=\"td_132\">
\t\t\t\t\t<select name=\"q_type[";
            // line 84
            echo $this->getAttribute($context["form_template"], "ID", array());
            echo "]\" class=\"input\" style=\"font-size: 11px\" ";
            echo $this->getAttribute($context["form_template"], "DISABLED", array());
            echo ">
\t\t\t\t\t\t";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["form_template"], "template_type", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["template_type"]) {
                // line 86
                echo "\t\t\t\t\t\t<option\tvalue=\"";
                echo $this->getAttribute($context["template_type"], "TYPE", array());
                echo "\"";
                echo $this->getAttribute($context["template_type"], "SELECTED", array());
                echo ">";
                echo $this->getAttribute($context["template_type"], "TYPE", array());
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t\t<td class=\"td_20\" title=\"";
            // line 90
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MANDATORY");
            echo "\">
\t\t\t\t\t<input style=\"cursor:pointer\" type=\"checkbox\" name=\"q_mandatory[";
            // line 91
            echo $this->getAttribute($context["form_template"], "ID", array());
            echo "]\" value=\"1\" ";
            echo $this->getAttribute($context["form_template"], "DISABLED", array());
            echo " ";
            echo $this->getAttribute($context["form_template"], "CHECKED", array());
            echo " />
\t\t\t\t</td>
\t\t\t\t<td class=\"td_20\" title=\"";
            // line 93
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORMAT_BUTTONS");
            echo "\">
\t\t\t\t\t<input style=\"cursor:pointer\" type=\"checkbox\" name=\"q_format_buttons[";
            // line 94
            echo $this->getAttribute($context["form_template"], "ID", array());
            echo "]\" value=\"1\" ";
            echo $this->getAttribute($context["form_template"], "DISABLED", array());
            echo " ";
            echo $this->getAttribute($context["form_template"], "FORMAT_BUTTONS_CHECKED", array());
            echo " />
\t\t\t\t</td>
\t\t\t\t<td class=\"td_02\"><input style=\"width:97%\" type=\"text\" name=\"q_name[";
            // line 96
            echo $this->getAttribute($context["form_template"], "ID", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["form_template"], "NAME", array());
            echo "\" ";
            echo $this->getAttribute($context["form_template"], "DISABLED", array());
            echo " /></td>
\t\t\t\t<td class=\"td_02\"><input style=\"width:97%\" type=\"text\" name=\"q_hint[";
            // line 97
            echo $this->getAttribute($context["form_template"], "ID", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["form_template"], "HINT", array());
            echo "\"\t";
            echo $this->getAttribute($context["form_template"], "DISABLED", array());
            echo " /></td>
\t\t\t\t<td class=\"td_02\"><input style=\"width:99%\" type=\"text\" name=\"q_options[";
            // line 98
            echo $this->getAttribute($context["form_template"], "ID", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["form_template"], "OPTIONS", array());
            echo "\" ";
            echo $this->getAttribute($context["form_template"], "DISABLED", array());
            echo " /></td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t</tbody>
\t</table>

\t";
        // line 104
        if ((($context["ELEMENTS"] ?? null) != "0")) {
            // line 105
            echo "\t<div class=\"div_0\">
\t\t<input id=\"show2\" style=\"display:inline; font-size:10px;\" onclick=\"ShowHide('preview');ShowHide('show2');ShowHide('hide2');\" type=\"button\" value=\"";
            // line 106
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SHOW_PREVIEW");
            echo "\" class=\"button1\" />
\t\t<input id=\"hide2\" style=\"display:none;\tfont-size:10px;\" onclick=\"ShowHide('preview');ShowHide('hide2');ShowHide('show2');\" type=\"button\" value=\"";
            // line 107
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_PREVIEW");
            echo "\" class=\"button1\" />
\t</div>
\t";
        }
        // line 110
        echo "
\t<p class=\"quick\"><input type=\"submit\" name=\"update\" id=\"update_button\" value=\"";
        // line 111
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UPDATE");
        echo "\" class=\"button1\" /></p>

\t";
        // line 113
        if ((($context["ELEMENTS"] ?? null) != "0")) {
            // line 114
            echo "\t<div id=\"preview\" style=\"display:none; width:80%; margin-left: auto; margin-right:auto;\">
\t\t";
            // line 115
            $location = "forms/form_maker.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forms/form_maker.html", "acp_form_maker.html", 115)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 116
            echo "\t</div>
\t";
        }
        // line 118
        echo "
</fieldset>

";
        // line 121
        if ((($context["ELEMENTS"] ?? null) == "0")) {
            // line 122
            echo "<fieldset>
\t";
            // line 123
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_NO_FORM");
            echo "
</fieldset>
";
        }
        // line 126
        echo "
<fieldset>
<legend>";
        // line 128
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_ADD_ITEM");
        echo "</legend>
\t<table cellspacing=\"1\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"th_type2\">";
        // line 132
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_ELEMENT_TYPE");
        echo "</th>
\t\t\t\t<th class=\"th_mand\" title=\"";
        // line 133
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MANDATORY");
        echo "\">&#8730;</th>
\t\t\t\t<th class=\"th_mand\" title=\"";
        // line 134
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORMAT_BUTTONS");
        echo "\">Format Buttons</th>
\t\t\t\t<th class=\"th_type3\">";
        // line 135
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_ELEMENT_NAME");
        echo "</th>
\t\t\t\t<th class=\"th_type3\">";
        // line 136
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_ELEMENT_HINT");
        echo "</th>
\t\t\t\t<th class=\"th_type4\">";
        // line 137
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_ELEMENT_OPTIONS");
        echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr class=\"row1\">
\t\t\t\t<td class=\"td_0\">
\t\t\t\t\t<select name=\"add_type\" class=\"input\" id=\"add_type\">
\t\t\t\t\t\t<option value=\"text\">";
        // line 144
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_INPUTBOX");
        echo "</option>
\t\t\t\t\t\t<option value=\"textbox\">";
        // line 145
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_TXTBOX");
        echo "</option>
\t\t\t\t\t\t<option value=\"selectbox\">";
        // line 146
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_SELECTBOX");
        echo "</option>
\t\t\t\t\t\t<option value=\"radiobuttons\">";
        // line 147
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_RADIOBOX");
        echo "</option>
\t\t\t\t\t\t<option value=\"checkbox\">";
        // line 148
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_CHECKBOX");
        echo "</option>
\t\t\t\t\t\t<option value=\"email\">";
        // line 149
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_EMAILBOX");
        echo "</option>
\t\t\t\t\t\t<option value=\"password\">";
        // line 150
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_PASSWORDBOX");
        echo "</option>
\t\t\t\t\t\t<option value=\"url\">";
        // line 151
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_URLBOX");
        echo "</option>
\t\t\t\t\t\t<option value=\"file\">";
        // line 152
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_ATTACH");
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t\t<td class=\"td_20\" title=\"";
        // line 155
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MANDATORY");
        echo "\">
\t\t\t\t\t<input style=\"cursor: pointer;\" type=\"checkbox\" name=\"mandatory\" value=\"true\" />
\t\t\t\t</td>
\t\t\t\t<td class=\"td_20\" title=\"";
        // line 158
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORMAT_BUTTONS");
        echo "\">
\t\t\t\t\t<input style=\"cursor: pointer;\" type=\"checkbox\" name=\"format_buttons\" value=\"true\" />
\t\t\t\t</td>
\t\t\t\t<td class=\"td_pad\"><input style=\"width:97%\" type=\"text\" name=\"name\" value=\"";
        // line 161
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_ELEMENT_NAME");
        echo "\" onclick=\"this.value ='';\" onblur=\"if(this.value == '') { this.value = '";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_ELEMENT_NAME");
        echo "' };\" /></td>
\t\t\t\t<td class=\"td_pad\"><input style=\"width:97%\" type=\"text\" name=\"hint\" value=\"";
        // line 162
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_ELEMENT_HINT");
        echo "\" onclick=\"this.value ='';\" onblur=\"if(this.value == '') { this.value = '";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_ELEMENT_HINT");
        echo "' };\" /></td>
\t\t\t\t<td class=\"td_pad\"><input style=\"width:99%\" type=\"text\" name=\"options\" value=\"\" /></td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<div id=\"info0\" style=\"padding-top: 10px; margin-bottom: -23px; display: none;\">
\t\t<pre>";
        // line 169
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORM_NEW_ITEM_EXPLAIN_2");
        echo "</pre>
\t\t<input style=\"font-size:10px;\" onclick=\"ShowHide('info0');ShowHide('show0');\" type=\"button\" value=\"";
        // line 170
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_FORM_INFO");
        echo "\" class=\"button1\" />
\t</div>
\t<div id=\"show0\" style=\"display: inline;\">
\t\t<input style=\"font-size:10px;\" onclick=\"ShowHide('info0');ShowHide('show0');\" type=\"button\" value=\"";
        // line 173
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SHOW_FORM_INFO");
        echo "\" class=\"button1\" />
\t</div>

\t<p class=\"quick\"><input type=\"submit\" name=\"add\" value=\"";
        // line 176
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD");
        echo "\" class=\"button1\" /></p>
\t";
        // line 177
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>

</form>

";
        // line 182
        echo ($context["REPORT"] ?? null);
        echo "

";
        // line 184
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_form_maker.html", 184)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_form_maker.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  564 => 184,  559 => 182,  551 => 177,  547 => 176,  541 => 173,  535 => 170,  531 => 169,  519 => 162,  513 => 161,  507 => 158,  501 => 155,  495 => 152,  491 => 151,  487 => 150,  483 => 149,  479 => 148,  475 => 147,  471 => 146,  467 => 145,  463 => 144,  453 => 137,  449 => 136,  445 => 135,  441 => 134,  437 => 133,  433 => 132,  426 => 128,  422 => 126,  416 => 123,  413 => 122,  411 => 121,  406 => 118,  402 => 116,  390 => 115,  387 => 114,  385 => 113,  380 => 111,  377 => 110,  371 => 107,  367 => 106,  364 => 105,  362 => 104,  357 => 101,  344 => 98,  336 => 97,  328 => 96,  319 => 94,  315 => 93,  306 => 91,  302 => 90,  298 => 88,  285 => 86,  281 => 85,  275 => 84,  267 => 81,  263 => 80,  255 => 77,  252 => 76,  244 => 74,  238 => 72,  236 => 71,  233 => 70,  225 => 68,  219 => 66,  217 => 65,  213 => 63,  209 => 61,  205 => 59,  202 => 58,  198 => 57,  190 => 52,  186 => 51,  182 => 50,  178 => 49,  174 => 48,  170 => 47,  166 => 46,  162 => 45,  152 => 37,  137 => 35,  133 => 34,  127 => 32,  116 => 27,  111 => 25,  105 => 22,  100 => 20,  94 => 17,  90 => 16,  85 => 14,  77 => 11,  70 => 9,  64 => 5,  53 => 4,  42 => 3,  30 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "acp_form_maker.html", "");
    }
}
