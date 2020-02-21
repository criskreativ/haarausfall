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

/* themes/ell_cranell/templates/paragraphs/teaser-box/paragraph--teaser-box.html.twig */
class __TwigTemplate_c5b59489ccb0792f7a349ed9c4fde73cf4e8172ada8eea45ce637f22e33a1b66 extends \Twig\Template
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
        $tags = ["set" => 2, "block" => 9];
        $filters = ["clean_class" => 4, "escape" => 17];
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
        echo "  <div class=\"teaser-box\">
    ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "  </div>
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        // line 12
        echo "    <div class=\"constrain constrain--medium\">
      <div class=\"grid\">
        <div class=\"grid__item width-desk--1of3\">
          <div class=\"teaser-box__item\">
            <div class=\"teaser-box__img\">
              ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_box_img_1", [])), "html", null, true);
        echo "
            </div>
            <h3 class=\"teaser-box__headline\">";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_teaser_box_headline_1", []), 0, [])), "html", null, true);
        echo "</h3>
            <div class=\"teaser-box__button\">
              ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_box_button_1", [])), "html", null, true);
        echo "
            </div>
          </div>
        </div><!--
        --><div class=\"grid__item width-desk--1of3\">
          <div class=\"teaser-box__item\">
            <div class=\"teaser-box__img\">
              ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_box_img_2", [])), "html", null, true);
        echo "
            </div>
            <h3 class=\"teaser-box__headline\">";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_teaser_box_headline_2", []), 0, [])), "html", null, true);
        echo "</h3>
            <div class=\"teaser-box__button\">
              ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_box_button_2", [])), "html", null, true);
        echo "
            </div>
          </div>
        </div><!--
        --><div class=\"grid__item width-desk--1of3\">
          <div class=\"teaser-box__item\">
            <div class=\"teaser-box__img\">
              ";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_box_img_3", [])), "html", null, true);
        echo "
            </div>
            <h3 class=\"teaser-box__headline\">";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_teaser_box_headline_3", []), 0, [])), "html", null, true);
        echo "</h3>
            <div class=\"teaser-box__button\">
              ";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_teaser_box_button_3", [])), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/ell_cranell/templates/paragraphs/teaser-box/paragraph--teaser-box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 43,  133 => 41,  128 => 39,  118 => 32,  113 => 30,  108 => 28,  98 => 21,  93 => 19,  88 => 17,  81 => 12,  78 => 11,  73 => 50,  71 => 11,  68 => 10,  62 => 9,  60 => 6,  59 => 5,  58 => 4,  57 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ell_cranell/templates/paragraphs/teaser-box/paragraph--teaser-box.html.twig", "/Users/chris/Sites/haarausfall/themes/ell_cranell/templates/paragraphs/teaser-box/paragraph--teaser-box.html.twig");
    }
}
