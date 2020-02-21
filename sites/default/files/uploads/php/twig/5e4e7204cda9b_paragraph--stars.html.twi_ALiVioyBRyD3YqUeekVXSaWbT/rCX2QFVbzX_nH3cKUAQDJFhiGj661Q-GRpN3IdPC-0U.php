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

/* themes/ell_cranell/templates/paragraphs/stars/paragraph--stars.html.twig */
class __TwigTemplate_6889c63b857be81c79061403dc729a1a45242b59ebe8a4227462b82245b30b4a extends \Twig\Template
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
        $tags = ["set" => 42, "block" => 49, "if" => 54];
        $filters = ["clean_class" => 44, "escape" => 72];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
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
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        // line 51
        echo "    <div class=\"stars\" itemscope itemtype=\"http://schema.org/Rating\">
      <meta itemprop=\"worstRating\" content=\"1\">
      <meta itemprop=\"bestRating\" content=\"5\">
      ";
        // line 54
        if (twig_in_filter("20", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_stars_rating", []), 0, []))) {
            // line 55
            echo "        <meta itemprop=\"ratingValue\" content=\"1\">
      ";
        } elseif (twig_in_filter("40", $this->getAttribute($this->getAttribute(        // line 56
($context["content"] ?? null), "field_stars_rating", []), 0, []))) {
            // line 57
            echo "        <meta itemprop=\"ratingValue\" content=\"2\">
      ";
        } elseif (twig_in_filter("60", $this->getAttribute($this->getAttribute(        // line 58
($context["content"] ?? null), "field_stars_rating", []), 0, []))) {
            // line 59
            echo "        <meta itemprop=\"ratingValue\" content=\"3\">
      ";
        } elseif (twig_in_filter("70", $this->getAttribute($this->getAttribute(        // line 60
($context["content"] ?? null), "field_stars_rating", []), 0, []))) {
            // line 61
            echo "        <meta itemprop=\"ratingValue\" content=\"3\">
      ";
        } elseif (twig_in_filter("80", $this->getAttribute($this->getAttribute(        // line 62
($context["content"] ?? null), "field_stars_rating", []), 0, []))) {
            // line 63
            echo "        <meta itemprop=\"ratingValue\" content=\"4\">
      ";
        } elseif (twig_in_filter("89", $this->getAttribute($this->getAttribute(        // line 64
($context["content"] ?? null), "field_stars_rating", []), 0, []))) {
            // line 65
            echo "        <meta itemprop=\"ratingValue\" content=\"4\">
      ";
        } elseif (twig_in_filter("100", $this->getAttribute($this->getAttribute(        // line 66
($context["content"] ?? null), "field_stars_rating", []), 0, []))) {
            // line 67
            echo "        <meta itemprop=\"ratingValue\" content=\"5\">
      ";
        }
        // line 69
        echo "
      ";
        // line 70
        if (twig_in_filter("1", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_stars_color", []), 0, []))) {
            // line 71
            echo "        <span class=\"stars__back icon--stars-purple\"></span>
        <span class=\"stars__front icon--stars-white\" style=\"width: ";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_stars_rating", []), 0, [])), "html", null, true);
            echo "%\"></span>
      ";
        } else {
            // line 74
            echo "        <span class=\"stars__back icon--stars-grey\"></span>
        <span class=\"stars__front icon--stars-purple\" style=\"width: ";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_stars_rating", []), 0, [])), "html", null, true);
            echo "%\"></span>
      ";
        }
        // line 77
        echo "    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/ell_cranell/templates/paragraphs/stars/paragraph--stars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 77,  132 => 75,  129 => 74,  124 => 72,  121 => 71,  119 => 70,  116 => 69,  112 => 67,  110 => 66,  107 => 65,  105 => 64,  102 => 63,  100 => 62,  97 => 61,  95 => 60,  92 => 59,  90 => 58,  87 => 57,  85 => 56,  82 => 55,  80 => 54,  75 => 51,  68 => 50,  62 => 49,  60 => 46,  59 => 45,  58 => 44,  57 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ell_cranell/templates/paragraphs/stars/paragraph--stars.html.twig", "/Users/chris/Sites/haarausfall/themes/ell_cranell/templates/paragraphs/stars/paragraph--stars.html.twig");
    }
}
