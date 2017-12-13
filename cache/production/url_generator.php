<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * phpbb_url_generator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_generator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'phpbb_feed_forums' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:forums',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/feed/forums',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:news',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/feed/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_topics' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:topics',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/feed/topics',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_topics_active' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:topics_active',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/feed/topics_active',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_topics_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:topics_new',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/feed/topics_new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_forum' => array (  0 =>   array (    0 => 'forum_id',  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:forum',  ),  2 =>   array (    'forum_id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'forum_id',    ),    1 =>     array (      0 => 'text',      1 => '/feed/forum',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_topic' => array (  0 =>   array (    0 => 'topic_id',  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:topic',  ),  2 =>   array (    'topic_id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'topic_id',    ),    1 =>     array (      0 => 'text',      1 => '/feed/topic',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_overall' => array (  0 =>   array (    0 => 'mode',  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:overall',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mode',    ),    1 =>     array (      0 => 'text',      1 => '/feed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_feed_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.feed.controller:overall',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/feed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_help_bbcode_controller' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.help.controller.bbcode:handle',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/help/bbcode',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_help_faq_controller' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.help.controller.faq:handle',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/help/faq',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_report_pm_controller' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'phpbb.report.controller:handle',    'mode' => 'pm',  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/report',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/pm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_report_post_controller' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'phpbb.report.controller:handle',    'mode' => 'post',  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/report',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/post',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_boardannouncements_controller' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.boardannouncements.controller:close_announcement',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/boardannouncements/close',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_pages_dynamic_route_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'phpbb.pages.controller:display',    'route' => 'wildland-fire-map',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/wildland-fire-map',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpbb_pages_main_controller' => array (  0 =>   array (    0 => 'route',  ),  1 =>   array (    '_controller' => 'phpbb.pages.controller:display',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'route',    ),    1 =>     array (      0 => 'text',      1 => '/page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}