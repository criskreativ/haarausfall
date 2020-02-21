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

/* themes/ell_cranell/templates/paragraphs/image-breakout/paragraph--image-breakout.html.twig */
class __TwigTemplate_36c9322fd1d5da220e543bd3d22597edf104e1c860b9d9480282c6b7486ed39d extends \Twig\Template
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
        $tags = ["set" => 2, "block" => 9, "if" => 10];
        $filters = ["clean_class" => 4, "escape" => 12];
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
        echo "  <div class=\"image-breakout ";
        if (twig_in_filter("2", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image_breakout_space_top", []), 0, []))) {
            echo "image-breakout--space-top";
        }
        echo "\">
    ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "  </div>
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        // line 12
        echo "    <div class=\"image-breakout__background\" style=\"background-image: url('/sites/default/files/uploads/images/";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image_breakout_item", []), 0, [])), "html", null, true);
        echo "')\"></div>

    <div class=\"image-breakout__content\">
      ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image_breakout_text", []), 0, [])) {
            // line 16
            echo "      <h3 class=\"image-breakout__text\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image_breakout_text", []), 0, [])), "html", null, true);
            echo "</h3>
      ";
        }
        // line 18
        echo "      ";
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image_breakout_svg", []), 0, [])) {
            // line 19
            echo "      <div class=\"image-breakout__svg image-breakout__svg--";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_svg_position", []), 0, [])), "html", null, true);
            echo "\">
        ";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image_breakout_svg", []), 0, [])), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 23
        echo "    </div>

    ";
    }

    public function getTemplateName()
    {
        return "themes/ell_cranell/templates/paragraphs/image-breakout/paragraph--image-breakout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 23,  108 => 20,  103 => 19,  100 => 18,  94 => 16,  92 => 15,  85 => 12,  82 => 11,  77 => 26,  75 => 11,  68 => 10,  62 => 9,  60 => 6,  59 => 5,  58 => 4,  57 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ell_cranell/templates/paragraphs/image-breakout/paragraph--image-breakout.html.twig", "/Users/chris/Sites/haarausfall/themes/ell_cranell/templates/paragraphs/image-breakout/paragraph--image-breakout.html.twig");
    }
}
