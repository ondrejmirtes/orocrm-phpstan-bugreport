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

/* @OroDataGrid/layouts/blank/default.html.twig */
class __TwigTemplate_be172f700c967ef1f776dc2e5e95a085 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'datagrid_widget' => [$this, 'block_datagrid_widget'],
            'taggable_datagrid_widget' => [$this, 'block_taggable_datagrid_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDataGrid/layouts/blank/default.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataGrid/layouts/blank/default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataGrid/layouts/blank/default.html.twig"));

        // line 1
        $context["grid_parameters"] = twig_array_merge(["enableFullScreenLayout" => true], (isset($context["grid_parameters"]) || array_key_exists("grid_parameters", $context) ? $context["grid_parameters"] : (function () { throw new RuntimeError('Variable "grid_parameters" does not exist.', 1, $this->source); })()));
        // line 2
        $this->displayBlock('datagrid_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('taggable_datagrid_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_datagrid_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("datagrid_widget", $this->getTemplateName(), 2));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datagrid_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datagrid_widget"));

        // line 3
        echo "    ";
        if (((isset($context["split_to_cells"]) || array_key_exists("split_to_cells", $context) ? $context["split_to_cells"] : (function () { throw new RuntimeError('Variable "split_to_cells" does not exist.', 3, $this->source); })()) != false)) {
            // line 4
            echo "        ";
            $context["themeOptions"] = ((twig_get_attribute($this->env, $this->source, ($context["grid_render_parameters"] ?? null), "themeOptions", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["grid_render_parameters"] ?? null), "themeOptions", [], "any", false, false, false, 4), [])) : ([]));
            // line 5
            echo "        ";
            $context["themeOptions"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["themeOptions"]) || array_key_exists("themeOptions", $context) ? $context["themeOptions"] : (function () { throw new RuntimeError('Variable "themeOptions" does not exist.', 5, $this->source); })()), ["headerRowTemplateSelector" => "#template-datagrid-header-row", "rowTemplateSelector" => "#template-datagrid-row"]);
            // line 9
            echo "        ";
            $context["toolbarOptions"] = ((twig_get_attribute($this->env, $this->source, ($context["grid_render_parameters"] ?? null), "toolbarOptions", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["grid_render_parameters"] ?? null), "toolbarOptions", [], "any", false, false, false, 9), [])) : ([]));
            // line 10
            echo "        ";
            $context["toolbarOptions"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["toolbarOptions"]) || array_key_exists("toolbarOptions", $context) ? $context["toolbarOptions"] : (function () { throw new RuntimeError('Variable "toolbarOptions" does not exist.', 10, $this->source); })()), ["datagridSettings" => ["addSorting" => false]]);
            // line 13
            echo "        ";
            $context["grid_render_parameters"] = twig_array_merge((isset($context["grid_render_parameters"]) || array_key_exists("grid_render_parameters", $context) ? $context["grid_render_parameters"] : (function () { throw new RuntimeError('Variable "grid_render_parameters" does not exist.', 13, $this->source); })()), ["themeOptions" =>             // line 14
(isset($context["themeOptions"]) || array_key_exists("themeOptions", $context) ? $context["themeOptions"] : (function () { throw new RuntimeError('Variable "themeOptions" does not exist.', 14, $this->source); })()), "toolbarOptions" =>             // line 15
(isset($context["toolbarOptions"]) || array_key_exists("toolbarOptions", $context) ? $context["toolbarOptions"] : (function () { throw new RuntimeError('Variable "toolbarOptions" does not exist.', 15, $this->source); })())]);
            // line 17
            echo "        ";
            $this->displayBlock("container_widget", $context, $blocks);
            echo "
    ";
        }
        // line 19
        echo "    ";
        $macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroDataGrid/layouts/blank/default.html.twig", 19)->unwrap();
        // line 20
        echo "    ";
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [(isset($context["grid_full_name"]) || array_key_exists("grid_full_name", $context) ? $context["grid_full_name"] : (function () { throw new RuntimeError('Variable "grid_full_name" does not exist.', 20, $this->source); })()), (isset($context["grid_parameters"]) || array_key_exists("grid_parameters", $context) ? $context["grid_parameters"] : (function () { throw new RuntimeError('Variable "grid_parameters" does not exist.', 20, $this->source); })()), (isset($context["grid_render_parameters"]) || array_key_exists("grid_render_parameters", $context) ? $context["grid_render_parameters"] : (function () { throw new RuntimeError('Variable "grid_render_parameters" does not exist.', 20, $this->source); })())], 20, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 23
    public function block_taggable_datagrid_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("taggable_datagrid_widget", $this->getTemplateName(), 23));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "taggable_datagrid_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "taggable_datagrid_widget"));

        // line 24
        echo "    ";
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 24, $this->source); })()), 'widget');
        echo "

    ";
        // line 26
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDataGrid/layouts/blank/default.html.twig", 26)->unwrap();
        // line 27
        echo "
    <div ";
        // line 28
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "orodatagrid/js/app/components/datagrid-allow-tracking-component", "options" => ["gridName" =>         // line 31
(isset($context["grid_full_name"]) || array_key_exists("grid_full_name", $context) ? $context["grid_full_name"] : (function () { throw new RuntimeError('Variable "grid_full_name" does not exist.', 31, $this->source); })())]]], 28, $context, $this->getSourceContext());
        // line 33
        echo "></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroDataGrid/layouts/blank/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 33,  151 => 31,  150 => 28,  147 => 27,  145 => 26,  139 => 24,  126 => 23,  110 => 20,  107 => 19,  101 => 17,  99 => 15,  98 => 14,  96 => 13,  93 => 10,  90 => 9,  87 => 5,  84 => 4,  81 => 3,  68 => 2,  55 => 23,  52 => 22,  50 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set grid_parameters = {'enableFullScreenLayout': true}|merge(grid_parameters) %}
{% block datagrid_widget %}
    {% if split_to_cells != false %}
        {% set themeOptions = grid_render_parameters.themeOptions|default({}) %}
        {% set themeOptions = layout_attr_defaults(themeOptions, {
            'headerRowTemplateSelector': '#template-datagrid-header-row',
            'rowTemplateSelector': '#template-datagrid-row'
        }) %}
        {% set toolbarOptions = grid_render_parameters.toolbarOptions|default({}) %}
        {% set toolbarOptions = layout_attr_defaults(toolbarOptions, {
            'datagridSettings': {'addSorting': false}
        }) %}
        {% set grid_render_parameters = grid_render_parameters|merge({
            'themeOptions': themeOptions,
            'toolbarOptions': toolbarOptions
        }) %}
        {{ block(\"container_widget\") }}
    {% endif %}
    {% import '@OroDataGrid/macros.html.twig' as dataGrid %}
    {{ dataGrid.renderGrid(grid_full_name, grid_parameters, grid_render_parameters) }}
{% endblock %}

{% block taggable_datagrid_widget %}
    {{ block_widget(block) }}

    {% import '@OroUI/macros.html.twig' as UI %}

    <div {{ UI.renderPageComponentAttributes({
        module: 'orodatagrid/js/app/components/datagrid-allow-tracking-component',
        options: {
            gridName: grid_full_name
        }
    }) }}></div>
{% endblock %}
", "@OroDataGrid/layouts/blank/default.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/default.html.twig");
    }
}
