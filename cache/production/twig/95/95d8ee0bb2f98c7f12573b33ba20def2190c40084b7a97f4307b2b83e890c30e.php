<?php

/* viewtopic_body.html */
class __TwigTemplate_8fc3d28d372b8b61e27c7624bffa01f0315b62419e293e429bc058792a500b4d extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"topic-title\">";
        // line 3
        echo "<a href=\"";
        echo ($context["U_VIEW_TOPIC"] ?? null);
        echo "\">";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 4
        // line 5
        echo "<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 6
        if (($context["FORUM_DESC"] ?? null)) {
            echo "<div style=\"display: none !important;\">";
            echo ($context["FORUM_DESC"] ?? null);
            echo "<br /></div>";
        }
        // line 7
        echo "
";
        // line 8
        if (($context["MODERATORS"] ?? null)) {
            // line 9
            echo "<p>
\t<strong>";
            // line 10
            if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
            }
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo ($context["MODERATORS"] ?? null);
            echo "
</p>
";
        }
        // line 13
        echo "
";
        // line 14
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 15
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 18
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 19
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 21
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 22
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 24
            echo "
\t\t</div>
\t</div>
";
        }
        // line 28
        echo "
<div class=\"action-bar top\">

\t<div class=\"buttons\">
\t\t";
        // line 32
        // line 33
        echo "
\t";
        // line 34
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 35
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button icon-button ";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo "locked-icon";
            } else {
                echo "reply-icon";
            }
            echo "\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 36
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_POST_REPLY");
            }
            // line 37
            echo "\t\t</a>
\t";
        }
        // line 39
        echo "
\t\t";
        // line 40
        // line 41
        echo "\t</div>

\t";
        // line 43
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 43)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 44
        echo "\t";
        // line 45
        echo "
\t";
        // line 46
        if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
            // line 47
            echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 48
            echo ($context["S_SEARCHBOX_ACTION"] ?? null);
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\"  type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 50
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
            // line 51
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</button>
\t\t\t\t<a href=\"";
            // line 52
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button icon-button search-adv-icon\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "</a>
\t\t\t\t";
            // line 53
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 58
        echo "
\t";
        // line 59
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 60
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 61
            if ((($context["U_VIEW_UNREAD_POST"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_VIEW_UNREAD_POST"] ?? null);
                echo "\" class=\"mark\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 62
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 63
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 63)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 64
                echo "\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 67
            echo "\t\t</div>
\t";
        }
        // line 69
        echo "\t";
        // line 70
        echo "</div>

";
        // line 72
        // line 73
        echo "
";
        // line 74
        if (($context["S_HAS_POLL"] ?? null)) {
            // line 75
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_POLL_ACTION"] ?? null);
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"poll-title\">";
            // line 81
            echo ($context["POLL_QUESTION"] ?? null);
            echo "</h2>
\t\t\t<p class=\"author\">";
            // line 82
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_LENGTH");
            if ((($context["S_CAN_VOTE"] ?? null) && ($context["L_POLL_LENGTH"] ?? null))) {
                echo "<br />";
            }
            if (($context["S_CAN_VOTE"] ?? null)) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t<fieldset class=\"polls\">
\t\t\t";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 86
                echo "\t\t\t\t";
                // line 87
                echo "\t\t\t\t<dl class=\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo "voted";
                }
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_MOST_VOTES", array())) {
                    echo " most-votes";
                }
                echo "\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-alt-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                echo "\" data-poll-option-id=\"";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                echo "\">
\t\t\t\t\t<dt>";
                // line 88
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<label for=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "</label>";
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                }
                echo "</dt>
\t\t\t\t\t";
                // line 89
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if (($context["S_IS_MULTI_CHOICE"] ?? null)) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 90
                echo "\t\t\t\t\t<dd class=\"resultbar";
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\"><div class=\"";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 20)) {
                    echo "pollbar1";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 40)) {
                    echo "pollbar2";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 60)) {
                    echo "pollbar3";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT_REL", array());
                echo ";\">";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array());
                echo "</div></dd>
\t\t\t\t\t<dd class=\"poll_option_percent";
                // line 91
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array()) == 0)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_VOTES");
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 93
                // line 94
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "
\t\t\t\t<dl class=\"poll_total_votes";
            // line 96
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">";
            // line 98
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_VOTES");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo ($context["TOTAL_VOTES"] ?? null);
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t";
            // line 101
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 102
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 104
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 107
            echo "
