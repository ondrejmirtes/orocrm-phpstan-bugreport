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

/* @OroForm/Form/fields.html.twig */
class __TwigTemplate_308c2ce425df48089b451c77568707e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'oro_select2_widget' => [$this, 'block_oro_select2_widget'],
            'oro_select2_javascript' => [$this, 'block_oro_select2_javascript'],
            'oro_select2_javascript_prototype' => [$this, 'block_oro_select2_javascript_prototype'],
            'oro_select2_hidden_row' => [$this, 'block_oro_select2_hidden_row'],
            'form_javascript' => [$this, 'block_form_javascript'],
            'form_stylesheet' => [$this, 'block_form_stylesheet'],
            'form_row_collection' => [$this, 'block_form_row_collection'],
            'oro_ticker_symbol_widget' => [$this, 'block_oro_ticker_symbol_widget'],
            'oro_multiple_entity_widget' => [$this, 'block_oro_multiple_entity_widget'],
            'form_label' => [$this, 'block_form_label'],
            'oro_money_row' => [$this, 'block_oro_money_row'],
            'oro_money_widget' => [$this, 'block_oro_money_widget'],
            'percent_row' => [$this, 'block_percent_row'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'oro_date_widget' => [$this, 'block_oro_date_widget'],
            'oro_datetime_widget' => [$this, 'block_oro_datetime_widget'],
            'oro_collection_widget' => [$this, 'block_oro_collection_widget'],
            'oro_form_js_validation' => [$this, 'block_oro_form_js_validation'],
            'oro_entity_create_or_select_row' => [$this, 'block_oro_entity_create_or_select_row'],
            'oro_autocomplete_widget' => [$this, 'block_oro_autocomplete_widget'],
            'oro_entity_create_or_select_widget' => [$this, 'block_oro_entity_create_or_select_widget'],
            'oro_entity_create_or_select_choice_widget' => [$this, 'block_oro_entity_create_or_select_choice_widget'],
            'oro_entity_create_or_select_inline_widget' => [$this, 'block_oro_entity_create_or_select_inline_widget'],
            'oro_link_type_widget' => [$this, 'block_oro_link_type_widget'],
            'oro_download_links_type_widget' => [$this, 'block_oro_download_links_type_widget'],
            'oro_simple_color_picker_row' => [$this, 'block_oro_simple_color_picker_row'],
            'oro_simple_color_picker_widget' => [$this, 'block_oro_simple_color_picker_widget'],
            'oro_simple_color_choice_widget' => [$this, 'block_oro_simple_color_choice_widget'],
            'oro_simple_color_choice_widget_options' => [$this, 'block_oro_simple_color_choice_widget_options'],
            'oro_color_table_row' => [$this, 'block_oro_color_table_row'],
            'oro_color_table_widget' => [$this, 'block_oro_color_table_widget'],
            'oro_resizeable_rich_text_widget' => [$this, 'block_oro_resizeable_rich_text_widget'],
            'oro_entity_tree_select_row' => [$this, 'block_oro_entity_tree_select_row'],
            'oro_entity_tree_select_widget' => [$this, 'block_oro_entity_tree_select_widget'],
            'button_row' => [$this, 'block_button_row'],
            'oro_checkbox_widget' => [$this, 'block_oro_checkbox_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/Form/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroForm/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroForm/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroForm/Form/fields.html.twig"));

        $this->parent = $this->loadTemplate("@OroUI/Form/fields.html.twig", "@OroForm/Form/fields.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_oro_select2_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_select2_widget", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_select2_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_select2_widget"));

        // line 4
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["configs"] ?? null), "grid", [], "any", true, true, false, 4) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configs"] ?? null), "grid", [], "any", false, true, false, 4), "name", [], "any", true, true, false, 4))) {
            // line 5
            echo "        ";
            $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_datagrid_index", ["gridName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 5, $this->source); })()), "grid", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5)]);
            // line 6
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["configs"] ?? null), "route_name", [], "any", true, true, false, 6) && twig_get_attribute($this->env, $this->source, (isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 6, $this->source); })()), "route_name", [], "any", false, false, false, 6))) {
            // line 7
            echo "        ";
            $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 7, $this->source); })()), "route_name", [], "any", false, false, false, 7), ((twig_get_attribute($this->env, $this->source, ($context["configs"] ?? null), "route_parameters", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["configs"] ?? null), "route_parameters", [], "any", false, false, false, 7), [])) : ([])));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context["url"] = "";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["configs"] ?? null), "placeholder", [], "any", true, true, false, 11)) {
            // line 12
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 12, $this->source); })()), ["placeholder" => twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 12, $this->source); })()), "placeholder", [], "any", false, false, false, 12)))]);
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["configs"] ?? null), "result_template_twig", [], "any", true, true, false, 14) && twig_get_attribute($this->env, $this->source, (isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 14, $this->source); })()), "result_template_twig", [], "any", false, false, false, 14))) {
            // line 15
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 15, $this->source); })()), ["result_template" => twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 15, $this->source); })()), "result_template_twig", [], "any", false, false, false, 15))]);
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["configs"] ?? null), "selection_template_twig", [], "any", true, true, false, 17) && twig_get_attribute($this->env, $this->source, (isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 17, $this->source); })()), "selection_template_twig", [], "any", false, false, false, 17))) {
            // line 18
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 18, $this->source); })()), ["selection_template" => twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 18, $this->source); })()), "selection_template_twig", [], "any", false, false, false, 18))]);
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        $context["configs"] = twig_array_merge(["containerCssClass" => "oro-select2", "dropdownCssClass" => "oro-select2__dropdown"],         // line 23
(isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 23, $this->source); })()));
        // line 24
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["configs"] ?? null), "component", [], "any", true, true, false, 24)) {
            // line 25
            echo "        ";
            $context["component"] = (("oro/select2-" . twig_get_attribute($this->env, $this->source, (isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 25, $this->source); })()), "component", [], "any", false, false, false, 25)) . "-component");
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "        ";
            $context["component"] = "oro/select2-component";
            // line 28
            echo "    ";
        }
        // line 29
        echo "    ";
        if ( !array_key_exists("component_options", $context)) {
            // line 30
            echo "        ";
            $context["component_options"] = [];
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        $context["component_options"] = twig_array_merge((isset($context["component_options"]) || array_key_exists("component_options", $context) ? $context["component_options"] : (function () { throw new RuntimeError('Variable "component_options" does not exist.', 32, $this->source); })()), ["configs" => (isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 32, $this->source); })()), "url" => (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 32, $this->source); })())]);
        // line 33
        echo "    ";
        if (array_key_exists("excluded", $context)) {
            // line 34
            echo "        ";
            $context["component_options"] = twig_array_merge((isset($context["component_options"]) || array_key_exists("component_options", $context) ? $context["component_options"] : (function () { throw new RuntimeError('Variable "component_options" does not exist.', 34, $this->source); })()), ["excluded" => (isset($context["excluded"]) || array_key_exists("excluded", $context) ? $context["excluded"] : (function () { throw new RuntimeError('Variable "excluded" does not exist.', 34, $this->source); })())]);
            // line 35
            echo "    ";
        }
        // line 36
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'widget', ["attr" => ["class" => "select2", "data-page-component-module" =>         // line 38
(isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 38, $this->source); })()), "data-page-component-options" => json_encode(        // line 39
(isset($context["component_options"]) || array_key_exists("component_options", $context) ? $context["component_options"] : (function () { throw new RuntimeError('Variable "component_options" does not exist.', 39, $this->source); })()))]]);
        // line 40
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 43
    public function block_oro_select2_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_select2_javascript", $this->getTemplateName(), 43));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_select2_javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_select2_javascript"));

        // line 44
        echo "    ";
        $this->displayBlock('oro_select2_javascript_prototype', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function block_oro_select2_javascript_prototype($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_select2_javascript_prototype", $this->getTemplateName(), 44));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_select2_javascript_prototype"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_select2_javascript_prototype"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 47
    public function block_oro_select2_hidden_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_select2_hidden_row", $this->getTemplateName(), 47));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_select2_hidden_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_select2_hidden_row"));

        // line 48
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 51
    public function block_form_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("form_javascript", $this->getTemplateName(), 51));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_javascript"));

        // line 52
        echo "    ";
        ob_start();
        // line 53
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 54
            echo "            ";
            echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderJavascript($context["child"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    ";
        $___internal_parse_59_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo twig_spaceless($___internal_parse_59_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 59
    public function block_form_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("form_stylesheet", $this->getTemplateName(), 59));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_stylesheet"));

        // line 60
        echo "    ";
        ob_start();
        // line 61
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 62
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'stylesheet');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    ";
        $___internal_parse_60_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        echo twig_spaceless($___internal_parse_60_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 67
    public function block_form_row_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("form_row_collection", $this->getTemplateName(), 67));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row_collection"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row_collection"));

        // line 68
        echo "    ";
        ob_start();
        // line 69
        echo "        ";
        $macros["__internal_parse_62"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroForm/Form/fields.html.twig", 69)->unwrap();
        // line 70
        echo "        <div class=\"control-group";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 70)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 70, $this->source); })()), "class", [], "any", false, false, false, 70), "html", null, true);
        }
        if (array_key_exists("block_prefixes", $context)) {
            echo " control-group-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 70, $this->source); })()), 1, [], "array", false, false, false, 70), "html", null, true);
        }
        if (twig_get_attribute($this->env, $this->source, ($context["group_attr"] ?? null), "class", [], "any", true, true, false, 70)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["group_attr"]) || array_key_exists("group_attr", $context) ? $context["group_attr"] : (function () { throw new RuntimeError('Variable "group_attr" does not exist.', 70, $this->source); })()), "class", [], "any", false, false, false, 70), "html", null, true);
        }
        echo "\"";
        if (array_key_exists("group_attr", $context)) {
            $this->displayBlock("group_attributes", $context, $blocks);
        }
        echo ">
            ";
        // line 71
        if ((((array_key_exists("hint", $context)) ? (_twig_default_filter((isset($context["hint"]) || array_key_exists("hint", $context) ? $context["hint"] : (function () { throw new RuntimeError('Variable "hint" does not exist.', 71, $this->source); })()))) : ("")) && (((array_key_exists("hint_position", $context)) ? (_twig_default_filter((isset($context["hint_position"]) || array_key_exists("hint_position", $context) ? $context["hint_position"] : (function () { throw new RuntimeError('Variable "hint_position" does not exist.', 71, $this->source); })()))) : ("")) == "above"))) {
            // line 72
            echo "                <div";
            $this->displayBlock("hint_attributes", $context, $blocks);
            echo ">";
            echo (isset($context["hint"]) || array_key_exists("hint", $context) ? $context["hint"] : (function () { throw new RuntimeError('Variable "hint" does not exist.', 72, $this->source); })());
            echo "</div>
            ";
        }
        // line 74
        echo "            ";
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 74, $this->source); })()) === false)) {
            // line 75
            echo "                <div class=\"control-label wrap\">
                    ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'label', ["label_attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 76, $this->source); })())]);
            echo "
                </div>
            ";
        }
        // line 79
        echo "            <div class=\"controls";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 79, $this->source); })())) > 0)) {
            echo " validation-error";
        }
        echo "\">
                <div class=\"row-oro\">
                    <div class=\"oro-item-collection collection-fields-list\" data-prototype=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_call_macro($macros["__internal_parse_62"], "macro_collection_prototype", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })())], 81, $context, $this->getSourceContext()));
        echo "\">
                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "children", [], "any", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            echo twig_call_macro($macros["__internal_parse_62"], "macro_collection_prototype", [$context["child"]], 82, $context, $this->getSourceContext());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </div>
                    ";
        // line 84
        if ((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 84, $this->source); })())) {
            echo "<a class=\"btn add-list-item\" href=\"#\" role=\"button\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["add_label"]) || array_key_exists("add_label", $context) ? $context["add_label"] : (function () { throw new RuntimeError('Variable "add_label" does not exist.', 84, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 84, $this->source); })())), "html", null, true);
            echo "</a>";
        }
        // line 85
        echo "                </div>
                ";
        // line 86
        if ((((array_key_exists("hint", $context)) ? (_twig_default_filter((isset($context["hint"]) || array_key_exists("hint", $context) ? $context["hint"] : (function () { throw new RuntimeError('Variable "hint" does not exist.', 86, $this->source); })()))) : ("")) && (((array_key_exists("hint_position", $context)) ? (_twig_default_filter((isset($context["hint_position"]) || array_key_exists("hint_position", $context) ? $context["hint_position"] : (function () { throw new RuntimeError('Variable "hint_position" does not exist.', 86, $this->source); })()))) : ("")) == "after_input"))) {
            // line 87
            echo "                    <div";
            $this->displayBlock("hint_attributes", $context, $blocks);
            echo ">";
            echo (isset($context["hint"]) || array_key_exists("hint", $context) ? $context["hint"] : (function () { throw new RuntimeError('Variable "hint" does not exist.', 87, $this->source); })());
            echo "</div>
                ";
        }
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'errors');
        // line 90
        echo "</div>
            ";
        // line 91
        if ((((array_key_exists("hint", $context)) ? (_twig_default_filter((isset($context["hint"]) || array_key_exists("hint", $context) ? $context["hint"] : (function () { throw new RuntimeError('Variable "hint" does not exist.', 91, $this->source); })()))) : ("")) && (((array_key_exists("hint_position", $context)) ? (_twig_default_filter((isset($context["hint_position"]) || array_key_exists("hint_position", $context) ? $context["hint_position"] : (function () { throw new RuntimeError('Variable "hint_position" does not exist.', 91, $this->source); })()))) : ("")) == "below"))) {
            // line 92
            echo "                <div";
            $this->displayBlock("hint_attributes", $context, $blocks);
            echo ">";
            echo (isset($context["hint"]) || array_key_exists("hint", $context) ? $context["hint"] : (function () { throw new RuntimeError('Variable "hint" does not exist.', 92, $this->source); })());
            echo "</div>
            ";
        }
        // line 94
        echo "        </div>
    ";
        $___internal_parse_61_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        echo twig_spaceless($___internal_parse_61_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 98
    public function block_oro_ticker_symbol_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_ticker_symbol_widget", $this->getTemplateName(), 98));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_ticker_symbol_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_ticker_symbol_widget"));

        // line 99
        echo "    <script>
        loadModules(['jquery', 'bootstrap'],
        function(\$){
            \$(function() {
                var cache = {};
                \$(\"#";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "\").typeahead({
                    source: function (request, process) {
                        YAHOO = {
                            Finance: {
                                SymbolSuggest: {
                                    ssCallback: function (data) {
                                        var result = \$.map(data.ResultSet.Result, function (item) {
                                            return item.name + \" (\" + item.symbol + \")\";
                                        });
                                        \$.each(data.ResultSet.Result, function (itemKey, item) {
                                            cache[item.name + \" (\" + item.symbol + \")\"] = item.symbol;
                                        });
                                        process(result)
                                    }
                                }
                            }
                        };
                        \$.ajax({
                            type: \"GET\",
                            dataType: \"jsonp\",
                            jsonp: \"callback\",
                            jsonpCallback: \"YAHOO.Finance.SymbolSuggest.ssCallback\",
                            data: {
                                query: request
                            },
                            cache: true,
                            url: \"http://autoc.finance.yahoo.com/autoc\"
                        });
                    },
                    updater: function(item) {
                        if (typeof cache[item] != 'undefined') {
                            return cache[item];
                        } else {
                            return item;
                        }
                    }
                });
            });
        });
    </script>

    ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'widget');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 148
    public function block_oro_multiple_entity_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_multiple_entity_widget", $this->getTemplateName(), 148));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_multiple_entity_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_multiple_entity_widget"));

        // line 149
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), 'widget');
        echo "

    <div id=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 151, $this->source); })()), "html", null, true);
        echo "-container\"></div>

    <script>
        loadModules(['jquery',
            'oroform/js/multiple-entity', 'oroform/js/multiple-entity/collection', 'oroform/js/multiple-entity/model'
        ], function(\$, MultipleEntity, MultipleEntityCollection, MultipleEntityModel) {
            ";
        // line 157
        $context["selectionUrl"] = null;
        // line 158
        echo "            ";
        $context["originalFieldId"] = twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 158, $this->source); })()), "data-ftid", [], "array", false, false, false, 158);
        // line 159
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 159), "grid_url", [], "any", true, true, false, 159) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "vars", [], "any", false, false, false, 159), "grid_url", [], "any", false, false, false, 159))) {
            // line 160
            echo "                ";
            $context["selectionUrl"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "vars", [], "any", false, false, false, 160), "grid_url", [], "any", false, false, false, 160);
            // line 161
            echo "            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 161), "selection_url", [], "any", true, true, false, 161) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "vars", [], "any", false, false, false, 161), "selection_url", [], "any", false, false, false, 161))) {
            // line 162
            echo "                ";
            $context["selectionUrl"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "vars", [], "any", false, false, false, 162), "selection_url", [], "any", false, false, false, 162);
            // line 163
            echo "            ";
        }
        // line 164
        echo "            ";
        $context["selectionRouteName"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 164), "selection_route", [], "any", true, true, false, 164)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 164), "selection_route", [], "any", false, false, false, 164), null)) : (null));
        // line 165
        echo "            ";
        $context["selectionRouteParameters"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 165), "selection_route_parameters", [], "any", true, true, false, 165)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 165), "selection_route_parameters", [], "any", false, false, false, 165), [])) : ([]));
        // line 166
        echo "
            var widget = new MultipleEntity({
                el: '#";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 168, $this->source); })()), "html", null, true);
        echo "-container',
                addedElement: 'input[data-ftid=\"";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["originalFieldId"]) || array_key_exists("originalFieldId", $context) ? $context["originalFieldId"] : (function () { throw new RuntimeError('Variable "originalFieldId" does not exist.', 169, $this->source); })()), "html", null, true);
        echo "_added\"]',
                removedElement: 'input[data-ftid=\"";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["originalFieldId"]) || array_key_exists("originalFieldId", $context) ? $context["originalFieldId"] : (function () { throw new RuntimeError('Variable "originalFieldId" does not exist.', 170, $this->source); })()), "html", null, true);
        echo "_removed\"]',
                name: ";
        // line 171
        echo json_encode((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 171, $this->source); })()));
        echo ",
                defaultElement: ";
        // line 172
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "vars", [], "any", false, false, false, 172), "default_element", [], "any", false, false, false, 172));
        echo ",
                selectionUrl: ";
        // line 173
        echo json_encode((isset($context["selectionUrl"]) || array_key_exists("selectionUrl", $context) ? $context["selectionUrl"] : (function () { throw new RuntimeError('Variable "selectionUrl" does not exist.', 173, $this->source); })()));
        echo ",
                selectionRouteName: ";
        // line 174
        echo json_encode((isset($context["selectionRouteName"]) || array_key_exists("selectionRouteName", $context) ? $context["selectionRouteName"] : (function () { throw new RuntimeError('Variable "selectionRouteName" does not exist.', 174, $this->source); })()));
        echo ",
                selectionRouteParams: ";
        // line 175
        echo json_encode((isset($context["selectionRouteParameters"]) || array_key_exists("selectionRouteParameters", $context) ? $context["selectionRouteParameters"] : (function () { throw new RuntimeError('Variable "selectionRouteParameters" does not exist.', 175, $this->source); })()), twig_constant("JSON_FORCE_OBJECT"));
        echo ",
                allowAction: ";
        // line 176
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "vars", [], "any", false, false, false, 176), "allow_action", [], "any", false, false, false, 176));
        echo ",
                collection: new MultipleEntityCollection(),
                selectorWindowTitle: ";
        // line 178
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "vars", [], "any", false, false, false, 178), "selector_window_title", [], "any", false, false, false, 178)));
        echo "
            });
            var data = [];
            ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["initial_elements"]) || array_key_exists("initial_elements", $context) ? $context["initial_elements"] : (function () { throw new RuntimeError('Variable "initial_elements" does not exist.', 181, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 182
            echo "                data.push(new MultipleEntityModel(";
            echo json_encode($context["element"]);
            echo "));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "            widget.getCollection().reset(data);

            ";
        // line 186
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 186), "extra_config", [], "any", true, true, false, 186) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "vars", [], "any", false, false, false, 186), "extra_config", [], "any", false, false, false, 186))) {
            // line 187
            echo "                ";
            $this->displayBlock(("oro_multiple_entity_js_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "vars", [], "any", false, false, false, 187), "extra_config", [], "any", false, false, false, 187)), $context, $blocks);
            echo "
            ";
        }
        // line 189
        echo "        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 193
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("form_label", $this->getTemplateName(), 193));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 194
        echo "    ";
        ob_start();
        // line 195
        echo "    ";
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 195, $this->source); })()) === false)) {
            // line 196
            echo "        ";
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 196, $this->source); })())) {
                // line 197
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 197, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 197, $this->source); })())]);
                // line 198
                echo "        ";
            }
            // line 199
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 199, $this->source); })())) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 200, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 200)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 200), "")) : ("")) . " required"))]);
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 202, $this->source); })())) > 0)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 203, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 203)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 203), "")) : ("")) . " validation-error"))]);
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 205, $this->source); })()))) {
                // line 206
                echo "            ";
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 206, $this->source); })()))) {
                    // line 207
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 207, $this->source); })()), ["%name%" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 207, $this->source); })()), "%id%" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 207, $this->source); })())]);
                    // line 208
                    echo "            ";
                } else {
                    // line 209
                    echo "                ";
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 209, $this->source); })()));
                    // line 210
                    echo "            ";
                }
                // line 211
                echo "        ";
            }
            // line 212
            echo "        ";
            $context["isRadioLabel"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 212), "vars", [], "any", false, true, false, 212), "expanded", [], "any", true, true, false, 212)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 212), "vars", [], "any", false, true, false, 212), "expanded", [], "any", false, false, false, 212), false)) : (false)) && array_key_exists("checked", $context));
            // line 213
            echo "
        <label";
            // line 214
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 214, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 215
            if ((array_key_exists("tooltip", $context) && (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 215, $this->source); })()))) {
                // line 216
                $macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroForm/Form/fields.html.twig", 216)->unwrap();
                // line 217
                echo "                ";
                echo twig_call_macro($macros["ui"], "macro_tooltip", [                // line 218
(isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 218, $this->source); })()), ((                // line 219
array_key_exists("tooltip_parameters", $context)) ? (_twig_default_filter((isset($context["tooltip_parameters"]) || array_key_exists("tooltip_parameters", $context) ? $context["tooltip_parameters"] : (function () { throw new RuntimeError('Variable "tooltip_parameters" does not exist.', 219, $this->source); })()), [])) : ([])), ((                // line 220
array_key_exists("tooltip_placement", $context)) ? (_twig_default_filter((isset($context["tooltip_placement"]) || array_key_exists("tooltip_placement", $context) ? $context["tooltip_placement"] : (function () { throw new RuntimeError('Variable "tooltip_placement" does not exist.', 220, $this->source); })()), null)) : (null)), ((                // line 221
array_key_exists("tooltip_details_enabled", $context)) ? (_twig_default_filter((isset($context["tooltip_details_enabled"]) || array_key_exists("tooltip_details_enabled", $context) ? $context["tooltip_details_enabled"] : (function () { throw new RuntimeError('Variable "tooltip_details_enabled" does not exist.', 221, $this->source); })()), false)) : (false)), ((                // line 222
array_key_exists("tooltip_details_link", $context)) ? (_twig_default_filter((isset($context["tooltip_details_link"]) || array_key_exists("tooltip_details_link", $context) ? $context["tooltip_details_link"] : (function () { throw new RuntimeError('Variable "tooltip_details_link" does not exist.', 222, $this->source); })()), null)) : (null)), ((                // line 223
array_key_exists("tooltip_details_anchor", $context)) ? (_twig_default_filter((isset($context["tooltip_details_anchor"]) || array_key_exists("tooltip_details_anchor", $context) ? $context["tooltip_details_anchor"] : (function () { throw new RuntimeError('Variable "tooltip_details_anchor" does not exist.', 223, $this->source); })()), null)) : (null))], 217, $context, $this->getSourceContext());
            }
            // line 226
            if ((array_key_exists("translatable_label", $context) &&  !(isset($context["translatable_label"]) || array_key_exists("translatable_label", $context) ? $context["translatable_label"] : (function () { throw new RuntimeError('Variable "translatable_label" does not exist.', 226, $this->source); })()))) {
                // line 227
                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 227, $this->source); })()), "html", null, true);
            } elseif ((            // line 228
array_key_exists("raw_label", $context) && (isset($context["raw_label"]) || array_key_exists("raw_label", $context) ? $context["raw_label"] : (function () { throw new RuntimeError('Variable "raw_label" does not exist.', 228, $this->source); })()))) {
                // line 229
                echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 229, $this->source); })());
            } else {
                // line 231
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 231, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 231, $this->source); })())), "html", null, true);
            }
            // line 233
            echo "<em>";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 233, $this->source); })()) &&  !(isset($context["isRadioLabel"]) || array_key_exists("isRadioLabel", $context) ? $context["isRadioLabel"] : (function () { throw new RuntimeError('Variable "isRadioLabel" does not exist.', 233, $this->source); })()))) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
            echo "</em>
        </label>";
        }
        $___internal_parse_63_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 194
        echo twig_spaceless($___internal_parse_63_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 239
    public function block_oro_money_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_money_row", $this->getTemplateName(), 239));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_money_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_money_row"));

        // line 240
        echo "    ";
        $context["label"] = ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 240, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 240, $this->source); })())) . " (") . (isset($context["currency_symbol"]) || array_key_exists("currency_symbol", $context) ? $context["currency_symbol"] : (function () { throw new RuntimeError('Variable "currency_symbol" does not exist.', 240, $this->source); })())) . ")");
        // line 241
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), 'row', ["type" => "text", "label" => (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 241, $this->source); })()), "translatable_label" => false]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 244
    public function block_oro_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_money_widget", $this->getTemplateName(), 244));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_money_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_money_widget"));

        // line 245
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 245, $this->source); })()), "text")) : ("text"));
        // line 246
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 249
    public function block_percent_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("percent_row", $this->getTemplateName(), 249));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_row"));

        // line 250
        echo "    ";
        $context["label"] = ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 250, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 250, $this->source); })())) . " (%)");
        // line 251
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), 'row', ["type" => "text", "label" => (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 251, $this->source); })()), "translatable_label" => false]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 254
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("percent_widget", $this->getTemplateName(), 254));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 255
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 255, $this->source); })()), "text")) : ("text"));
        // line 256
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 259
    public function block_oro_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_date_widget", $this->getTemplateName(), 259));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_date_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_date_widget"));

        // line 260
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-validation", [], "any", true, true, false, 260)) {
            // line 261
            echo "        ";
            $context["dateValidation"] = twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 261, $this->source); })()), "data-validation", [], "array", false, false, false, 261);
            // line 262
            echo "    ";
        } else {
            // line 263
            echo "        ";
            $context["dateValidation"] = ["Date" => []];
            // line 264
            echo "
        ";
            // line 265
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 265, $this->source); })())) {
                // line 266
                echo "            ";
                $context["dateValidation"] = twig_array_merge((isset($context["dateValidation"]) || array_key_exists("dateValidation", $context) ? $context["dateValidation"] : (function () { throw new RuntimeError('Variable "dateValidation" does not exist.', 266, $this->source); })()), ["NotBlank" => ["message" => "This value should not be blank."]]);
                // line 267
                echo "        ";
            }
            // line 268
            echo "
        ";
            // line 269
            $context["dateValidation"] = json_encode((isset($context["dateValidation"]) || array_key_exists("dateValidation", $context) ? $context["dateValidation"] : (function () { throw new RuntimeError('Variable "dateValidation" does not exist.', 269, $this->source); })()), twig_constant("JSON_FORCE_OBJECT"));
            // line 270
            echo "    ";
        }
        // line 271
        echo "
    ";
        // line 272
        $context["options"] = ["view" => "oroui/js/app/views/datepicker/datepicker-view", "nativeMode" => $this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile(), "dateInputAttrs" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.form.choose_date"), "id" =>         // line 277
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 277, $this->source); })()), "name" =>         // line 278
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 278, $this->source); })()), "data-validation" =>         // line 279
(isset($context["dateValidation"]) || array_key_exists("dateValidation", $context) ? $context["dateValidation"] : (function () { throw new RuntimeError('Variable "dateValidation" does not exist.', 279, $this->source); })()), "class" => ("datepicker-input " . ((twig_get_attribute($this->env, $this->source,         // line 280
($context["attr"] ?? null), "class", [], "any", true, true, false, 280)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 280, $this->source); })()), "class", [], "array", false, false, false, 280)) : (""))), "aria-live" => "assertive", "autocomplete" => "off", "autocorrect" => "off", "autocapitalize" => "off"], "datePickerOptions" => ["altFormat" => "yy-mm-dd", "changeMonth" => true, "changeYear" => true, "yearRange" => ((        // line 290
array_key_exists("years", $context)) ? (_twig_default_filter((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 290, $this->source); })()), "-80:+1")) : ("-80:+1")), "minDate" =>         // line 291
(isset($context["minDate"]) || array_key_exists("minDate", $context) ? $context["minDate"] : (function () { throw new RuntimeError('Variable "minDate" does not exist.', 291, $this->source); })()), "maxDate" =>         // line 292
(isset($context["maxDate"]) || array_key_exists("maxDate", $context) ? $context["maxDate"] : (function () { throw new RuntimeError('Variable "maxDate" does not exist.', 292, $this->source); })()), "showButtonPanel" => true]];
        // line 296
        echo "    ";
        $context["id"] = ("hidden_" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 296, $this->source); })()));
        // line 297
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 297, $this->source); })()), ["data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => json_encode(        // line 299
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 299, $this->source); })()), twig_constant("JSON_FORCE_OBJECT"))]);
        // line 301
        echo "
    ";
        // line 302
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 305
    public function block_oro_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_datetime_widget", $this->getTemplateName(), 305));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_datetime_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_datetime_widget"));

        // line 306
        echo "    ";
        $context["dateValidation"] = ["Date" => []];
        // line 307
        echo "    ";
        $context["timeValidation"] = ["Time" => []];
        // line 308
        echo "
    ";
        // line 309
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 309, $this->source); })())) {
            // line 310
            echo "        ";
            $context["dateValidation"] = twig_array_merge((isset($context["dateValidation"]) || array_key_exists("dateValidation", $context) ? $context["dateValidation"] : (function () { throw new RuntimeError('Variable "dateValidation" does not exist.', 310, $this->source); })()), ["NotBlank" => []]);
            // line 311
            echo "        ";
            $context["timeValidation"] = twig_array_merge((isset($context["timeValidation"]) || array_key_exists("timeValidation", $context) ? $context["timeValidation"] : (function () { throw new RuntimeError('Variable "timeValidation" does not exist.', 311, $this->source); })()), ["NotBlank" => []]);
            // line 312
            echo "    ";
        }
        // line 313
        echo "
    ";
        // line 314
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 314)) {
            // line 315
            echo "        ";
            $context["attrClass"] = twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 315, $this->source); })()), "class", [], "array", false, false, false, 315);
            // line 316
            echo "    ";
        } else {
            // line 317
            echo "        ";
            $context["attrClass"] = "";
            // line 318
            echo "    ";
        }
        // line 319
        echo "
    ";
        // line 320
        $context["options"] = ["view" => "oroui/js/app/views/datepicker/datetimepicker-view", "nativeMode" => $this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile(), "dateInputAttrs" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.form.choose_date"), "id" =>         // line 325
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 325, $this->source); })()), "name" =>         // line 326
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 326, $this->source); })()), "class" => ("input-small datepicker-input " .         // line 327
(isset($context["attrClass"]) || array_key_exists("attrClass", $context) ? $context["attrClass"] : (function () { throw new RuntimeError('Variable "attrClass" does not exist.', 327, $this->source); })())), "data-validation" => json_encode(        // line 328
(isset($context["dateValidation"]) || array_key_exists("dateValidation", $context) ? $context["dateValidation"] : (function () { throw new RuntimeError('Variable "dateValidation" does not exist.', 328, $this->source); })()), twig_constant("JSON_FORCE_OBJECT")), "aria-live" => "assertive", "autocomplete" => "off", "autocorrect" => "off", "autocapitalize" => "off"], "datePickerOptions" => ["altFormat" => "yy-mm-dd", "changeMonth" => true, "changeYear" => true, "yearRange" => ((        // line 338
array_key_exists("years", $context)) ? (_twig_default_filter((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 338, $this->source); })()), "-80:+1")) : ("-80:+1")), "showButtonPanel" => true], "timeInputAttrs" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.form.choose_time"), "id" => ("time_selector_" .         // line 343
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 343, $this->source); })())), "name" => ("time_selector_" .         // line 344
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 344, $this->source); })())), "class" => ("input-small timepicker-input " .         // line 345
(isset($context["attrClass"]) || array_key_exists("attrClass", $context) ? $context["attrClass"] : (function () { throw new RuntimeError('Variable "attrClass" does not exist.', 345, $this->source); })())), "data-validation" => json_encode(        // line 346
(isset($context["timeValidation"]) || array_key_exists("timeValidation", $context) ? $context["timeValidation"] : (function () { throw new RuntimeError('Variable "timeValidation" does not exist.', 346, $this->source); })()), twig_constant("JSON_FORCE_OBJECT"))], "timePickerOptions" => []];
        // line 351
        echo "    ";
        $context["id"] = ("hidden_" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 351, $this->source); })()));
        // line 352
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 352, $this->source); })()), ["data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => json_encode(        // line 354
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 354, $this->source); })()), twig_constant("JSON_FORCE_OBJECT"))]);
        // line 356
        echo "
    ";
        // line 357
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 411
    public function block_oro_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_collection_widget", $this->getTemplateName(), 411));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_collection_widget"));

        // line 412
        echo "    ";
        $macros["formFields"] = $this;
        // line 413
        echo "    ";
        ob_start();
        // line 414
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 415
            echo "            ";
            $context["prototype_html"] = twig_call_macro($macros["formFields"], "macro_oro_collection_item_prototype", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 415, $this->source); })())], 415, $context, $this->getSourceContext());
            // line 416
            echo "        ";
        }
        // line 417
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 417, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 417)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 417, $this->source); })()), "class", [], "any", false, false, false, 417) . " ")) : ("")) . "oro-item-collection collection-fields-list")]);
        // line 418
        echo "        ";
        $context["id"] = ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 418, $this->source); })()) . "_collection");
        // line 419
        echo "        <div class=\"row-oro\"
            ";
        // line 420
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 420), "validation_ignore_if_not_changed", [], "any", true, true, false, 420) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 420, $this->source); })()), "vars", [], "any", false, false, false, 420), "validation_ignore_if_not_changed", [], "any", false, false, false, 420))) {
            // line 421
            echo "                data-page-component-view=\"oroform/js/app/views/lazy-validation-collection-view\"
            ";
        }
        // line 423
        echo "        >
            ";
        // line 424
        $context["prototype_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 424, $this->source); })()), "vars", [], "any", false, false, false, 424), "prototype_name", [], "any", false, false, false, 424);
        // line 425
        echo "            <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " data-last-index=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 425, $this->source); })()), "children", [], "any", false, false, false, 425)), "html", null, true);
        echo "\" data-row-count-add=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 425, $this->source); })()), "vars", [], "any", false, false, false, 425), "row_count_add", [], "any", false, false, false, 425), "html", null, true);
        echo "\" data-prototype-name=\"";
        echo twig_escape_filter($this->env, (isset($context["prototype_name"]) || array_key_exists("prototype_name", $context) ? $context["prototype_name"] : (function () { throw new RuntimeError('Variable "prototype_name" does not exist.', 425, $this->source); })()), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, (isset($context["prototype_html"]) || array_key_exists("prototype_html", $context) ? $context["prototype_html"] : (function () { throw new RuntimeError('Variable "prototype_html" does not exist.', 425, $this->source); })()));
            echo "\"";
        }
        echo ">
                <input type=\"hidden\" name=\"validate_";
        // line 426
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 426, $this->source); })()), "html", null, true);
        echo "\" data-collection-name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 426, $this->source); })()), "html", null, true);
        echo "\" data-name=\"collection-validation\" disabled data-validate-element>
                ";
        // line 427
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 427, $this->source); })()), "children", [], "any", false, false, false, 427))) {
            // line 428
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 428, $this->source); })()), "children", [], "any", false, false, false, 428));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 429
                echo "                        ";
                echo twig_call_macro($macros["formFields"], "macro_oro_collection_item_prototype", [$context["child"]], 429, $context, $this->getSourceContext());
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 431
            echo "                ";
        } elseif (((isset($context["show_form_when_empty"]) || array_key_exists("show_form_when_empty", $context) ? $context["show_form_when_empty"] : (function () { throw new RuntimeError('Variable "show_form_when_empty" does not exist.', 431, $this->source); })()) && array_key_exists("prototype_html", $context))) {
            // line 432
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 432, $this->source); })()), "vars", [], "any", false, false, false, 432), "row_count_initial", [], "any", false, false, false, 432) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 433
                echo "                        ";
                echo twig_replace_filter((isset($context["prototype_html"]) || array_key_exists("prototype_html", $context) ? $context["prototype_html"] : (function () { throw new RuntimeError('Variable "prototype_html" does not exist.', 433, $this->source); })()), [(isset($context["prototype_name"]) || array_key_exists("prototype_name", $context) ? $context["prototype_name"] : (function () { throw new RuntimeError('Variable "prototype_name" does not exist.', 433, $this->source); })()) => $context["i"]]);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 435
            echo "                ";
        }
        // line 436
        echo "            </div>
            ";
        // line 437
        if ((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 437, $this->source); })())) {
            // line 438
            echo "            <a class=\"btn add-list-item\" href=\"#\" role=\"button\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 438), "add_label", [], "any", true, true, false, 438)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 438), "add_label", [], "any", false, false, false, 438), "oro.form.collection.add")) : ("oro.form.collection.add"))), "html", null, true);
            echo "</a>
            ";
        }
        // line 440
        echo "        </div>
        ";
        // line 441
        if (((isset($context["handle_primary"]) || array_key_exists("handle_primary", $context) ? $context["handle_primary"] : (function () { throw new RuntimeError('Variable "handle_primary" does not exist.', 441, $this->source); })()) && ( !array_key_exists("prototype", $context) || twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "primary", [], "any", true, true, false, 441)))) {
            // line 442
            echo "            ";
            echo twig_call_macro($macros["formFields"], "macro_oro_collection_validate_primary_js", [$context], 442, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 444
        echo "    ";
        $___internal_parse_64_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 413
        echo twig_spaceless($___internal_parse_64_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 458
    public function block_oro_form_js_validation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_form_js_validation", $this->getTemplateName(), 458));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_form_js_validation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_form_js_validation"));

        // line 459
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroForm/Form/fields.html.twig", 459)->unwrap();
        // line 460
        echo "    <div ";
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/view-component", "options" => ["_sourceElement" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 463
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 463, $this->source); })()), "vars", [], "any", false, false, false, 463), "id", [], "any", false, false, false, 463)), "view" => "oroform/js/app/views/form-validate-view", "validationOptions" =>         // line 465
(isset($context["js_options"]) || array_key_exists("js_options", $context) ? $context["js_options"] : (function () { throw new RuntimeError('Variable "js_options" does not exist.', 465, $this->source); })())]]], 460, $context, $this->getSourceContext());
        // line 467
        echo "></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 470
    public function block_oro_entity_create_or_select_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_entity_create_or_select_row", $this->getTemplateName(), 470));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_row"));

        // line 471
        echo "    ";
        $context["currentMode"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mode", [], "any", false, true, false, 471), "vars", [], "any", false, true, false, 471), "value", [], "any", true, true, false, 471)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mode", [], "any", false, true, false, 471), "vars", [], "any", false, true, false, 471), "value", [], "any", false, false, false, 471), "create")) : ("create"));
        // line 472
        echo "    ";
        $context["viewsContainerId"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 472, $this->source); })()), "vars", [], "any", false, false, false, 472), "id", [], "any", false, false, false, 472) . "-container");
        // line 473
        echo "
    ";
        // line 474
        ob_start();
        // line 475
        echo "        <div class=\"control-group create-select-entity ";
        echo twig_escape_filter($this->env, (isset($context["currentMode"]) || array_key_exists("currentMode", $context) ? $context["currentMode"] : (function () { throw new RuntimeError('Variable "currentMode" does not exist.', 475, $this->source); })()), "html", null, true);
        echo "
            ";
        // line 476
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 476)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 476, $this->source); })()), "class", [], "any", false, false, false, 476), "html", null, true);
        }
        echo "\"
            id=\"";
        // line 477
        echo twig_escape_filter($this->env, (isset($context["viewsContainerId"]) || array_key_exists("viewsContainerId", $context) ? $context["viewsContainerId"] : (function () { throw new RuntimeError('Variable "viewsContainerId" does not exist.', 477, $this->source); })()), "html", null, true);
        echo "\"
        >
            ";
        // line 479
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 479, $this->source); })()) === false)) {
            // line 480
            echo "                <div class=\"control-label wrap\">
                    ";
            // line 481
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 481, $this->source); })()), 'label', ["label_attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 481, $this->source); })())]);
            echo "
                </div>
            ";
        }
        // line 484
        echo "            <div class=\"controls";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 484, $this->source); })())) > 0)) {
            echo " validation-error";
        }
        echo "\">
                ";
        // line 485
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 485, $this->source); })()), 'widget');
        echo "
                ";
        // line 486
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 486, $this->source); })()), 'errors');
        echo "
            </div>
        </div>
    ";
        $___internal_parse_65_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 474
        echo twig_spaceless($___internal_parse_65_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 492
    public function block_oro_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_autocomplete_widget", $this->getTemplateName(), 492));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_autocomplete_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_autocomplete_widget"));

        // line 493
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["autocomplete"] ?? null), "selection_template_twig", [], "any", true, true, false, 493) && twig_get_attribute($this->env, $this->source, (isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new RuntimeError('Variable "autocomplete" does not exist.', 493, $this->source); })()), "selection_template_twig", [], "any", false, false, false, 493))) {
            // line 494
            echo "        ";
            $context["componentOptions"] = twig_array_merge((isset($context["componentOptions"]) || array_key_exists("componentOptions", $context) ? $context["componentOptions"] : (function () { throw new RuntimeError('Variable "componentOptions" does not exist.', 494, $this->source); })()), ["selection_template" => twig_include($this->env, $context, twig_get_attribute($this->env, $this->source,             // line 495
(isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new RuntimeError('Variable "autocomplete" does not exist.', 495, $this->source); })()), "selection_template_twig", [], "any", false, false, false, 495))]);
            // line 497
            echo "    ";
        }
        // line 498
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 498, $this->source); })()), ["data-page-component-module" =>         // line 499
(isset($context["componentModule"]) || array_key_exists("componentModule", $context) ? $context["componentModule"] : (function () { throw new RuntimeError('Variable "componentModule" does not exist.', 499, $this->source); })()), "data-page-component-options" => json_encode(        // line 500
(isset($context["componentOptions"]) || array_key_exists("componentOptions", $context) ? $context["componentOptions"] : (function () { throw new RuntimeError('Variable "componentOptions" does not exist.', 500, $this->source); })()))]);
        // line 502
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 502, $this->source); })()), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 502, $this->source); })())]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 505
    public function block_oro_entity_create_or_select_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_entity_create_or_select_widget", $this->getTemplateName(), 505));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_widget"));

        // line 506
        echo "    ";
        $context["currentMode"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mode", [], "any", false, true, false, 506), "vars", [], "any", false, true, false, 506), "value", [], "any", true, true, false, 506)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mode", [], "any", false, true, false, 506), "vars", [], "any", false, true, false, 506), "value", [], "any", false, false, false, 506), "create")) : ("create"));
        // line 507
        echo "    ";
        $context["btnGroupId"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 507, $this->source); })()), "vars", [], "any", false, false, false, 507), "id", [], "any", false, false, false, 507) . "-btn-group");
        // line 508
        echo "    ";
        $context["viewsContainerId"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 508, $this->source); })()), "vars", [], "any", false, false, false, 508), "id", [], "any", false, false, false, 508) . "-container");
        // line 509
        echo "    ";
        $context["gridWidgetAlias"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 509, $this->source); })()), "vars", [], "any", false, false, false, 509), "id", [], "any", false, false, false, 509) . "-grid");
        // line 510
        echo "    ";
        $context["routeParametersElement"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 510, $this->source); })()), "vars", [], "any", false, false, false, 510), "id", [], "any", false, false, false, 510) . "-route-parameters");
        // line 511
        echo "
    <div class=\"create-select-entity-container clearfix\">
        <div id=\"";
        // line 513
        echo twig_escape_filter($this->env, (isset($context["btnGroupId"]) || array_key_exists("btnGroupId", $context) ? $context["btnGroupId"] : (function () { throw new RuntimeError('Variable "btnGroupId" does not exist.', 513, $this->source); })()), "html", null, true);
        echo "\" class=\"buttons-container\">
            <a href=\"#\" class=\"entity-select-btn\" title=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose"), "html", null, true);
        echo "\"";
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 514, $this->source); })()) || (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "readonly", [], "any", true, true, false, 514) && twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 514, $this->source); })()), "readonly", [], "any", false, false, false, 514)))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
                <span
                    data-label=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose Existing"), "html", null, true);
        echo "\"
                    data-alt-label-view=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose Another"), "html", null, true);
        echo "\"
                >
                    ";
        // line 519
        if (((isset($context["currentMode"]) || array_key_exists("currentMode", $context) ? $context["currentMode"] : (function () { throw new RuntimeError('Variable "currentMode" does not exist.', 519, $this->source); })()) == "view")) {
            // line 520
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose Another"), "html", null, true);
            echo "
                    ";
        } else {
            // line 522
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose Existing"), "html", null, true);
            echo "
                    ";
        }
        // line 524
        echo "                </span>
            </a>

            <a href=\"#\" class=\"entity-create-btn\" title=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create New"), "html", null, true);
        echo "\"";
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 527, $this->source); })()) || (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "readonly", [], "any", true, true, false, 527) && twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 527, $this->source); })()), "readonly", [], "any", false, false, false, 527)))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
                <span>";
        // line 528
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create New"), "html", null, true);
        echo "</span>
            </a>

            <a href=\"#\" class=\"entity-cancel-btn\" title=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "\"";
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 531, $this->source); })()) || (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "readonly", [], "any", true, true, false, 531) && twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 531, $this->source); })()), "readonly", [], "any", false, false, false, 531)))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
                <span>";
        // line 532
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</span>
            </a>
        </div>

        <div class=\"entity-create-block\"
            ";
        // line 537
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 537, $this->source); })()), "vars", [], "any", false, false, false, 537), "required", [], "any", false, false, false, 537)) {
            echo "data-validation-optional-group=\"\"";
        }
        // line 538
        echo "            ";
        if (((isset($context["currentMode"]) || array_key_exists("currentMode", $context) ? $context["currentMode"] : (function () { throw new RuntimeError('Variable "currentMode" does not exist.', 538, $this->source); })()) != "create")) {
            echo "data-validation-ignore=\"\"";
        }
        // line 539
        echo "        >
            ";
        // line 540
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 540, $this->source); })()), "new_entity", [], "any", false, false, false, 540), 'widget');
        echo "
        </div>

        <div class=\"entity-select-block\">
            ";
        // line 544
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "loadingElement" => (("#" .         // line 546
(isset($context["viewsContainerId"]) || array_key_exists("viewsContainerId", $context) ? $context["viewsContainerId"] : (function () { throw new RuntimeError('Variable "viewsContainerId" does not exist.', 546, $this->source); })())) . " .create-select-entity-container"), "elementFirst" => (        // line 547
(isset($context["currentMode"]) || array_key_exists("currentMode", $context) ? $context["currentMode"] : (function () { throw new RuntimeError('Variable "currentMode" does not exist.', 547, $this->source); })()) == "grid"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_datagrid_widget", ["gridName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 548
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 548, $this->source); })()), "vars", [], "any", false, false, false, 548), "grid_name", [], "any", false, false, false, 548)]), "alias" =>         // line 549
(isset($context["gridWidgetAlias"]) || array_key_exists("gridWidgetAlias", $context) ? $context["gridWidgetAlias"] : (function () { throw new RuntimeError('Variable "gridWidgetAlias" does not exist.', 549, $this->source); })())]);
        // line 550
        echo "
        </div>

        <div class=\"entity-view-block ";
        // line 553
        if ((twig_length_filter($this->env, (isset($context["view_widgets"]) || array_key_exists("view_widgets", $context) ? $context["view_widgets"] : (function () { throw new RuntimeError('Variable "view_widgets" does not exist.', 553, $this->source); })())) > 1)) {
            echo "row-fluid row-fluid-divider";
        }
        echo "\">
            ";
        // line 554
        $context["allRouteParameters"] = [];
        // line 555
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["view_widgets"]) || array_key_exists("view_widgets", $context) ? $context["view_widgets"] : (function () { throw new RuntimeError('Variable "view_widgets" does not exist.', 555, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["view_widget"]) {
            // line 556
            echo "                <div class=\"responsive-cell\">
                    ";
            // line 557
            $context["routeParameters"] = twig_get_attribute($this->env, $this->source, $context["view_widget"], "route_parameters", [], "any", false, false, false, 557);
            // line 558
            echo "                    ";
            $context["allRouteParameters"] = twig_array_merge((isset($context["allRouteParameters"]) || array_key_exists("allRouteParameters", $context) ? $context["allRouteParameters"] : (function () { throw new RuntimeError('Variable "allRouteParameters" does not exist.', 558, $this->source); })()), [twig_get_attribute($this->env, $this->source, $context["view_widget"], "widget_alias", [], "any", false, false, false, 558) => (isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 558, $this->source); })())]);
            // line 559
            echo "                    ";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "loadingElement" => (("#" .             // line 561
(isset($context["viewsContainerId"]) || array_key_exists("viewsContainerId", $context) ? $context["viewsContainerId"] : (function () { throw new RuntimeError('Variable "viewsContainerId" does not exist.', 561, $this->source); })())) . " .create-select-entity-container"), "elementFirst" => (            // line 562
(isset($context["currentMode"]) || array_key_exists("currentMode", $context) ? $context["currentMode"] : (function () { throw new RuntimeError('Variable "currentMode" does not exist.', 562, $this->source); })()) == "view"), "url" => (((            // line 563
(isset($context["currentMode"]) || array_key_exists("currentMode", $context) ? $context["currentMode"] : (function () { throw new RuntimeError('Variable "currentMode" does not exist.', 563, $this->source); })()) == "view")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["view_widget"], "route_name", [], "any", false, false, false, 563), (isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 563, $this->source); })()))) : (null)), "alias" => twig_get_attribute($this->env, $this->source,             // line 564
$context["view_widget"], "widget_alias", [], "any", false, false, false, 564), "title" => ((twig_get_attribute($this->env, $this->source,             // line 565
$context["view_widget"], "title", [], "any", true, true, false, 565)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["view_widget"], "title", [], "any", false, false, false, 565))) : (null))]);
            // line 566
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view_widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 569
        echo "            <input type=\"hidden\"
               name=\"";
        // line 570
        echo twig_escape_filter($this->env, (isset($context["routeParametersElement"]) || array_key_exists("routeParametersElement", $context) ? $context["routeParametersElement"] : (function () { throw new RuntimeError('Variable "routeParametersElement" does not exist.', 570, $this->source); })()), "html", null, true);
        echo "\"
               id=\"";
        // line 571
        echo twig_escape_filter($this->env, (isset($context["routeParametersElement"]) || array_key_exists("routeParametersElement", $context) ? $context["routeParametersElement"] : (function () { throw new RuntimeError('Variable "routeParametersElement" does not exist.', 571, $this->source); })()), "html", null, true);
        echo "\"
               value=\"";
        // line 572
        echo twig_escape_filter($this->env, json_encode((isset($context["allRouteParameters"]) || array_key_exists("allRouteParameters", $context) ? $context["allRouteParameters"] : (function () { throw new RuntimeError('Variable "allRouteParameters" does not exist.', 572, $this->source); })())));
        echo "\"
            />
        </div>

        ";
        // line 576
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 576, $this->source); })()), "existing_entity", [], "any", false, false, false, 576), 'widget');
        echo "
        ";
        // line 577
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 577, $this->source); })()), "mode", [], "any", false, false, false, 577), 'widget');
        echo "
    </div>
    <script>
        loadModules(['jquery', 'oroform/js/create-select-type-handler'],
        function (\$, createSelectTypeHandler) {
            \$(function() {
                createSelectTypeHandler(
                    '#";
        // line 584
        echo twig_escape_filter($this->env, (isset($context["btnGroupId"]) || array_key_exists("btnGroupId", $context) ? $context["btnGroupId"] : (function () { throw new RuntimeError('Variable "btnGroupId" does not exist.', 584, $this->source); })()), "html", null, true);
        echo "',
                    '#";
        // line 585
        echo twig_escape_filter($this->env, (isset($context["viewsContainerId"]) || array_key_exists("viewsContainerId", $context) ? $context["viewsContainerId"] : (function () { throw new RuntimeError('Variable "viewsContainerId" does not exist.', 585, $this->source); })()), "html", null, true);
        echo "',
                    '#";
        // line 586
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 586, $this->source); })()), "mode", [], "any", false, false, false, 586), "vars", [], "any", false, false, false, 586), "id", [], "any", false, false, false, 586), "html", null, true);
        echo "',
                    '#";
        // line 587
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 587, $this->source); })()), "existing_entity", [], "any", false, false, false, 587), "vars", [], "any", false, false, false, 587), "id", [], "any", false, false, false, 587), "html", null, true);
        echo "',
                    '#";
        // line 588
        echo twig_escape_filter($this->env, (isset($context["routeParametersElement"]) || array_key_exists("routeParametersElement", $context) ? $context["routeParametersElement"] : (function () { throw new RuntimeError('Variable "routeParametersElement" does not exist.', 588, $this->source); })()), "html", null, true);
        echo "',
                    ";
        // line 589
        echo json_encode((isset($context["gridWidgetAlias"]) || array_key_exists("gridWidgetAlias", $context) ? $context["gridWidgetAlias"] : (function () { throw new RuntimeError('Variable "gridWidgetAlias" does not exist.', 589, $this->source); })()));
        echo ",
                    ";
        // line 590
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 590, $this->source); })()), "vars", [], "any", false, false, false, 590), "view_widgets", [], "any", false, false, false, 590));
        echo ",
                    ";
        // line 591
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 591, $this->source); })()), "vars", [], "any", false, false, false, 591), "existing_entity_grid_id", [], "any", false, false, false, 591));
        echo ",
                    ";
        // line 592
        echo json_encode((isset($context["currentMode"]) || array_key_exists("currentMode", $context) ? $context["currentMode"] : (function () { throw new RuntimeError('Variable "currentMode" does not exist.', 592, $this->source); })()));
        echo ",
                    ";
        // line 593
        echo json_encode((isset($context["allRouteParameters"]) || array_key_exists("allRouteParameters", $context) ? $context["allRouteParameters"] : (function () { throw new RuntimeError('Variable "allRouteParameters" does not exist.', 593, $this->source); })()));
        echo "
                );
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 600
    public function block_oro_entity_create_or_select_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_entity_create_or_select_choice_widget", $this->getTemplateName(), 600));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_choice_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_choice_widget"));

        // line 601
        echo "    <div class=\"create-select-entity-choice-container\"
         data-page-component-module=\"oroform/js/app/components/create-or-select-choice-component\"
         data-page-component-options=\"";
        // line 603
        echo twig_escape_filter($this->env, json_encode(["modeSelector" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 604
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 604, $this->source); })()), "mode", [], "any", false, false, false, 604), "vars", [], "any", false, false, false, 604), "id", [], "any", false, false, false, 604)), "newEntitySelector" => ".new-entity", "existingEntitySelector" => ".existing-entity", "existingEntityInputSelector" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 607
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 607, $this->source); })()), "existing_entity", [], "any", false, false, false, 607), "vars", [], "any", false, false, false, 607), "id", [], "any", false, false, false, 607)), "editable" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 608
($context["form"] ?? null), "vars", [], "any", false, true, false, 608), "editable", [], "any", true, true, false, 608)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 608), "editable", [], "any", false, false, false, 608), false)) : (false)), "disabled_edit_form" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 609
($context["form"] ?? null), "vars", [], "any", false, true, false, 609), "disabled_edit_form", [], "any", true, true, false, 609)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 609), "disabled_edit_form", [], "any", false, false, false, 609), false)) : (false)), "editRoute" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 610
($context["form"] ?? null), "vars", [], "any", false, true, false, 610), "edit_route", [], "any", true, true, false, 610)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 610), "edit_route", [], "any", false, false, false, 610), null)) : (null))]), "html", null, true);
        // line 611
        echo "\">
        <div class=\"existing-entity\">
            ";
        // line 613
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 613, $this->source); })()), "existing_entity", [], "any", false, false, false, 613), 'widget');
        echo "
        </div>
        <div class=\"new-entity\">
            ";
        // line 616
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 616, $this->source); })()), "new_entity", [], "any", false, false, false, 616), 'widget');
        echo "
        </div>
        ";
        // line 618
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 618, $this->source); })()), "mode", [], "any", false, false, false, 618), 'widget');
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 622
    public function block_oro_entity_create_or_select_inline_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_entity_create_or_select_inline_widget", $this->getTemplateName(), 622));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_inline_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_inline_widget"));

        // line 623
        echo "    ";
        $context["isButtonsEnabled"] = ( !(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 623, $this->source); })()) && ( !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "readonly", [], "any", true, true, false, 623) ||  !twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 623, $this->source); })()), "readonly", [], "any", false, false, false, 623)));
        // line 624
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 624, $this->source); })()), "html", null, true);
        echo "-el\"
            ";
        // line 625
        if (( !twig_get_attribute($this->env, $this->source, ($context["configs"] ?? null), "extra_config", [], "any", true, true, false, 625) ||  !twig_get_attribute($this->env, $this->source, (isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 625, $this->source); })()), "extra_config", [], "any", false, false, false, 625))) {
            // line 626
            echo "                ";
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 626), "configs", [], "any", false, true, false, 626), "async_dialogs", [], "any", true, true, false, 626)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 626), "configs", [], "any", false, true, false, 626), "async_dialogs", [], "any", false, false, false, 626), false)) : (false)) === true)) {
                // line 627
                echo "                    ";
                $context["asyncNameSegment"] = "async-";
                // line 628
                echo "                ";
            }
            // line 629
            echo "                ";
            $context["urlParts"] = ["grid" => ["route" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 631
($context["form"] ?? null), "vars", [], "any", false, true, false, 631), "grid_widget_route", [], "any", true, true, false, 631)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 631), "grid_widget_route", [], "any", false, false, false, 631), "oro_datagrid_widget")) : ("oro_datagrid_widget")), "gridWidgetView" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 632
($context["form"] ?? null), "vars", [], "any", false, true, false, 632), "grid_view_widget_route", [], "any", true, true, false, 632)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 632), "grid_view_widget_route", [], "any", false, false, false, 632), "oro_datagrid_widget")) : ("oro_datagrid_widget")), "parameters" => ["gridName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 634
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 634, $this->source); })()), "vars", [], "any", false, false, false, 634), "grid_name", [], "any", false, false, false, 634), "params" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 635
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 635, $this->source); })()), "vars", [], "any", false, false, false, 635), "grid_parameters", [], "any", false, false, false, 635), "renderParams" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 636
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 636, $this->source); })()), "vars", [], "any", false, false, false, 636), "grid_render_parameters", [], "any", false, false, false, 636)]]];
            // line 640
            echo "
                ";
            // line 641
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 641), "create_enabled", [], "any", true, true, false, 641)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 641), "create_enabled", [], "any", false, false, false, 641), false)) : (false)) === true)) {
                // line 642
                echo "                    ";
                $context["urlParts"] = twig_array_merge((isset($context["urlParts"]) || array_key_exists("urlParts", $context) ? $context["urlParts"] : (function () { throw new RuntimeError('Variable "urlParts" does not exist.', 642, $this->source); })()), ["create" => ["route" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 644
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 644, $this->source); })()), "vars", [], "any", false, false, false, 644), "create_form_route", [], "any", false, false, false, 644), "parameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 645
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 645, $this->source); })()), "vars", [], "any", false, false, false, 645), "create_form_route_parameters", [], "any", false, false, false, 645)]]);
                // line 648
                echo "                ";
            }
            // line 649
            echo "                ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroForm/Form/fields.html.twig", 649)->unwrap();
            // line 650
            echo "                ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => (("oroform/js/app/components/select-create-inline-type-" . ((            // line 651
