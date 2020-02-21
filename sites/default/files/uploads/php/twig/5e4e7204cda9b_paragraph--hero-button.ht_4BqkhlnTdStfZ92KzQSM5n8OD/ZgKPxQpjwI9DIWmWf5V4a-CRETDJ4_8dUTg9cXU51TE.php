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

/* themes/ell_cranell/templates/paragraphs/hero-button/paragraph--hero-button.html.twig */
class __TwigTemplate_ccdceb6b7028e9f405a839b750c883948133eefe9e31dd03aa16754e7183f7f5 extends \Twig\Template
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
        $tags = ["set" => 42, "block" => 49, "if" => 50];
        $filters = ["clean_class" => 44, "escape" => 51];
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
        echo "  <div class=\"hero-button ";
        if ((twig_test_empty($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_list", []), 0, [])) && twig_test_empty($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_link", []), 0, [])))) {
            echo "hero-button--without";
        }
        // line 51
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_class", []), 0, [])), "html", null, true);
        echo "\">
    ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 94
        echo "  </div>
";
    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        // line 53
        echo "      ";
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_background", []), 0, [])) {
            // line 54
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_background", []), 0, [])), "html", null, true);
            echo "
      ";
        }
        // line 56
        echo "
      <div class=\"constrain constrain--medium\">
        <div class=\"hero-button__content\">
          ";
        // line 59
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_headline", []), 0, [])) {
            // line 60
            echo "            <h1 class=\"hero-button__headline\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_headline", []), 0, [])), "html", null, true);
            echo "</h1>
            <div class=\"hero-button__text\">
              ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_text_small", []), 0, [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 65
        echo "          ";
        if ($this->getAttribute(($context["content"] ?? null), "field_hero_button_list", [])) {
            // line 66
            echo "          <ul class=\"hero-button__list\">
            ";
            // line 67
            if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_list", []), 0, [])) {
                // line 68
                echo "            <li class=\"icon--arrow-purple\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_list", []), 0, [])), "html", null, true);
                echo "</li>
            ";
            }
            // line 70
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_list", []), 1, [])) {
                // line 71
                echo "            <li class=\"icon--arrow-purple\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_list", []), 1, [])), "html", null, true);
                echo "</li>
            ";
            }
            // line 73
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_list", []), 2, [])) {
                // line 74
                echo "            <li class=\"icon--arrow-purple\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_list", []), 2, [])), "html", null, true);
                echo "</li>
            ";
            }
            // line 76
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_list", []), 3, [])) {
                // line 77
                echo "            <li class=\"icon--arrow-purple\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_list", []), 3, [])), "html", null, true);
                echo "</li>
            ";
            }
            // line 79
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_list", []), 4, [])) {
                // line 80
                echo "            <li class=\"icon--arrow-purple\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_button_list", []), 4, [])), "html", null, true);
                echo "</li>
            ";
            }
            // line 82
            echo "          </ul>
          ";
        }
        // line 84
        echo "          ";
        if ($this->getAttribute(($context["content"] ?? null), "field_hero_button_link", [])) {
            // line 85
            echo "          <div class=\"hero-button__links\">
            ";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_hero_button_link", [])), "html", null, true);
            echo "
          </div>
          ";
        }
        // line 89
        echo "          ";
        if ($this->getAttribute(($context["content"] ?? null), "field_hero_button_list", [])) {
            // line 90
            echo "          ";
        }
        // line 91
        echo "        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/ell_cranell/templates/paragraphs/hero-button/paragraph--hero-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 91,  185 => 90,  182 => 89,  176 => 86,  173 => 85,  170 => 84,  166 => 82,  160 => 80,  157 => 79,  151 => 77,  148 => 76,  142 => 74,  139 => 73,  133 => 71,  130 => 70,  124 => 68,  122 => 67,  119 => 66,  116 => 65,  110 => 62,  104 => 60,  102 => 59,  97 => 56,  91 => 54,  88 => 53,  85 => 52,  80 => 94,  78 => 52,  73 => 51,  68 => 50,  62 => 49,  60 => 46,  59 => 45,  58 => 44,  57 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ell_cranell/templates/paragraphs/hero-button/paragraph--hero-button.html.twig", "/Users/cristianlopez/Sites/haarausfall/themes/ell_cranell/templates/paragraphs/hero-button/paragraph--hero-button.html.twig");
    }
}
