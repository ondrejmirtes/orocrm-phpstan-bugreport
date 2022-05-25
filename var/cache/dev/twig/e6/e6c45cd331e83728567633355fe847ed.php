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

/* @OroUser/Form/fields.html.twig */
class __TwigTemplate_b2e10417d3816e4baa8dd063853f6ca0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_entity_create_or_select_inline_js_acl_user_autocomplete' => [$this, 'block_oro_entity_create_or_select_inline_js_acl_user_autocomplete'],
            'oro_type_widget_owners_row' => [$this, 'block_oro_type_widget_owners_row'],
            'oro_user_apikey_gen_row' => [$this, 'block_oro_user_apikey_gen_row'],
            'oro_user_apikey_gen_key_row' => [$this, 'block_oro_user_apikey_gen_key_row'],
            '_user_settings_oro_user___case_insensitive_email_addresses_enabled_value_errors' => [$this, 'block__user_settings_oro_user___case_insensitive_email_addresses_enabled_value_errors'],
            'oro_user_emailsettings_widget' => [$this, 'block_oro_user_emailsettings_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_entity_create_or_select_inline_js_acl_user_autocomplete', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('oro_type_widget_owners_row', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('oro_user_apikey_gen_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('oro_user_apikey_gen_key_row', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('_user_settings_oro_user___case_insensitive_email_addresses_enabled_value_errors', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('oro_user_emailsettings_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_entity_create_or_select_inline_js_acl_user_autocomplete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_entity_create_or_select_inline_js_acl_user_autocomplete", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_inline_js_acl_user_autocomplete"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_inline_js_acl_user_autocomplete"));

        // line 2
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/Form/fields.html.twig", 2)->unwrap();
        // line 3
        echo "    ";
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 3), "configs", [], "any", false, true, false, 3), "async_dialogs", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 3), "configs", [], "any", false, true, false, 3), "async_dialogs", [], "any", false, false, false, 3), false)) : (false)) === true)) {
            // line 4
            echo "        ";
            $context["asyncNameSegment"] = "async-";
            // line 5
            echo "    ";
        }
        // line 6
        echo "    ";
        $context["gridParameters"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "grid_parameters", [], "any", false, false, false, 6), ["permission" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 7, $this->source); })()), "permission", [], "any", false, false, false, 7), "entity" => twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 8, $this->source); })()), "entity_name", [], "any", false, false, false, 8), "entity_id" => twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 9, $this->source); })()), "entity_id", [], "any", false, false, false, 9)]);
        // line 11
        echo "
    ";
        // line 12
        $context["urlParts"] = ["grid" => ["route" => "oro_datagrid_widget", "parameters" => ["gridName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "grid_name", [], "any", false, false, false, 16), "params" =>         // line 17
(isset($context["gridParameters"]) || array_key_exists("gridParameters", $context) ? $context["gridParameters"] : (function () { throw new RuntimeError('Variable "gridParameters" does not exist.', 17, $this->source); })()), "renderParams" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "grid_render_parameters", [], "any", false, false, false, 18)]]];
        // line 22
        echo "
    ";
        // line 23
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 23), "create_enabled", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 23), "create_enabled", [], "any", false, false, false, 23), false)) : (false)) === true)) {
            // line 24
            echo "    ";
            $context["urlParts"] = twig_array_merge((isset($context["urlParts"]) || array_key_exists("urlParts", $context) ? $context["urlParts"] : (function () { throw new RuntimeError('Variable "urlParts" does not exist.', 24, $this->source); })()), ["create" => ["route" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 26
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "vars", [], "any", false, false, false, 26), "create_form_route", [], "any", false, false, false, 26), "parameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 27
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "create_form_route_parameters", [], "any", false, false, false, 27)]]);
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div ";
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => (("orocrmchannel/js/app/components/select-create-inline-type-" . ((        // line 32
array_key_exists("asyncNameSegment", $context)) ? (_twig_default_filter((isset($context["asyncNameSegment"]) || array_key_exists("asyncNameSegment", $context) ? $context["asyncNameSegment"] : (function () { throw new RuntimeError('Variable "asyncNameSegment" does not exist.', 32, $this->source); })()), "")) : (""))) . "component"), "options" => ["_sourceElement" => (("#" .         // line 34
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 34, $this->source); })())) . "-el"), "inputSelector" => ("#" .         // line 35
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 35, $this->source); })())), "entityLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 36
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 36, $this->source); })())), "urlParts" =>         // line 37
(isset($context["urlParts"]) || array_key_exists("urlParts", $context) ? $context["urlParts"] : (function () { throw new RuntimeError('Variable "urlParts" does not exist.', 37, $this->source); })()), "existingEntityGridId" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["form"] ?? null), "vars", [], "any", false, true, false, 38), "existing_entity_grid_id", [], "any", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 38), "existing_entity_grid_id", [], "any", false, false, false, 38), "id")) : ("id")), "createEnabled" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["form"] ?? null), "vars", [], "any", false, true, false, 39), "create_enabled", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 39), "create_enabled", [], "any", false, false, false, 39), false)) : (false))]]], 31, $context, $this->getSourceContext());
        // line 41
        echo " style=\"display: none\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 44
    public function block_oro_type_widget_owners_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_type_widget_owners_row", $this->getTemplateName(), 44));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_widget_owners_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_widget_owners_row"));

        // line 45
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 46
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 50
    public function block_oro_user_apikey_gen_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_user_apikey_gen_row", $this->getTemplateName(), 50));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_user_apikey_gen_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_user_apikey_gen_row"));

        // line 51
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_start');
        echo "
    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'errors');
        echo "
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "apiKey", [], "any", false, false, false, 53), 'row', ["apiKeyElementId" => (isset($context["apiKeyElementId"]) || array_key_exists("apiKeyElementId", $context) ? $context["apiKeyElementId"] : (function () { throw new RuntimeError('Variable "apiKeyElementId" does not exist.', 53, $this->source); })())]);
        echo "
    <button class=\"btn btn-sm no-hash\" id=\"btn-apigen\" title=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate key"), "html", null, true);
        echo "\" type=\"submit\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate key"), "html", null, true);
        echo "</button>
    ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 58
    public function block_oro_user_apikey_gen_key_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_user_apikey_gen_key_row", $this->getTemplateName(), 58));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_user_apikey_gen_key_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_user_apikey_gen_key_row"));

        // line 59
        echo "    <span class=\"api-key\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["apiKeyElementId"]) || array_key_exists("apiKeyElementId", $context) ? $context["apiKeyElementId"] : (function () { throw new RuntimeError('Variable "apiKeyElementId" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 59, $this->source); })())), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")), "html", null, true);
        echo "</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 62
    public function block__user_settings_oro_user___case_insensitive_email_addresses_enabled_value_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_user_settings_oro_user___case_insensitive_email_addresses_enabled_value_errors", $this->getTemplateName(), 62));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_user_settings_oro_user___case_insensitive_email_addresses_enabled_value_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_user_settings_oro_user___case_insensitive_email_addresses_enabled_value_errors"));

        // line 63
        ob_start();
        // line 64
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 64, $this->source); })())) > 0)) {
            // line 65
            echo "            ";
            $context["combinedError"] = "";
            // line 66
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 66, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 67
                echo "                ";
                $context["combinedError"] = ((((isset($context["combinedError"]) || array_key_exists("combinedError", $context) ? $context["combinedError"] : (function () { throw new RuntimeError('Variable "combinedError" does not exist.', 67, $this->source); })()) != "")) ? ((((isset($context["combinedError"]) || array_key_exists("combinedError", $context) ? $context["combinedError"] : (function () { throw new RuntimeError('Variable "combinedError" does not exist.', 67, $this->source); })()) . "; ") . twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 67))) : (twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 67)));
                // line 68
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "            <span class=\"validation-failed\"><span><span>";
            echo (isset($context["combinedError"]) || array_key_exists("combinedError", $context) ? $context["combinedError"] : (function () { throw new RuntimeError('Variable "combinedError" does not exist.', 69, $this->source); })());
            echo "</span></span></span>
        ";
        }
        // line 71
        echo "    ";
        $___internal_parse_49_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo twig_spaceless($___internal_parse_49_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 74
    public function block_oro_user_emailsettings_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_user_emailsettings_widget", $this->getTemplateName(), 74));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_user_emailsettings_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_user_emailsettings_widget"));

        // line 75
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 77
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroUser/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  369 => 79,  360 => 77,  356 => 76,  351 => 75,  338 => 74,  325 => 63,  322 => 71,  316 => 69,  310 => 68,  307 => 67,  302 => 66,  299 => 65,  297 => 64,  295 => 63,  282 => 62,  264 => 59,  251 => 58,  236 => 55,  230 => 54,  226 => 53,  222 => 52,  217 => 51,  204 => 50,  184 => 46,  179 => 45,  166 => 44,  152 => 41,  150 => 39,  149 => 38,  148 => 37,  147 => 36,  146 => 35,  145 => 34,  144 => 32,  142 => 31,  139 => 30,  137 => 27,  136 => 26,  134 => 24,  132 => 23,  129 => 22,  127 => 18,  126 => 17,  125 => 16,  124 => 12,  121 => 11,  119 => 9,  118 => 8,  117 => 7,  115 => 6,  112 => 5,  109 => 4,  106 => 3,  103 => 2,  90 => 1,  77 => 74,  74 => 73,  72 => 62,  69 => 61,  67 => 58,  64 => 57,  62 => 50,  59 => 49,  57 => 44,  54 => 43,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_entity_create_or_select_inline_js_acl_user_autocomplete %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% if form.vars.configs.async_dialogs|default(false) is same as(true) %}
        {% set asyncNameSegment = 'async-' %}
    {% endif %}
    {% set gridParameters = form.vars.grid_parameters|merge({
        'permission': configs.permission,
        'entity':     configs.entity_name,
        'entity_id':  configs.entity_id
    }) %}

    {% set urlParts = {
        grid: {
            route: 'oro_datagrid_widget',
            parameters: {
                gridName     : form.vars.grid_name,
                params       : gridParameters,
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
    <div {{ UI.renderPageComponentAttributes({
        module: 'orocrmchannel/js/app/components/select-create-inline-type-' ~ asyncNameSegment|default('') ~ 'component',
        options: {
            _sourceElement: '#'~id~'-el',
            inputSelector: '#'~id,
            entityLabel: label|trans,
            urlParts: urlParts,
            existingEntityGridId: form.vars.existing_entity_grid_id|default('id'),
            createEnabled: form.vars.create_enabled|default(false)
        }
    }) }} style=\"display: none\"></div>
{% endblock %}

{% block oro_type_widget_owners_row %}
    {% for child in form %}
        {{ form_row(child) }}
    {% endfor %}
{% endblock %}

{% block oro_user_apikey_gen_row %}
    {{ form_start(form) }}
    {{ form_errors(form) }}
    {{ form_row(form.apiKey, {'apiKeyElementId': apiKeyElementId}) }}
    <button class=\"btn btn-sm no-hash\" id=\"btn-apigen\" title=\"{{ 'Generate key'|trans }}\" type=\"submit\">{{ 'Generate key'|trans }}</button>
    {{ form_end(form) }}
{% endblock %}

{% block oro_user_apikey_gen_key_row %}
    <span class=\"api-key\" id=\"{{ apiKeyElementId }}\">{{ value|escape|default('N/A'|trans) }}</span>
{% endblock %}

{% block _user_settings_oro_user___case_insensitive_email_addresses_enabled_value_errors %}
    {%- apply spaceless -%}
        {% if errors|length > 0 %}
            {% set combinedError = '' %}
            {% for error in errors %}
                {% set combinedError = (combinedError != '') ? combinedError ~ '; ' ~ error.message : error.message %}
            {% endfor %}
            <span class=\"validation-failed\"><span><span>{{ combinedError|raw }}</span></span></span>
        {% endif %}
    {% endapply %}
{% endblock %}

{% block oro_user_emailsettings_widget %}
    <div {{ block('widget_container_attributes') }}>
        {% for child in form %}
            {{ form_widget(child) }}
        {% endfor %}
    </div>
{% endblock %}
", "@OroUser/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/Form/fields.html.twig");
    }
}