array_key_exists("asyncNameSegment", $context)) ? (_twig_default_filter((isset($context["asyncNameSegment"]) || array_key_exists("asyncNameSegment", $context) ? $context["asyncNameSegment"] : (function () { throw new RuntimeError('Variable "asyncNameSegment" does not exist.', 651, $this->source); })()), "")) : (""))) . "component"), "options" => ["inputSelector" => ("#" .             // line 653
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 653, $this->source); })())), "entityLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 654
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 654, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 654, $this->source); })())), "urlParts" =>             // line 655
(isset($context["urlParts"]) || array_key_exists("urlParts", $context) ? $context["urlParts"] : (function () { throw new RuntimeError('Variable "urlParts" does not exist.', 655, $this->source); })()), "existingEntityGridId" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 656
($context["form"] ?? null), "vars", [], "any", false, true, false, 656), "existing_entity_grid_id", [], "any", true, true, false, 656)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 656), "existing_entity_grid_id", [], "any", false, false, false, 656), "id")) : ("id")), "createEnabled" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 657
($context["form"] ?? null), "vars", [], "any", false, true, false, 657), "create_enabled", [], "any", true, true, false, 657)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 657), "create_enabled", [], "any", false, false, false, 657), false)) : (false))]]], 650, $context, $this->getSourceContext());
            // line 659
            echo "
            ";
        } else {
            // line 661
            echo "                ";
            $context["_block"] =             $this->renderBlock(("oro_entity_create_or_select_inline_js_" . twig_get_attribute($this->env, $this->source, (isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 661, $this->source); })()), "extra_config", [], "any", false, false, false, 661)), $context, $blocks);
            // line 662
            echo "            ";
        }
        // line 663
        echo "        ";
        if ((isset($context["isButtonsEnabled"]) || array_key_exists("isButtonsEnabled", $context) ? $context["isButtonsEnabled"] : (function () { throw new RuntimeError('Variable "isButtonsEnabled" does not exist.', 663, $this->source); })())) {
            echo "class=\"entity-create-or-select-container ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 663, $this->source); })()), "vars", [], "any", false, false, false, 663), "create_enabled", [], "any", false, false, false, 663)) {
                echo "entity-create-enabled";
            }
            echo "\"";
        }
        echo ">
        <div ";
        // line 664
        if ((isset($context["isButtonsEnabled"]) || array_key_exists("isButtonsEnabled", $context) ? $context["isButtonsEnabled"] : (function () { throw new RuntimeError('Variable "isButtonsEnabled" does not exist.', 664, $this->source); })())) {
            echo "class=\"input-append\"";
        }
        echo ">
            ";
        // line 665
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 665, $this->source); })()), 'widget');
        echo "

            ";
        // line 667
        if ((isset($context["isButtonsEnabled"]) || array_key_exists("isButtonsEnabled", $context) ? $context["isButtonsEnabled"] : (function () { throw new RuntimeError('Variable "isButtonsEnabled" does not exist.', 667, $this->source); })())) {
            // line 668
            echo "                <button class=\"add-on btn btn-icon btn-square-default entity-select-btn\" aria-label=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.form.entity_select", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 668, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 668, $this->source); })()))]), "html", null, true);
            echo "\">
                    <span class=\"fa-bars fa-offset-none\" aria-hidden=\"true\"></span>
                </button>

                ";
            // line 672
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 672, $this->source); })()), "vars", [], "any", false, false, false, 672), "create_enabled", [], "any", false, false, false, 672)) {
                // line 673
                echo "                    <button class=\"btn btn-icon btn-square-default entity-create-btn\">
                        <span class=\"fa-plus fa-offset-none\" aria-hidden=\"true\"></span>
                    </button>
                ";
            }
            // line 677
            echo "            ";
        }
        // line 678
        echo "        </div>
    </div>

    ";
        // line 681
        if ((array_key_exists("_block", $context) &&  !twig_test_empty((isset($context["_block"]) || array_key_exists("_block", $context) ? $context["_block"] : (function () { throw new RuntimeError('Variable "_block" does not exist.', 681, $this->source); })())))) {
            // line 682
            echo "        ";
            echo (isset($context["_block"]) || array_key_exists("_block", $context) ? $context["_block"] : (function () { throw new RuntimeError('Variable "_block" does not exist.', 682, $this->source); })());
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 686
    public function block_oro_link_type_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_link_type_widget", $this->getTemplateName(), 686));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_link_type_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_link_type_widget"));

        // line 687
        echo "    ";
        if (((isset($context["isPath"]) || array_key_exists("isPath", $context) ? $context["isPath"] : (function () { throw new RuntimeError('Variable "isPath" does not exist.', 687, $this->source); })()) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["acl"]) || array_key_exists("acl", $context) ? $context["acl"] : (function () { throw new RuntimeError('Variable "acl" does not exist.', 687, $this->source); })())))) {
            echo " ";
            // line 688
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (((isset($context["isPath"]) || array_key_exists("isPath", $context) ? $context["isPath"] : (function () { throw new RuntimeError('Variable "isPath" does not exist.', 688, $this->source); })())) ? ((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 688, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 688, $this->source); })()), (isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 688, $this->source); })())))), "html", null, true);
            echo "\" class=\"";
            (((array_key_exists("class", $context) && (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 688, $this->source); })()))) ? (print (twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 688, $this->source); })()), "html", null, true))) : (print ("")));
            echo "\" style=\"display: block; margin-top: 5px;\">
            ";
            // line 689
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 689, $this->source); })())), "html", null, true);
            echo "
        </a>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 694
    public function block_oro_download_links_type_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_download_links_type_widget", $this->getTemplateName(), 694));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_download_links_type_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_download_links_type_widget"));

        // line 695
        echo "    ";
        ob_start();
        // line 696
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 696, $this->source); })()));
        foreach ($context['_seq'] as $context["fileName"] => $context["route"]) {
            // line 697
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $context["route"], "html", null, true);
            echo "\" class=\"";
            (((array_key_exists("class", $context) && (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 697, $this->source); })()))) ? (print (twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 697, $this->source); })()), "html", null, true))) : (print ("")));
            echo "\" style=\"display: block; margin-top: 5px;\">
                ";
            // line 698
            echo twig_escape_filter($this->env, $context["fileName"], "html", null, true);
            echo "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fileName'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 701
        echo "    ";
        $___internal_parse_66_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 695
        echo twig_spaceless($___internal_parse_66_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 704
    public function block_oro_simple_color_picker_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_simple_color_picker_row", $this->getTemplateName(), 704));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_simple_color_picker_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_simple_color_picker_row"));

        // line 705
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 708
    public function block_oro_simple_color_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_simple_color_picker_widget", $this->getTemplateName(), 708));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_simple_color_picker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_simple_color_picker_widget"));

        // line 709
        echo "    ";
        $context["attr"] = twig_array_merge(["data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => json_encode(twig_array_merge(["view" => "oroform/js/app/views/simple-color-picker-view"],         // line 711
(isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 711, $this->source); })())))],         // line 712
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 712, $this->source); })()));
        // line 713
        echo "    ";
        $context["type"] = "hidden";
        // line 714
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 717
    public function block_oro_simple_color_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_simple_color_choice_widget", $this->getTemplateName(), 717));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_simple_color_choice_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_simple_color_choice_widget"));

        // line 718
        echo "    ";
        $context["attr"] = twig_array_merge(["data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => json_encode(twig_array_merge(["view" => "oroform/js/app/views/simple-color-choice-view"],         // line 720
(isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 720, $this->source); })())))],         // line 721
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 721, $this->source); })()));
        // line 722
        echo "    ";
        if (((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 722, $this->source); })()) && (null === (isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 722, $this->source); })()))) &&  !(isset($context["empty_value_in_choices"]) || array_key_exists("empty_value_in_choices", $context) ? $context["empty_value_in_choices"] : (function () { throw new RuntimeError('Variable "empty_value_in_choices" does not exist.', 722, $this->source); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 722, $this->source); })()))) {
            // line 723
            $context["required"] = false;
        }
        // line 725
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 725, $this->source); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">
        ";
        // line 726
        if ((isset($context["allow_empty_color"]) || array_key_exists("allow_empty_color", $context) ? $context["allow_empty_color"] : (function () { throw new RuntimeError('Variable "allow_empty_color" does not exist.', 726, $this->source); })())) {
            // line 727
            echo "<option value=\"\" class=\"empty-color\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 727, $this->source); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 727, $this->source); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 727, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 727, $this->source); })())), "html", null, true);
            echo "</option>
            <optgroup label=\"---\"></optgroup>";
        }
        // line 730
        echo "        ";
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 730, $this->source); })());
        // line 731
        $this->displayBlock("oro_simple_color_choice_widget_options", $context, $blocks);
        // line 732
        echo "</select>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 735
    public function block_oro_simple_color_choice_widget_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_simple_color_choice_widget_options", $this->getTemplateName(), 735));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_simple_color_choice_widget_options"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_simple_color_choice_widget_options"));

        // line 736
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 736, $this->source); })()));
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 737
            if (twig_test_iterable($context["choice"])) {
                // line 738
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, $context["group_label"], "html", null, true);
                echo "\"></optgroup>";
            } else {
                // line 740
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 740), "html", null, true);
                echo "\"";
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 740, $this->source); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((isset($context["translatable"]) || array_key_exists("translatable", $context) ? $context["translatable"] : (function () { throw new RuntimeError('Variable "translatable" does not exist.', 740, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 740), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 740, $this->source); })()))) : (twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 740))), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 745
    public function block_oro_color_table_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_color_table_row", $this->getTemplateName(), 745));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_color_table_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_color_table_row"));

        // line 746
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 749
    public function block_oro_color_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_color_table_widget", $this->getTemplateName(), 749));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_color_table_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_color_table_widget"));

        // line 750
        echo "    ";
        $context["attr"] = twig_array_merge(["data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => json_encode(twig_array_merge(["view" => "oroform/js/app/views/color-table-view"],         // line 752
(isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 752, $this->source); })())))],         // line 753
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 753, $this->source); })()));
        // line 754
        echo "    ";
        $context["type"] = "hidden";
        // line 755
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 758
    public function block_oro_resizeable_rich_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_resizeable_rich_text_widget", $this->getTemplateName(), 758));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_resizeable_rich_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_resizeable_rich_text_widget"));

        // line 759
        echo "    ";
        $context["options"] = ["view" => "oroform/js/app/views/wysiwig-editor/wysiwyg-dialog-view", "editorComponentName" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 761
($context["form"] ?? null), "vars", [], "any", false, true, false, 761), "attr", [], "any", false, true, false, 761), "data-page-component-name", [], "array", true, true, false, 761)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 762
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 762, $this->source); })()), "vars", [], "any", false, false, false, 762), "attr", [], "any", false, false, false, 762), "data-page-component-name", [], "array", false, false, false, 762)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 762, $this->source); })()), "vars", [], "any", false, false, false, 762), "attr", [], "any", false, false, false, 762), "data-ftid", [], "array", false, false, false, 762)))];
        // line 764
        echo "
    <div data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-name=\"wrap_";
        // line 766
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 766), "attr", [], "any", false, true, false, 766), "data-page-component-name", [], "array", true, true, false, 766)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 767
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 767, $this->source); })()), "vars", [], "any", false, false, false, 767), "attr", [], "any", false, false, false, 767), "data-page-component-name", [], "array", false, false, false, 767)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 767, $this->source); })()), "vars", [], "any", false, false, false, 767), "attr", [], "any", false, false, false, 767), "data-ftid", [], "array", false, false, false, 767))), "html", null, true);
        echo "\"
         data-page-component-options=\"";
        // line 768
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 768, $this->source); })())), "html", null, true);
        echo "\"
         data-layout=\"separate\" >
        ";
        // line 770
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 770, $this->source); })()), 'widget');
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 774
    public function block_oro_entity_tree_select_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_entity_tree_select_row", $this->getTemplateName(), 774));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_tree_select_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_tree_select_row"));

        // line 775
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 778
    public function block_oro_entity_tree_select_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_entity_tree_select_widget", $this->getTemplateName(), 778));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_tree_select_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_tree_select_widget"));

        // line 779
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroForm/Form/fields.html.twig", 779)->unwrap();
        // line 780
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_renderJsTree", [["treeOptions" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 782
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 782, $this->source); })()), "vars", [], "any", false, false, false, 782), "treeOptions", [], "any", false, false, false, 782), "disableActions" => true]], 780, $context, $this->getSourceContext());
        // line 785
        echo "

    ";
        // line 787
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 787, $this->source); })()), 'widget');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 790
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("button_row", $this->getTemplateName(), 790));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 791
        echo "    <div class=\"control-group-container control-group-button\">
        ";
        // line 792
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 792, $this->source); })()), 'widget');
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 796
    public function block_oro_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_checkbox_widget", $this->getTemplateName(), 796));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_checkbox_widget"));

        // line 797
        echo "    <div class=\"oro-checkbox-view\"
         data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
        // line 799
        echo twig_escape_filter($this->env, json_encode(["view" => "oroform/js/app/views/checkbox-view", "selectors" => ["checkbox" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 802
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 802, $this->source); })()), "vars", [], "any", false, false, false, 802), "id", [], "any", false, false, false, 802)), "hiddenInput" => (("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 803
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 803, $this->source); })()), "vars", [], "any", false, false, false, 803), "id", [], "any", false, false, false, 803)) . "-hidden")]]), "html", null, true);
        // line 805
        echo "\"
    >
        ";
        // line 807
        $this->displayBlock("checkbox_widget", $context, $blocks);
        echo "
        <input id=\"";
        // line 808
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 808, $this->source); })()), "vars", [], "any", false, false, false, 808), "id", [], "any", false, false, false, 808), "html", null, true);
        echo "-hidden\" type=\"hidden\" value=\"0\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 808, $this->source); })()), "vars", [], "any", false, false, false, 808), "full_name", [], "any", false, false, false, 808), "html", null, true);
        echo "\" disabled=\"disabled\">
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 360
    public function macro_oro_collection_item_prototype($__widget__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "oro_collection_item_prototype"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "oro_collection_item_prototype"));

            // line 361
            echo "    ";
            if (twig_in_filter("collection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 361, $this->source); })()), "vars", [], "any", false, false, false, 361), "block_prefixes", [], "any", false, false, false, 361))) {
                // line 362
                echo "        ";
                $context["form"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 362, $this->source); })()), "vars", [], "any", false, false, false, 362), "prototype", [], "any", false, false, false, 362);
                // line 363
                echo "        ";
                $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 363, $this->source); })()), "vars", [], "any", false, false, false, 363), "prototype", [], "any", false, false, false, 363), "vars", [], "any", false, false, false, 363), "name", [], "any", false, false, false, 363);
                // line 364
                echo "        ";
                $context["disabled"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 364, $this->source); })()), "vars", [], "any", false, false, false, 364), "disabled", [], "any", false, false, false, 364);
                // line 365
                echo "        ";
                $context["allow_delete"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 365, $this->source); })()), "vars", [], "any", false, false, false, 365), "allow_delete", [], "any", false, false, false, 365);
                // line 366
                echo "        ";
                $context["allow_add_after"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 366, $this->source); })()), "vars", [], "any", false, false, false, 366), "allow_add_after", [], "any", false, false, false, 366);
                // line 367
                echo "    ";
            } else {
                // line 368
                echo "        ";
                $context["form"] = (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 368, $this->source); })());
                // line 369
                echo "        ";
                $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 369, $this->source); })()), "vars", [], "any", false, false, false, 369), "full_name", [], "any", false, false, false, 369);
                // line 370
                echo "        ";
                $context["disabled"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 370, $this->source); })()), "parent", [], "any", false, false, false, 370), "vars", [], "any", false, false, false, 370), "disabled", [], "any", false, false, false, 370);
                // line 371
                echo "        ";
                $context["allow_delete"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 371, $this->source); })()), "parent", [], "any", false, false, false, 371), "vars", [], "any", false, false, false, 371), "allow_delete", [], "any", false, false, false, 371);
                // line 372
                echo "        ";
                $context["allow_add_after"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 372, $this->source); })()), "parent", [], "any", false, false, false, 372), "vars", [], "any", false, false, false, 372), "allow_add_after", [], "any", false, false, false, 372);
                // line 373
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["widget"] ?? null), "vars", [], "any", false, true, false, 373), "allow_delete", [], "any", true, true, false, 373)) {
                    // line 374
                    echo "            ";
                    $context["allow_delete"] = ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 374, $this->source); })()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 374, $this->source); })()), "vars", [], "any", false, false, false, 374), "allow_delete", [], "any", false, false, false, 374));
                    // line 375
                    echo "        ";
                }
                // line 376
                echo "    ";
            }
            // line 377
            echo "    <div class=\"oro-collection-item\"
        data-content=\"";
            // line 378
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 378, $this->source); })()), "html", null, true);
            echo "\"
        ";
            // line 379
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["widget"] ?? null), "parent", [], "any", false, true, false, 379), "vars", [], "any", false, true, false, 379), "skip_optional_validation_group", [], "any", true, true, false, 379)) {
                // line 380
                echo "            data-validation-optional-group
            ";
                // line 381
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 381), "attr", [], "any", false, true, false, 381), "data-validation-optional-group-handler", [], "array", true, true, false, 381)) {
                    // line 382
                    echo "                data-validation-optional-group-handler=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 382, $this->source); })()), "vars", [], "any", false, false, false, 382), "attr", [], "any", false, false, false, 382), "data-validation-optional-group-handler", [], "array", false, false, false, 382), "html", null, true);
                    echo "\"
            ";
                }
                // line 384
                echo "        ";
            }
            // line 385
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 385, $this->source); })()), "vars", [], "any", false, false, false, 385), "valid", [], "any", false, false, false, 385) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 386
($context["widget"] ?? null), "parent", [], "any", false, true, false, 386), "vars", [], "any", false, true, false, 386), "validation_ignore_if_not_changed", [], "any", true, true, false, 386)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 387
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 387, $this->source); })()), "parent", [], "any", false, false, false, 387), "vars", [], "any", false, false, false, 387), "validation_ignore_if_not_changed", [], "any", false, false, false, 387))) {
                // line 388
                echo "            data-validation-ignore
        ";
            }
            // line 390
            echo "    >
        <div class=\"row-oro oro-multiselect-holder";
            // line 391
            if ( !(isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 391, $this->source); })())) {
                echo " not-removable";
            }
            echo "\">
            ";
            // line 392
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 392, $this->source); })()), 'widget', ["disabled" => (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 392, $this->source); })())]);
            echo "
            ";
            // line 393
            if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 393, $this->source); })())) {
                // line 394
                echo "                <button class=\"removeRow btn btn-icon btn-square-light\"
                    aria-label=\"";
                // line 395
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.form.collection.remove"), "html", null, true);
                echo "\"
                    type=\"button\"
                    data-related=\"";
                // line 397
                echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 397, $this->source); })()), "html", null, true);
                echo "\">
                </button>
            ";
            }
            // line 400
            echo "            ";
            if ((isset($context["allow_add_after"]) || array_key_exists("allow_add_after", $context) ? $context["allow_add_after"] : (function () { throw new RuntimeError('Variable "allow_add_after" does not exist.', 400, $this->source); })())) {
                // line 401
                echo "                <button class=\"addAfterRow btn btn-icon btn-square-light\"
                    aria-label=\"";
                // line 402
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.form.collection.add"), "html", null, true);
                echo "\"
                    type=\"button\"
                    data-related=\"";
                // line 404
                echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 404, $this->source); })()), "html", null, true);
                echo "\">
                </button>
            ";
            }
            // line 407
            echo "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 447
    public function macro_oro_collection_validate_primary_js($__context__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "context" => $__context__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "oro_collection_validate_primary_js"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "oro_collection_validate_primary_js"));

            // line 448
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroForm/Form/fields.html.twig", 448)->unwrap();
            // line 449
            echo "    <div ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/view-component", "options" => ["_sourceElement" => ("#" . twig_get_attribute($this->env, $this->source,             // line 452
(isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 452, $this->source); })()), "id", [], "any", false, false, false, 452)), "view" => "oroform/js/app/views/fields-groups-collection-view"]]], 449, $context, $this->getSourceContext());
            // line 455
            echo "></div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroForm/Form/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2664 => 455,  2662 => 452,  2660 => 449,  2657 => 448,  2638 => 447,  2621 => 407,  2615 => 404,  2610 => 402,  2607 => 401,  2604 => 400,  2598 => 397,  2593 => 395,  2590 => 394,  2588 => 393,  2584 => 392,  2578 => 391,  2575 => 390,  2571 => 388,  2569 => 387,  2568 => 386,  2566 => 385,  2563 => 384,  2557 => 382,  2555 => 381,  2552 => 380,  2550 => 379,  2546 => 378,  2543 => 377,  2540 => 376,  2537 => 375,  2534 => 374,  2531 => 373,  2528 => 372,  2525 => 371,  2522 => 370,  2519 => 369,  2516 => 368,  2513 => 367,  2510 => 366,  2507 => 365,  2504 => 364,  2501 => 363,  2498 => 362,  2495 => 361,  2476 => 360,  2458 => 808,  2454 => 807,  2450 => 805,  2448 => 803,  2447 => 802,  2446 => 799,  2442 => 797,  2429 => 796,  2413 => 792,  2410 => 791,  2397 => 790,  2382 => 787,  2378 => 785,  2376 => 782,  2374 => 780,  2371 => 779,  2358 => 778,  2342 => 775,  2329 => 774,  2313 => 770,  2308 => 768,  2304 => 767,  2303 => 766,  2299 => 764,  2297 => 762,  2296 => 761,  2294 => 759,  2281 => 758,  2265 => 755,  2262 => 754,  2260 => 753,  2259 => 752,  2257 => 750,  2244 => 749,  2228 => 746,  2215 => 745,  2189 => 740,  2184 => 738,  2182 => 737,  2177 => 736,  2164 => 735,  2150 => 732,  2148 => 731,  2145 => 730,  2135 => 727,  2133 => 726,  2125 => 725,  2122 => 723,  2119 => 722,  2117 => 721,  2116 => 720,  2114 => 718,  2101 => 717,  2085 => 714,  2082 => 713,  2080 => 712,  2079 => 711,  2077 => 709,  2064 => 708,  2048 => 705,  2035 => 704,  2022 => 695,  2019 => 701,  2010 => 698,  2003 => 697,  1998 => 696,  1995 => 695,  1982 => 694,  1965 => 689,  1958 => 688,  1954 => 687,  1941 => 686,  1924 => 682,  1922 => 681,  1917 => 678,  1914 => 677,  1908 => 673,  1906 => 672,  1898 => 668,  1896 => 667,  1891 => 665,  1885 => 664,  1874 => 663,  1871 => 662,  1868 => 661,  1864 => 659,  1862 => 657,  1861 => 656,  1860 => 655,  1859 => 654,  1858 => 653,  1857 => 651,  1855 => 650,  1852 => 649,  1849 => 648,  1847 => 645,  1846 => 644,  1844 => 642,  1842 => 641,  1839 => 640,  1837 => 636,  1836 => 635,  1835 => 634,  1834 => 632,  1833 => 631,  1831 => 629,  1828 => 628,  1825 => 627,  1822 => 626,  1820 => 625,  1815 => 624,  1812 => 623,  1799 => 622,  1783 => 618,  1778 => 616,  1772 => 613,  1768 => 611,  1766 => 610,  1765 => 609,  1764 => 608,  1763 => 607,  1762 => 604,  1761 => 603,  1757 => 601,  1744 => 600,  1725 => 593,  1721 => 592,  1717 => 591,  1713 => 590,  1709 => 589,  1705 => 588,  1701 => 587,  1697 => 586,  1693 => 585,  1689 => 584,  1679 => 577,  1675 => 576,  1668 => 572,  1664 => 571,  1660 => 570,  1657 => 569,  1649 => 566,  1647 => 565,  1646 => 564,  1645 => 563,  1644 => 562,  1643 => 561,  1641 => 559,  1638 => 558,  1636 => 557,  1633 => 556,  1628 => 555,  1626 => 554,  1620 => 553,  1615 => 550,  1613 => 549,  1612 => 548,  1611 => 547,  1610 => 546,  1609 => 544,  1602 => 540,  1599 => 539,  1594 => 538,  1590 => 537,  1582 => 532,  1574 => 531,  1568 => 528,  1560 => 527,  1555 => 524,  1549 => 522,  1543 => 520,  1541 => 519,  1536 => 517,  1532 => 516,  1523 => 514,  1519 => 513,  1515 => 511,  1512 => 510,  1509 => 509,  1506 => 508,  1503 => 507,  1500 => 506,  1487 => 505,  1471 => 502,  1469 => 500,  1468 => 499,  1466 => 498,  1463 => 497,  1461 => 495,  1459 => 494,  1456 => 493,  1443 => 492,  1430 => 474,  1423 => 486,  1419 => 485,  1412 => 484,  1406 => 481,  1403 => 480,  1401 => 479,  1396 => 477,  1389 => 476,  1384 => 475,  1382 => 474,  1379 => 473,  1376 => 472,  1373 => 471,  1360 => 470,  1346 => 467,  1344 => 465,  1343 => 463,  1341 => 460,  1338 => 459,  1325 => 458,  1312 => 413,  1309 => 444,  1303 => 442,  1301 => 441,  1298 => 440,  1292 => 438,  1290 => 437,  1287 => 436,  1284 => 435,  1275 => 433,  1270 => 432,  1267 => 431,  1258 => 429,  1253 => 428,  1251 => 427,  1245 => 426,  1228 => 425,  1226 => 424,  1223 => 423,  1219 => 421,  1217 => 420,  1214 => 419,  1211 => 418,  1208 => 417,  1205 => 416,  1202 => 415,  1199 => 414,  1196 => 413,  1193 => 412,  1180 => 411,  1165 => 357,  1162 => 356,  1160 => 354,  1158 => 352,  1155 => 351,  1153 => 346,  1152 => 345,  1151 => 344,  1150 => 343,  1149 => 338,  1148 => 328,  1147 => 327,  1146 => 326,  1145 => 325,  1144 => 320,  1141 => 319,  1138 => 318,  1135 => 317,  1132 => 316,  1129 => 315,  1127 => 314,  1124 => 313,  1121 => 312,  1118 => 311,  1115 => 310,  1113 => 309,  1110 => 308,  1107 => 307,  1104 => 306,  1091 => 305,  1076 => 302,  1073 => 301,  1071 => 299,  1069 => 297,  1066 => 296,  1064 => 292,  1063 => 291,  1062 => 290,  1061 => 280,  1060 => 279,  1059 => 278,  1058 => 277,  1057 => 272,  1054 => 271,  1051 => 270,  1049 => 269,  1046 => 268,  1043 => 267,  1040 => 266,  1038 => 265,  1035 => 264,  1032 => 263,  1029 => 262,  1026 => 261,  1023 => 260,  1010 => 259,  994 => 256,  991 => 255,  978 => 254,  962 => 251,  959 => 250,  946 => 249,  930 => 246,  927 => 245,  914 => 244,  898 => 241,  895 => 240,  882 => 239,  869 => 194,  858 => 233,  855 => 231,  852 => 229,  850 => 228,  848 => 227,  846 => 226,  843 => 223,  842 => 222,  841 => 221,  840 => 220,  839 => 219,  838 => 218,  836 => 217,  834 => 216,  832 => 215,  818 => 214,  815 => 213,  812 => 212,  809 => 211,  806 => 210,  803 => 209,  800 => 208,  798 => 207,  795 => 206,  792 => 205,  789 => 204,  786 => 203,  783 => 202,  780 => 201,  777 => 200,  774 => 199,  771 => 198,  768 => 197,  765 => 196,  762 => 195,  759 => 194,  746 => 193,  731 => 189,  725 => 187,  723 => 186,  719 => 184,  710 => 182,  706 => 181,  700 => 178,  695 => 176,  691 => 175,  687 => 174,  683 => 173,  679 => 172,  675 => 171,  671 => 170,  667 => 169,  663 => 168,  659 => 166,  656 => 165,  653 => 164,  650 => 163,  647 => 162,  644 => 161,  641 => 160,  638 => 159,  635 => 158,  633 => 157,  624 => 151,  618 => 149,  605 => 148,  590 => 145,  546 => 104,  539 => 99,  526 => 98,  513 => 68,  509 => 94,  501 => 92,  499 => 91,  496 => 90,  494 => 89,  486 => 87,  484 => 86,  481 => 85,  475 => 84,  472 => 83,  463 => 82,  459 => 81,  451 => 79,  445 => 76,  442 => 75,  439 => 74,  431 => 72,  429 => 71,  409 => 70,  406 => 69,  403 => 68,  390 => 67,  377 => 60,  374 => 64,  365 => 62,  360 => 61,  357 => 60,  344 => 59,  331 => 52,  328 => 56,  319 => 54,  314 => 53,  311 => 52,  298 => 51,  282 => 48,  269 => 47,  232 => 44,  219 => 43,  205 => 40,  203 => 39,  202 => 38,  200 => 36,  197 => 35,  194 => 34,  191 => 33,  188 => 32,  185 => 31,  182 => 30,  179 => 29,  176 => 28,  173 => 27,  170 => 26,  167 => 25,  164 => 24,  162 => 23,  160 => 20,  157 => 19,  154 => 18,  151 => 17,  148 => 16,  145 => 15,  142 => 14,  139 => 13,  136 => 12,  133 => 11,  130 => 10,  127 => 9,  124 => 8,  121 => 7,  118 => 6,  115 => 5,  112 => 4,  99 => 3,  70 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/Form/fields.html.twig' %}

