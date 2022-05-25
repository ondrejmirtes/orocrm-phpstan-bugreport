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

/* @OroDataGrid/layouts/blank/imports/datagrid_toolbar/layout.html.twig */
class __TwigTemplate_eb91725c9dcdc82e5fbba83e7429c91e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '__datagrid_toolbar__datagrid_toolbar_actions_container_widget' => [$this, 'block___datagrid_toolbar__datagrid_toolbar_actions_container_widget'],
            '__datagrid_toolbar__datagrid_toolbar_mass_actions_widget' => [$this, 'block___datagrid_toolbar__datagrid_toolbar_mass_actions_widget'],
            '__datagrid_toolbar__datagrid_toolbar_extra_actions_widget' => [$this, 'block___datagrid_toolbar__datagrid_toolbar_extra_actions_widget'],
            '__datagrid_toolbar__datagrid_toolbar_tools_container_widget' => [$this, 'block___datagrid_toolbar__datagrid_toolbar_tools_container_widget'],
            '__datagrid_toolbar__datagrid_toolbar_actions_widget' => [$this, 'block___datagrid_toolbar__datagrid_toolbar_actions_widget'],
            '__datagrid_toolbar__datagrid_toolbar_page_size_widget' => [$this, 'block___datagrid_toolbar__datagrid_toolbar_page_size_widget'],
            '__datagrid_toolbar__datagrid_items_counter_widget' => [$this, 'block___datagrid_toolbar__datagrid_items_counter_widget'],
            '__datagrid_toolbar__datagrid_toolbar_pagination_widget' => [$this, 'block___datagrid_toolbar__datagrid_toolbar_pagination_widget'],
            '__datagrid_toolbar__datagrid_toolbar_widget' => [$this, 'block___datagrid_toolbar__datagrid_toolbar_widget'],
            '__datagrid_toolbar__datagrid_toolbar_sorting_widget' => [$this, 'block___datagrid_toolbar__datagrid_toolbar_sorting_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDataGrid/layouts/blank/imports/datagrid_toolbar/layout.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataGrid/layouts/blank/imports/datagrid_toolbar/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataGrid/layouts/blank/imports/datagrid_toolbar/layout.html.twig"));

        // line 1
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_actions_container_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_mass_actions_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_extra_actions_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_tools_container_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_actions_widget', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_page_size_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('__datagrid_toolbar__datagrid_items_counter_widget', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_pagination_widget', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('__datagrid_toolbar__datagrid_toolbar_sorting_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block___datagrid_toolbar__datagrid_toolbar_actions_container_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("__datagrid_toolbar__datagrid_toolbar_actions_container_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_actions_container_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_actions_container_widget"));

        // line 2
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 2, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 3
($context["attr"] ?? null), "class", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 3), "")) : ("")) . " grid-toolbar-mass-actions pull-left")]);
        // line 5
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 5, $this->source); })()), 'widget');
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 8
    public function block___datagrid_toolbar__datagrid_toolbar_mass_actions_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("__datagrid_toolbar__datagrid_toolbar_mass_actions_widget", $this->getTemplateName(), 8));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_mass_actions_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_mass_actions_widget"));

        // line 9
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 9, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 10
($context["attr"] ?? null), "class", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 10), "")) : ("")) . " mass-actions-panel btn-group icons-holder")]);
        // line 12
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 12, $this->source); })()), 'widget');
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 15
    public function block___datagrid_toolbar__datagrid_toolbar_extra_actions_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("__datagrid_toolbar__datagrid_toolbar_extra_actions_widget", $this->getTemplateName(), 15));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_extra_actions_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_extra_actions_widget"));

        // line 16
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 16, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 17
($context["attr"] ?? null), "class", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 17), "")) : ("")) . " extra-actions-panel"), "data-grid-extra-actions-panel" => ""]);
        // line 20
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 20, $this->source); })()), 'widget');
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 23
    public function block___datagrid_toolbar__datagrid_toolbar_tools_container_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("__datagrid_toolbar__datagrid_toolbar_tools_container_widget", $this->getTemplateName(), 23));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_tools_container_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_tools_container_widget"));

        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 24, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 25
