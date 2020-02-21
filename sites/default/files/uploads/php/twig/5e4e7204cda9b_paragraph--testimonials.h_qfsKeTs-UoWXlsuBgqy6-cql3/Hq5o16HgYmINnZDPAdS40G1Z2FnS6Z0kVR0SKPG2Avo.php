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

/* themes/ell_cranell/templates/paragraphs/testimonials/paragraph--testimonials.html.twig */
class __TwigTemplate_d02419261effbbfc2e7595c5b4faef8502641bd38c0da053554bc172795387fb extends \Twig\Template
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
        $tags = ["set" => 2, "block" => 9, "if" => 20];
        $filters = ["clean_class" => 4, "escape" => 18];
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
        echo "  <div itemscope itemtype=\"http://schema.org/Product\">
    <meta itemprop=\"name\" content=\"Alfatradiol\">
    <meta itemprop=\"brand\" content=\"Ell-Cranell\">
    <meta itemprop=\"sku\" content=\"PZN-09944694\">
    <meta itemprop=\"description\" content=\"Ell-Cranell mit Alfatradiol ist ein verschreibungsfreies Arzneimittel zur Behandlung von anlagebedingtem (hormonell-erblichem) Haarausfall – der häufigsten Form von Haarausfall bei Männern und Frauen.\">
    <meta itemprop=\"image\" content=\"/sites/default/files/upload/images/packshot.jpg\">
    <div class=\"testimonials\" itemprop=\"review\" itemscope itemtype=\"http://schema.org/Review\">
      <div class=\"testimonials__inner\">
        <meta itemprop=\"author\" content=\"";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonials_author", []), 0, [])), "html", null, true);
        echo "\">
        ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "      </div>
    </div>
  </div>
";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        // line 20
        echo "        ";
        if ($this->getAttribute(($context["content"] ?? null), "field_testimonials_stars", [])) {
            // line 21
            echo "          <div class=\"testimonials__stars\" itemprop=\"reviewRating\">
            ";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_testimonials_stars", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 25
        echo "        ";
        if ($this->getAttribute(($context["content"] ?? null), "field_testimonials_headline", [])) {
            // line 26
            echo "          <div class=\"testimonials__headline\" itemprop=\"name\">
            ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_testimonials_headline", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 30
        echo "        ";
        if ($this->getAttribute(($context["content"] ?? null), "field_testimonials_body", [])) {
            // line 31
            echo "          <div class=\"testimonials__body\" itemprop=\"description\">
            ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_testimonials_body", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 35
        echo "        ";
        if ($this->getAttribute(($context["content"] ?? null), "field_testimonials_link", [])) {
            // line 36
            echo "          <div class=\"testimonials__link icon--arrow-purple\">
            ";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_testimonials_link", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 40
        echo "        ";
    }

    public function getTemplateName()
    {
        return "themes/ell_cranell/templates/paragraphs/testimonials/paragraph--testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 40,  136 => 37,  133 => 36,  130 => 35,  124 => 32,  121 => 31,  118 => 30,  112 => 27,  109 => 26,  106 => 25,  100 => 22,  97 => 21,  94 => 20,  91 => 19,  84 => 41,  82 => 19,  78 => 18,  68 => 10,  62 => 9,  60 => 6,  59 => 5,  58 => 4,  57 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ell_cranell/templates/paragraphs/testimonials/paragraph--testimonials.html.twig", "/Users/chris/Sites/haarausfall/themes/ell_cranell/templates/paragraphs/testimonials/paragraph--testimonials.html.twig");
    }
}