{% block oro_select2_widget %}
    {% if configs.grid is defined and configs.grid.name is defined %}
        {% set url = path('oro_datagrid_index', {'gridName': configs.grid.name}) %}
    {% elseif configs.route_name is defined and configs.route_name %}
        {% set url = path(configs.route_name, configs.route_parameters | default([])) %}
    {%  else %}
        {% set url = '' %}
    {% endif %}
    {% if configs.placeholder is defined %}
        {% set configs = configs|merge({'placeholder': configs.placeholder|trans|escape }) %}
    {% endif %}
    {% if configs.result_template_twig is defined and configs.result_template_twig %}
        {% set configs = configs|merge({'result_template': include(configs.result_template_twig) }) %}
    {% endif %}
    {% if configs.selection_template_twig is defined and configs.selection_template_twig %}
        {% set configs = configs|merge({'selection_template': include(configs.selection_template_twig) }) %}
    {% endif %}
    {% set configs = {
        containerCssClass: 'oro-select2',
        dropdownCssClass: 'oro-select2__dropdown'
    }|merge(configs) %}
    {% if configs.component is defined %}
        {% set component = 'oro/select2-'~configs.component~'-component' %}
    {%  else %}
        {% set component = 'oro/select2-component' %}
    {% endif %}
    {% if component_options is not defined %}
        {% set component_options = {} %}
    {% endif %}
    {% set component_options = component_options|merge({'configs': configs, 'url': url}) %}
    {% if excluded is defined %}
        {% set component_options = component_options|merge({'excluded': excluded }) %}
    {% endif %}
    {{ form_widget(form, { 'attr': {
        'class': 'select2',
        'data-page-component-module': component,
        'data-page-component-options': component_options|json_encode|raw
    } }) }}
{% endblock %}

