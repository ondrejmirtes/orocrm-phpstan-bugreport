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

/* @OroEntityConfig/layouts/blank/layout.html.twig */
class __TwigTemplate_739e5deff6b995bdaad1cd2c35806ae9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'attribute_group_rest_widget' => [$this, 'block_attribute_group_rest_widget'],
            'attribute_group_rest_attribute_group_widget' => [$this, 'block_attribute_group_rest_attribute_group_widget'],
            'attribute_label_widget' => [$this, 'block_attribute_label_widget'],
            'attribute_text_widget' => [$this, 'block_attribute_text_widget'],
            'attribute_decimal_widget' => [$this, 'block_attribute_decimal_widget'],
            'attribute_boolean_widget' => [$this, 'block_attribute_boolean_widget'],
            'attribute_currency_widget' => [$this, 'block_attribute_currency_widget'],
            'attribute_percent_widget' => [$this, 'block_attribute_percent_widget'],
            'attribute_date_widget' => [$this, 'block_attribute_date_widget'],
            'attribute_datetime_widget' => [$this, 'block_attribute_datetime_widget'],
            'attribute_multiselect_widget' => [$this, 'block_attribute_multiselect_widget'],
            'attribute_image_widget' => [$this, 'block_attribute_image_widget'],
            'attribute_file_widget' => [$this, 'block_attribute_file_widget'],
            'attribute_multiimages_widget' => [$this, 'block_attribute_multiimages_widget'],
            'attribute_multifiles_widget' => [$this, 'block_attribute_multifiles_widget'],
            'attribute_localized_fallback_widget' => [$this, 'block_attribute_localized_fallback_widget'],
            'attribute_group_rest_attribute_widget' => [$this, 'block_attribute_group_rest_attribute_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityConfig/layouts/blank/layout.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/layouts/blank/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/layouts/blank/layout.html.twig"));

        // line 1
        $this->displayBlock('attribute_group_rest_widget', $context, $blocks);
        // line 32
        $this->displayBlock('attribute_group_rest_attribute_group_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('attribute_label_widget', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('attribute_text_widget', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('attribute_decimal_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('attribute_boolean_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('attribute_currency_widget', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('attribute_percent_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('attribute_date_widget', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('attribute_datetime_widget', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('attribute_multiselect_widget', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('attribute_image_widget', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('attribute_file_widget', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('attribute_multiimages_widget', $context, $blocks);
        // line 118
        echo "
";
        // line 119
        $this->displayBlock('attribute_multifiles_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('attribute_localized_fallback_widget', $context, $blocks);
        // line 148
        echo "
";
        // line 149
        $this->displayBlock('attribute_group_rest_attribute_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_attribute_group_rest_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_group_rest_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_group_rest_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_group_rest_widget"));

        // line 2
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/layouts/blank/layout.html.twig", 2)->unwrap();
        // line 3
        $context["content"] = "";
        // line 4
        echo "    ";
        $context["visibleTabsOptions"] = [];
        // line 5
        echo "    ";
        $context["tabsOptionsById"] = [];
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabsOptions"]) || array_key_exists("tabsOptions", $context) ? $context["tabsOptions"] : (function () { throw new RuntimeError('Variable "tabsOptions" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 7
            $context["tabsOptionsById"] = twig_array_merge((isset($context["tabsOptionsById"]) || array_key_exists("tabsOptionsById", $context) ? $context["tabsOptionsById"] : (function () { throw new RuntimeError('Variable "tabsOptionsById" does not exist.', 7, $this->source); })()), [twig_get_attribute($this->env, $this->source,             // line 8
$context["tab"], "id", [], "any", false, false, false, 8) => $context["tab"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 12
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 12), "visible", [], "any", false, false, false, 12)) {
                // line 13
                $context["childContent"] = $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock($context["child"], 'widget');
                // line 14
                if ((twig_length_filter($this->env, twig_trim_filter((isset($context["childContent"]) || array_key_exists("childContent", $context) ? $context["childContent"] : (function () { throw new RuntimeError('Variable "childContent" does not exist.', 14, $this->source); })()))) > 0)) {
                    // line 15
                    $context["content"] = ((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 15, $this->source); })()) . (isset($context["childContent"]) || array_key_exists("childContent", $context) ? $context["childContent"] : (function () { throw new RuntimeError('Variable "childContent" does not exist.', 15, $this->source); })()));
                    // line 16
                    echo "                ";
                    $context["visibleTabsOptions"] = twig_array_merge((isset($context["visibleTabsOptions"]) || array_key_exists("visibleTabsOptions", $context) ? $context["visibleTabsOptions"] : (function () { throw new RuntimeError('Variable "visibleTabsOptions" does not exist.', 16, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["tabsOptionsById"]) || array_key_exists("tabsOptionsById", $context) ? $context["tabsOptionsById"] : (function () { throw new RuntimeError('Variable "tabsOptionsById" does not exist.', 16, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 16), "group", [], "any", false, false, false, 16), [], "array", false, false, false, 16)]);
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        if ( !twig_test_empty((isset($context["visibleTabsOptions"]) || array_key_exists("visibleTabsOptions", $context) ? $context["visibleTabsOptions"] : (function () { throw new RuntimeError('Variable "visibleTabsOptions" does not exist.', 20, $this->source); })()))) {
            // line 21
            echo "<div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            <div ";
            // line 22
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroentityconfig/js/attribute-group-tabs-component", "name" => "attribute-group-tabs-component", "options" => ["data" =>             // line 25
(isset($context["visibleTabsOptions"]) || array_key_exists("visibleTabsOptions", $context) ? $context["visibleTabsOptions"] : (function () { throw new RuntimeError('Variable "visibleTabsOptions" does not exist.', 25, $this->source); })())]]], 22, $context, $this->getSourceContext());
            // line 26
            echo "></div>";
            // line 27
            echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 27, $this->source); })());
            // line 28
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 32
    public function block_attribute_group_rest_attribute_group_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_group_rest_attribute_group_widget", $this->getTemplateName(), 32));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_group_rest_attribute_group_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_group_rest_attribute_group_widget"));

        // line 33
        echo "    ";
        $context["content"] = $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 33, $this->source); })()), 'widget');
        // line 34
        echo "    ";
        if ((twig_length_filter($this->env, twig_trim_filter((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 34, $this->source); })()))) > 0)) {
            // line 35
            echo "    ";
            $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 35, $this->source); })()), ["data-page-component-module" => "oroentityconfig/js/attribute-group-tab-content-component", "~data-page-component-options" => json_encode(["id" =>             // line 37
(isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 37, $this->source); })())])]);
            // line 39
            echo "    <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo " style=\"display: none;\" class=\"tab-content\">
        ";
            // line 40
            echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 40, $this->source); })());
            echo "
    </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 45
    public function block_attribute_label_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_label_widget", $this->getTemplateName(), 45));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_label_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_label_widget"));

        // line 46
        echo "    ";
        if ((twig_first($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 46, $this->source); })()))) != "_")) {
            // line 47
            echo "        <label class=\"entity-label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 47, $this->source); })())), "html", null, true);
            echo ":</label>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 51
    public function block_attribute_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_text_widget", $this->getTemplateName(), 51));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_text_widget"));

        // line 52
        echo "    ";
        if ( !twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 52, $this->source); })()))) {
            // line 53
            echo "        ";
            echo twig_nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 53, $this->source); })()), "html", null, true));
            echo "
    ";
        } else {
            // line 55
            echo "        ";
            echo twig_nl2br(twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 55, $this->source); })()), "
