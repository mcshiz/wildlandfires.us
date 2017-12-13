<?php

/* posting_editor.html */
class __TwigTemplate_27425094feb82fbb8d8bf11f28490c0a0fc31635aa953ef0d8384bf1d43642de extends Twig_Template
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
        echo "<fieldset class=\"fields1\">
\t";
        // line 2
        if (($context["ERROR"] ?? null)) {
            echo "<p class=\"error\">";
            echo ($context["ERROR"] ?? null);
            echo "</p>";
        }
        // line 3
        echo "
\t";
        // line 4
        if ((($context["S_SHOW_TOPIC_ICONS"] ?? null) || ($context["S_SHOW_PM_ICONS"] ?? null))) {
            // line 5
            echo "\t<dl>
\t\t<dt><label for=\"icon\">";
            // line 6
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"icon\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\" /> ";
            // line 8
            if (($context["S_SHOW_TOPIC_ICONS"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPIC_ICON");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_PM_ICON");
            }
            echo "</label>
\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topic_icon", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                echo "<label for=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" ";
                echo $this->getAttribute($context["topic_icon"], "S_ICON_CHECKED", array());
                echo " tabindex=\"1\" /><img src=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ALT", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ALT", array());
                echo "\" /></label> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t</dd>
\t</dl>
\t";
        }
        // line 13
        echo "
\t";
        // line 14
        if (( !($context["S_PRIVMSGS"] ?? null) && ($context["S_DISPLAY_USERNAME"] ?? null))) {
            // line 15
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"username\">";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
            // line 17
            echo ($context["USERNAME"] ?? null);
            echo "\" class=\"inputbox autowidth\" /></dd>
\t</dl>
\t";
        }
        // line 20
        echo "
\t";
        // line 21
        // line 22
        echo "
\t";
        // line 23
        if (((($context["S_POST_ACTION"] ?? null) || ($context["S_PRIVMSGS"] ?? null)) || ($context["S_EDIT_DRAFT"] ?? null))) {
            // line 24
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"subject\">";
            // line 25
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t";
            // line 27
            // line 28
            echo "\t\t\t<input type=\"text\" name=\"subject\" id=\"subject\" size=\"45\" maxlength=\"";
            if (($context["S_NEW_MESSAGE"] ?? null)) {
                echo "120";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo ($context["SUBJECT"] ?? null);
            echo ($context["DRAFT_SUBJECT"] ?? null);
            echo "\" class=\"inputbox autowidth\" />
\t\t\t";
            // line 29
            // line 30
            echo "\t\t</dd>
\t</dl>
\t";
            // line 32
            if ((($context["CAPTCHA_TEMPLATE"] ?? null) && ($context["S_CONFIRM_CODE"] ?? null))) {
                // line 33
                echo "\t\t";
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 34
                echo "\t\t";
                $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "posting_editor.html", 34)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 35
                echo "\t";
            }
            // line 36
            echo "\t";
        }
        // line 37
        echo "
\t";
        // line 38
        // line 39
        echo "
\t";
        // line 40
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "posting_editor.html", 40)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 41
        echo "
\t<div id=\"smiley-box\" class=\"smiley-box\">
\t\t";
        // line 43
        // line 44
        echo "\t\t";
        if ((($context["S_SMILIES_ALLOWED"] ?? null) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "smiley", array())))) {
            // line 45
            echo "\t\t\t<strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SMILIES");
            echo "</strong><br />
\t\t\t";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "smiley", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 47
                echo "\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
                echo $this->getAttribute($context["smiley"], "A_SMILEY_CODE", array());
                echo "', true); return false;\"><img src=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_CODE", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_DESC", array());
                echo "\" /></a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t";
        }
        // line 50
        echo "\t\t";
        if ((($context["S_SHOW_SMILEY_LINK"] ?? null) && ($context["S_SMILIES_ALLOWED"] ?? null))) {
            // line 51
            echo "\t\t\t<br /><a href=\"";
            echo ($context["U_MORE_SMILIES"] ?? null);
            echo "\" onclick=\"popup(this.href, 750, 350, '_phpbbsmilies'); return false;\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MORE_SMILIES");
            echo "</a>
\t\t";
        }
        // line 53
        echo "\t\t";
        // line 54
        echo "\t\t";
        if (($context["BBCODE_STATUS"] ?? null)) {
            // line 55
            echo "\t\t<div class=\"bbcode-status\">
\t\t\t";
            // line 56
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "smiley", array()))) {
                echo "<hr />";
            }
            // line 57
            echo "\t\t\t";
            echo ($context["BBCODE_STATUS"] ?? null);
            echo "<br />
\t\t\t";
            // line 58
            if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                // line 59
                echo "\t\t\t\t";
                echo ($context["IMG_STATUS"] ?? null);
                echo "<br />
