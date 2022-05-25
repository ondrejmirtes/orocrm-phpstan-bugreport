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

/* @OroLocale/Form/fields.html.twig */
class __TwigTemplate_0e7dd564225779e29f21c88a838da30d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_quarter_widget' => [$this, 'block_oro_quarter_widget'],
            'oro_locale_fallback_value_widget' => [$this, 'block_oro_locale_fallback_value_widget'],
            'oro_locale_fallback_value_tabs_widget' => [$this, 'block_oro_locale_fallback_value_tabs_widget'],
            'oro_locale_localized_property_widget' => [$this, 'block_oro_locale_localized_property_widget'],
            'oro_locale_localized_property_tabs_widget' => [$this, 'block_oro_locale_localized_property_tabs_widget'],
            'oro_locale_localized_fallback_value_collection_widget' => [$this, 'block_oro_locale_localized_fallback_value_collection_widget'],
            'oro_locale_localized_fallback_value_collection_tabs_widget' => [$this, 'block_oro_locale_localized_fallback_value_collection_tabs_widget'],
            '_localization_oro_locale___default_localization_widget' => [$this, 'block__localization_oro_locale___default_localization_widget'],
            '_localization_oro_locale___enabled_localizations_widget' => [$this, 'block__localization_oro_locale___enabled_localizations_widget'],
            '_localization_oro_locale___enabled_localizations_use_parent_scope_value_row' => [$this, 'block__localization_oro_locale___enabled_localizations_use_parent_scope_value_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroLocale/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroLocale/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroLocale/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_quarter_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('oro_locale_fallback_value_widget', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('oro_locale_fallback_value_tabs_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('oro_locale_localized_property_widget', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('oro_locale_localized_property_tabs_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('oro_locale_localized_fallback_value_collection_widget', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('oro_locale_localized_fallback_value_collection_tabs_widget', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('_localization_oro_locale___default_localization_widget', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('_localization_oro_locale___enabled_localizations_widget', $context, $blocks);
        // line 165
        echo "
";
        // line 166
        $this->displayBlock('_localization_oro_locale___enabled_localizations_use_parent_scope_value_row', $context, $blocks);
        // line 171
        echo "
";
        // line 189
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_quarter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_quarter_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_quarter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_quarter_widget"));

        // line 2
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 2, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 2)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 2, $this->source); })()), "class", [], "any", false, false, false, 2) . " ")) : ("")) . "oro-quarter")]);
        // line 3
        echo "    ";
        $context["options"] = ["disabled" => (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 3, $this->source); })())];
        // line 4
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 5
        echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 5, $this->source); })()), ["{{ year }}" => "", "{{ month }}" =>         // line 7
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "month", [], "any", false, false, false, 7), 'widget', (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 7, $this->source); })())), "{{ day }}" =>         // line 8
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "day", [], "any", false, false, false, 8), 'widget', (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 8, $this->source); })()))]);
        // line 9
        echo "
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 13
    public function block_oro_locale_fallback_value_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_locale_fallback_value_widget", $this->getTemplateName(), 13));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_locale_fallback_value_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_locale_fallback_value_widget"));

        // line 14
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "vars", [], "any", false, false, false, 14), "group_fallback_fields", [], "any", false, false, false, 14)) {
            // line 15
            echo "        <div class=\"fallback-item-fallback-line\">
            <div nowrap=\"true\" class=\"fallback-item-use-fallback\">
                ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "use_fallback", [], "any", false, false, false, 17), 'widget');
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "use_fallback", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "label", [], "any", false, false, false, 17)), "html", null, true);
            echo "
            </div>
            <div class=\"fallback-item-fallback\">
                ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "fallback", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "fallback"]]);
            echo "
            </div>
        </div>
    ";
        }
        // line 24
        echo "    <div>
        <div class=\"fallback-item-value";
        // line 25
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "vars", [], "any", false, false, false, 25), "group_fallback_fields", [], "any", false, false, false, 25)) {
            echo " fallback-item-value-top";
        }
        echo "\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "value", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "fallback-item-value-input"]]);
        echo "
        </div>
        ";
        // line 28
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "group_fallback_fields", [], "any", false, false, false, 28)) {
            // line 29
            echo "            <div class=\"fallback-item-fallback-line\">
                <div nowrap=\"true\" class=\"fallback-item-use-fallback\">
                    ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "use_fallback", [], "any", false, false, false, 31), 'widget');
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "use_fallback", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "label", [], "any", false, false, false, 31)), "html", null, true);
            echo "
                </div>
                <div class=\"fallback-item-fallback ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "exclude_parent_localization", [], "any", false, false, false, 33)) {
                echo "hide";
            }
            echo "\">
                    ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "fallback", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "fallback"]]);
            echo "
                </div>
            </div>
        ";
        }
        // line 38
        echo "    </div>

    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "value", [], "any", false, false, false, 40), 'errors');
        echo "
    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "fallback", [], "any", false, false, false, 41), 'errors');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 44
    public function block_oro_locale_fallback_value_tabs_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_locale_fallback_value_tabs_widget", $this->getTemplateName(), 44));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_locale_fallback_value_tabs_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_locale_fallback_value_tabs_widget"));

        // line 45
        echo "    <div class=\"fallback-item-fallback\">
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "fallback", [], "any", false, false, false, 46), 'row', ["attr" => ["class" => "fallback"]]);
        echo "
    </div>
    <div class=\"fallback-item-value\">
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "value", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "fallback-item-value-input"]]);
        echo "
    </div>
    <div class=\"fallback-item-use-fallback hide\">
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "use_fallback", [], "any", false, false, false, 52), 'widget');
        echo "
    </div>
    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "value", [], "any", false, false, false, 54), 'errors');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 57
    public function block_oro_locale_localized_property_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_locale_localized_property_widget", $this->getTemplateName(), 57));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_locale_localized_property_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_locale_localized_property_widget"));

        // line 58
        echo "    <div class=\"fallback-container\"
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
        // line 60
        echo twig_escape_filter($this->env, json_encode(["view" => "orolocale/js/app/views/fallback-view"]), "html", null, true);
        echo "\"
            data-layout=\"separate\"
            >
        <div class=\"fallback-item\">
            <div class=\"fallback-item-value fallback-item-value--first\">
                <div class=\"input-append\">
                    <div class=\"input-group\">
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "default", [], "any", false, false, false, 67), 'widget');
        echo "
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "default", [], "any", false, false, false, 68), 'errors');
        echo "
                    </div>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-icon btn-square-default fallback-status\"></button>
                    </div>
                </div>
            </div>
            <div class=\"fallback-item-label\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "default", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "label", [], "any", false, false, false, 75)), "html", null, true);
        echo "</div>
        </div>
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "localizations", [], "any", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["localization"]) {
            // line 78
            echo "            <div class=\"fallback-item\" style=\"display: none;\">
                <div class=\"fallback-item-label ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localization"], "vars", [], "any", false, false, false, 79), "group_fallback_fields", [], "any", false, false, false, 79)) {
                echo "fallback-item-top";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localization"], "vars", [], "any", false, false, false, 79), "label", [], "any", false, false, false, 79)), "html", null, true);
            echo "</div>
                <div ";
            // line 80
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localization"], "vars", [], "any", false, false, false, 80), "group_fallback_fields", [], "any", false, false, false, 80)) {
                echo "class=\"fallback-item-top\"";
            }
            echo ">
                    ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["localization"], 'widget');
            echo "
                    ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["localization"], 'errors');
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 89
    public function block_oro_locale_localized_property_tabs_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_locale_localized_property_tabs_widget", $this->getTemplateName(), 89));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_locale_localized_property_tabs_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_locale_localized_property_tabs_widget"));

        // line 90
        echo "    ";
        $macros["fields"] = $this;
        // line 91
        echo "
    ";
        // line 92
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroLocale/Form/fields.html.twig", 92)->unwrap();
        // line 93
        echo "    <div class=\"fallback-container oro-tabs tabbable\"
         data-layout=\"separate\"
         ";
        // line 95
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "orolocale/js/app/views/localizable-collection-tabs-view"]], 95, $context, $this->getSourceContext());
        // line 97
        echo "
    >
        ";
        // line 99
        $context["tabId"] = uniqid("fallback-container-");
        // line 100
        echo "
        <div class=\"oro-tabs__head\" ";
        // line 101
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/tabs-component"]], 101, $context, $this->getSourceContext());
        // line 103
        echo ">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                ";
        // line 105
        ob_start();
        // line 106
        echo "                    ";
        echo twig_call_macro($macros["fields"], "macro_renderTabNavItem", [twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "default", [], "any", false, false, false, 106), true, (((isset($context["tabId"]) || array_key_exists("tabId", $context) ? $context["tabId"] : (function () { throw new RuntimeError('Variable "tabId" does not exist.', 106, $this->source); })()) . "-") . 0)], 106, $context, $this->getSourceContext());
        echo "
                    ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "localizations", [], "any", false, false, false, 107));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["localization"]) {
            // line 108
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_renderTabNavItem", [$context["localization"], false, (((isset($context["tabId"]) || array_key_exists("tabId", $context) ? $context["tabId"] : (function () { throw new RuntimeError('Variable "tabId" does not exist.', 108, $this->source); })()) . "-") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 108))], 108, $context, $this->getSourceContext());
            echo "
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                ";
        $___internal_parse_52_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        echo twig_spaceless($___internal_parse_52_);
        // line 111
        echo "            </ul>
        </div>
        <div class=\"oro-tabs__content\">
            <div class=\"tab-content\">
                ";
        // line 115
        ob_start();
        // line 116
        echo "                    ";
        echo twig_call_macro($macros["fields"], "macro_renderTab", [twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "default", [], "any", false, false, false, 116), true, (((isset($context["tabId"]) || array_key_exists("tabId", $context) ? $context["tabId"] : (function () { throw new RuntimeError('Variable "tabId" does not exist.', 116, $this->source); })()) . "-") . 0)], 116, $context, $this->getSourceContext());
        echo "
                    ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "localizations", [], "any", false, false, false, 117));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["localization"]) {
            // line 118
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_renderTab", [$context["localization"], false, (((isset($context["tabId"]) || array_key_exists("tabId", $context) ? $context["tabId"] : (function () { throw new RuntimeError('Variable "tabId" does not exist.', 118, $this->source); })()) . "-") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 118))], 118, $context, $this->getSourceContext());
            echo "
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                ";
        $___internal_parse_53_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 115
        echo twig_spaceless($___internal_parse_53_);
        // line 121
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 126
    public function block_oro_locale_localized_fallback_value_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_locale_localized_fallback_value_collection_widget", $this->getTemplateName(), 126));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_locale_localized_fallback_value_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_locale_localized_fallback_value_collection_widget"));

        // line 127
        echo "    <div class=\"control-group\">
        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "values", [], "any", false, false, false, 128), 'widget');
        echo "
        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "values", [], "any", false, false, false, 129), 'errors');
        echo "
        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "ids", [], "any", false, false, false, 130), 'widget');
        echo "
        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "ids", [], "any", false, false, false, 131), 'errors');
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 135
    public function block_oro_locale_localized_fallback_value_collection_tabs_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_locale_localized_fallback_value_collection_tabs_widget", $this->getTemplateName(), 135));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_locale_localized_fallback_value_collection_tabs_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_locale_localized_fallback_value_collection_tabs_widget"));

        // line 136
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "values", [], "any", false, false, false, 136), 'widget');
        echo "
    ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "values", [], "any", false, false, false, 137), 'errors');
        echo "
    ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "ids", [], "any", false, false, false, 138), 'widget');
        echo "
    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "ids", [], "any", false, false, false, 139), 'errors');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 142
    public function block__localization_oro_locale___default_localization_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_localization_oro_locale___default_localization_widget", $this->getTemplateName(), 142));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_localization_oro_locale___default_localization_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_localization_oro_locale___default_localization_widget"));

        // line 143
        echo "    <span data-page-component-module=\"oroui/js/app/components/view-component\"
          data-page-component-options=\"";
        // line 144
        echo twig_escape_filter($this->env, json_encode(["view" => "orolocale/js/app/views/localization-select-view", "selectSelector" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 146
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "value", [], "any", false, false, false, 146), "vars", [], "any", false, false, false, 146), "id", [], "any", false, false, false, 146)), "useParentSelector" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 147
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "use_parent_scope_value", [], "any", false, false, false, 147), "vars", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147))]), "html", null, true);
        // line 148
        echo "\"
    >
        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), 'widget');
        echo "
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 154
    public function block__localization_oro_locale___enabled_localizations_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_localization_oro_locale___enabled_localizations_widget", $this->getTemplateName(), 154));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_localization_oro_locale___enabled_localizations_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_localization_oro_locale___enabled_localizations_widget"));

        // line 155
        echo "    <span data-page-component-module=\"oroui/js/app/components/view-component\"
          data-page-component-options=\"";
        // line 156
        echo twig_escape_filter($this->env, json_encode(["view" => "orolocale/js/app/views/localizations-select-view", "selectSelector" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 158
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "value", [], "any", false, false, false, 158), "vars", [], "any", false, false, false, 158), "id", [], "any", false, false, false, 158)), "useParentSelector" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 159
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "use_parent_scope_value", [], "any", false, false, false, 159), "vars", [], "any", false, false, false, 159), "id", [], "any", false, false, false, 159))]), "html", null, true);
        // line 160
        echo "\"
    >
        ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), 'widget');
        echo "
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 166
    public function block__localization_oro_locale___enabled_localizations_use_parent_scope_value_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_localization_oro_locale___enabled_localizations_use_parent_scope_value_row", $this->getTemplateName(), 166));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_localization_oro_locale___enabled_localizations_use_parent_scope_value_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_localization_oro_locale___enabled_localizations_use_parent_scope_value_row"));

        // line 167
        echo "    <span class=\"hide\">
        ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), 'row', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 168, $this->source); })())]);
        echo "
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 172
    public function macro_renderTabNavItem($__form__ = null, $__isDefault__ = null, $__uniqid__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "isDefault" => $__isDefault__,
            "uniqid" => $__uniqid__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTabNavItem"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTabNavItem"));

            // line 173
            echo "    <li class=\"nav-item\">
        <a id=\"";
            // line 174
            echo twig_escape_filter($this->env, ((isset($context["uniqid"]) || array_key_exists("uniqid", $context) ? $context["uniqid"] : (function () { throw new RuntimeError('Variable "uniqid" does not exist.', 174, $this->source); })()) . "-tab"), "html", null, true);
            echo "\"
           class=\"nav-link ";
            // line 175
            if ((isset($context["isDefault"]) || array_key_exists("isDefault", $context) ? $context["isDefault"] : (function () { throw new RuntimeError('Variable "isDefault" does not exist.', 175, $this->source); })())) {
                echo "active";
            }
            echo "\"
           role=\"tab\"
           href=\"#\"
           aria-controls=\"";
            // line 178
            echo twig_escape_filter($this->env, (isset($context["uniqid"]) || array_key_exists("uniqid", $context) ? $context["uniqid"] : (function () { throw new RuntimeError('Variable "uniqid" does not exist.', 178, $this->source); })()), "html", null, true);
            echo "\"
           aria-selected=\"";
            // line 179
            if ((isset($context["isDefault"]) || array_key_exists("isDefault", $context) ? $context["isDefault"] : (function () { throw new RuntimeError('Variable "isDefault" does not exist.', 179, $this->source); })())) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\"
           data-role=\"change-localization\"
           data-target=\".localization-fields-";
            // line 181
            echo twig_escape_filter($this->env, (isset($context["uniqid"]) || array_key_exists("uniqid", $context) ? $context["uniqid"] : (function () { throw new RuntimeError('Variable "uniqid" does not exist.', 181, $this->source); })()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "vars", [], "any", false, false, false, 181), "name", [], "any", false, false, false, 181), "html", null, true);
            echo "\"
           data-toggle=\"tab\"
           data-related=\"";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "vars", [], "any", false, false, false, 183), "name", [], "any", false, false, false, 183), "html", null, true);
            echo "\"
        >
            ";
            // line 185
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "vars", [], "any", false, false, false, 185), "label", [], "any", false, false, false, 185)), "html", null, true);
            echo "
        </a>
    </li>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 190
    public function macro_renderTab($__form__ = null, $__isDefault__ = null, $__uniqid__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "isDefault" => $__isDefault__,
            "uniqid" => $__uniqid__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTab"));

            // line 191
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["uniqid"]) || array_key_exists("uniqid", $context) ? $context["uniqid"] : (function () { throw new RuntimeError('Variable "uniqid" does not exist.', 191, $this->source); })()), "html", null, true);
            echo "\"
         class=\"fallback-item localization-fields-";
            // line 192
            echo twig_escape_filter($this->env, (isset($context["uniqid"]) || array_key_exists("uniqid", $context) ? $context["uniqid"] : (function () { throw new RuntimeError('Variable "uniqid" does not exist.', 192, $this->source); })()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "vars", [], "any", false, false, false, 192), "name", [], "any", false, false, false, 192), "html", null, true);
            echo " tab-pane";
            if ((isset($context["isDefault"]) || array_key_exists("isDefault", $context) ? $context["isDefault"] : (function () { throw new RuntimeError('Variable "isDefault" does not exist.', 192, $this->source); })())) {
                echo " active";
            }
            echo "\"
         role=\"tabpanel\"
         aria-labelledby=\"";
            // line 194
            echo twig_escape_filter($this->env, ((isset($context["uniqid"]) || array_key_exists("uniqid", $context) ? $context["uniqid"] : (function () { throw new RuntimeError('Variable "uniqid" does not exist.', 194, $this->source); })()) . "-tab"), "html", null, true);
            echo "\"
    >
        ";
            // line 196
            if ((isset($context["isDefault"]) || array_key_exists("isDefault", $context) ? $context["isDefault"] : (function () { throw new RuntimeError('Variable "isDefault" does not exist.', 196, $this->source); })())) {
                echo "<div class=\"fallback-item-value\">";
            }
            // line 197
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), 'widget');
            echo "
        ";
            // line 198
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), 'errors');
            echo "
        ";
            // line 199
            if ((isset($context["isDefault"]) || array_key_exists("isDefault", $context) ? $context["isDefault"] : (function () { throw new RuntimeError('Variable "isDefault" does not exist.', 199, $this->source); })())) {
                echo "</div>";
            }
            // line 200
            echo "    </div>
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
        return "@OroLocale/Form/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  892 => 200,  888 => 199,  884 => 198,  879 => 197,  875 => 196,  870 => 194,  859 => 192,  854 => 191,  833 => 190,  814 => 185,  809 => 183,  802 => 181,  793 => 179,  789 => 178,  781 => 175,  777 => 174,  774 => 173,  753 => 172,  737 => 168,  734 => 167,  721 => 166,  705 => 162,  701 => 160,  699 => 159,  698 => 158,  697 => 156,  694 => 155,  681 => 154,  665 => 150,  661 => 148,  659 => 147,  658 => 146,  657 => 144,  654 => 143,  641 => 142,  626 => 139,  622 => 138,  618 => 137,  613 => 136,  600 => 135,  584 => 131,  580 => 130,  576 => 129,  572 => 128,  569 => 127,  556 => 126,  540 => 121,  538 => 115,  535 => 120,  518 => 118,  501 => 117,  496 => 116,  494 => 115,  488 => 111,  486 => 105,  483 => 110,  466 => 108,  449 => 107,  444 => 106,  442 => 105,  438 => 103,  436 => 101,  433 => 100,  431 => 99,  427 => 97,  425 => 95,  421 => 93,  419 => 92,  416 => 91,  413 => 90,  400 => 89,  386 => 86,  376 => 82,  372 => 81,  366 => 80,  358 => 79,  355 => 78,  351 => 77,  346 => 75,  336 => 68,  332 => 67,  322 => 60,  318 => 58,  305 => 57,  290 => 54,  285 => 52,  279 => 49,  273 => 46,  270 => 45,  257 => 44,  242 => 41,  238 => 40,  234 => 38,  227 => 34,  221 => 33,  215 => 31,  211 => 29,  209 => 28,  204 => 26,  198 => 25,  195 => 24,  188 => 20,  181 => 17,  177 => 15,  174 => 14,  161 => 13,  147 => 9,  145 => 8,  144 => 7,  143 => 5,  138 => 4,  135 => 3,  133 => 2,  120 => 1,  106 => 189,  103 => 171,  101 => 166,  98 => 165,  96 => 154,  93 => 153,  91 => 142,  88 => 141,  86 => 135,  83 => 134,  81 => 126,  78 => 125,  76 => 89,  73 => 88,  71 => 57,  68 => 56,  66 => 44,  63 => 43,  61 => 13,  58 => 12,  56 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_quarter_widget -%}
    {% set attr = attr|merge({'class': (attr.class is defined ? attr.class ~ ' ' : '') ~ 'oro-quarter' }) %}
    {% set options = {'disabled': disabled} %}
    <div {{ block('widget_container_attributes') }}>
        {{ date_pattern|replace({
        '{{ year }}':  '',
        '{{ month }}': form_widget(form.month, options),
        '{{ day }}':   form_widget(form.day, options),
        })|raw }}
    </div>
{%- endblock %}

