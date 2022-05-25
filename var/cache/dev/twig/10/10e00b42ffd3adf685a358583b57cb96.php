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

/* @OroChannel/Form/fields.html.twig */
class __TwigTemplate_ba16aa6c2db39d1f52d7a7aad78ec4dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_channel_datasource_form_row' => [$this, 'block_oro_channel_datasource_form_row'],
            'oro_channel_datasource_form_widget' => [$this, 'block_oro_channel_datasource_form_widget'],
            'oro_channel_entity_choice_form_row' => [$this, 'block_oro_channel_entity_choice_form_row'],
            '_oro_channel_form_channelType_widget' => [$this, 'block__oro_channel_form_channelType_widget'],
            'oro_multiple_entity_js_channel_aware' => [$this, 'block_oro_multiple_entity_js_channel_aware'],
            'oro_entity_create_or_select_inline_js_autocomplete_channel_aware' => [$this, 'block_oro_entity_create_or_select_inline_js_autocomplete_channel_aware'],
            'oro_entity_create_or_select_inline_js_grid_channel_aware' => [$this, 'block_oro_entity_create_or_select_inline_js_grid_channel_aware'],
            'oro_entity_create_or_select_inline_js_channel_aware' => [$this, 'block_oro_entity_create_or_select_inline_js_channel_aware'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroChannel/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroChannel/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroChannel/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_channel_datasource_form_row', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('oro_channel_datasource_form_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('oro_channel_entity_choice_form_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('_oro_channel_form_channelType_widget', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('oro_multiple_entity_js_channel_aware', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('oro_entity_create_or_select_inline_js_autocomplete_channel_aware', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('oro_entity_create_or_select_inline_js_grid_channel_aware', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('oro_entity_create_or_select_inline_js_channel_aware', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_channel_datasource_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_channel_datasource_form_row", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_channel_datasource_form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_channel_datasource_form_row"));

        // line 2
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 5
    public function block_oro_channel_datasource_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_channel_datasource_form_widget", $this->getTemplateName(), 5));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_channel_datasource_form_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_channel_datasource_form_widget"));

        // line 6
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 6, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 6)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 6, $this->source); })()), "class", [], "any", false, false, false, 6) . " ")) : ("")) . "orocrm-channel-datasource-field")]);
        // line 7
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 7, $this->source); })())]);
        echo "

    ";
        // line 9
        $context["options"] = ["el" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)), "idEl" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "identifier", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)), "dataEl" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "data", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)), "typeEl" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "type", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13)), "nameEl" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)), "channelNameEl" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "parent", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15))];
        // line 17
        echo "
    <div data-page-component-module=\"orochannel/js/app/components/integration-widget\"
         data-page-component-options=\"";
        // line 19
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 19, $this->source); })())), "html", null, true);
        echo "\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 22
    public function block_oro_channel_entity_choice_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_channel_entity_choice_form_row", $this->getTemplateName(), 22));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_channel_entity_choice_form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_channel_entity_choice_form_row"));

        // line 23
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'row');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 26
    public function block__oro_channel_form_channelType_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_oro_channel_form_channelType_widget", $this->getTemplateName(), 26));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_channel_form_channelType_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_channel_form_channelType_widget"));

        // line 27
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "disabled", [], "any", false, false, false, 27)) {
            // line 28
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 29
                echo "            ";
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 29, $this->source); })()))) {
                    // line 30
                    echo "                <span class=\"inline-text\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "html", null, true);
                    echo "\" data-value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "html", null, true);
                    echo "\" data-disabled>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 30)), "html", null, true);
                    echo "</span>
            ";
                }
                // line 32
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    ";
        } else {
            // line 34
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'widget');
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 38
    public function block_oro_multiple_entity_js_channel_aware($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_multiple_entity_js_channel_aware", $this->getTemplateName(), 38));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_multiple_entity_js_channel_aware"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_multiple_entity_js_channel_aware"));

        // line 39
        echo "    var \$channelSelector = \$('select[name=\"' + ";
        echo json_encode((isset($context["channel_field_name"]) || array_key_exists("channel_field_name", $context) ? $context["channel_field_name"] : (function () { throw new RuntimeError('Variable "channel_field_name" does not exist.', 39, $this->source); })()));
        echo " + '\"]'),
        presetChannelId = ";
        // line 40
        echo json_encode((isset($context["channel_id"]) || array_key_exists("channel_id", $context) ? $context["channel_id"] : (function () { throw new RuntimeError('Variable "channel_id" does not exist.', 40, $this->source); })()));
        echo ",
        changeHandler = function(\$el) {
            var channelIds = [\$el.val()];

            if (presetChannelId) {
                channelIds.push(presetChannelId);
            }

            widget.options.selectionRouteParams.channelIds = channelIds.join(',');
        };

        \$channelSelector.change(function() {
            changeHandler(\$(this));
            widget.removeAll();
        });
        changeHandler(\$channelSelector);
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 58
    public function block_oro_entity_create_or_select_inline_js_autocomplete_channel_aware($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_entity_create_or_select_inline_js_autocomplete_channel_aware", $this->getTemplateName(), 58));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_inline_js_autocomplete_channel_aware"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_inline_js_autocomplete_channel_aware"));

        // line 59
        echo "    ";
        $this->displayBlock("oro_entity_create_or_select_inline_js_channel_aware", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 62
    public function block_oro_entity_create_or_select_inline_js_grid_channel_aware($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_entity_create_or_select_inline_js_grid_channel_aware", $this->getTemplateName(), 62));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_inline_js_grid_channel_aware"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_inline_js_grid_channel_aware"));

        // line 63
        echo "    ";
        $this->displayBlock("oro_entity_create_or_select_inline_js_channel_aware", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 66
    public function block_oro_entity_create_or_select_inline_js_channel_aware($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_entity_create_or_select_inline_js_channel_aware", $this->getTemplateName(), 66));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_inline_js_channel_aware"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_inline_js_channel_aware"));

        // line 67
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroChannel/Form/fields.html.twig", 67)->unwrap();
        // line 68
        echo "    ";
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 68), "configs", [], "any", false, true, false, 68), "async_dialogs", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 68), "configs", [], "any", false, true, false, 68), "async_dialogs", [], "any", false, false, false, 68), false)) : (false)) === true)) {
            // line 69
            echo "        ";
            $context["asyncNameSegment"] = "async-";
            // line 70
            echo "    ";
        }
        // line 71
        echo "    ";
        $context["urlParts"] = ["grid" => ["route" => "oro_datagrid_widget", "parameters" => ["gridName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "vars", [], "any", false, false, false, 75), "grid_name", [], "any", false, false, false, 75), "params" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 76
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "vars", [], "any", false, false, false, 76), "grid_parameters", [], "any", false, false, false, 76), "renderParams" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 77
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "vars", [], "any", false, false, false, 77), "grid_render_parameters", [], "any", false, false, false, 77)]]];
        // line 81
        echo "
    ";
        // line 82
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 82), "create_enabled", [], "any", true, true, false, 82)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 82), "create_enabled", [], "any", false, false, false, 82), false)) : (false)) === true)) {
            // line 83
            echo "        ";
            $context["urlParts"] = twig_array_merge((isset($context["urlParts"]) || array_key_exists("urlParts", $context) ? $context["urlParts"] : (function () { throw new RuntimeError('Variable "urlParts" does not exist.', 83, $this->source); })()), ["create" => ["route" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 85
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "vars", [], "any", false, false, false, 85), "create_form_route", [], "any", false, false, false, 85), "parameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 86
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "vars", [], "any", false, false, false, 86), "create_form_route_parameters", [], "any", false, false, false, 86)]]);
            // line 89
            echo "    ";
        }
        // line 90
        echo "    <div ";
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => (("orochannel/js/app/components/select-create-inline-type-" . ((        // line 91
array_key_exists("asyncNameSegment", $context)) ? (_twig_default_filter((isset($context["asyncNameSegment"]) || array_key_exists("asyncNameSegment", $context) ? $context["asyncNameSegment"] : (function () { throw new RuntimeError('Variable "asyncNameSegment" does not exist.', 91, $this->source); })()), "")) : (""))) . "component"), "options" => ["_sourceElement" => (("#" .         // line 93
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 93, $this->source); })())) . "-el"), "inputSelector" => ("#" .         // line 94
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 94, $this->source); })())), "entityLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 95
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 95, $this->source); })())), "urlParts" =>         // line 96
(isset($context["urlParts"]) || array_key_exists("urlParts", $context) ? $context["urlParts"] : (function () { throw new RuntimeError('Variable "urlParts" does not exist.', 96, $this->source); })()), "existingEntityGridId" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 97
($context["form"] ?? null), "vars", [], "any", false, true, false, 97), "existing_entity_grid_id", [], "any", true, true, false, 97)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 97), "existing_entity_grid_id", [], "any", false, false, false, 97), "id")) : ("id")), "createEnabled" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
($context["form"] ?? null), "vars", [], "any", false, true, false, 98), "create_enabled", [], "any", true, true, false, 98)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 98), "create_enabled", [], "any", false, false, false, 98), false)) : (false)), "channelFieldSelector" => (("select[name=\"" .         // line 99
(isset($context["channel_field_name"]) || array_key_exists("channel_field_name", $context) ? $context["channel_field_name"] : (function () { throw new RuntimeError('Variable "channel_field_name" does not exist.', 99, $this->source); })())) . "\"]"), "channelRequired" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 100
($context["form"] ?? null), "vars", [], "any", false, true, false, 100), "channel_required", [], "any", true, true, false, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 100), "channel_required", [], "any", false, false, false, 100), false)) : (false)), "presetChannelId" =>         // line 101
(isset($context["channel_id"]) || array_key_exists("channel_id", $context) ? $context["channel_id"] : (function () { throw new RuntimeError('Variable "channel_id" does not exist.', 101, $this->source); })())]]], 90, $context, $this->getSourceContext());
        // line 103
        echo " style=\"display: none\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroChannel/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  432 => 103,  430 => 101,  429 => 100,  428 => 99,  427 => 98,  426 => 97,  425 => 96,  424 => 95,  423 => 94,  422 => 93,  421 => 91,  419 => 90,  416 => 89,  414 => 86,  413 => 85,  411 => 83,  409 => 82,  406 => 81,  404 => 77,  403 => 76,  402 => 75,  400 => 71,  397 => 70,  394 => 69,  391 => 68,  388 => 67,  375 => 66,  359 => 63,  346 => 62,  330 => 59,  317 => 58,  287 => 40,  282 => 39,  269 => 38,  252 => 34,  249 => 33,  243 => 32,  233 => 30,  230 => 29,  225 => 28,  222 => 27,  209 => 26,  193 => 23,  180 => 22,  165 => 19,  161 => 17,  159 => 15,  158 => 14,  157 => 13,  156 => 12,  155 => 11,  154 => 10,  153 => 9,  147 => 7,  144 => 6,  131 => 5,  115 => 2,  102 => 1,  89 => 66,  86 => 65,  84 => 62,  81 => 61,  79 => 58,  76 => 57,  74 => 38,  71 => 37,  69 => 26,  66 => 25,  64 => 22,  61 => 21,  59 => 5,  56 => 4,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_channel_datasource_form_row %}
    {{ block('form_row') }}
{% endblock %}