\t\t\t\t";
                // line 60
                echo ($context["FLASH_STATUS"] ?? null);
                echo "<br />
\t\t\t\t";
                // line 61
                echo ($context["URL_STATUS"] ?? null);
                echo "<br />
\t\t\t";
            }
            // line 63
            echo "\t\t\t";
            echo ($context["SMILIES_STATUS"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 66
        echo "\t\t";
        // line 67
        echo "\t\t";
        if ((($context["S_EDIT_DRAFT"] ?? null) || ($context["S_DISPLAY_REVIEW"] ?? null))) {
            // line 68
            echo "\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<hr />";
            }
            // line 69
            echo "\t\t\t";
            if (($context["S_EDIT_DRAFT"] ?? null)) {
                echo "<strong><a href=\"";
                echo ($context["S_UCP_ACTION"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_DRAFTS");
                echo "</a></strong>";
            }
            // line 70
            echo "\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<strong><a href=\"#review\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REVIEW");
                echo "</a></strong>";
            }
            // line 71
            echo "\t\t";
        }
        // line 72
        echo "\t</div>

\t";
        // line 74
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_formcreator', '__main__'));
        $this->env->loadTemplate('@dmzx_formcreator/event/posting_editor_message_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 75
        echo "
\t<div id=\"message-box\" class=\"message-box\">
\t\t<textarea ";
        // line 77
        if (((($context["S_UCP_ACTION"] ?? null) &&  !($context["S_PRIVMSGS"] ?? null)) &&  !($context["S_EDIT_DRAFT"] ?? null))) {
            echo "name=\"signature\" id=\"signature\" style=\"height: 9em;\"";
        } else {
            echo "name=\"message\" id=\"message\"";
        }
        echo " rows=\"15\" cols=\"76\" tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" class=\"inputbox\">";
        echo ($context["MESSAGE"] ?? null);
        echo ($context["DRAFT_MESSAGE"] ?? null);
        echo ($context["SIGNATURE"] ?? null);
        echo "</textarea>
\t</div>

\t";
        // line 80
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_formcreator', '__main__'));
        $this->env->loadTemplate('@dmzx_formcreator/event/posting_editor_message_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 81
        echo "\t</fieldset>

";
        // line 83
        if (($this->getAttribute(($context["definition"] ?? null), "EXTRA_POSTING_OPTIONS", array()) == 1)) {
            // line 84
            echo "
\t";
            // line 85
            if ( !($context["S_SHOW_DRAFTS"] ?? null)) {
                // line 86
                echo "\t\t</div>
\t</div>
\t";
            }
            // line 89
            echo "
\t";
            // line 90
            if (( !($context["S_SHOW_DRAFTS"] ?? null) && ( !$this->getAttribute(($context["definition"] ?? null), "SIG_EDIT", array()) == 1))) {
                // line 91
                echo "\t<div class=\"panel bg2\">
\t\t<div class=\"inner\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
                // line 94
                echo ($context["S_HIDDEN_ADDRESS_FIELD"] ?? null);
                echo "
\t\t\t";
                // line 95
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t";
                // line 96
                // line 97
                echo "\t\t\t";
                if (($context["S_HAS_DRAFTS"] ?? null)) {
                    echo "<input type=\"submit\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOAD_DRAFT");
                    echo "\" class=\"button2\" onclick=\"load_draft = true;\" />&nbsp; ";
                }
                // line 98
                echo "\t\t\t";
                if (($context["S_SAVE_ALLOWED"] ?? null)) {
                    echo "<input type=\"submit\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SAVE_DRAFT");
                    echo "\" class=\"button2\" />&nbsp; ";
                }
                // line 99
                echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"preview\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIEW");
                echo "\" class=\"button1\"";
                if ( !($context["S_PRIVMSGS"] ?? null)) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " />&nbsp;
\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                // line 100
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" class=\"button1 default-submit-action\" />&nbsp;

\t\t</fieldset>

\t\t</div>
\t</div>
\t";
            }
            // line 107
            echo "
\t";
            // line 108
            if ((( !($context["S_PRIVMSGS"] ?? null) &&  !($context["S_SHOW_DRAFTS"] ?? null)) && ( !$this->getAttribute(($context["definition"] ?? null), "SIG_EDIT", array()) == 1))) {
                // line 109
                echo "\t\t<div id=\"tabs\" class=\"tabs sub-panels\" data-show-panel=\"";
                if (($context["SHOW_PANEL"] ?? null)) {
                    echo ($context["SHOW_PANEL"] ?? null);
                } else {
                    echo "options-panel";
                }
                echo "\" role=\"tablist\">
\t\t\t<ul>
\t\t\t\t<li id=\"options-panel-tab\" class=\"tab activetab\"><a href=\"#tabs\" data-subpanel=\"options-panel\" role=\"tab\" aria-controls=\"options-panel\"><span>";
                // line 111
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
                echo "</span></a></li>
\t\t\t\t";
                // line 112
                if (($context["S_SHOW_ATTACH_BOX"] ?? null)) {
                    // line 113
                    echo "\t\t\t\t\t<li id=\"attach-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"attach-panel\" role=\"tab\" aria-controls=\"attach-panel\">
\t\t\t\t\t\t\t";
                    // line 115
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                    echo " <strong id=\"file-total-progress\" class=\"file-total-progress\"><strong id=\"file-total-progress-bar\" class=\"file-total-progress-bar\"></strong></strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 119
                echo "\t\t\t\t";
                if ((($context["S_SHOW_POLL_BOX"] ?? null) || ($context["S_POLL_DELETE"] ?? null))) {
                    // line 120
                    echo "\t\t\t\t\t<li id=\"poll-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"poll-panel\" role=\"tab\" aria-controls=\"poll-panel\">";
                    // line 121
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_POLL");
                    echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t";
                // line 125
                echo "\t\t\t</ul>
\t\t</div>
\t";
            }
            // line 128
            echo "
\t";
            // line 129
            if (( !($context["S_SHOW_DRAFTS"] ?? null) && ( !$this->getAttribute(($context["definition"] ?? null), "SIG_EDIT", array()) == 1))) {
                // line 130
                echo "\t<div class=\"panel bg3\" id=\"options-panel\">
\t\t<div class=\"inner\">

\t\t<fieldset class=\"fields1\">
\t\t\t";
                // line 134
                // line 135
                echo "\t\t\t";
                if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                    // line 136
                    echo "\t\t\t\t<div><label for=\"disable_bbcode\"><input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
                    echo ($context["S_BBCODE_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_BBCODE");
                    echo "</label></div>
\t\t\t";
                }
                // line 138
                echo "\t\t\t";
                if (($context["S_SMILIES_ALLOWED"] ?? null)) {
                    // line 139
                    echo "\t\t\t\t<div><label for=\"disable_smilies\"><input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
                    echo ($context["S_SMILIES_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_SMILIES");
                    echo "</label></div>
\t\t\t";
                }
                // line 141
                echo "\t\t\t";
                if (($context["S_LINKS_ALLOWED"] ?? null)) {
                    // line 142
                    echo "\t\t\t\t<div><label for=\"disable_magic_url\"><input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
                    echo ($context["S_MAGIC_URL_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_MAGIC_URL");
                    echo "</label></div>
\t\t\t";
                }
                // line 144
                echo "\t\t\t";
                if (($context["S_SIG_ALLOWED"] ?? null)) {
                    // line 145
                    echo "\t\t\t\t<div><label for=\"attach_sig\"><input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
                    echo ($context["S_SIGNATURE_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACH_SIG");
                    echo "</label></div>
\t\t\t";
                }
                // line 147
                echo "\t\t\t";
                if (($context["S_NOTIFY_ALLOWED"] ?? null)) {
                    // line 148
                    echo "\t\t\t\t<div><label for=\"notify\"><input type=\"checkbox\" name=\"notify\" id=\"notify\"";
                    echo ($context["S_NOTIFY_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_REPLY");
                    echo "</label></div>
\t\t\t";
                }
                // line 150
                echo "\t\t\t";
                if (($context["S_LOCK_TOPIC_ALLOWED"] ?? null)) {
                    // line 151
                    echo "\t\t\t\t<div><label for=\"lock_topic\"><input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
                    echo ($context["S_LOCK_TOPIC_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_TOPIC");
                    echo "</label></div>
\t\t\t";
                }
                // line 153
                echo "\t\t\t";
                if (($context["S_LOCK_POST_ALLOWED"] ?? null)) {
                    // line 154
                    echo "\t\t\t\t<div><label for=\"lock_post\"><input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
                    echo ($context["S_LOCK_POST_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_POST");
                    echo " [";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_POST_EXPLAIN");
                    echo "]</label></div>
\t\t\t";
                }
                // line 156
                echo "
\t\t\t";
                // line 157
                if (((($context["S_TYPE_TOGGLE"] ?? null) || ($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null)) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
                    // line 158
                    echo "\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 160
                echo "
\t\t\t";
                // line 161
                if (($context["S_TYPE_TOGGLE"] ?? null)) {
                    // line 162
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_type-0\">";
                    // line 163
                    if (($context["S_EDIT_POST"] ?? null)) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_TOPIC_TO");
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC_AS");
                    }
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd>";
                    // line 164
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topic_type", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                        echo "<label for=\"topic_type-";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\"><input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\"";
                        echo $this->getAttribute($context["topic_type"], "S_CHECKED", array());
                        echo " />";
                        echo $this->getAttribute($context["topic_type"], "L_TOPIC_TYPE", array());
                        echo "</label> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 167
                echo "
\t\t\t";
                // line 168
                if ((($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
                    // line 169
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_time_limit\">";
                    // line 170
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STICK_TOPIC_FOR");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><label for=\"topic_time_limit\"><input type=\"number\" min=\"0\" max=\"999\" name=\"topic_time_limit\" id=\"topic_time_limit\" value=\"";
                    // line 171
                    echo ($context["TOPIC_TIME_LIMIT"] ?? null);
                    echo "\" class=\"inputbox autowidth\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DAYS");
                    echo "</label></dd>
\t\t\t\t<dd>";
                    // line 172
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STICK_TOPIC_FOR_EXPLAIN");
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 175
                echo "
\t\t\t";
                // line 176
                if ((($context["S_SOFTDELETE_ALLOWED"] ?? null) || ($context["S_DELETE_ALLOWED"] ?? null))) {
                    // line 177
                    echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete\">";
                    // line 179
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t<dd><label for=\"delete\"><input type=\"checkbox\" name=\"delete\" id=\"delete\" ";
                    // line 180
                    echo ($context["S_SOFTDELETE_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST_WARN");
                    echo "</label></dd>
\t\t\t\t\t";
                    // line 181
                    if ((($context["S_DELETE_ALLOWED"] ?? null) && ($context["S_SOFTDELETE_ALLOWED"] ?? null))) {
                        // line 182
                        echo "\t\t\t\t\t\t<dd><label for=\"delete_permanent\"><input type=\"checkbox\" name=\"delete_permanent\" id=\"delete_permanent\" /> ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST_PERMANENTLY");
                        echo "</label></dd>
\t\t\t\t\t";
                    }
                    // line 184
                    echo "\t\t\t\t</dl>
\t\t\t";
                }
                // line 186
                echo "
\t\t\t";
                // line 187
                if (($context["S_EDIT_REASON"] ?? null)) {
                    // line 188
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"edit_reason\">";
                    // line 189
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
                    // line 190
                    echo ($context["EDIT_REASON"] ?? null);
                    echo "\" class=\"inputbox\" /></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 193
                echo "\t\t</fieldset>
\t\t";
            }
            // line 195
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  671 => 195,  667 => 193,  661 => 190,  656 => 189,  653 => 188,  651 => 187,  648 => 186,  644 => 184,  638 => 182,  636 => 181,  630 => 180,  625 => 179,  621 => 177,  619 => 176,  616 => 175,  610 => 172,  604 => 171,  599 => 170,  596 => 169,  594 => 168,  591 => 167,  568 => 164,  559 => 163,  556 => 162,  554 => 161,  551 => 160,  547 => 158,  545 => 157,  542 => 156,  532 => 154,  529 => 153,  521 => 151,  518 => 150,  510 => 148,  507 => 147,  499 => 145,  496 => 144,  488 => 142,  485 => 141,  477 => 139,  474 => 138,  466 => 136,  463 => 135,  462 => 134,  456 => 130,  454 => 129,  451 => 128,  446 => 125,  444 => 124,  438 => 121,  435 => 120,  432 => 119,  425 => 115,  421 => 113,  419 => 112,  415 => 111,  405 => 109,  403 => 108,  400 => 107,  390 => 100,  381 => 99,  374 => 98,  367 => 97,  366 => 96,  362 => 95,  358 => 94,  353 => 91,  351 => 90,  348 => 89,  343 => 86,  341 => 85,  338 => 84,  336 => 83,  332 => 81,  327 => 80,  313 => 77,  309 => 75,  304 => 74,  300 => 72,  297 => 71,  290 => 70,  281 => 69,  276 => 68,  273 => 67,  271 => 66,  264 => 63,  259 => 61,  255 => 60,  250 => 59,  248 => 58,  243 => 57,  239 => 56,  236 => 55,  233 => 54,  231 => 53,  223 => 51,  220 => 50,  217 => 49,  198 => 47,  194 => 46,  189 => 45,  186 => 44,  185 => 43,  181 => 41,  169 => 40,  166 => 39,  165 => 38,  162 => 37,  159 => 36,  156 => 35,  143 => 34,  139 => 33,  137 => 32,  133 => 30,  132 => 29,  120 => 28,  119 => 27,  113 => 25,  110 => 24,  108 => 23,  105 => 22,  104 => 21,  101 => 20,  95 => 17,  90 => 16,  87 => 15,  85 => 14,  82 => 13,  77 => 10,  50 => 9,  42 => 8,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posting_editor.html", "");
    }
}