{% block oro_locale_fallback_value_widget %}
    {% if form.vars.group_fallback_fields %}
        <div class=\"fallback-item-fallback-line\">
            <div nowrap=\"true\" class=\"fallback-item-use-fallback\">
                {{ form_widget(form.use_fallback) }}{{ form.use_fallback.vars.label|trans }}
            </div>
            <div class=\"fallback-item-fallback\">
                {{ form_widget(form.fallback, {'attr': {'class': 'fallback'}}) }}
            </div>
        </div>
    {% endif %}
    <div>
        <div class=\"fallback-item-value{% if form.vars.group_fallback_fields %} fallback-item-value-top{% endif %}\">
            {{ form_widget(form.value, {'attr': {'class' : 'fallback-item-value-input'}}) }}
        </div>
        {% if not form.vars.group_fallback_fields %}
            <div class=\"fallback-item-fallback-line\">
                <div nowrap=\"true\" class=\"fallback-item-use-fallback\">
                    {{ form_widget(form.use_fallback) }}{{ form.use_fallback.vars.label|trans }}
                </div>
                <div class=\"fallback-item-fallback {% if form.vars.exclude_parent_localization %}hide{% endif %}\">
                    {{ form_widget(form.fallback, {'attr': {'class': 'fallback'}}) }}
                </div>
            </div>
        {% endif %}
    </div>

    {{ form_errors(form.value) }}
    {{ form_errors(form.fallback) }}
{% endblock %}

