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

/* @OroDashboard/Dashboard/update.html.twig */
class __TwigTemplate_1cd466d66e219ed24b6b8b41e9353dd0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageHeader' => [$this, 'block_pageHeader'],
            'navButtons' => [$this, 'block_navButtons'],
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDashboard/Dashboard/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Dashboard/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Dashboard/update.html.twig"));


        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.entity_label"), "%label%" => twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 3, $this->source); })()), "label", [], "any", false, false, false, 3)]]);
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [0 => "@OroForm/Form/fields.html.twig"], true);
        // line 6
        $context["formAction"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dashboard_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dashboard_create")));
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroDashboard/Dashboard/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 10));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 11
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)) {
            // line 12
            echo "        ";
            $context["breadcrumbs"] = ["entity" => [], "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dashboard_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.management_title"), "entityTitle" => twig_get_attribute($this->env, $this->source,             // line 16
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), "label", [], "any", false, false, false, 16)];
            // line 18
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 20
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.entity_label")]);
            // line 21
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroDashboard/Dashboard/update.html.twig", 21)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 21, $this->source); })())]));
            // line 22
            echo "    ";
        }
        
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

        // line 26
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDashboard/Dashboard/update.html.twig", 26)->unwrap();
        // line 27
        echo "
    ";
        // line 28
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dashboard_index")], 28, $context, $this->getSourceContext());
        echo "
    ";
        // line 29
        $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_dashboard_view", "params" => ["id" => "\$id", "change_dashboard" => true, "_enableContentProviders" => "mainMenu"]]], 29, $context, $this->getSourceContext());
        // line 37
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_dashboard_create")) {
            // line 38
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 38, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_dashboard_create"]], 38, $context, $this->getSourceContext()));
            // line 41
            echo "    ";
        }
        // line 42
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "value", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_dashboard_update"))) {
            // line 43
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 43, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_dashboard_update", "params" => ["id" => "\$id", "_enableContentProviders" => "mainMenu"]]], 43, $context, $this->getSourceContext()));
            // line 50
            echo "    ";
        }
        // line 51
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 51, $this->source); })())]], 51, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 54
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 54));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 55
        echo "    ";
        $context["id"] = "task-form";
        // line 56
        echo "
    ";
        // line 57
        ob_start();
        // line 58
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "label", [], "any", false, false, false, 58), 'row');
        echo "
        ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "owner", [], "any", true, true, false, 59)) {
            // line 60
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "owner", [], "any", false, false, false, 60), 'row');
            echo "
        ";
        }
        // line 62
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "startDashboard", [], "any", true, true, false, 62)) {
            // line 63
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "startDashboard", [], "any", false, false, false, 63), 'row');
            echo "
        ";
        }
        // line 65
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "children", [], "any", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 66
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 66), "extra_field", [], "any", true, true, false, 66) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 66), "extra_field", [], "any", false, false, false, 66))) {
                // line 67
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                echo "
            ";
            }
            // line 69
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    ";
        $context["dataBlock"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "
    ";
        // line 72
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General Information"), "subblocks" => [0 => ["title" => "", "data" => [0 =>         // line 78
(isset($context["dataBlock"]) || array_key_exists("dataBlock", $context) ? $context["dataBlock"] : (function () { throw new RuntimeError('Variable "dataBlock" does not exist.', 78, $this->source); })())]]]]];
        // line 83
        echo "
    ";
        // line 84
        $context["data"] = ["formErrors" => ((        // line 85
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 86
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 86, $this->source); })())];
        // line 88
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroDashboard/Dashboard/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 88,  257 => 86,  256 => 85,  255 => 84,  252 => 83,  250 => 78,  249 => 72,  246 => 71,  243 => 70,  237 => 69,  231 => 67,  228 => 66,  223 => 65,  217 => 63,  214 => 62,  208 => 60,  206 => 59,  201 => 58,  199 => 57,  196 => 56,  193 => 55,  180 => 54,  164 => 51,  161 => 50,  158 => 43,  155 => 42,  152 => 41,  149 => 38,  146 => 37,  144 => 29,  140 => 28,  137 => 27,  134 => 26,  121 => 25,  107 => 22,  104 => 21,  101 => 20,  95 => 18,  93 => 16,  91 => 12,  88 => 11,  75 => 10,  61 => 1,  59 => 7,  58 => 6,  56 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}

{% oro_title_set({params : {'%entityName%': 'oro.dashboard.entity_label'|trans, \"%label%\": entity.label} }) %}

{% form_theme form with ['@OroForm/Form/fields.html.twig'] %}
{% set formAction = form.vars.value.id
                    ? path('oro_dashboard_update', { 'id': form.vars.value.id })
                    : path('oro_dashboard_create')  %}

{% block pageHeader %}
    {% if form.vars.value.id %}
        {% set breadcrumbs = {
            'entity':      [],
            'indexPath':   path('oro_dashboard_index'),
            'indexLabel': 'oro.dashboard.management_title'|trans,
            'entityTitle': entity.label
        } %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.dashboard.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
    {% endif %}
{% endblock pageHeader %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {{ UI.cancelButton(path('oro_dashboard_index')) }}
    {% set html = UI.saveAndCloseButton({
        'route': 'oro_dashboard_view',
        'params': {
            'id': '\$id',
            'change_dashboard': true,
            '_enableContentProviders': 'mainMenu'
        }
    }) %}
    {% if is_granted('oro_dashboard_create') %}
        {% set html = html ~ UI.saveAndNewButton({
            'route': 'oro_dashboard_create'
        }) %}
    {% endif %}
    {% if form.vars.value.id or is_granted('oro_dashboard_update') %}
        {% set html = html ~ UI.saveAndStayButton({
            'route': 'oro_dashboard_update',
            'params': {
                'id': '\$id',
                '_enableContentProviders': 'mainMenu'
            }
        }) %}
    {% endif %}
    {{ UI.dropdownSaveButton({'html': html}) }}
{% endblock %}

{% block content_data %}
    {% set id = 'task-form' %}

    {% set dataBlock %}
        {{ form_row(form.label) }}
        {% if form.owner is defined %}
            {{ form_row(form.owner) }}
        {% endif %}
        {% if form.startDashboard is defined %}
            {{ form_row(form.startDashboard) }}
        {% endif %}
        {% for child in form.children %}
            {% if child.vars.extra_field is defined and child.vars.extra_field %}
                {{ form_row(child) }}
            {% endif %}
        {% endfor %}
    {% endset %}

    {% set dataBlocks = [{
        'title': 'General Information'|trans,
        'subblocks': [
            {
                'title': '',
                'data': [
                    dataBlock
                ]
            }
        ]
    }] %}

    {% set data = {
        'formErrors': form_errors(form)? form_errors(form) : null,
        'dataBlocks': dataBlocks,
    } %}
    {{ parent() }}
{% endblock %}


", "@OroDashboard/Dashboard/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Dashboard/update.html.twig");
    }
}
