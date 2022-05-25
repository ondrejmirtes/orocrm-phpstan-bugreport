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

/* @OroDataGrid/Grid/dialog/multi.html.twig */
class __TwigTemplate_2d31bef916c4c6b88c311fdacf71a47e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_container' => [$this, 'block_page_container'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDataGrid/Grid/dialog/multi.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataGrid/Grid/dialog/multi.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataGrid/Grid/dialog/multi.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDataGrid/Grid/dialog/multi.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 20
        $this->displayBlock('page_container', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_page_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("page_container", $this->getTemplateName(), 20));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_container"));

        // line 21
        echo "    <div class=\"widget-content\">

        ";
        // line 23
        $context["itemsArray"] = [];
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entityTargets"]) || array_key_exists("entityTargets", $context) ? $context["entityTargets"] : (function () { throw new RuntimeError('Variable "entityTargets" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "            ";
            $context["itemArray"] = ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,             // line 26
$context["item"], "label", [], "any", false, false, false, 26)), "className" => twig_get_attribute($this->env, $this->source,             // line 27
$context["item"], "className", [], "any", false, false, false, 27), "gridName" => twig_get_attribute($this->env, $this->source,             // line 28
$context["item"], "gridName", [], "any", false, false, false, 28)];
            // line 31
            echo "            ";
            $context["itemsArray"] = twig_array_merge((isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new RuntimeError('Variable "itemsArray" does not exist.', 31, $this->source); })()), [0 => (isset($context["itemArray"]) || array_key_exists("itemArray", $context) ? $context["itemArray"] : (function () { throw new RuntimeError('Variable "itemArray" does not exist.', 31, $this->source); })())]);
            // line 32
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        ";
        // line 34
        $context["firstItem"] = twig_first($this->env, (isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new RuntimeError('Variable "itemsArray" does not exist.', 34, $this->source); })()));
        // line 35
        echo "        ";
        $context["options"] = twig_array_merge(((array_key_exists("params", $context)) ? (_twig_default_filter((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 35, $this->source); })()), [])) : ([])), ["items" =>         // line 36
(isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new RuntimeError('Variable "itemsArray" does not exist.', 36, $this->source); })()), "params" => ((        // line 37
array_key_exists("params", $context)) ? (_twig_default_filter((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 37, $this->source); })()), [])) : ([])), "gridWidgetName" =>         // line 38
(isset($context["gridWidgetName"]) || array_key_exists("gridWidgetName", $context) ? $context["gridWidgetName"] : (function () { throw new RuntimeError('Variable "gridWidgetName" does not exist.', 38, $this->source); })()), "dialogWidgetName" =>         // line 39
(isset($context["dialogWidgetName"]) || array_key_exists("dialogWidgetName", $context) ? $context["dialogWidgetName"] : (function () { throw new RuntimeError('Variable "dialogWidgetName" does not exist.', 39, $this->source); })()), "sourceEntityId" => ((twig_get_attribute($this->env, $this->source,         // line 40
($context["sourceEntity"] ?? null), "id", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["sourceEntity"] ?? null), "id", [], "any", false, false, false, 40), null)) : (null)), "sourceEntityClassAlias" =>         // line 41
(isset($context["sourceEntityClassAlias"]) || array_key_exists("sourceEntityClassAlias", $context) ? $context["sourceEntityClassAlias"] : (function () { throw new RuntimeError('Variable "sourceEntityClassAlias" does not exist.', 41, $this->source); })())]);
        // line 44
        echo "        ";
        $context["togglerId"] = uniqid("dropdown-");
        // line 45
        echo "
        <script type=\"text/template\" id=\"multi-grid-item\">
            <li id=\"<%- entity.get('entityAlias') %>\" class=\"dropdown-item\" data-cid=\"<%- entity.cid %>\">
                <%- entity.get('label') %>
            </li>
        </script>

        <div data-page-component-module=\"";
        // line 52
        echo twig_escape_filter($this->env, ((array_key_exists("multiGridComponent", $context)) ? (_twig_default_filter((isset($context["multiGridComponent"]) || array_key_exists("multiGridComponent", $context) ? $context["multiGridComponent"] : (function () { throw new RuntimeError('Variable "multiGridComponent" does not exist.', 52, $this->source); })()), "orodatagrid/js/app/components/multi-grid-component")) : ("orodatagrid/js/app/components/multi-grid-component")), "html", null, true);
        echo "\"
             data-page-component-options=\"";
        // line 53
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 53, $this->source); })())), "html", null, true);
        echo "\" class=\"dropdown\">
            <div class=\"activity-context-current-block dropdown-toggle\" id=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\"
                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"activity-context-current-item\"></span>
            </div>
            <ul class=\"context-items-dropdown dropdown-menu\" aria-labelledby=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\"></ul>
        </div>

        ";
        // line 61
        if ((isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new RuntimeError('Variable "itemsArray" does not exist.', 61, $this->source); })())) {
            // line 62
            echo "            ";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "widgetTemplate" => "dialog", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_datagrid_widget", twig_array_merge(twig_array_merge(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 67
($context["params"] ?? null), "grid_query", [], "any", false, true, false, 67), "params", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "grid_query", [], "any", false, true, false, 67), "params", [], "any", false, false, false, 67), [])) : ([])), ["gridName" => twig_get_attribute($this->env, $this->source, twig_first($this->env,             // line 68
(isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new RuntimeError('Variable "itemsArray" does not exist.', 68, $this->source); })())), "gridName", [], "array", false, false, false, 68), "params" => ["class_name" => twig_get_attribute($this->env, $this->source, twig_first($this->env,             // line 69
(isset($context["itemsArray"]) || array_key_exists("itemsArray", $context) ? $context["itemsArray"] : (function () { throw new RuntimeError('Variable "itemsArray" does not exist.', 69, $this->source); })())), "className", [], "array", false, false, false, 69)]]), ((            // line 70
array_key_exists("params", $context)) ? (_twig_default_filter((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 70, $this->source); })()), [])) : ([])))), "alias" =>             // line 72
(isset($context["gridWidgetName"]) || array_key_exists("gridWidgetName", $context) ? $context["gridWidgetName"] : (function () { throw new RuntimeError('Variable "gridWidgetName" does not exist.', 72, $this->source); })())]);
            // line 73
            echo "
        ";
        }
        // line 75
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroDataGrid/Grid/dialog/multi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 75,  160 => 73,  158 => 72,  157 => 70,  156 => 69,  155 => 68,  154 => 67,  152 => 62,  150 => 61,  144 => 58,  137 => 54,  133 => 53,  129 => 52,  120 => 45,  117 => 44,  115 => 41,  114 => 40,  113 => 39,  112 => 38,  111 => 37,  110 => 36,  108 => 35,  106 => 34,  103 => 33,  97 => 32,  94 => 31,  92 => 28,  91 => 27,  90 => 26,  88 => 25,  83 => 24,  81 => 23,  77 => 21,  52 => 20,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

