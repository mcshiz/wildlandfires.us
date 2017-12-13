<?php

/* newtopic_notify.txt */
class __TwigTemplate_a51aa020fd28bb6ede895f3b8fac66055b761eebb16999eb2248f03629f348ec extends Twig_Template
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
        echo "Subject: New topic notification - \"";
        echo ($context["FORUM_NAME"] ?? null);
        echo "\"

Hello ";
        // line 3
        echo ($context["USERNAME"] ?? null);
        echo ",

You are receiving this notification because you are watching the forum \"";
        // line 5
        echo ($context["FORUM_NAME"] ?? null);
        echo "\" at \"";
        echo ($context["SITENAME"] ?? null);
        echo "\". This forum has received a new topic";
        if ((($context["AUTHOR_NAME"] ?? null) != "")) {
            echo " by ";
            echo ($context["AUTHOR_NAME"] ?? null);
        }
        echo " since your last visit, \"";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "\". You can use the following link to view the forum, no more notifications will be sent until you visit the forum.

";
        // line 7
        echo ($context["U_FORUM"] ?? null);
        echo "

If you no longer wish to watch this forum you can either click the \"Unsubscribe forum\" link found in the forum above, or by clicking the following link:

";
        // line 11
        echo ($context["U_STOP_WATCHING_FORUM"] ?? null);
        echo "

";
        // line 13
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "newtopic_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  51 => 11,  44 => 7,  30 => 5,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newtopic_notify.txt", "");
    }
}