\t\t\t";
            // line 108
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                // line 109
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><a href=\"";
                // line 111
                echo ($context["U_VIEW_RESULTS"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 114
            echo "\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted hidden\">";
            // line 115
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t</div>

\t\t</div>
\t\t";
            // line 119
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t";
            // line 120
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t</div>

\t</form>
\t<hr />
";
        }
        // line 126
        echo "
";
        // line 127
        // line 128
        echo "
";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 130
            echo "\t";
            // line 131
            echo "\t";
            if ($this->getAttribute($context["postrow"], "S_FIRST_UNREAD", array())) {
                // line 132
                echo "\t\t<a id=\"unread\" class=\"anchor\"";
                if (($context["S_UNREAD_VIEW"] ?? null)) {
                    echo " data-url=\"";
                    echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                    echo "\"";
                }
                echo "></a>
\t";
            }
            // line 134
            echo "\t<div id=\"p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\" class=\"post has-profile ";
            if (($this->getAttribute($context["postrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", array())) {
                echo " unreadpost";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                echo " reported";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                echo " deleted";
            }
            if (($this->getAttribute($context["postrow"], "S_ONLINE", array()) &&  !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", array()))) {
                echo " online";
            }
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo " warned";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t<dl class=\"postprofile\" id=\"profile";
            // line 137
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t<dt class=\"";
            // line 138
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo " ";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                echo "has-avatar";
            } else {
                echo "no-avatar";
            }
            echo "\">
\t\t\t\t";
            // line 139
            if (($this->getAttribute($context["postrow"], "S_ONLINE", array()) &&  !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", array()))) {
                // line 140
                echo "\t\t\t\t\t<div class=\"inventea-online\"><i class=\"fa fa-power-off\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE");
                echo "</div>
\t\t\t\t";
            }
            // line 142
            echo "
\t\t\t\t<div class=\"avatar-container\">
\t\t\t\t\t";
            // line 144
            // line 145
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                // line 146
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    echo "\" class=\"avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    echo "</span>";
                }
                // line 147
                echo "\t\t\t\t\t";
            }
            // line 148
            echo "\t\t\t\t\t";
            // line 149
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 150
            // line 151
            echo "\t\t\t\t";
            if ( !$this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                echo "<strong>";
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                echo "</strong>";
            } else {
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            }
            // line 152
            echo "\t\t\t\t";
            // line 153
            echo "\t\t\t</dt>

\t\t\t";
            // line 155
            // line 156
            echo "\t\t\t";
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                echo "<dd class=\"profile-rank\">";
                echo $this->getAttribute($context["postrow"], "RANK_TITLE", array());
                if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) && $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                    echo "<br />";
                }
                echo $this->getAttribute($context["postrow"], "RANK_IMG", array());
                echo "</dd>";
            }
            // line 157
            echo "\t\t\t";
            // line 158
            echo "
\t\t";
            // line 159
            if (($this->getAttribute($context["postrow"], "POSTER_POSTS", array()) != "")) {
                echo "<dd class=\"profile-posts\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                if (($this->getAttribute($context["postrow"], "U_SEARCH", array()) !== "")) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_SEARCH", array());
                    echo "\">";
                }
                echo $this->getAttribute($context["postrow"], "POSTER_POSTS", array());
                if (($this->getAttribute($context["postrow"], "U_SEARCH", array()) !== "")) {
                    echo "</a>";
                }
                echo "</dd>";
            }
            // line 160
            echo "\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_JOINED", array())) {
                echo "<dd class=\"profile-joined\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "POSTER_JOINED", array());
                echo "</dd>";
            }
            // line 161
            echo "\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo "<dd class=\"profile-warnings\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNINGS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "POSTER_WARNINGS", array());
                echo "</dd>";
            }
            // line 162
            echo "
\t\t";
            // line 163
            if ($this->getAttribute($context["postrow"], "S_PROFILE_FIELD1", array())) {
                // line 164
                echo "\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dd><strong>";
                // line 165
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_NAME", array());
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_VALUE", array());
                echo "</dd>
\t\t";
            }
            // line 167
            echo "
\t\t";
            // line 168
            // line 169
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 170
                echo "\t\t\t";
                if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                    // line 171
                    echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", array());
                    echo "\"><strong>";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "</dd>
\t\t\t";
                }
                // line 173
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "\t\t";
            // line 175
            echo "
