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

/* @OroEntityConfig/Attribute/update.html.twig */
class __TwigTemplate_a018933c75bd3564f5cceaaa783befa8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navButtons' => [$this, 'block_navButtons'],
            'pageHeader' => [$this, 'block_pageHeader'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroEntityConfig/Config/fieldUpdate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityConfig/Attribute/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Attribute/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Attribute/update.html.twig"));

        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)) {

            $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%attributeName%" => twig_get_attribute($this->env, $this->source,             // line 4
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 4, $this->source); })()), "fieldName", [], "any", false, false, false, 4)]]);
        } else {

            $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.attribute.entity_label")]]);
        }
        // line 1
        $this->parent = $this->loadTemplate("@OroEntityConfig/Config/fieldUpdate.html.twig", "@OroEntityConfig/Attribute/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 9));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 10
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/Attribute/update.html.twig", 10)->unwrap();
        // line 11
        echo "
    ";
        // line 12
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_attribute_index", ["alias" => (isset($context["entityAlias"]) || array_key_exists("entityAlias", $context) ? $context["entityAlias"] : (function () { throw new RuntimeError('Variable "entityAlias" does not exist.', 12, $this->source); })())])], 12, $context, $this->getSourceContext());
        echo "
    ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_attribute_create")) {
            // line 14
            echo "        ";
            $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_attribute_index", "params" => ["alias" => (isset($context["entityAlias"]) || array_key_exists("entityAlias", $context) ? $context["entityAlias"] : (function () { throw new RuntimeError('Variable "entityAlias" does not exist.', 14, $this->source); })())]]], 14, $context, $this->getSourceContext());
            // line 15
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 15, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_attribute_create", "params" => ["alias" =>             // line 17
(isset($context["entityAlias"]) || array_key_exists("entityAlias", $context) ? $context["entityAlias"] : (function () { throw new RuntimeError('Variable "entityAlias" does not exist.', 17, $this->source); })())]]], 15, $context, $this->getSourceContext()));
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_attribute_update")) {
            // line 21
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 21, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_attribute_update", "params" => ["id" => "\$id"]]], 21, $context, $this->getSourceContext()));
            // line 25
            echo "    ";
        }
        // line 26
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 26, $this->source); })())]], 26, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 29
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 29));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 30
        echo "    ";
        $context["entityTitle"] = ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)) ? (_twig_default_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["field_config"]) || array_key_exists("field_config", $context) ? $context["field_config"] : (function () { throw new RuntimeError('Variable "field_config" does not exist.', 31, $this->source); })()), "get", [0 => "label"], "method", false, false, false, 31)), twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 31, $this->source); })()), "fieldName", [], "any", false, false, false, 31)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.attribute.entity_label")])));
        // line 34
        echo "
    ";
        // line 35
        $context["breadcrumbs"] = ["entity" => "entity", "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_attribute_index", ["alias" =>         // line 37
(isset($context["entityAlias"]) || array_key_exists("entityAlias", $context) ? $context["entityAlias"] : (function () { throw new RuntimeError('Variable "entityAlias" does not exist.', 37, $this->source); })())]), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 38
(isset($context["attributesLabel"]) || array_key_exists("attributesLabel", $context) ? $context["attributesLabel"] : (function () { throw new RuntimeError('Variable "attributesLabel" does not exist.', 38, $this->source); })())), "entityTitle" =>         // line 39
(isset($context["entityTitle"]) || array_key_exists("entityTitle", $context) ? $context["entityTitle"] : (function () { throw new RuntimeError('Variable "entityTitle" does not exist.', 39, $this->source); })())];
        // line 41
        echo "
    ";
        // line 42
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEntityConfig/Attribute/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 42,  160 => 41,  158 => 39,  157 => 38,  156 => 37,  155 => 35,  152 => 34,  150 => 31,  148 => 30,  135 => 29,  119 => 26,  116 => 25,  113 => 21,  110 => 20,  107 => 19,  105 => 17,  103 => 15,  100 => 14,  98 => 13,  94 => 12,  91 => 11,  88 => 10,  75 => 9,  61 => 1,  55 => 4,  52 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroEntityConfig/Config/fieldUpdate.html.twig' %}

{% if field.id %}
    {% oro_title_set({params : {'%attributeName%': field.fieldName}}) %}
{% else %}
    {% oro_title_set({params : {'%entityName%': 'oro.entity_config.attribute.entity_label'|trans}})  %}
{% endif %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {{ UI.cancelButton(path('oro_attribute_index', {alias: entityAlias})) }}
    {% if is_granted('oro_attribute_create') %}
        {% set html = UI.saveAndCloseButton({'route': 'oro_attribute_index', 'params': {alias: entityAlias}}) %}
        {% set html = html ~ UI.saveAndNewButton({
            'route': 'oro_attribute_create',
            'params': {alias: entityAlias}
        }) %}
    {% endif %}
    {% if is_granted('oro_attribute_update') %}
        {% set html = html ~ UI.saveAndStayButton({
            'route': 'oro_attribute_update',
            'params': {'id': '\$id'}
        }) %}
    {% endif %}
    {{ UI.dropdownSaveButton({'html': html}) }}
{% endblock navButtons %}

{% block pageHeader %}
    {% set entityTitle = field.id ?
        (field_config.get('label')|trans) | default(field.fieldName|capitalize) :
        'oro.ui.create_entity'|trans({'%entityName%': 'oro.entity_config.attribute.entity_label'|trans})
    %}

    {% set breadcrumbs = {
        'entity'      : 'entity',
        'indexPath'   : path('oro_attribute_index', {alias: entityAlias}),
        'indexLabel'  : attributesLabel|trans,
        'entityTitle' : entityTitle
    }%}

    {{ parent() }}
{% endblock pageHeader %}
", "@OroEntityConfig/Attribute/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/Attribute/update.html.twig");
    }
}