{% block oro_locale_fallback_value_tabs_widget %}
    <div class=\"fallback-item-fallback\">
        {{ form_row(form.fallback, {'attr': {'class': 'fallback'}}) }}
    </div>
    <div class=\"fallback-item-value\">
        {{ form_widget(form.value, {'attr': {'class' : 'fallback-item-value-input'}}) }}
    </div>
    <div class=\"fallback-item-use-fallback hide\">
        {{ form_widget(form.use_fallback) }}
    </div>
    {{ form_errors(form.value) }}
{% endblock %}

{% block oro_locale_localized_property_widget %}
    <div class=\"fallback-container\"
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"{{ {view: 'orolocale/js/app/views/fallback-view'}|json_encode }}\"
            data-layout=\"separate\"
            >
        <div class=\"fallback-item\">
            <div class=\"fallback-item-value fallback-item-value--first\">
                <div class=\"input-append\">
                    <div class=\"input-group\">
                        {{ form_widget(form.default) }}
                        {{ form_errors(form.default) }}
                    </div>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-icon btn-square-default fallback-status\"></button>
                    </div>
                </div>
            </div>
            <div class=\"fallback-item-label\">{{ form.default.vars.label|trans }}</div>
        </div>
        {% for localization in form.localizations %}
            <div class=\"fallback-item\" style=\"display: none;\">
                <div class=\"fallback-item-label {% if localization.vars.group_fallback_fields %}fallback-item-top{% endif %}\">{{ localization.vars.label|trans }}</div>
                <div {% if localization.vars.group_fallback_fields %}class=\"fallback-item-top\"{% endif %}>
                    {{ form_widget(localization) }}
                    {{ form_errors(localization) }}
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block oro_locale_localized_property_tabs_widget %}
    {% import _self as fields %}

    {% import '@OroUI/macros.html.twig' as UI %}
    <div class=\"fallback-container oro-tabs tabbable\"
         data-layout=\"separate\"
         {{ UI.renderPageComponentAttributes({
            view: 'orolocale/js/app/views/localizable-collection-tabs-view'
         }) }}
    >
        {% set tabId = 'fallback-container-'|uniqid %}

        <div class=\"oro-tabs__head\" {{ UI.renderPageComponentAttributes({
            module: 'oroui/js/app/components/tabs-component'
        }) }}>
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                {% apply spaceless %}
                    {{ fields.renderTabNavItem(form.default, true, tabId ~ '-' ~ 0) }}
                    {% for localization in form.localizations %}
                        {{ fields.renderTabNavItem(localization, false, tabId ~ '-' ~ loop.index) }}
                    {% endfor %}
                {% endapply %}
            </ul>
        </div>
        <div class=\"oro-tabs__content\">
            <div class=\"tab-content\">
                {% apply spaceless %}
                    {{ fields.renderTab(form.default, true, tabId ~ '-' ~ 0) }}
                    {% for localization in form.localizations %}
                        {{ fields.renderTab(localization, false, tabId ~ '-' ~ loop.index) }}
                    {% endfor %}
                {% endapply %}
            </div>
        </div>
    </div>
{% endblock %}

