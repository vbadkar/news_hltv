<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/news_hltv_theme/templates/page.html.twig */
class __TwigTemplate_5d75b5ce1943f84b56b3562d6ff8a4681c99cf21a01e43f9690f1c5437deb5a0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "<div class=\"date\">
  ";
        // line 54
        echo t("Todays date and time is : @today", array("@today" =>         // line 55
($context["today"] ?? null), ));
        // line 57
        echo "</div>
<div class=\"menu-wrapper\">
    <header id=\"header\" class=\"header\" role=\"banner\">
      <div class=\"section layout-container clearfix\">
        ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
      </div>
    </header>
  </div>
<div id=\"page-wrapper\">
  <div id=\"page\">
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
      ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 68)) {
            // line 69
            echo "      <div class=\"featured-header\">
        ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 73
        echo "      <div id=\"main\" class=\"layout-main clearfix\">
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <div class=\"hltv_main_content\">
            ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 76)) {
            // line 77
            echo "            <div class=\"sidebar_1\">
              <aside class=\"layout-sidebar-first\" role=\"complementary\">
                ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
              </aside>
            </div>
            ";
        }
        // line 83
        echo "            <section class=\"section\">
              <a id=\"main-content\" tabindex=\"-1\"></a>
              ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "
            </section>
            ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 87)) {
            // line 88
            echo "            <div class=\"sidebar_2\">
              <aside class=\"layout-sidebar-second\" role=\"complementary\">
                ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "
              </aside>
            </div>
            ";
        }
        // line 94
        echo "          </div>
        </main>
      </div>
    </div>
  </div>

</div>
 <footer class=\"site-footer\">
    <div class=\"layout-container\">
      ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 103)) {
            // line 104
            echo "        <div class=\"site-footer__top clearfix\">
          ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 108
        echo "    </div>
  </footer>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/news_hltv_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 108,  128 => 105,  125 => 104,  123 => 103,  112 => 94,  105 => 90,  101 => 88,  99 => 87,  94 => 85,  90 => 83,  83 => 79,  79 => 77,  77 => 76,  72 => 73,  66 => 70,  63 => 69,  61 => 68,  51 => 61,  45 => 57,  43 => 55,  42 => 54,  39 => 53,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bartik's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"date\">
  {% trans %}
  Todays date and time is : {{ today }}
  {% endtrans %}
</div>
<div class=\"menu-wrapper\">
    <header id=\"header\" class=\"header\" role=\"banner\">
      <div class=\"section layout-container clearfix\">
        {{ page.main_menu }}
      </div>
    </header>
  </div>
<div id=\"page-wrapper\">
  <div id=\"page\">
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
      {% if page.header %}
      <div class=\"featured-header\">
        {{ page.header }}
      </div>
      {% endif %}
      <div id=\"main\" class=\"layout-main clearfix\">
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <div class=\"hltv_main_content\">
            {% if page.sidebar_first %}
            <div class=\"sidebar_1\">
              <aside class=\"layout-sidebar-first\" role=\"complementary\">
                {{ page.sidebar_first }}
              </aside>
            </div>
            {% endif %}
            <section class=\"section\">
              <a id=\"main-content\" tabindex=\"-1\"></a>
              {{ page.main_content }}
            </section>
            {% if page.sidebar_second %}
            <div class=\"sidebar_2\">
              <aside class=\"layout-sidebar-second\" role=\"complementary\">
                {{ page.sidebar_second }}
              </aside>
            </div>
            {% endif %}
          </div>
        </main>
      </div>
    </div>
  </div>

</div>
 <footer class=\"site-footer\">
    <div class=\"layout-container\">
      {% if page.footer %}
        <div class=\"site-footer__top clearfix\">
          {{ page.footer }}
        </div>
      {% endif %}
    </div>
  </footer>
", "themes/custom/news_hltv_theme/templates/page.html.twig", "/var/www/html/drupal9/web/themes/custom/news_hltv_theme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 54, "if" => 68);
        static $filters = array("escape" => 55);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
