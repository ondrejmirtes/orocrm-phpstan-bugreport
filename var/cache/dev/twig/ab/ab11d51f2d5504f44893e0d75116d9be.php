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

/* @OroNavigation/menuUpdate/index.html.twig */
class __TwigTemplate_5d5b09b4d9b260edc84923e613c1aa48 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'navButtons' => [$this, 'block_navButtons'],
            'content_datagrid' => [$this, 'block_content_datagrid'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["bap"]) || array_key_exists("bap", $context) ? $context["bap"] : (function () { throw new RuntimeError('Variable "bap" does not exist.', 1, $this->source); })()), "layout", [], "any", false, false, false, 1), "@OroNavigation/menuUpdate/index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/menuUpdate/index.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/menuUpdate/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/menuUpdate/index.html.twig"));

        // line 3
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/menuUpdate/index.html.twig", 3)->unwrap();
        // line 4
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroNavigation/menuUpdate/index.html.twig", 4)->unwrap();
        // line 6
        $context["pageTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.menuupdate.menus");
        // line 8
        if (array_key_exists("entityClass", $context)) {
            // line 9
            $context["buttonsPlaceholderData"] = ["entity_class" => (isset($context["entityClass"]) || array_key_exists("entityClass", $context) ? $context["entityClass"] : (function () { throw new RuntimeError('Variable "entityClass" does not exist.', 9, $this->source); })())];
        }
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 12));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"container-fluid page-title\">
        <div class=\"navigation navbar-extra navbar-extra-right\">
            <div class=\"row\">
                <div class=\"pull-left pull-left-extra\">
                    ";
        // line 17
        echo twig_include($this->env, $context, "@OroNavigation/menuUpdate/pageHeader.html.twig");
        echo "
                </div>
                ";
        // line 19
        if (array_key_exists("entityClass", $context)) {
            // line 20
            echo "                    <div class=\"pull-right title-buttons-container invisible\"
                         data-page-component-module=\"oroui/js/app/components/view-component\"
                         data-page-component-options=\"";
            // line 22
            echo twig_escape_filter($this->env, json_encode(["view" => "oroui/js/app/views/hidden-initialization-view"]), "html", null, true);
            echo "\"
                         data-layout=\"separate\">
                        ";
            // line 24
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("index_navButtons_before", $context)) ? (_twig_default_filter((isset($context["index_navButtons_before"]) || array_key_exists("index_navButtons_before", $context) ? $context["index_navButtons_before"] : (function () { throw new RuntimeError('Variable "index_navButtons_before" does not exist.', 24, $this->source); })()), "index_navButtons_before")) : ("index_navButtons_before")), (isset($context["buttonsPlaceholderData"]) || array_key_exists("buttonsPlaceholderData", $context) ? $context["buttonsPlaceholderData"] : (function () { throw new RuntimeError('Variable "buttonsPlaceholderData" does not exist.', 24, $this->source); })()));
            // line 25
            echo "                        ";
            $this->displayBlock('navButtons', $context, $blocks);
            // line 26
            echo "                        ";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("index_navButtons_after", $context)) ? (_twig_default_filter((isset($context["index_navButtons_after"]) || array_key_exists("index_navButtons_after", $context) ? $context["index_navButtons_after"] : (function () { throw new RuntimeError('Variable "index_navButtons_after" does not exist.', 26, $this->source); })()), "index_navButtons_after")) : ("index_navButtons_after")), (isset($context["buttonsPlaceholderData"]) || array_key_exists("buttonsPlaceholderData", $context) ? $context["buttonsPlaceholderData"] : (function () { throw new RuntimeError('Variable "buttonsPlaceholderData" does not exist.', 26, $this->source); })()));
            // line 27
            echo "                    </div>
                ";
        }
        // line 29
        echo "            </div>
        </div>
    </div>
    ";
        // line 32
        $this->displayBlock('content_datagrid', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 25
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 25));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 32
    public function block_content_datagrid($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_datagrid", $this->getTemplateName(), 32));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_datagrid"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_datagrid"));

        // line 33
        echo "        ";
        if (array_key_exists("gridName", $context)) {
            // line 34
            echo "            ";
            if (array_key_exists("gridScope", $context)) {
                // line 35
                echo "                ";
                $context["gridName"] = $this->extensions['Oro\Bundle\DataGridBundle\Twig\DataGridExtension']->buildGridFullName((isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 35, $this->source); })()), (isset($context["gridScope"]) || array_key_exists("gridScope", $context) ? $context["gridScope"] : (function () { throw new RuntimeError('Variable "gridScope" does not exist.', 35, $this->source); })()));
                // line 36
                echo "            ";
            }
            // line 37
            echo "            ";
            $context["renderParams"] = twig_array_merge(["enableFullScreenLayout" => true, "enableViews" => true, "showViewsInNavbar" => true], ((            // line 42
array_key_exists("renderParams", $context)) ? (_twig_default_filter((isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 42, $this->source); })()), [])) : ([])));
            // line 43
            echo "            ";
            echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [(isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 43, $this->source); })()), ((array_key_exists("params", $context)) ? (_twig_default_filter((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 43, $this->source); })()), [])) : ([])), (isset($context["renderParams"]) || array_key_exists("renderParams", $context) ? $context["renderParams"] : (function () { throw new RuntimeError('Variable "renderParams" does not exist.', 43, $this->source); })())], 43, $context, $this->getSourceContext());
            echo "

            ";
            // line 46
            echo "            ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/menuUpdate/index.html.twig", 46)->unwrap();
            // line 47
            echo "
            <div ";
            // line 48
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "orodatagrid/js/app/components/datagrid-allow-tracking-component", "options" => ["gridName" =>             // line 51
(isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 51, $this->source); })())]]], 48, $context, $this->getSourceContext());
            // line 53
            echo "></div>
        ";
        }
        // line 55
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/menuUpdate/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 55,  210 => 53,  208 => 51,  207 => 48,  204 => 47,  201 => 46,  195 => 43,  193 => 42,  191 => 37,  188 => 36,  185 => 35,  182 => 34,  179 => 33,  166 => 32,  142 => 25,  129 => 32,  124 => 29,  120 => 27,  117 => 26,  114 => 25,  112 => 24,  107 => 22,  103 => 20,  101 => 19,  96 => 17,  90 => 13,  77 => 12,  64 => 1,  61 => 9,  59 => 8,  57 => 6,  55 => 4,  53 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends bap.layout %}

