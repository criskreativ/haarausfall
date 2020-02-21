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

/* themes/ell_cranell/templates/paragraphs/teaser-breakout/paragraph--teaser-breakout--default.html.twig */
class __TwigTemplate_9fc14d88459daceb32b1863c0f7357458a56e4d0b3ff4f1681e092e9810fcae7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "block" => 49];
        $filters = ["clean_class" => 44, "escape" => 55];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape'],
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
        // line 42
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 44
($context["paragraph"] ?? null), "bundle", [])))), 2 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 3 => (( !$this->getAttribute(        // line 46
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : (""))];
        // line 49
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 50
        echo "  <div class=\"teaser-breakout\">
    ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "  </div>
";
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
        // line 52
        echo "    <div class=\"grid\">
      <div class=\"grid__item width-desk-wide--1of3 teaser-breakout__col\">
        <div class=\"teaser-breakout__img\">
          ";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_breakout_img_1", [])), "html", null, true);
        echo "
        </div>
        <h2 class=\"teaser-breakout__headline\">";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_teaser_breakout_headline_1", []), 0, [])), "html", null, true);
        echo "</h2>
        <div class=\"teaser-breakout__link icon--arrow-white\">
          ";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_breakout_link_1", [])), "html", null, true);
        echo "
        </div>
      </div><!--
      --><div class=\"grid__item width-desk-wide--1of3 teaser-breakout__col\">
        <div class=\"teaser-breakout__img\">
          ";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_breakout_img_2", [])), "html", null, true);
        echo "
        </div>
        <h2 class=\"teaser-breakout__headline\">";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_teaser_breakout_headline_2", []), 0, [])), "html", null, true);
        echo "</h2>
        <div class=\"teaser-breakout__link icon--arrow-white\">
          ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_breakout_link_2", [])), "html", null, true);
        echo "
        </div>
        <div class=\"teaser-breakout__stars\">
          ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_breakout_stars", [])), "html", null, true);
        echo "
        </div>
      </div><!--
      --><div class=\"grid__item width-desk-wide--1of3 teaser-breakout__col\">
        <div class=\"teaser-breakout__img\">
          ";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_breakout_img_3", [])), "html", null, true);
        echo "
        </div>
        <h2 class=\"teaser-breakout__headline\">";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_teaser_breakout_headline_3", []), 0, [])), "html", null, true);
        echo "</h2>
        <div class=\"teaser-breakout__link icon--arrow-white\">
          ";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_breakout_link_3", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/ell_cranell/templates/paragraphs/teaser-breakout/paragraph--teaser-breakout--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 80,  133 => 78,  128 => 76,  120 => 71,  114 => 68,  109 => 66,  104 => 64,  96 => 59,  91 => 57,  86 => 55,  81 => 52,  78 => 51,  73 => 85,  71 => 51,  68 => 50,  62 => 49,  60 => 46,  59 => 45,  58 => 44,  57 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ell_cranell/templates/paragraphs/teaser-breakout/paragraph--teaser-breakout--default.html.twig", "/Users/cristianlopez/Sites/haarausfall/themes/ell_cranell/templates/paragraphs/teaser-breakout/paragraph--teaser-breakout--default.html.twig");
    }
}