\t\t";
            // line 176
            // line 177
            echo "\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && twig_length_filter($this->env, $this->getAttribute($context["postrow"], "contact", array())))) {
                // line 178
                echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
                // line 179
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-left\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\"><span class=\"imageset icon_contact\" title=\"";
                // line 181
                echo $this->getAttribute($context["postrow"], "CONTACT_USER", array());
                echo "\">";
                echo $this->getAttribute($context["postrow"], "CONTACT_USER", array());
                echo "</span></a>
\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "contact", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t";
                    $context["REMAINDER"] = ($this->getAttribute($context["contact"], "S_ROW_COUNT", array()) % 4);
                    // line 187
                    echo "\t\t\t\t\t\t\t\t";
                    $value = ((($context["REMAINDER"] ?? null) == 3) || ($this->getAttribute($context["contact"], "S_LAST_ROW", array()) && ($this->getAttribute($context["contact"], "S_NUM_ROWS", array()) < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 188
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["REMAINDER"] ?? null) == 0)) {
                        // line 189
                        echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 191
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    if ($this->getAttribute($context["contact"], "U_CONTACT", array())) {
                        echo $this->getAttribute($context["contact"], "U_CONTACT", array());
                    } else {
                        echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["contact"], "NAME", array());
                    echo "\"";
                    if ($this->getAttribute(($context["definition"] ?? null), "S_LAST_CELL", array())) {
                        echo " class=\"last-cell\"";
                    }
                    if (($this->getAttribute($context["contact"], "ID", array()) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                    // line 192
                    echo $this->getAttribute($context["contact"], "ID", array());
                    echo "-icon\">";
                    echo $this->getAttribute($context["contact"], "NAME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    // line 194
                    if (((($context["REMAINDER"] ?? null) == 3) || $this->getAttribute($context["contact"], "S_LAST_ROW", array()))) {
                        // line 195
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 197
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 198
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
            }
            // line 203
            echo "\t\t";
            // line 204
            echo "
\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t";
            // line 208
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                // line 209
                echo "\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                    // line 210
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 211
                    echo $this->getAttribute($context["postrow"], "L_POST_DELETED_MESSAGE", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 212
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ($this->getAttribute(                // line 214
$context["postrow"], "S_IGNORE_POST", array())) {
                    // line 215
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 216
                    echo $this->getAttribute($context["postrow"], "L_IGNORE_POST", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 217
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 220
                echo "\t\t\t";
            }
            // line 221
            echo "\t\t\t<div id=\"post_content";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo " style=\"display: none;\"";
            }
            echo ">

\t\t\t";
            // line 223
            // line 224
            echo "\t\t\t<h3 ";
            if ($this->getAttribute($context["postrow"], "S_FIRST_ROW", array())) {
                echo "class=\"first\"";
            }
            echo ">";
            if ($this->getAttribute($context["postrow"], "POST_ICON_IMG", array())) {
                echo "<img src=\"";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_HEIGHT", array());
                echo "\" alt=\"\" /> ";
            }
            echo "<a href=\"#p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
            echo "</a></h3>

\t\t";
            // line 226
            $value = ((((($this->getAttribute($context["postrow"], "U_EDIT", array()) || $this->getAttribute($context["postrow"], "U_DELETE", array())) || $this->getAttribute($context["postrow"], "U_REPORT", array())) || $this->getAttribute($context["postrow"], "U_WARN", array())) || $this->getAttribute($context["postrow"], "U_INFO", array())) || $this->getAttribute($context["postrow"], "U_QUOTE", array()));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 227
            echo "\t\t";
            // line 228
            echo "\t\t";
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 229
                echo "\t\t\t";
                if ($this->getAttribute(($context["definition"] ?? null), "SHOW_POST_BUTTONS", array())) {
                    // line 230
                    echo "\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t";
                    // line 231
                    // line 232
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_EDIT", array())) {
                        // line 233
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 234
                        echo $this->getAttribute($context["postrow"], "U_EDIT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_POST");
                        echo "\" class=\"button icon-button edit-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_EDIT");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 237
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_DELETE", array())) {
                        // line 238
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 239
                        echo $this->getAttribute($context["postrow"], "U_DELETE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST");
                        echo "\" class=\"button icon-button delete-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 242
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_REPORT", array())) {
                        // line 243
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 244
                        echo $this->getAttribute($context["postrow"], "U_REPORT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_POST");
                        echo "\" class=\"button icon-button report-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_POST");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 247
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_WARN", array())) {
                        // line 248
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 249
                        echo $this->getAttribute($context["postrow"], "U_WARN", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARN_USER");
                        echo "\" class=\"button icon-button warn-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARN_USER");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 252
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_INFO", array())) {
                        // line 253
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 254
                        echo $this->getAttribute($context["postrow"], "U_INFO", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
                        echo "\" class=\"button icon-button info-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 257
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_QUOTE", array())) {
                        // line 258
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 259
                        echo $this->getAttribute($context["postrow"], "U_QUOTE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLY_WITH_QUOTE");
                        echo "\" class=\"button icon-button quote-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUOTE");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 262
                    echo "\t\t\t\t\t";
                    // line 263
                    echo "\t\t\t\t</ul>
\t\t\t";
                }
                // line 265
                echo "\t\t";
            }
            // line 266
            echo "\t\t";
            // line 267
            echo "
\t\t\t";
            // line 268
            // line 269
            echo "\t\t\t<p class=\"author\">";
            if (($context["S_IS_BOT"] ?? null)) {
                echo $this->getAttribute($context["postrow"], "MINI_POST_IMG", array());
            } else {
                echo "<a href=\"";
                echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                echo "\">";
                echo $this->getAttribute($context["postrow"], "MINI_POST_IMG", array());
                echo "</a>";
            }
            echo "<span class=\"responsive-hide\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            echo "</strong> &raquo; </span>";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo " </p>
\t\t\t";
            // line 270
            // line 271
            echo "
\t\t\t";
            // line 272
            if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array())) {
                // line 273
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<strong>";
                // line 275
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_UNAPPROVED_ACTION");
                echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                // line 276
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                // line 277
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPROVE");
                echo "\" name=\"action[approve]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 278
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t";
                // line 279
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            } elseif ($this->getAttribute(            // line 282
$context["postrow"], "S_POST_DELETED", array())) {
                // line 283
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<strong>";
                // line 285
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t";
                // line 286
                if ($this->getAttribute($context["postrow"], "S_DELETE_PERMANENT", array())) {
                    // line 287
                    echo "\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                    echo "\" name=\"action[delete]\" />
\t\t\t\t\t";
                }
                // line 289
                echo "\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 290
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t";
                // line 291
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            }
            // line 295
            echo "