{% block oro_select2_javascript %}
    {% block oro_select2_javascript_prototype %}{% endblock %}
{% endblock %}

{% block oro_select2_hidden_row %}
    {{ block('form_row') }}
{% endblock %}

{% block form_javascript %}
    {% apply spaceless %}
        {% for child in form %}
            {{ form_javascript(child) }}
        {% endfor %}
    {% endapply %}
{% endblock form_javascript %}

{% block form_stylesheet %}
    {% apply spaceless %}
        {% for child in form %}
            {{ form_stylesheet(child) }}
        {% endfor %}
    {% endapply %}
{% endblock form_stylesheet %}

{% block form_row_collection %}
    {% apply spaceless %}
        {% from '@OroUI/macros.html.twig' import collection_prototype  %}
        <div class=\"control-group{% if attr.class is defined %} {{ attr.class }}{% endif %}{% if block_prefixes is defined %} control-group-{{ block_prefixes[1] }}{% endif %}{% if group_attr.class is defined %} {{ group_attr.class }}{% endif %}\"{% if group_attr is defined %}{{ block('group_attributes') }}{% endif %}>
            {% if hint|default() and hint_position|default() == 'above' %}
                <div{{ block('hint_attributes') }}>{{ hint|raw }}</div>
            {% endif %}
            {% if label is not same as(false) %}
                <div class=\"control-label wrap\">
                    {{ form_label(form, '' , { label_attr: label_attr}) }}
                </div>
            {% endif %}
            <div class=\"controls{% if errors|length > 0 %} validation-error{% endif %}\">
                <div class=\"row-oro\">
                    <div class=\"oro-item-collection collection-fields-list\" data-prototype=\"{{ collection_prototype(form)|escape }}\">
                        {% for child in form.children %}{{ collection_prototype(child) }}{% endfor %}
                    </div>
                    {% if allow_add %}<a class=\"btn add-list-item\" href=\"#\" role=\"button\">{{ add_label|trans({}, translation_domain) }}</a>{% endif %}
                </div>
                {% if hint|default() and hint_position|default() == 'after_input' %}
                    <div{{ block('hint_attributes') }}>{{ hint|raw }}</div>
                {% endif %}
                {{- form_errors(form) -}}
            </div>
            {% if hint|default() and hint_position|default() == 'below' %}
                <div{{ block('hint_attributes') }}>{{ hint|raw }}</div>
            {% endif %}
        </div>
    {% endapply %}
{% endblock form_row_collection %}