{#
    Required variables:
        - gridWidgetName
        - dialogWidgetName
        - entityTargets
            - label
            - className
            - gridName
        - sourceEntityClassAlias
        - entityTargets

    Optional variables:
        - multiGridComponent
        - sourceEntity
        - params
            - grid_query
#}
{% block page_container %}
    <div class=\"widget-content\">

        {% set itemsArray = [] %}
        {% for item in entityTargets %}
            {% set itemArray = {
                'label': item.label|trans,
                'className': item.className,
                'gridName': item.gridName
                }
            %}
            {% set itemsArray = itemsArray|merge([itemArray]) %}
        {% endfor %}

        {% set firstItem = itemsArray|first %}
        {% set options = params|default({})|merge({
                items: itemsArray,
                params: params|default({}),
                gridWidgetName: gridWidgetName,
                dialogWidgetName: dialogWidgetName,
                sourceEntityId: sourceEntity.id|default(null),
                sourceEntityClassAlias: sourceEntityClassAlias
            })
        %}
        {% set togglerId = 'dropdown-'|uniqid %}

        <script type=\"text/template\" id=\"multi-grid-item\">
            <li id=\"<%- entity.get('entityAlias') %>\" class=\"dropdown-item\" data-cid=\"<%- entity.cid %>\">
                <%- entity.get('label') %>
            </li>
        </script>

        <div data-page-component-module=\"{{ multiGridComponent|default('orodatagrid/js/app/components/multi-grid-component') }}\"
             data-page-component-options=\"{{ options|json_encode }}\" class=\"dropdown\">
            <div class=\"activity-context-current-block dropdown-toggle\" id=\"{{ togglerId }}\"
                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"activity-context-current-item\"></span>
            </div>
            <ul class=\"context-items-dropdown dropdown-menu\" aria-labelledby=\"{{ togglerId }}\"></ul>
        </div>

        {% if itemsArray %}
            {{ oro_widget_render({
                'widgetType': 'block',
                'widgetTemplate': 'dialog',
                'url': path(
                    'oro_datagrid_widget',
                    params.grid_query.params|default({})|merge({
                        gridName: itemsArray|first['gridName'],
                        params: {class_name: itemsArray|first['className']},
                    })|merge(params|default({}))
                ),
                'alias': gridWidgetName,
            }) }}
        {% endif %}
    </div>
{% endblock %}
", "@OroDataGrid/Grid/dialog/multi.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/Grid/dialog/multi.html.twig");
    }
}