{% block oro_channel_datasource_form_widget %}
    {% set attr = attr|merge({'class': (attr.class is defined ? attr.class ~ ' ' : '') ~ 'orocrm-channel-datasource-field' }) %}
    {{ form_widget(form, { 'attr': attr }) }}

    {% set options = {
        el:             '#' ~ form.vars.id,
        idEl:           '#' ~ form.identifier.vars.id,
        dataEl:         '#' ~ form.data.vars.id,
        typeEl:         '#' ~ form.type.vars.id,
        nameEl:         '#' ~ form.name.vars.id,
        channelNameEl:  '#' ~ form.parent.name.vars.id
    } %}

    <div data-page-component-module=\"orochannel/js/app/components/integration-widget\"
         data-page-component-options=\"{{ options|json_encode }}\"></div>
{% endblock %}

{% block oro_channel_entity_choice_form_row %}
    {{ form_row(form) }}
{% endblock %}

{% block _oro_channel_form_channelType_widget %}
    {% if form.vars.disabled %}
        {% for choice in choices %}
            {% if choice is selectedchoice(value) %}
                <span class=\"inline-text\" id=\"{{ form.vars.id }}\" data-value=\"{{ form.vars.value }}\" data-disabled>{{ choice.label|trans }}</span>
            {% endif %}
        {% endfor %}
    {% else %}
        {{ form_widget(form) }}
    {% endif %}
{% endblock %}