($context["attr"] ?? null), "class", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 25), "")) : ("")) . " grid-toolbar-tools pull-right")]);
        // line 27
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 27, $this->source); })()), 'widget');
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 30
    public function block___datagrid_toolbar__datagrid_toolbar_actions_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("__datagrid_toolbar__datagrid_toolbar_actions_widget", $this->getTemplateName(), 30));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_actions_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_actions_widget"));

        // line 31
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 31, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 32
($context["attr"] ?? null), "class", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 32), "")) : ("")) . " actions-panel pull-right form-horizontal"), "data-grid-actions-panel" => ""]);
        // line 35
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 35, $this->source); })()), 'widget');
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 38
    public function block___datagrid_toolbar__datagrid_toolbar_page_size_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("__datagrid_toolbar__datagrid_toolbar_page_size_widget", $this->getTemplateName(), 38));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_page_size_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_page_size_widget"));

        // line 39
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 39, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 40
($context["attr"] ?? null), "class", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 40), "")) : ("")) . " page-size pull-right form-horizontal"), "data-grid-pagesize" => ""]);
        // line 43
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 43, $this->source); })()), 'widget');
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 46
    public function block___datagrid_toolbar__datagrid_items_counter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("__datagrid_toolbar__datagrid_items_counter_widget", $this->getTemplateName(), 46));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_items_counter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_items_counter_widget"));

        // line 47
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 47, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 48
($context["attr"] ?? null), "class", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 48), "")) : ("")) . " pull-left form-horizontal"), "data-grid-items-counter" => ""]);
        // line 51
        echo "    ";
        $context["toolbarPosition"] = ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-grid-toolbar", [], "array", true, true, false, 51)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-grid-toolbar", [], "array", false, false, false, 51), "")) : (""));
        // line 52
        echo "
    ";
        // line 53
        if (((isset($context["toolbarPosition"]) || array_key_exists("toolbarPosition", $context) ? $context["toolbarPosition"] : (function () { throw new RuntimeError('Variable "toolbarPosition" does not exist.', 53, $this->source); })()) != "bottom")) {
            // line 54
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">";
            echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 54, $this->source); })()), 'widget');
            echo "</div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 58
    public function block___datagrid_toolbar__datagrid_toolbar_pagination_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("__datagrid_toolbar__datagrid_toolbar_pagination_widget", $this->getTemplateName(), 58));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_pagination_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_pagination_widget"));

        // line 59
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 59, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 60
($context["attr"] ?? null), "class", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 60), "")) : ("")) . " pagination pagination-centered"), "data-grid-pagination" => ""]);
        // line 63
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 63, $this->source); })()), 'widget');
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 66
    public function block___datagrid_toolbar__datagrid_toolbar_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("__datagrid_toolbar__datagrid_toolbar_widget", $this->getTemplateName(), 66));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_widget"));

        // line 67
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 67, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 68
($context["attr"] ?? null), "class", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 68), "")) : ("")) . " grid-toolbar")]);
        // line 70
        echo "    <script type=\"text/html\" class=\"datagrid_templates\" data-identifier=\"template-datagrid-toolbar\">
        <div";
        // line 71
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 71, $this->source); })()), 'widget');
        echo "</div>
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 75
    public function block___datagrid_toolbar__datagrid_toolbar_sorting_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("__datagrid_toolbar__datagrid_toolbar_sorting_widget", $this->getTemplateName(), 75));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_sorting_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__datagrid_toolbar__datagrid_toolbar_sorting_widget"));

        // line 76
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 76, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 77
($context["attr"] ?? null), "class", [], "any", true, true, false, 77)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 77), "")) : ("")) . " sorting pull-left form-horizontal"), "data-grid-sorting" => ""]);
        // line 80
        echo "
    ";
        // line 81
        $context["toolbarPosition"] = ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-grid-toolbar", [], "array", true, true, false, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-grid-toolbar", [], "array", false, false, false, 81), "")) : (""));
        // line 82
        echo "
    ";
        // line 83
        if (((isset($context["toolbarPosition"]) || array_key_exists("toolbarPosition", $context) ? $context["toolbarPosition"] : (function () { throw new RuntimeError('Variable "toolbarPosition" does not exist.', 83, $this->source); })()) != "bottom")) {
            // line 84
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo "></div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroDataGrid/layouts/blank/imports/datagrid_toolbar/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  468 => 84,  466 => 83,  463 => 82,  461 => 81,  458 => 80,  456 => 77,  454 => 76,  441 => 75,  423 => 71,  420 => 70,  418 => 68,  416 => 67,  403 => 66,  385 => 63,  383 => 60,  381 => 59,  368 => 58,  349 => 54,  347 => 53,  344 => 52,  341 => 51,  339 => 48,  337 => 47,  324 => 46,  306 => 43,  304 => 40,  302 => 39,  289 => 38,  271 => 35,  269 => 32,  267 => 31,  254 => 30,  236 => 27,  234 => 25,  232 => 24,  219 => 23,  201 => 20,  199 => 17,  197 => 16,  184 => 15,  166 => 12,  164 => 10,  162 => 9,  149 => 8,  131 => 5,  129 => 3,  127 => 2,  114 => 1,  101 => 75,  98 => 74,  96 => 66,  93 => 65,  91 => 58,  88 => 57,  86 => 46,  83 => 45,  81 => 38,  78 => 37,  76 => 30,  73 => 29,  71 => 23,  68 => 22,  66 => 15,  63 => 14,  61 => 8,  58 => 7,  56 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block __datagrid_toolbar__datagrid_toolbar_actions_container_widget %}
    {% set attr = attr|merge({
        class: attr.class|default('') ~ \" grid-toolbar-mass-actions pull-left\"
    }) %}
    <div{{ block('block_attributes') }}>{{ block_widget(block) }}</div>
{% endblock %}

{% block __datagrid_toolbar__datagrid_toolbar_mass_actions_widget %}
    {% set attr = attr|merge({
        class: attr.class|default('') ~ \" mass-actions-panel btn-group icons-holder\"
    }) %}
    <div{{ block('block_attributes') }}>{{ block_widget(block) }}</div>
{% endblock %}

{% block __datagrid_toolbar__datagrid_toolbar_extra_actions_widget %}
    {% set attr = attr|merge({
        class: attr.class|default('') ~ \" extra-actions-panel\",
        'data-grid-extra-actions-panel': ''
    }) %}
    <div{{ block('block_attributes') }}>{{ block_widget(block) }}</div>
{% endblock %}

{% block __datagrid_toolbar__datagrid_toolbar_tools_container_widget %}
    {% set attr = attr|merge({
        class: attr.class|default('') ~ \" grid-toolbar-tools pull-right\"
    }) %}
    <div{{ block('block_attributes') }}>{{ block_widget(block) }}</div>
{% endblock %}

{% block __datagrid_toolbar__datagrid_toolbar_actions_widget %}
    {% set attr = attr|merge({
        class: attr.class|default('') ~ \" actions-panel pull-right form-horizontal\",
        'data-grid-actions-panel': ''
    }) %}
    <div{{ block('block_attributes') }}>{{ block_widget(block) }}</div>
{% endblock %}

{% block __datagrid_toolbar__datagrid_toolbar_page_size_widget %}
    {% set attr = attr|merge({
        class: attr.class|default('') ~ \" page-size pull-right form-horizontal\",
        'data-grid-pagesize': ''
    }) %}
    <div{{ block('block_attributes') }}>{{ block_widget(block) }}</div>
{% endblock %}

{% block __datagrid_toolbar__datagrid_items_counter_widget %}
    {% set attr = attr|merge({
        class: attr.class|default('') ~ \" pull-left form-horizontal\",
        'data-grid-items-counter': ''
    }) %}
    {% set toolbarPosition = attr['data-grid-toolbar']|default('') %}

    {% if toolbarPosition != 'bottom' %}
        <div{{ block('block_attributes') }}>{{ block_widget(block) }}</div>
    {% endif %}
{% endblock %}

{% block __datagrid_toolbar__datagrid_toolbar_pagination_widget %}
    {% set attr = attr|merge({
        class: attr.class|default('') ~ \" pagination pagination-centered\",
        'data-grid-pagination': ''
    }) %}
    <div{{ block('block_attributes') }}>{{ block_widget(block) }}</div>
{% endblock %}

{% block __datagrid_toolbar__datagrid_toolbar_widget %}
    {% set attr = attr|merge({
        class: attr.class|default('') ~ \" grid-toolbar\"
    }) %}
    <script type=\"text/html\" class=\"datagrid_templates\" data-identifier=\"template-datagrid-toolbar\">
        <div{{ block('block_attributes') }}>{{ block_widget(block) }}</div>
    </script>
{% endblock %}

{% block __datagrid_toolbar__datagrid_toolbar_sorting_widget %}
    {% set attr = attr|merge({
        class: attr.class|default('') ~ \" sorting pull-left form-horizontal\",
        'data-grid-sorting': ''
    }) %}

    {% set toolbarPosition = attr['data-grid-toolbar']|default('') %}

    {% if toolbarPosition != 'bottom' %}
        <div{{ block('block_attributes') }}></div>
    {% endif %}
{% endblock %}
", "@OroDataGrid/layouts/blank/imports/datagrid_toolbar/layout.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/imports/datagrid_toolbar/layout.html.twig");
    }
}