{% block oro_ticker_symbol_widget %}
    <script>
        loadModules(['jquery', 'bootstrap'],
        function(\$){
            \$(function() {
                var cache = {};
                \$(\"#{{ id }}\").typeahead({
                    source: function (request, process) {
                        YAHOO = {
                            Finance: {
                                SymbolSuggest: {
                                    ssCallback: function (data) {
                                        var result = \$.map(data.ResultSet.Result, function (item) {
                                            return item.name + \" (\" + item.symbol + \")\";
                                        });
                                        \$.each(data.ResultSet.Result, function (itemKey, item) {
                                            cache[item.name + \" (\" + item.symbol + \")\"] = item.symbol;
                                        });
                                        process(result)
                                    }
                                }
                            }
                        };
                        \$.ajax({
                            type: \"GET\",
                            dataType: \"jsonp\",
                            jsonp: \"callback\",
                            jsonpCallback: \"YAHOO.Finance.SymbolSuggest.ssCallback\",
                            data: {
                                query: request
                            },
                            cache: true,
                            url: \"http://autoc.finance.yahoo.com/autoc\"
                        });
                    },
                    updater: function(item) {
                        if (typeof cache[item] != 'undefined') {
                            return cache[item];
                        } else {
                            return item;
                        }
                    }
                });
            });
        });
    </script>

    {{ form_widget(form) }}
{% endblock %}

