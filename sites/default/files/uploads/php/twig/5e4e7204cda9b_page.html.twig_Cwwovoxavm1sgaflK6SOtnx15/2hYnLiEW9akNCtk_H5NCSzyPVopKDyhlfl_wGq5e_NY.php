<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/ell_cranell/templates/layout/page.html.twig */
class __TwigTemplate_ce019961956bf38eec81e5f0b303b99667bc98faa0ce311e36aeb05d063460c6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 55];
        $filters = ["escape" => 57, "date" => 145];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 53
        echo "<div class=\"layout-container\">

  ";
        // line 55
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 56
            echo "    <header role=\"banner\" class=\"header\">
      ";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
      <div class=\"burger\">
        <div class=\"burger__inner\"></div>
      </div>
    </header>
  ";
        }
        // line 63
        echo "
  ";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
  ";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
        echo "
  ";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
  ";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
  ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "teaser_top", [])), "html", null, true);
        echo "
  ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "hero", [])), "html", null, true);
        echo "


  <div class=\"wrapper\">
    <div class=\"constrain constrain--large\">
      <main role=\"main\"
        <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 76
        echo "
        <div class=\"layout-content\">
          ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb_", [])), "html", null, true);
        echo "
          ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        </div>";
        // line 81
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 82
            echo "          <aside class=\"layout-sidebar-first\" role=\"complementary\">
            ";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 86
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 87
            echo "          <aside class=\"layout-sidebar-second\" role=\"complementary\">
            ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 91
        echo "      </main>
    </div>
  </div>

  <footer class=\"site-footer footer\">
    <div class=\"layout-container\">
      ";
        // line 97
        if ((((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fifth", []))) {
            // line 98
            echo "        <div class=\"site-footer__top clearfix footer__inner\">
          <div class=\"grid\">
            <div class=\"grid__item width-tab--1of1 width-lap--1of2 width-desk--1of5\">
              ";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
              <div class=\"footer__item\">
                <a href=\"/startseite\" class=\"footer__logo icon--logo\"></a>
              </div>
              <div class=\"footer__info\">
                <a href=\"/startseite\">Galderma Laboratorium GmbH</a>
                <p>Tel: 0800 / 5 88 88 50<br>
                patientenservice@galderma.com</p>
              </div>
              <div class=\"footer__social icon--social-fb\">
                Ell-Cranell Germany
              </div>
            </div><!--
            --><div class=\"grid__item width-tab--1of1 width-lap--1of2 width-desk--1of5 space--top-double space-lap--top-none\">
              <img class=\"footer__packshot\" src=\"/themes/ell_cranell/assets/images/grafik-2.png\" width=\"23px\" height=\"66px\" alt=\"\">
              <div class=\"footer__packshot\">
                ";
            // line 117
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
                <div class=\"stars-alt stars--4 footer__packshot__stars\">
                  <div class=\"stars\">
                    <span class=\"stars__back icon--stars-grey\"></span>
                    <span class=\"stars__front icon--stars-purple\" style=\"width: 80%\"></span>
                  </div>
                </div>
              </div>
            </div><!--
            --><div class=\"grid__item width-tab--1of1 width-lap--1of2 width-desk--1of5\">
              ";
            // line 127
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
            </div><!--
            --><div class=\"grid__item width-tab--1of1 width-lap--1of2 width-desk--1of5\">
              ";
            // line 130
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
            echo "
            </div><!--
            --><div class=\"grid__item width-tab--1of1 width-lap--1of2 width-desk--1of5\">
              ";
            // line 133
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 138
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 139
            echo "      <hr>
      <div class=\"footer__bottom\">
        ";
            // line 141
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 144
        echo "      <div class=\"footer__copyright\">
        <p>© Galderma Laboratorium GmbH ";
        // line 145
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["post"] ?? null), "published_at", [])), "Y"), "html", null, true);
        echo "</p>
      </div>
    </div>
  </footer>

  <div class=\"mobile-popup\">
    <div class=\"mobile-popup__logo icon--logo\"></div>
    <button class=\"mobile-popup__close\"></button>
    <div class=\"mobile-popup__navigation\">
      <div class=\"mobile-popup__navigation__inner\">
        ";
        // line 155
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "mobile_navigation", [])), "html", null, true);
        echo "
      </div>
    </div>
  </div>

  ";
        // line 160
        if ($this->getAttribute(($context["page"] ?? null), "trolley", [])) {
            // line 161
            echo "  <div class=\"trolley icon--trolley\">
    <div class=\"trolley__link\">";
            // line 162
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "trolley", [])), "html", null, true);
            echo "</div>
  </div>
  ";
        }
        // line 165
        echo "
  ";
        // line 166
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 167
            echo "    <!-- <footer role=\"contentinfo\">
      ";
            // line 168
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
    </footer> -->
  ";
        }
        // line 171
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/ell_cranell/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 171,  264 => 168,  261 => 167,  259 => 166,  256 => 165,  250 => 162,  247 => 161,  245 => 160,  237 => 155,  224 => 145,  221 => 144,  215 => 141,  211 => 139,  208 => 138,  200 => 133,  194 => 130,  188 => 127,  175 => 117,  156 => 101,  151 => 98,  149 => 97,  141 => 91,  135 => 88,  132 => 87,  129 => 86,  123 => 83,  120 => 82,  117 => 81,  113 => 79,  109 => 78,  105 => 76,  96 => 69,  92 => 68,  88 => 67,  84 => 66,  80 => 65,  76 => 64,  73 => 63,  64 => 57,  61 => 56,  59 => 55,  55 => 53,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ell_cranell/templates/layout/page.html.twig", "/Users/cristianlopez/Sites/haarausfall/themes/ell_cranell/templates/layout/page.html.twig");
    }
}