\t\t\t";
            // line 296
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                // line 297
                echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<a href=\"";
                // line 298
                echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", array());
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t</p>
\t\t\t";
            }
            // line 301
            echo "
\t\t\t<div class=\"content\">";
            // line 302
            echo $this->getAttribute($context["postrow"], "MESSAGE", array());
            echo "</div>

\t\t\t";
            // line 304
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                // line 305
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                // line 307
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 309
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 310
                    echo "\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 312
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 314
            echo "
\t\t\t";
            // line 315
            // line 316
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "S_DISPLAY_NOTICE", array())) {
                echo "<div class=\"rules\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 317
            echo "\t\t\t";
            if (($this->getAttribute($context["postrow"], "DELETED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "DELETE_REASON", array()))) {
                // line 318
                echo "\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t";
                // line 319
                echo $this->getAttribute($context["postrow"], "DELETED_MESSAGE", array());
                echo "
\t\t\t\t\t";
                // line 320
                if ($this->getAttribute($context["postrow"], "DELETE_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "DELETE_REASON", array());
                    echo "</em>";
                }
                // line 321
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif (($this->getAttribute(            // line 322
$context["postrow"], "EDITED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "EDIT_REASON", array()))) {
                // line 323
                echo "\t\t\t\t<div class=\"notice\">
\t\t\t\t\t";
                // line 324
                echo $this->getAttribute($context["postrow"], "EDITED_MESSAGE", array());
                echo "
\t\t\t\t\t";
                // line 325
                if ($this->getAttribute($context["postrow"], "EDIT_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "EDIT_REASON", array());
                    echo "</em>";
                }
                // line 326
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 328
            echo "
\t\t\t";
            // line 329
            if ($this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array())) {
                echo "<div class=\"notice\"><br /><br />";
                echo $this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array());
                echo "</div>";
            }
            // line 330
            echo "\t\t\t";
            // line 331
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "SIGNATURE", array())) {
                echo "<div id=\"sig";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" class=\"signature\">";
                echo $this->getAttribute($context["postrow"], "SIGNATURE", array());
                echo "</div>";
            }
            // line 332
            echo "
\t\t\t";
            // line 333
            // line 334
            echo "\t\t\t</div>

\t\t</div>

\t\t";
            // line 338
            // line 339
            echo "\t\t<div class=\"back2top\">";
            echo "<a href=\"#top\" class=\"top\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
            echo "\"><i class=\"fa fa-rotate-270 fa-play-circle\"></i></a>";
            echo "</div>
\t\t";
            // line 340
            // line 341
            echo "
\t\t</div>
\t</div>

\t<hr class=\"divider\" />
\t";
            // line 346
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        echo "
";
        // line 349
        if (($context["S_QUICK_REPLY"] ?? null)) {
            // line 350
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 350)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 352
        echo "
";
        // line 353
        if (((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())))) {
            // line 354
            echo "\t<form id=\"viewtopic\" method=\"post\" action=\"";
            echo ($context["S_TOPIC_ACTION"] ?? null);
            echo "\">
\t<fieldset class=\"display-options\">
\t\t";
            // line 356
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 357
                echo "\t\t<label>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_POSTS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["S_SELECT_SORT_DAYS"] ?? null);
                echo "</label>
\t\t<label>";
                // line 358
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
                echo " ";
                echo ($context["S_SELECT_SORT_KEY"] ?? null);
                echo "</label> <label>";
                echo ($context["S_SELECT_SORT_DIR"] ?? null);
                echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 359
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
                echo "\" class=\"button2\" />
\t\t";
            }
            // line 361
            echo "\t</fieldset>
\t</form>
\t<hr />
";
        }
        // line 365
        echo "
";
        // line 366
        // line 367
        echo "<div class=\"action-bar bottom\">
\t<div class=\"buttons\">
\t\t";
        // line 369
        // line 370
        echo "
\t";
        // line 371
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 372
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button icon-button ";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo "locked-icon";
            } else {
                echo "reply-icon";
            }
            echo "\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 373
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_POST_REPLY");
            }
            // line 374
            echo "\t\t</a>
\t";
        }
        // line 376
        echo "