{% block oro_multiple_entity_widget %}
    {{ form_widget(form) }}

    <div id=\"{{ id }}-container\"></div>

    <script>
        loadModules(['jquery',
            'oroform/js/multiple-entity', 'oroform/js/multiple-entity/collection', 'oroform/js/multiple-entity/model'
        ], function(\$, MultipleEntity, MultipleEntityCollection, MultipleEntityModel) {
            {% set selectionUrl = null %}
            {% set originalFieldId = attr['data-ftid'] %}
            {% if form.vars.grid_url is defined and form.vars.grid_url %}
                {% set selectionUrl = form.vars.grid_url %}
            {% elseif form.vars.selection_url is defined and form.vars.selection_url %}
                {% set selectionUrl = form.vars.selection_url %}
            {% endif %}
            {% set selectionRouteName = form.vars.selection_route|default(null) %}
            {% set selectionRouteParameters = form.vars.selection_route_parameters|default({}) %}

            var widget = new MultipleEntity({
                el: '#{{ id }}-container',
                addedElement: 'input[data-ftid=\"{{ originalFieldId }}_added\"]',
                removedElement: 'input[data-ftid=\"{{ originalFieldId }}_removed\"]',
                name: {{ id|json_encode|raw }},
                defaultElement: {{ form.vars.default_element|json_encode|raw }},
                selectionUrl: {{ selectionUrl|json_encode|raw }},
                selectionRouteName: {{ selectionRouteName|json_encode|raw }},
                selectionRouteParams: {{ selectionRouteParameters|json_encode(constant('JSON_FORCE_OBJECT'))|raw }},
                allowAction: {{ form.vars.allow_action|json_encode|raw }},
                collection: new MultipleEntityCollection(),
                selectorWindowTitle: {{ form.vars.selector_window_title|trans|json_encode|raw }}
            });
            var data = [];
            {% for element in initial_elements %}
                data.push(new MultipleEntityModel({{ element|json_encode|raw }}));
            {% endfor %}
            widget.getCollection().reset(data);

            {% if form.vars.extra_config is defined and form.vars.extra_config %}
                {{ block('oro_multiple_entity_js_' ~ form.vars.extra_config) }}
            {% endif %}
        });
    </script>
{% endblock %}