"), "html", null, true));
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 59
    public function block_attribute_decimal_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_decimal_widget", $this->getTemplateName(), 59));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_decimal_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_decimal_widget"));

        // line 60
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 60, $this->source); })())), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 63
    public function block_attribute_boolean_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_boolean_widget", $this->getTemplateName(), 63));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_boolean_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_boolean_widget"));

        // line 64
        echo "    ";
        echo twig_escape_filter($this->env, (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 64, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No"))), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 67
    public function block_attribute_currency_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_currency_widget", $this->getTemplateName(), 67));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_currency_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_currency_widget"));

        // line 68
        echo "    ";
        echo (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 68, $this->source); })())) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatCurrency((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 68, $this->source); })()))) : (null));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 71
    public function block_attribute_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_percent_widget", $this->getTemplateName(), 71));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_percent_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_percent_widget"));

        // line 72
        echo "    ";
        (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 72, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatPercent((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 72, $this->source); })())), "html", null, true))) : (print (null)));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 75
    public function block_attribute_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_date_widget", $this->getTemplateName(), 75));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_date_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_date_widget"));

        // line 76
        echo "    ";
        (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 76, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 76, $this->source); })())), "html", null, true))) : (print (null)));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 79
    public function block_attribute_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_datetime_widget", $this->getTemplateName(), 79));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_datetime_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_datetime_widget"));

        // line 80
        echo "    ";
        (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 80, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 80, $this->source); })())), "html", null, true))) : (print (null)));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 83
    public function block_attribute_multiselect_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_multiselect_widget", $this->getTemplateName(), 83));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_multiselect_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_multiselect_widget"));

        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 84, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 85
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            // line 86
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 86)) {
                // line 87
                echo ",&nbsp;";
            }
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 94
    public function block_attribute_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_image_widget", $this->getTemplateName(), 94));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_image_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_image_widget"));

        // line 95
        echo "    ";
        $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 95, $this->source); })()), ["alt" =>         // line 96
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 96, $this->source); })()), "width" =>         // line 97
(isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 97, $this->source); })()), "height" =>         // line 98
(isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 98, $this->source); })())]);
        // line 100
        echo "    ";
        $this->loadTemplate("@OroAttachment/Twig/picture.html.twig", "@OroEntityConfig/layouts/blank/layout.html.twig", 100)->display(twig_array_merge($context, ["sources" => $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getResizedPictureSources(        // line 101
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 101, $this->source); })()), (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 101, $this->source); })()), (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 101, $this->source); })())), "img_attrs" =>         // line 102
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 102, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 106
    public function block_attribute_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_file_widget", $this->getTemplateName(), 106));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_file_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_file_widget"));

        // line 107
        echo "    ";
        echo $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFileView($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 107, $this->source); })()));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 110
    public function block_attribute_multiimages_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_multiimages_widget", $this->getTemplateName(), 110));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_multiimages_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_multiimages_widget"));

        // line 111
        echo "    ";
        $context["collection"] = (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 111, $this->source); })());
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 112, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 113
            $context["value"] = twig_get_attribute($this->env, $this->source, $context["item"], "file", [], "any", false, false, false, 113);
            // line 114
            echo "        ";
            $context["label"] = "";
            // line 115
            echo "        ";
            $this->displayBlock("attribute_image_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 119
    public function block_attribute_multifiles_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_multifiles_widget", $this->getTemplateName(), 119));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_multifiles_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_multifiles_widget"));

        // line 120
        echo "    ";
        $context["collection"] = (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 120, $this->source); })());
        // line 121
        echo "    <div class=\"table-responsive\">
        <table class=\"grid table\">
            <thead class=\"grid-header\">
            <tr class=\"grid-header-row\">
                <th class=\"grid-cell\">";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.attachment.frontend.file.file.label"), "html", null, true);
        echo "</th>
                <th class=\"grid-cell\">";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.attachment.frontend.file.mime_type.label"), "html", null, true);
        echo "</th>
                <th class=\"grid-cell\">";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.attachment.frontend.file.file_size.label"), "html", null, true);
        echo "</th>
                <th class=\"grid-cell\">";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.attachment.frontend.file.created_at.label"), "html", null, true);
        echo "</th>
            </tr>
            </thead>
            <tbody class=\"grid-body\">";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 132, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 133
            echo "<tr class=\"grid-row\">
                    <td class=\"grid-cell\">";
            // line 134
            echo $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFileView($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "file", [], "any", false, false, false, 134));
            echo "</td>
                    <td class=\"grid-cell\">";
            // line 135
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "file", [], "any", false, false, false, 135), "extension", [], "any", false, false, false, 135)), "html", null, true);
            echo "</td>
                    <td class=\"grid-cell\">";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFileSize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "file", [], "any", false, false, false, 136), "fileSize", [], "any", false, false, false, 136)), "html", null, true);
            echo "</td>
                    <td class=\"grid-cell\">";
            // line 137
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "file", [], "any", false, false, false, 137), "createdAt", [], "any", false, false, false, 137)), "html", null, true);
            echo "</td>
                </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "</tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 145
    public function block_attribute_localized_fallback_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_localized_fallback_widget", $this->getTemplateName(), 145));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_localized_fallback_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_localized_fallback_widget"));

        // line 146
        echo "    ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize((isset($context["translated_value"]) || array_key_exists("translated_value", $context) ? $context["translated_value"] : (function () { throw new RuntimeError('Variable "translated_value" does not exist.', 146, $this->source); })()));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 149
    public function block_attribute_group_rest_attribute_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("attribute_group_rest_attribute_widget", $this->getTemplateName(), 149));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_group_rest_attribute_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attribute_group_rest_attribute_widget"));

        // line 150
        echo "    <div class=\"tab-content__wrapper\">";
        $this->displayBlock("attribute_label_widget", $context, $blocks);
        echo " ";
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 150, $this->source); })()), 'widget');
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEntityConfig/layouts/blank/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  847 => 150,  834 => 149,  818 => 146,  805 => 145,  789 => 140,  781 => 137,  777 => 136,  773 => 135,  769 => 134,  766 => 133,  762 => 132,  756 => 128,  752 => 127,  748 => 126,  744 => 125,  738 => 121,  735 => 120,  722 => 119,  696 => 115,  693 => 114,  691 => 113,  674 => 112,  671 => 111,  658 => 110,  642 => 107,  629 => 106,  616 => 102,  615 => 101,  613 => 100,  611 => 98,  610 => 97,  609 => 96,  607 => 95,  594 => 94,  577 => 90,  563 => 87,  561 => 86,  559 => 85,  541 => 84,  528 => 83,  512 => 80,  499 => 79,  483 => 76,  470 => 75,  454 => 72,  441 => 71,  425 => 68,  412 => 67,  396 => 64,  383 => 63,  367 => 60,  354 => 59,  336 => 55,  330 => 53,  327 => 52,  314 => 51,  297 => 47,  294 => 46,  281 => 45,  264 => 40,  259 => 39,  257 => 37,  255 => 35,  252 => 34,  249 => 33,  236 => 32,  222 => 28,  220 => 27,  218 => 26,  216 => 25,  215 => 22,  210 => 21,  208 => 20,  199 => 16,  197 => 15,  195 => 14,  193 => 13,  191 => 12,  187 => 11,  181 => 8,  180 => 7,  176 => 6,  173 => 5,  170 => 4,  168 => 3,  166 => 2,  153 => 1,  140 => 149,  137 => 148,  135 => 145,  132 => 144,  130 => 119,  127 => 118,  125 => 110,  122 => 109,  120 => 106,  117 => 105,  115 => 94,  112 => 93,  110 => 83,  107 => 82,  105 => 79,  102 => 78,  100 => 75,  97 => 74,  95 => 71,  92 => 70,  90 => 67,  87 => 66,  85 => 63,  82 => 62,  80 => 59,  77 => 58,  75 => 51,  72 => 50,  70 => 45,  67 => 44,  65 => 32,  63 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- block attribute_group_rest_widget -%}
    {%- import '@OroUI/macros.html.twig' as UI -%}
    {% set content = '' %}
    {% set visibleTabsOptions = [] %}
    {% set tabsOptionsById = [] %}
    {%- for tab in tabsOptions -%}
        {% set tabsOptionsById = tabsOptionsById|merge({
            (tab.id): tab
        }) %}
    {%- endfor -%}
    {%- for child in block -%}
        {%- if child.vars.visible -%}
            {% set childContent = block_widget(child) %}
            {%- if childContent|trim|length > 0 -%}
                {% set content = content ~ childContent %}
                {% set visibleTabsOptions = visibleTabsOptions|merge([tabsOptionsById[child.vars.group]]) %}
            {%- endif -%}
        {%- endif -%}
    {%- endfor -%}
    {%- if visibleTabsOptions is not empty -%}
        <div {{ block('block_attributes') }}>
            <div {{ UI.renderPageComponentAttributes({
                module: 'oroentityconfig/js/attribute-group-tabs-component',
                name: 'attribute-group-tabs-component',
                options: {data: visibleTabsOptions}
            }) }}></div>
            {{- content|raw -}}
        </div>
    {%- endif -%}
{%- endblock -%}