\t\t";
        // line 377
        // line 378
        echo "\t</div>

\t";
        // line 380
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 380)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 381
        echo "
\t";
        // line 382
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "quickmod", array()))) {
            // line 383
            echo "\t\t<div class=\"dropdown-container dropdown-container-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " dropdown-up dropdown-";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo " dropdown-button-control\" id=\"quickmod\">
\t\t\t<span title=\"";
            // line 384
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_MOD");
            echo "\" class=\"dropdown-trigger button icon-button modtools-icon dropdown-select\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_MOD");
            echo "</span>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 388
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "quickmod", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 389
                echo "\t\t\t\t\t";
                $value = twig_in_filter($this->getAttribute($context["quickmod"], "VALUE", array()), array(0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"));
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 390
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["quickmod"], "LINK", array());
                echo "\"";
                if ($this->getAttribute(($context["definition"] ?? null), "QUICKMOD_AJAX", array())) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo $this->getAttribute($context["quickmod"], "TITLE", array());
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 392
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 396
        echo "
\t";
        // line 397
        // line 398
        echo "
\t";
        // line 399
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 400
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 401
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 402
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 403
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 403)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 404
                echo "\t\t\t";
            } else {
                // line 405
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 407
            echo "\t\t</div>
\t";
        }
        // line 409
        echo "\t<div class=\"clear\"></div>
</div>

";
        // line 412
        // line 413
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 413)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 414
        echo "