{% block oro_locale_localized_fallback_value_collection_widget %}
    <div class=\"control-group\">
        {{ form_widget(form.values) }}
        {{ form_errors(form.values) }}
        {{ form_widget(form.ids) }}
        {{ form_errors(form.ids) }}
    </div>
{% endblock %}

{% block oro_locale_localized_fallback_value_collection_tabs_widget %}
    {{ form_widget(form.values) }}
    {{ form_errors(form.values) }}
    {{ form_widget(form.ids) }}
    {{ form_errors(form.ids) }}
{% endblock %}

{% block _localization_oro_locale___default_localization_widget %}
    <span data-page-component-module=\"oroui/js/app/components/view-component\"
          data-page-component-options=\"{{ {
              view: 'orolocale/js/app/views/localization-select-view',
              selectSelector: '#' ~ form.value.vars.id,
              useParentSelector: '#' ~ form.use_parent_scope_value.vars.id
          }|json_encode }}\"
    >
        {{ form_widget(form) }}
    </span>
{% endblock %}

{% block _localization_oro_locale___enabled_localizations_widget %}
    <span data-page-component-module=\"oroui/js/app/components/view-component\"
          data-page-component-options=\"{{ {
              view: 'orolocale/js/app/views/localizations-select-view',
              selectSelector: '#' ~ form.value.vars.id,
              useParentSelector: '#' ~ form.use_parent_scope_value.vars.id
          }|json_encode }}\"
    >
        {{ form_widget(form) }}
    </span>
{% endblock %}