{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}

{% set pageTitle = 'oro.navigation.menuupdate.menus'|trans %}

{% if entityClass is defined %}
    {% set buttonsPlaceholderData = {'entity_class': entityClass} %}
{% endif %}

{% block content %}
    <div class=\"container-fluid page-title\">
        <div class=\"navigation navbar-extra navbar-extra-right\">
            <div class=\"row\">
                <div class=\"pull-left pull-left-extra\">
                    {{ include('@OroNavigation/menuUpdate/pageHeader.html.twig') }}
                </div>
                {% if entityClass is defined %}
                    <div class=\"pull-right title-buttons-container invisible\"
                         data-page-component-module=\"oroui/js/app/components/view-component\"
                         data-page-component-options=\"{{ {'view': 'oroui/js/app/views/hidden-initialization-view'}|json_encode }}\"
                         data-layout=\"separate\">
                        {% placeholder index_navButtons_before with buttonsPlaceholderData %}
                        {% block navButtons %}{% endblock navButtons %}
                        {% placeholder index_navButtons_after with buttonsPlaceholderData %}
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
    {% block content_datagrid %}
        {% if gridName is defined %}
            {% if gridScope is defined %}
                {% set gridName = oro_datagrid_build_fullname(gridName, gridScope) %}
            {% endif %}
            {% set renderParams = {
            'enableFullScreenLayout': true,
            'enableViews': true,
            'showViewsInNavbar': true,
            }
            |merge(renderParams|default({})) %}
            {{ dataGrid.renderGrid(gridName, params|default({}), renderParams) }}

            {# Only grids on index pages will be tagged #}
            {% import '@OroUI/macros.html.twig' as UI %}

            <div {{ UI.renderPageComponentAttributes({
                module: 'orodatagrid/js/app/components/datagrid-allow-tracking-component',
                options: {
                    gridName: gridName
                }
            }) }}></div>
        {% endif %}
    {% endblock content_datagrid %}
{% endblock content %}
", "@OroNavigation/menuUpdate/index.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/menuUpdate/index.html.twig");
    }
}
