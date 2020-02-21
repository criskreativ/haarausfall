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

/* themes/ell_cranell/templates/paragraphs/info-box/paragraph--info-box.html.twig */
class __TwigTemplate_85e348b440a2353d2b9afcff332194027868d875bc2dc598ab37394bbf806c7f extends \Twig\Template
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
        $tags = ["set" => 2, "block" => 9, "if" => 12];
        $filters = ["clean_class" => 4, "escape" => 14];
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
        // line 2
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 4
($context["paragraph"] ?? null), "bundle", [])))), 2 => ((        // line 5
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 3 => (( !$this->getAttribute(        // line 6
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : (""))];
        // line 9
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 10
        echo "  <div class=\"info-box\">
    ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "  </div>
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        // line 12
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_info_box_headline", []), 0, [])) {
            // line 13
            echo "    <div class=\"info-box__headline\">
      ";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_info_box_headline", []), 0, [])), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 17
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_info_box_text", []), 0, [])) {
            // line 18
            echo "    <div class=\"info-box__text\">
      ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_info_box_text", []), 0, [])), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 22
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_info_box_tel", []), 0, [])) {
            // line 23
            echo "    <div class=\"info-box__link icon--tel\">
      <a href=\"tel:";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_info_box_tel", []), 0, [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_info_box_tel", []), 0, [])), "html", null, true);
            echo "</a>
    </div>
    ";
        }
        // line 27
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_info_box_email", []), 0, [])) {
            // line 28
            echo "    <div class=\"info-box__link icon--email\">
      <a href=\"mailto:";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_info_box_email", []), 0, [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_info_box_email", []), 0, [])), "html", null, true);
            echo "</a>
    </div>
    ";
        }
        // line 32
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/ell_cranell/templates/paragraphs/info-box/paragraph--info-box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  125 => 29,  122 => 28,  119 => 27,  111 => 24,  108 => 23,  105 => 22,  99 => 19,  96 => 18,  93 => 17,  87 => 14,  84 => 13,  81 => 12,  78 => 11,  73 => 33,  71 => 11,  68 => 10,  62 => 9,  60 => 6,  59 => 5,  58 => 4,  57 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ell_cranell/templates/paragraphs/info-box/paragraph--info-box.html.twig", "/Users/cristianlopez/Sites/haarausfall/themes/ell_cranell/templates/paragraphs/info-box/paragraph--info-box.html.twig");
    }
}