{% block attribute_group_rest_attribute_group_widget %}
    {% set content = block_widget(block) %}
    {% if content|trim|length > 0 %}
    {% set attr = layout_attr_defaults(attr, {
        'data-page-component-module': 'oroentityconfig/js/attribute-group-tab-content-component',
        '~data-page-component-options': {'id': group}|json_encode
    }) %}
    <div {{ block('block_attributes') }} style=\"display: none;\" class=\"tab-content\">
        {{ content|raw }}
    </div>
    {% endif %}
{% endblock %}

{% block attribute_label_widget %}
    {% if label|trans|first != '_' %}
        <label class=\"entity-label\">{{ label|trans }}:</label>
    {% endif %}
{% endblock %}

{% block attribute_text_widget %}
    {% if value is not iterable %}
        {{ value|nl2br }}
    {% else %}
        {{ value|join('\\n')|nl2br }}
    {% endif %}
{% endblock %}

{% block attribute_decimal_widget %}
    {{ value|oro_format_decimal }}
{% endblock %}

{% block attribute_boolean_widget %}
    {{ value ? 'Yes'|trans : 'No'|trans }}
{% endblock %}

{% block attribute_currency_widget %}
    {{ value ? value | oro_format_currency : null }}
{% endblock %}

{% block attribute_percent_widget %}
    {{ value ? value | oro_format_percent : null }}
{% endblock %}