";
        // line 415
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 416
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3>";
            // line 417
            if (($context["U_VIEWONLINE"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</a>";
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
            }
            echo "</h3>
\t\t<p>";
            // line 418
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 421
        echo "
";
        // line 422
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 422)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1510 => 422,  1507 => 421,  1501 => 418,  1489 => 417,  1486 => 416,  1484 => 415,  1481 => 414,  1469 => 413,  1468 => 412,  1463 => 409,  1459 => 407,  1453 => 405,  1450 => 404,  1437 => 403,  1435 => 402,  1431 => 401,  1428 => 400,  1426 => 399,  1423 => 398,  1422 => 397,  1419 => 396,  1413 => 392,  1398 => 390,  1394 => 389,  1390 => 388,  1381 => 384,  1374 => 383,  1372 => 382,  1369 => 381,  1357 => 380,  1353 => 378,  1352 => 377,  1349 => 376,  1345 => 374,  1339 => 373,  1322 => 372,  1320 => 371,  1317 => 370,  1316 => 369,  1312 => 367,  1311 => 366,  1308 => 365,  1302 => 361,  1297 => 359,  1289 => 358,  1281 => 357,  1279 => 356,  1273 => 354,  1271 => 353,  1268 => 352,  1254 => 350,  1252 => 349,  1249 => 348,  1244 => 346,  1237 => 341,  1236 => 340,  1229 => 339,  1228 => 338,  1222 => 334,  1221 => 333,  1218 => 332,  1209 => 331,  1207 => 330,  1201 => 329,  1198 => 328,  1194 => 326,  1185 => 325,  1181 => 324,  1178 => 323,  1176 => 322,  1173 => 321,  1164 => 320,  1160 => 319,  1157 => 318,  1154 => 317,  1147 => 316,  1146 => 315,  1143 => 314,  1139 => 312,  1130 => 310,  1126 => 309,  1121 => 307,  1117 => 305,  1115 => 304,  1110 => 302,  1107 => 301,  1099 => 298,  1096 => 297,  1094 => 296,  1091 => 295,  1084 => 291,  1080 => 290,  1075 => 289,  1069 => 287,  1067 => 286,  1063 => 285,  1057 => 283,  1055 => 282,  1049 => 279,  1045 => 278,  1041 => 277,  1037 => 276,  1033 => 275,  1027 => 273,  1025 => 272,  1022 => 271,  1021 => 270,  1002 => 269,  1001 => 268,  998 => 267,  996 => 266,  993 => 265,  989 => 263,  987 => 262,  977 => 259,  974 => 258,  971 => 257,  961 => 254,  958 => 253,  955 => 252,  945 => 249,  942 => 248,  939 => 247,  929 => 244,  926 => 243,  923 => 242,  913 => 239,  910 => 238,  907 => 237,  897 => 234,  894 => 233,  891 => 232,  890 => 231,  887 => 230,  884 => 229,  881 => 228,  879 => 227,  876 => 226,  853 => 224,  852 => 223,  842 => 221,  839 => 220,  833 => 217,  829 => 216,  824 => 215,  822 => 214,  817 => 212,  813 => 211,  808 => 210,  805 => 209,  803 => 208,  797 => 204,  795 => 203,  788 => 198,  782 => 197,  778 => 195,  776 => 194,  769 => 192,  751 => 191,  747 => 189,  744 => 188,  740 => 187,  737 => 186,  733 => 185,  724 => 181,  718 => 179,  715 => 178,  712 => 177,  711 => 176,  708 => 175,  706 => 174,  700 => 173,  689 => 171,  686 => 170,  681 => 169,  680 => 168,  677 => 167,  669 => 165,  666 => 164,  664 => 163,  661 => 162,  651 => 161,  641 => 160,  624 => 159,  621 => 158,  619 => 157,  608 => 156,  607 => 155,  603 => 153,  601 => 152,  592 => 151,  591 => 150,  588 => 149,  586 => 148,  583 => 147,  570 => 146,  567 => 145,  566 => 144,  562 => 142,  556 => 140,  554 => 139,  540 => 138,  532 => 137,  504 => 134,  494 => 132,  491 => 131,  489 => 130,  485 => 129,  482 => 128,  481 => 127,  478 => 126,  469 => 120,  465 => 119,  458 => 115,  455 => 114,  447 => 111,  443 => 109,  441 => 108,  438 => 107,  432 => 104,  428 => 102,  426 => 101,  417 => 98,  410 => 96,  407 => 95,  401 => 94,  400 => 93,  387 => 91,  364 => 90,  338 => 89,  326 => 88,  306 => 87,  304 => 86,  300 => 85,  286 => 82,  282 => 81,  272 => 75,  270 => 74,  267 => 73,  266 => 72,  262 => 70,  260 => 69,  256 => 67,  250 => 65,  247 => 64,  234 => 63,  232 => 62,  221 => 61,  218 => 60,  216 => 59,  213 => 58,  205 => 53,  197 => 52,  191 => 51,  187 => 50,  182 => 48,  179 => 47,  177 => 46,  174 => 45,  172 => 44,  160 => 43,  156 => 41,  155 => 40,  152 => 39,  148 => 37,  142 => 36,  125 => 35,  123 => 34,  120 => 33,  119 => 32,  113 => 28,  107 => 24,  102 => 22,  97 => 21,  89 => 19,  87 => 18,  78 => 15,  76 => 14,  73 => 13,  60 => 10,  57 => 9,  55 => 8,  52 => 7,  46 => 6,  43 => 5,  42 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewtopic_body.html", "");
    }
}
