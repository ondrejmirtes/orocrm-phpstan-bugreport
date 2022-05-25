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

/* @OroSearch/Datagrid/itemContainer.html.twig */
class __TwigTemplate_92aa676533967b1a83c73bde08e74533 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSearch/Datagrid/itemContainer.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSearch/Datagrid/itemContainer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSearch/Datagrid/itemContainer.html.twig"));

        // line 1
        ob_start();
        // line 3
        $context["indexer_item"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 3, $this->source); })()), "getValue", [0 => "indexer_item"], "method", false, false, false, 3);
        // line 4
        echo "
";
        // line 6
        $context["entity"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 6, $this->source); })()), "getValue", [0 => "entity"], "method", false, false, false, 6);
        // line 7
        echo "
";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["indexer_item"]) || array_key_exists("indexer_item", $context) ? $context["indexer_item"] : (function () { throw new RuntimeError('Variable "indexer_item" does not exist.', 8, $this->source); })()), "entityConfig", [], "any", false, false, false, 8), "search_template", [], "any", false, false, false, 8)) {
            // line 9
            echo "    ";
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["indexer_item"]) || array_key_exists("indexer_item", $context) ? $context["indexer_item"] : (function () { throw new RuntimeError('Variable "indexer_item" does not exist.', 9, $this->source); })()), "entityConfig", [], "any", false, false, false, 9), "search_template", [], "any", false, false, false, 9), "@OroSearch/Datagrid/itemContainer.html.twig", 9)->display(twig_array_merge($context, ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "indexer_item" => (isset($context["indexer_item"]) || array_key_exists("indexer_item", $context) ? $context["indexer_item"] : (function () { throw new RuntimeError('Variable "indexer_item" does not exist.', 9, $this->source); })())]));
        } else {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "
";
        }
        $___internal_parse_73_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_73_);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroSearch/Datagrid/itemContainer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 1,  64 => 11,  60 => 9,  58 => 8,  55 => 7,  53 => 6,  50 => 4,  48 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{# Indexer result item Oro\\Bundle\\SearchBundle\\Query\\Result\\Item #}
{% set indexer_item = record.getValue('indexer_item') %}

{# Entity of specific type #}
{% set entity = record.getValue('entity') %}

{% if indexer_item.entityConfig.search_template %}
    {% include indexer_item.entityConfig.search_template with {'entity': entity, 'indexer_item': indexer_item} %}
{% else %}
    {{ entity }}
{% endif %}
{% endapply %}
", "@OroSearch/Datagrid/itemContainer.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/SearchBundle/Resources/views/Datagrid/itemContainer.html.twig");
    }
}