{% block attribute_date_widget %}
    {{ value ? value | oro_format_date : null }}
{% endblock %}

{% block attribute_datetime_widget %}
    {{ value ? value | oro_format_datetime : null }}
{% endblock %}

{% block attribute_multiselect_widget %}
    {%- for item in value -%}
        {{- item -}}
        {%- if not loop.last -%}
            ,&nbsp;
        {%- endif -%}
    {%- else -%}
        {{ 'N/A'|trans }}
    {%- endfor -%}
{% endblock %}

{% block attribute_image_widget %}
    {% set attr = layout_attr_defaults(attr, {
        'alt': label,
        'width': width,
        'height': height
    }) %}
    {% include '@OroAttachment/Twig/picture.html.twig' with {
        sources: oro_resized_picture_sources(value, width, height),
        img_attrs: attr
    } %}
{% endblock %}

{% block attribute_file_widget %}
    {{ oro_file_view(value) }}
{% endblock %}

{% block attribute_multiimages_widget %}
    {% set collection = value %}
    {%- for item in collection -%}
        {% set value = item.file %}
        {% set label = '' %}
        {{ block('attribute_image_widget') }}
    {%- endfor -%}
{% endblock %}

{% block attribute_multifiles_widget %}
    {% set collection = value %}
    <div class=\"table-responsive\">
        <table class=\"grid table\">
            <thead class=\"grid-header\">
            <tr class=\"grid-header-row\">
                <th class=\"grid-cell\">{{ 'oro.attachment.frontend.file.file.label'|trans }}</th>
                <th class=\"grid-cell\">{{ 'oro.attachment.frontend.file.mime_type.label'|trans }}</th>
                <th class=\"grid-cell\">{{ 'oro.attachment.frontend.file.file_size.label'|trans }}</th>
                <th class=\"grid-cell\">{{ 'oro.attachment.frontend.file.created_at.label'|trans }}</th>
            </tr>
            </thead>
            <tbody class=\"grid-body\">
            {%- for item in collection -%}
                <tr class=\"grid-row\">
                    <td class=\"grid-cell\">{{ oro_file_view(item.file) }}</td>
                    <td class=\"grid-cell\">{{ item.file.extension|upper }}</td>
                    <td class=\"grid-cell\">{{ file_size(item.file.fileSize) }}</td>
                    <td class=\"grid-cell\">{{ item.file.createdAt|oro_format_datetime() }}</td>
                </tr>
            {%- endfor -%}
            </tbody>
        </table>
    </div>
{% endblock %}

{% block attribute_localized_fallback_widget %}
    {{ translated_value|oro_html_sanitize }}
{% endblock %}

{% block attribute_group_rest_attribute_widget %}
    <div class=\"tab-content__wrapper\">{{ block('attribute_label_widget') }} {{ block_widget(block) }}</div>
{% endblock %}
", "@OroEntityConfig/layouts/blank/layout.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/layouts/blank/layout.html.twig");
    }
}