{% block _localization_oro_locale___enabled_localizations_use_parent_scope_value_row %}
    <span class=\"hide\">
        {{ form_row(form, {'attr': attr}) }}
    </span>
{% endblock %}

{% macro renderTabNavItem(form, isDefault, uniqid) %}
    <li class=\"nav-item\">
        <a id=\"{{ uniqid ~ '-tab'}}\"
           class=\"nav-link {% if isDefault %}active{% endif %}\"
           role=\"tab\"
           href=\"#\"
           aria-controls=\"{{ uniqid }}\"
           aria-selected=\"{% if isDefault %}true{% else %}false{% endif %}\"
           data-role=\"change-localization\"
           data-target=\".localization-fields-{{ uniqid }}-{{ form.vars.name }}\"
           data-toggle=\"tab\"
           data-related=\"{{ form.vars.name }}\"
        >
            {{ form.vars.label|trans }}
        </a>
    </li>
{% endmacro %}

{% macro renderTab(form, isDefault, uniqid) %}
    <div id=\"{{ uniqid }}\"
         class=\"fallback-item localization-fields-{{ uniqid }}-{{ form.vars.name }} tab-pane{% if isDefault %} active{% endif %}\"
         role=\"tabpanel\"
         aria-labelledby=\"{{ uniqid ~ '-tab' }}\"
    >
        {% if isDefault %}<div class=\"fallback-item-value\">{% endif %}
        {{ form_widget(form) }}
        {{ form_errors(form) }}
        {% if isDefault %}</div>{% endif %}
    </div>
{% endmacro %}
", "@OroLocale/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/LocaleBundle/Resources/views/Form/fields.html.twig");
    }
}