{% block form_label %}
    {% apply spaceless %}
    {% if label is not same as(false) %}
        {% if not compound %}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {% endif %}
        {% if required %}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if errors|length > 0 %}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' validation-error')|trim}) %}
        {% endif %}
        {% if label is empty %}
            {% if label_format is not empty -%}
                {% set label = label_format|replace({'%name%': name, '%id%': id}) %}
            {% else %}
                {% set label = name|humanize %}
            {% endif %}
        {% endif %}
        {% set isRadioLabel = form.parent.vars.expanded|default(false) and checked is defined %}

        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {%- if tooltip is defined and tooltip -%}
                {% import '@OroUI/macros.html.twig' as ui %}
                {{ ui.tooltip(
                    tooltip,
                    tooltip_parameters|default({}),
                    tooltip_placement|default(null),
                    tooltip_details_enabled|default(false),
                    tooltip_details_link|default(null),
                    tooltip_details_anchor|default(null)
                ) }}
            {%- endif -%}
            {%- if translatable_label is defined and not translatable_label -%}
                {{ label }}
            {%- elseif raw_label is defined and raw_label -%}
                {{ label|raw }}
            {%- else -%}
                {{ label|trans({}, translation_domain) }}
            {%- endif -%}
             <em>{% if required and not isRadioLabel %}*{% else %}&nbsp;{% endif %}</em>
        </label>
    {%- endif -%}
    {% endapply %}
{% endblock form_label %}

{% block oro_money_row %}
    {% set label = label|trans({}, translation_domain) ~ ' (' ~ currency_symbol ~')' %}
    {{ form_row(form, {'type': 'text', 'label': label, 'translatable_label': false}) }}
{% endblock %}

{% block oro_money_widget %}
    {% set type = type|default('text') %}
    {{ block('form_widget_simple') }}
{% endblock %}

{% block percent_row %}
    {% set label = label|trans({}, translation_domain) ~ ' (%)' %}
    {{ form_row(form, {'type': 'text', 'label': label, 'translatable_label': false}) }}
{% endblock %}

{% block percent_widget %}
    {% set type = type|default('text') %}
    {{ block('form_widget_simple') }}
{% endblock %}

{% block oro_date_widget %}
    {% if attribute(attr, 'data-validation') is defined %}
        {% set dateValidation = attr['data-validation'] %}
    {% else %}
        {% set dateValidation = {'Date' : {}} %}

        {% if required %}
            {% set dateValidation = dateValidation|merge({'NotBlank' : {'message': 'This value should not be blank.'}}) %}
        {% endif %}

        {% set dateValidation = dateValidation|json_encode(constant('JSON_FORCE_OBJECT')) %}
    {% endif %}

    {% set options = {
        view: 'oroui/js/app/views/datepicker/datepicker-view',
        nativeMode: isMobileVersion(),
        dateInputAttrs: {
            placeholder: 'oro.form.choose_date'|trans,
            id: id,
            name: id,
            'data-validation': dateValidation,
            class: 'datepicker-input ' ~ (attribute(attr, 'class') is defined ? attr['class'] : ''),
            'aria-live': 'assertive',
            autocomplete: 'off',
            autocorrect: 'off',
            autocapitalize: 'off'
        },
        datePickerOptions: {
            altFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: years|default('-80:+1'),
            minDate: minDate,
            maxDate: maxDate,
            showButtonPanel: true
        }
    } %}
    {% set id = 'hidden_' ~ id %}
    {% set attr = attr|merge({
        'data-page-component-module': 'oroui/js/app/components/view-component',
        'data-page-component-options': options|json_encode(constant('JSON_FORCE_OBJECT'))
    }) %}

    {{ block('date_widget') }}
{% endblock oro_date_widget %}

{% block oro_datetime_widget %}
    {% set dateValidation = {'Date' : {}} %}
    {% set timeValidation = {'Time' : {}} %}

    {% if required %}
        {% set dateValidation = dateValidation|merge({'NotBlank' : {}}) %}
        {% set timeValidation = timeValidation|merge({'NotBlank' : {}}) %}
    {% endif %}

    {% if attribute(attr, 'class') is defined %}
        {% set attrClass = attr['class'] %}
    {% else %}
        {% set attrClass = '' %}
    {% endif %}

    {% set options = {
        view: 'oroui/js/app/views/datepicker/datetimepicker-view',
        nativeMode: isMobileVersion(),
        dateInputAttrs: {
            placeholder: 'oro.form.choose_date'|trans,
            id: id,
            name: id,
            class: 'input-small datepicker-input ' ~ attrClass,
            'data-validation': dateValidation|json_encode(constant('JSON_FORCE_OBJECT')),
            'aria-live': 'assertive',
            autocomplete: 'off',
            autocorrect: 'off',
            autocapitalize: 'off'
        },
        datePickerOptions: {
            altFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: years|default('-80:+1'),
            showButtonPanel: true
        },
        timeInputAttrs: {
            placeholder: 'oro.form.choose_time'|trans,
            id: 'time_selector_' ~ id,
            name: 'time_selector_' ~ id,
            class: 'input-small timepicker-input ' ~ attrClass,
            'data-validation': timeValidation|json_encode(constant('JSON_FORCE_OBJECT'))
        },
        timePickerOptions: {
        }
    } %}
    {% set id = 'hidden_' ~ id %}
    {% set attr = attr|merge({
        'data-page-component-module': 'oroui/js/app/components/view-component',
        'data-page-component-options': options|json_encode(constant('JSON_FORCE_OBJECT'))
    }) %}

    {{ block('datetime_widget') }}
{% endblock oro_datetime_widget %}

{% macro oro_collection_item_prototype(widget) %}
    {% if 'collection' in widget.vars.block_prefixes %}
        {% set form = widget.vars.prototype %}
        {% set name = widget.vars.prototype.vars.name %}
        {% set disabled = widget.vars.disabled %}
        {% set allow_delete = widget.vars.allow_delete %}
        {% set allow_add_after = widget.vars.allow_add_after %}
    {% else %}
        {% set form = widget %}
        {% set name = widget.vars.full_name %}
        {% set disabled = widget.parent.vars.disabled %}
        {% set allow_delete = widget.parent.vars.allow_delete %}
        {% set allow_add_after = widget.parent.vars.allow_add_after %}
        {% if widget.vars.allow_delete is defined %}
            {% set allow_delete = allow_delete and widget.vars.allow_delete %}
        {% endif %}
    {% endif %}
    <div class=\"oro-collection-item\"
        data-content=\"{{ name }}\"
        {% if widget.parent.vars.skip_optional_validation_group is not defined %}
            data-validation-optional-group
            {% if form.vars.attr['data-validation-optional-group-handler'] is defined %}
                data-validation-optional-group-handler=\"{{ form.vars.attr['data-validation-optional-group-handler'] }}\"
            {% endif %}
        {% endif %}
        {% if widget.vars.valid and
            widget.parent.vars.validation_ignore_if_not_changed is defined and
            widget.parent.vars.validation_ignore_if_not_changed %}
            data-validation-ignore
        {% endif %}
    >
        <div class=\"row-oro oro-multiselect-holder{% if not allow_delete %} not-removable{% endif %}\">
            {{ form_widget(form, {disabled: disabled}) }}
            {% if allow_delete %}
                <button class=\"removeRow btn btn-icon btn-square-light\"
                    aria-label=\"{{ 'oro.form.collection.remove'|trans }}\"
                    type=\"button\"
                    data-related=\"{{ name }}\">
                </button>
            {% endif %}
            {% if allow_add_after %}
                <button class=\"addAfterRow btn btn-icon btn-square-light\"
                    aria-label=\"{{ 'oro.form.collection.add'|trans }}\"
                    type=\"button\"
                    data-related=\"{{ name }}\">
                </button>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% block oro_collection_widget %}
    {% import _self as formFields %}
    {% apply spaceless %}
        {% if prototype is defined %}
            {% set prototype_html = formFields.oro_collection_item_prototype(form) %}
        {% endif %}
        {% set attr = attr|merge({'class': (attr.class is defined ? attr.class ~ ' ' : '') ~ 'oro-item-collection collection-fields-list' }) %}
        {% set id = id ~ '_collection' %}
        <div class=\"row-oro\"
            {% if form.vars.validation_ignore_if_not_changed is defined and form.vars.validation_ignore_if_not_changed %}
                data-page-component-view=\"oroform/js/app/views/lazy-validation-collection-view\"
            {% endif %}
        >
            {% set prototype_name = form.vars.prototype_name %}
            <div {{ block('widget_container_attributes') }} data-last-index=\"{{ form.children|length}}\" data-row-count-add=\"{{ form.vars.row_count_add }}\" data-prototype-name=\"{{ prototype_name }}\"{% if prototype_html is defined %} data-prototype=\"{{ prototype_html|escape }}\"{% endif %}>
                <input type=\"hidden\" name=\"validate_{{ full_name }}\" data-collection-name=\"{{ full_name }}\" data-name=\"collection-validation\" disabled data-validate-element>
                {% if form.children|length %}
                    {% for child in form.children %}
                        {{ formFields.oro_collection_item_prototype(child) }}
                    {% endfor %}
                {% elseif show_form_when_empty and prototype_html is defined %}
                    {% for i in 0..(form.vars.row_count_initial - 1) %}
                        {{ prototype_html|replace({(prototype_name): i})|raw }}
                    {% endfor %}
                {% endif %}
            </div>
            {% if allow_add %}
            <a class=\"btn add-list-item\" href=\"#\" role=\"button\">{{ form.vars.add_label|default('oro.form.collection.add')|trans }}</a>
            {% endif %}
        </div>
        {% if handle_primary and (prototype is not defined or prototype.primary is defined) %}
            {{ formFields.oro_collection_validate_primary_js(_context) }}
        {% endif %}
    {% endapply %}
{% endblock %}

