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

/* themes/ell_cranell/templates/paragraphs/hero-default/paragraph--hero-default.html.twig */
class __TwigTemplate_3a598daad56f5c6743ff6bc29eae4206d063326600ea1089dbe88fb3d59c70d4 extends \Twig\Template
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
        $tags = ["set" => 42, "block" => 49, "if" => 52];
        $filters = ["clean_class" => 44, "escape" => 50, "length" => 56];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'length'],
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
        echo "  <div class=\"hero-default ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_d_half", []), 0, [])), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_d_class", []), 0, [])), "html", null, true);
        echo "\">
    ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "  </div>
";
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
        // line 52
        echo "    ";
        if ($this->getAttribute(($context["content"] ?? null), "field_hero_d_image", [])) {
            // line 53
            echo "    <div class=\"hero-default__image\" style=\"background-image: url('/sites/default/files/uploads/images/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_d_image", []), 0, [])), "html", null, true);
            echo "')\"></div>
    ";
        }
        // line 55
        echo "    <div class=\"hero-default__inner\">
      <h1 class=\"hero-default__headline hero-default__headline--";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_d_headline_color", []), 0, [])), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_d_label", []), 0, [])) >= 1)) {
            echo "hero-default__headline--label";
        }
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_d_headline", []), 0, [])), "html", null, true);
        echo "</h1>
      ";
        // line 57
        if (($this->getAttribute(($context["content"] ?? null), "field_hero_d_text", []) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_d_label", []), 0, [])) == 0))) {
            // line 58
            echo "      <p class=\"hero-default__text\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_d_text", []), 0, [])), "html", null, true);
            echo "</p>
      ";
        }
        // line 60
        echo "      ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_d_label", []), 0, [])) == 0)) {
            // line 61
            echo "      ";
        } else {
            // line 62
            echo "      <div class=\"hero-default__label\">[ ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_d_label", []), 0, [])), "html", null, true);
            echo " ]</div>
      ";
        }
        // line 64
        echo "    </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/ell_cranell/templates/paragraphs/hero-default/paragraph--hero-default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 64,  121 => 62,  118 => 61,  115 => 60,  109 => 58,  107 => 57,  97 => 56,  94 => 55,  88 => 53,  85 => 52,  82 => 51,  77 => 66,  75 => 51,  68 => 50,  62 => 49,  60 => 46,  59 => 45,  58 => 44,  57 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ell_cranell/templates/paragraphs/hero-default/paragraph--hero-default.html.twig", "/Users/cristianlopez/Sites/haarausfall/themes/ell_cranell/templates/paragraphs/hero-default/paragraph--hero-default.html.twig");
    }
}
