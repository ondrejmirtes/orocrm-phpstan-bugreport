<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @OroAttachment/Twig/file.html.twig */
class __TwigTemplate_575a2ff88b7df42f792f60486335d95c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAttachment/Twig/file.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAttachment/Twig/file.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAttachment/Twig/file.html.twig"));

        // line 1
        echo "<span class=\"filename\">
    <i class=\"fa ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\"></i>
    ";
        // line 3
        if ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\" data-filename=\"";
            echo twig_escape_filter($this->env, (isset($context["fileName"]) || array_key_exists("fileName", $context) ? $context["fileName"] : (function () { throw new RuntimeError('Variable "fileName" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\"
           ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, ($context["additional"] ?? null), "galleryId", [], "array", true, true, false, 5)) {
                echo "data-gallery=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["additional"]) || array_key_exists("additional", $context) ? $context["additional"] : (function () { throw new RuntimeError('Variable "additional" does not exist.', 5, $this->source); })()), "galleryId", [], "array", false, false, false, 5), "html", null, true);
                echo "\"";
            }
            // line 6
            echo "           data-sources=\"";
            echo twig_escape_filter($this->env, json_encode(((twig_get_attribute($this->env, $this->source, ($context["pictureSources"] ?? null), "sources", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["pictureSources"] ?? null), "sources", [], "any", false, false, false, 6), [])) : ([]))), "html", null, true);
            echo "\"
           class=\"no-hash\" title=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\">
    ";
        }
        // line 9
        echo "        ";
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\UIBundle\Twig\FormatExtension']->formatFilename((isset($context["fileName"]) || array_key_exists("fileName", $context) ? $context["fileName"] : (function () { throw new RuntimeError('Variable "fileName" does not exist.', 9, $this->source); })())), "html", null, true);
        echo "
    ";
        // line 10
        if ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "        </a>
    ";
        }
        // line 13
        echo "</span>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroAttachment/Twig/file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 13,  85 => 11,  83 => 10,  78 => 9,  73 => 7,  68 => 6,  62 => 5,  55 => 4,  53 => 3,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<span class=\"filename\">
    <i class=\"fa {{ iconClass }}\"></i>
    {% if url %}
        <a href=\"{{ url }}\" data-filename=\"{{ fileName }}\"
           {% if additional['galleryId'] is defined %}data-gallery=\"{{ additional['galleryId'] }}\"{% endif %}
           data-sources=\"{{ pictureSources.sources|default([])|json_encode }}\"
           class=\"no-hash\" title=\"{{ title }}\">
    {% endif %}
        {{ oro_format_filename(fileName) }}
    {% if url %}
        </a>
    {% endif %}
</span>
", "@OroAttachment/Twig/file.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/AttachmentBundle/Resources/views/Twig/file.html.twig");
    }
}
