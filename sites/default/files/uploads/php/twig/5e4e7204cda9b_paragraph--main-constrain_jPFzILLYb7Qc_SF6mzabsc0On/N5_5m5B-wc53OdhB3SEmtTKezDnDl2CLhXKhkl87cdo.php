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

/* themes/ell_cranell/templates/paragraphs/main-constrain/paragraph--main-constrain.html.twig */
class __TwigTemplate_f5273d942ab068013d7911e9f2157d6870a6acb4602b2caec88589f26604524e extends \Twig\Template
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
        $filters = ["clean_class" => 44, "escape" => 50];
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
        echo "  <div class=\"main-constrain constrain ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_main_constrain_width", []), 0, [])), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_main_constrain_class", []), 0, [])), "html", null, true);
        echo "\">
    ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "  </div>
";
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
        // line 52
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_main_constrain_paragraph", [])), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/ell_cranell/templates/paragraphs/main-constrain/paragraph--main-constrain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 52,  82 => 51,  77 => 54,  75 => 51,  68 => 50,  62 => 49,  60 => 46,  59 => 45,  58 => 44,  57 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ell_cranell/templates/paragraphs/main-constrain/paragraph--main-constrain.html.twig", "/Users/chris/Sites/haarausfall/themes/ell_cranell/templates/paragraphs/main-constrain/paragraph--main-constrain.html.twig");
    }
}