{% block oro_multiple_entity_js_channel_aware %}
    var \$channelSelector = \$('select[name=\"' + {{ channel_field_name|json_encode|raw }} + '\"]'),
        presetChannelId = {{ channel_id|json_encode|raw }},
        changeHandler = function(\$el) {
            var channelIds = [\$el.val()];

            if (presetChannelId) {
                channelIds.push(presetChannelId);
            }

            widget.options.selectionRouteParams.channelIds = channelIds.join(',');
        };

        \$channelSelector.change(function() {
            changeHandler(\$(this));
            widget.removeAll();
        });
        changeHandler(\$channelSelector);
{% endblock %}

{% block oro_entity_create_or_select_inline_js_autocomplete_channel_aware %}
    {{ block('oro_entity_create_or_select_inline_js_channel_aware') }}
{% endblock %}

{% block oro_entity_create_or_select_inline_js_grid_channel_aware %}
    {{ block('oro_entity_create_or_select_inline_js_channel_aware') }}
{% endblock %}

{% block oro_entity_create_or_select_inline_js_channel_aware %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% if form.vars.configs.async_dialogs|default(false) is same as(true) %}
        {% set asyncNameSegment = 'async-' %}
    {% endif %}
    {% set urlParts = {
        grid: {
            route: 'oro_datagrid_widget',
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
    <div {{ UI.renderPageComponentAttributes({
                module: 'orochannel/js/app/components/select-create-inline-type-' ~ asyncNameSegment|default('') ~ 'component',
                options: {
                    _sourceElement: '#'~id~'-el',
                    inputSelector: '#'~id,
                    entityLabel: label|trans,
                    urlParts: urlParts,
                    existingEntityGridId: form.vars.existing_entity_grid_id|default('id'),
                    createEnabled: form.vars.create_enabled|default(false),
                    channelFieldSelector: 'select[name=\"'~channel_field_name~'\"]',
                    channelRequired: form.vars.channel_required|default(false),
                    presetChannelId: channel_id
                }
            }) }} style=\"display: none\"></div>
{% endblock %}
", "@OroChannel/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/ChannelBundle/Resources/views/Form/fields.html.twig");
    }
}