{% macro oro_collection_validate_primary_js(context) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    <div {{ UI.renderPageComponentAttributes({
        module: 'oroui/js/app/components/view-component',
        options: {
            _sourceElement: '#' ~ context.id,
            view: 'oroform/js/app/views/fields-groups-collection-view'
        }
    }) }}></div>
{% endmacro %}

{% block oro_form_js_validation %}
    {% import '@OroUI/macros.html.twig' as UI %}
    <div {{ UI.renderPageComponentAttributes({
        module: 'oroui/js/app/components/view-component',
        options: {
            _sourceElement: '#' ~ form.vars.id,
            view: 'oroform/js/app/views/form-validate-view',
            validationOptions: js_options
        }
    }) }}></div>
{% endblock %}

{% block oro_entity_create_or_select_row %}
    {% set currentMode = form.mode.vars.value|default('create') %}
    {% set viewsContainerId = form.vars.id ~ '-container' %}

    {% apply spaceless %}
        <div class=\"control-group create-select-entity {{ currentMode }}
            {% if attr.class is defined %} {{ attr.class }}{% endif %}\"
            id=\"{{ viewsContainerId }}\"
        >
            {% if label is not same as(false) %}
                <div class=\"control-label wrap\">
                    {{ form_label(form, '' , { label_attr: label_attr}) }}
                </div>
            {% endif %}
            <div class=\"controls{% if errors|length > 0 %} validation-error{% endif %}\">
                {{ form_widget(form) }}
                {{ form_errors(form) }}
            </div>
        </div>
    {% endapply %}
{% endblock %}

{% block oro_autocomplete_widget %}
    {% if autocomplete.selection_template_twig is defined and autocomplete.selection_template_twig %}
        {% set componentOptions = componentOptions|merge({
            selection_template: include(autocomplete.selection_template_twig)
        }) %}
    {% endif %}
    {% set attr = attr|merge({
        'data-page-component-module': componentModule,
        'data-page-component-options': componentOptions|json_encode
    }) %}
    {{ form_widget(form, {attr: attr}) }}
{% endblock oro_autocomplete_widget %}

{% block oro_entity_create_or_select_widget %}
    {% set currentMode = form.mode.vars.value|default('create') %}
    {% set btnGroupId = form.vars.id ~ '-btn-group' %}
    {% set viewsContainerId = form.vars.id ~ '-container' %}
    {% set gridWidgetAlias = form.vars.id ~ '-grid' %}
    {% set routeParametersElement = form.vars.id ~ '-route-parameters' %}

    <div class=\"create-select-entity-container clearfix\">
        <div id=\"{{ btnGroupId }}\" class=\"buttons-container\">
            <a href=\"#\" class=\"entity-select-btn\" title=\"{{ 'Choose'|trans }}\"{% if disabled or (attr.readonly is defined and attr.readonly) %} disabled=\"disabled\"{% endif %}>
                <span
                    data-label=\"{{ 'Choose Existing'|trans }}\"
                    data-alt-label-view=\"{{ 'Choose Another'|trans }}\"
                >
                    {% if currentMode == 'view' %}
                        {{ 'Choose Another'|trans }}
                    {% else %}
                        {{ 'Choose Existing'|trans }}
                    {% endif %}
                </span>
            </a>

            <a href=\"#\" class=\"entity-create-btn\" title=\"{{ 'Create New'|trans }}\"{% if disabled or (attr.readonly is defined and attr.readonly) %} disabled=\"disabled\"{% endif %}>
                <span>{{ 'Create New'|trans }}</span>
            </a>

            <a href=\"#\" class=\"entity-cancel-btn\" title=\"{{ 'Cancel'|trans }}\"{% if disabled or (attr.readonly is defined and attr.readonly) %} disabled=\"disabled\"{% endif %}>
                <span>{{ 'Cancel'|trans }}</span>
            </a>
        </div>

        <div class=\"entity-create-block\"
            {% if not form.vars.required %}data-validation-optional-group=\"\"{% endif %}
            {% if currentMode != 'create' %}data-validation-ignore=\"\"{% endif %}
        >
            {{ form_widget(form.new_entity) }}
        </div>

        <div class=\"entity-select-block\">
            {{ oro_widget_render({
                'widgetType': 'block',
                'loadingElement': '#' ~ viewsContainerId ~ ' .create-select-entity-container',
                'elementFirst': currentMode == 'grid',
                'url': path('oro_datagrid_widget', {'gridName': form.vars.grid_name}),
                'alias': gridWidgetAlias
            }) }}
        </div>

        <div class=\"entity-view-block {% if view_widgets|length > 1 %}row-fluid row-fluid-divider{% endif %}\">
            {% set allRouteParameters = {} %}
            {% for view_widget in view_widgets %}
                <div class=\"responsive-cell\">
                    {% set routeParameters = view_widget.route_parameters %}
                    {% set allRouteParameters = allRouteParameters|merge({ (view_widget.widget_alias) : routeParameters }) %}
                    {{ oro_widget_render({
                        'widgetType': 'block',
                        'loadingElement': '#' ~ viewsContainerId ~ ' .create-select-entity-container',
                        'elementFirst': currentMode == 'view',
                        'url': currentMode == 'view' ? path(view_widget.route_name, routeParameters) : null,
                        'alias': view_widget.widget_alias,
                        'title': view_widget.title is defined ? view_widget.title|trans : null
                    }) }}
                </div>
            {% endfor %}
            <input type=\"hidden\"
               name=\"{{ routeParametersElement }}\"
               id=\"{{ routeParametersElement }}\"
               value=\"{{ allRouteParameters|json_encode|raw|escape }}\"
            />
        </div>

        {{ form_widget(form.existing_entity) }}
        {{ form_widget(form.mode) }}
    </div>
    <script>
        loadModules(['jquery', 'oroform/js/create-select-type-handler'],
        function (\$, createSelectTypeHandler) {
            \$(function() {
                createSelectTypeHandler(
                    '#{{ btnGroupId }}',
                    '#{{ viewsContainerId }}',
                    '#{{ form.mode.vars.id }}',
                    '#{{ form.existing_entity.vars.id }}',
                    '#{{ routeParametersElement }}',
                    {{ gridWidgetAlias|json_encode|raw }},
                    {{ form.vars.view_widgets|json_encode|raw }},
                    {{ form.vars.existing_entity_grid_id|json_encode|raw }},
                    {{ currentMode|json_encode|raw }},
                    {{ allRouteParameters|json_encode|raw }}
                );
            });
        });
    </script>
{% endblock %}

{% block oro_entity_create_or_select_choice_widget %}
    <div class=\"create-select-entity-choice-container\"
         data-page-component-module=\"oroform/js/app/components/create-or-select-choice-component\"
         data-page-component-options=\"{{ {
             modeSelector: '#' ~ form.mode.vars.id,
             newEntitySelector: '.new-entity',
             existingEntitySelector: '.existing-entity',
             existingEntityInputSelector: '#' ~ form.existing_entity.vars.id,
             editable: form.vars.editable|default(false),
             disabled_edit_form: form.vars.disabled_edit_form|default(false),
             editRoute: form.vars.edit_route|default(null)
         }|json_encode }}\">
        <div class=\"existing-entity\">
            {{ form_widget(form.existing_entity) }}
        </div>
        <div class=\"new-entity\">
            {{ form_widget(form.new_entity) }}
        </div>
        {{ form_widget(form.mode) }}
    </div>
{% endblock %}

{% block oro_entity_create_or_select_inline_widget %}
    {% set isButtonsEnabled = not disabled and (attr.readonly is not defined or not attr.readonly) %}
    <div id=\"{{ id }}-el\"
            {% if configs.extra_config is not defined or not configs.extra_config %}
                {% if form.vars.configs.async_dialogs|default(false) is same as(true) %}
                    {% set asyncNameSegment = 'async-' %}
                {% endif %}
                {% set urlParts = {
                    grid: {
                        route: form.vars.grid_widget_route|default('oro_datagrid_widget'),
                        gridWidgetView: form.vars.grid_view_widget_route|default('oro_datagrid_widget'),
                        parameters: {
                            gridName     : form.vars.grid_name,
                            params       : form.vars.grid_parameters,
                            renderParams : form.vars.grid_render_parameters
                        }
                    }
                } %}

                {% if form.vars.create_enabled|default(false) is same as(true) %}
                    {% set urlParts = urlParts|merge({
                        create: {
                            route:      form.vars.create_form_route,
                            parameters: form.vars.create_form_route_parameters
                        }
                    }) %}
                {% endif %}
                {% import '@OroUI/macros.html.twig' as UI %}
                {{ UI.renderPageComponentAttributes({
                    module: 'oroform/js/app/components/select-create-inline-type-' ~ asyncNameSegment|default('') ~ 'component',
                    options: {
                        inputSelector: '#'~id,
                        entityLabel: label|trans({}, translation_domain),
                        urlParts: urlParts,
                        existingEntityGridId: form.vars.existing_entity_grid_id|default('id'),
                        createEnabled: form.vars.create_enabled|default(false)
                        }
                    }) }}
            {% else %}
                {% set _block = block('oro_entity_create_or_select_inline_js_' ~ configs.extra_config) %}
            {% endif %}
        {% if isButtonsEnabled %}class=\"entity-create-or-select-container {% if form.vars.create_enabled %}entity-create-enabled{% endif %}\"{% endif %}>
        <div {% if isButtonsEnabled %}class=\"input-append\"{% endif %}>
            {{ form_widget(form) }}

            {% if isButtonsEnabled %}
                <button class=\"add-on btn btn-icon btn-square-default entity-select-btn\" aria-label=\"{{ 'oro.form.entity_select'|trans({'%name%': label|trans({}, translation_domain) }) }}\">
                    <span class=\"fa-bars fa-offset-none\" aria-hidden=\"true\"></span>
                </button>

                {% if form.vars.create_enabled %}
                    <button class=\"btn btn-icon btn-square-default entity-create-btn\">
                        <span class=\"fa-plus fa-offset-none\" aria-hidden=\"true\"></span>
                    </button>
                {% endif %}
            {% endif %}
        </div>
    </div>

    {% if _block is defined and _block is not empty %}
        {{ _block|raw }}
    {% endif %}
{% endblock %}

{% block oro_link_type_widget %}
    {% if isPath or is_granted(acl) %} {# @todo after BAP-4696 implementation remove isPath from condition #}
        <a href=\"{{ isPath ? route : path(route, routeParameters) }}\" class=\"{{ class is defined and class ? class : '' }}\" style=\"display: block; margin-top: 5px;\">
            {{ title|trans }}
        </a>
    {% endif %}
{% endblock %}

{% block oro_download_links_type_widget %}
    {% apply spaceless %}
        {% for fileName, route in files %}
            <a href=\"{{ route }}\" class=\"{{ class is defined and class ? class : '' }}\" style=\"display: block; margin-top: 5px;\">
                {{ fileName }}
            </a>
        {% endfor %}
    {% endapply %}
{% endblock %}

{% block oro_simple_color_picker_row %}
    {{ block('form_row') }}
{% endblock %}

{% block oro_simple_color_picker_widget %}
    {% set attr = {
        'data-page-component-module': 'oroui/js/app/components/view-component',
        'data-page-component-options': {'view': 'oroform/js/app/views/simple-color-picker-view'}|merge(configs)|json_encode
    }|merge(attr) %}
    {% set type = 'hidden' %}
    {{ block('form_widget_simple') }}
{% endblock %}

{% block oro_simple_color_choice_widget %}
    {% set attr = {
        'data-page-component-module': 'oroui/js/app/components/view-component',
        'data-page-component-options': {'view': 'oroform/js/app/views/simple-color-choice-view'}|merge(configs)|json_encode
    }|merge(attr) %}
    {% if required and empty_value is none and not empty_value_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {% if allow_empty_color -%}
            <option value=\"\" class=\"empty-color\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ empty_value|trans({}, translation_domain) }}</option>
            <optgroup label=\"---\"></optgroup>
        {%- endif %}
        {% set options = choices -%}
        {{- block('oro_simple_color_choice_widget_options') -}}
    </select>
{% endblock %}

{% block oro_simple_color_choice_widget_options %}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ group_label }}\"></optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ translatable ? choice.label|trans({}, translation_domain) : choice.label }}</option>
        {%- endif -%}
    {% endfor %}
{% endblock %}

{% block oro_color_table_row %}
    {{ block('form_row') }}
{% endblock %}

{% block oro_color_table_widget %}
    {% set attr = {
        'data-page-component-module': 'oroui/js/app/components/view-component',
        'data-page-component-options': {'view': 'oroform/js/app/views/color-table-view'}|merge(configs)|json_encode
    }|merge(attr) %}
    {% set type = 'hidden' %}
    {{ block('form_widget_simple') }}
{% endblock %}

{% block oro_resizeable_rich_text_widget %}
    {% set options = {
        'view': 'oroform/js/app/views/wysiwig-editor/wysiwyg-dialog-view',
        'editorComponentName': form.vars.attr['data-page-component-name'] is defined ?
        form.vars.attr['data-page-component-name'] : form.vars.attr['data-ftid']
    } %}

    <div data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-name=\"wrap_{{ form.vars.attr['data-page-component-name'] is defined ?
            form.vars.attr['data-page-component-name'] : form.vars.attr['data-ftid'] }}\"
         data-page-component-options=\"{{ options|json_encode }}\"
         data-layout=\"separate\" >
        {{ form_widget(form) }}
    </div>
{% endblock %}

{% block oro_entity_tree_select_row %}
    {{ block('form_row') }}
{% endblock %}

{% block oro_entity_tree_select_widget %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {{ UI.renderJsTree(
        {
            'treeOptions': form.vars.treeOptions,
            'disableActions': true
        }
    ) }}

    {{ form_widget(form) }}
{% endblock %}

{% block button_row %}
    <div class=\"control-group-container control-group-button\">
        {{ form_widget(form) }}
    </div>
{% endblock %}

{% block oro_checkbox_widget %}
    <div class=\"oro-checkbox-view\"
         data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"{{ {
             view: 'oroform/js/app/views/checkbox-view',
             selectors: {
                 checkbox: '#' ~ form.vars.id,
                 hiddenInput: '#' ~ form.vars.id ~ '-hidden'
             }
         }|json_encode }}\"
    >
        {{ block('checkbox_widget') }}
        <input id=\"{{ form.vars.id }}-hidden\" type=\"hidden\" value=\"0\" name=\"{{ form.vars.full_name }}\" disabled=\"disabled\">
    </div>
{% endblock %}
", "@OroForm/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/Form/fields.html.twig");
    }
}
