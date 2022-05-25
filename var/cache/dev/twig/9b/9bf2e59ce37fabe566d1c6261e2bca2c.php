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

/* @OroAddress/Include/fields.html.twig */
class __TwigTemplate_7d242ddee8593ebde261d8556a642e51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_region_widget' => [$this, 'block_oro_region_widget'],
            'oro_email_widget' => [$this, 'block_oro_email_widget'],
            'oro_phone_widget' => [$this, 'block_oro_phone_widget'],
            'oro_address_widget' => [$this, 'block_oro_address_widget'],
            'oro_address_rows' => [$this, 'block_oro_address_rows'],
            'oro_typed_address_widget' => [$this, 'block_oro_typed_address_widget'],
            'oro_typed_address_rows' => [$this, 'block_oro_typed_address_rows'],
            'oro_address_collection_widget' => [$this, 'block_oro_address_collection_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAddress/Include/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAddress/Include/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAddress/Include/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_region_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('oro_email_widget', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('oro_phone_widget', $context, $blocks);
        // line 101
        echo "
";
        // line 102
        $this->displayBlock('oro_address_widget', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('oro_address_rows', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('oro_typed_address_widget', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('oro_typed_address_rows', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('oro_address_collection_widget', $context, $blocks);
        // line 149
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_region_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_region_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_region_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_region_widget"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        if ( !        $this->hasBlock("oro_region_updater_js", $context, $blocks)) {
            // line 4
            echo "        ";
            $this->loadTemplate("@OroAddress/Include/javascript.html.twig", "@OroAddress/Include/fields.html.twig", 4)->displayBlock("oro_region_updater_js", $context);
            echo "
    ";
        }
        // line 6
        echo "
    ";
        // line 7
        if (( !array_key_exists("country_field", $context) || twig_test_empty((isset($context["country_field"]) || array_key_exists("country_field", $context) ? $context["country_field"] : (function () { throw new RuntimeError('Variable "country_field" does not exist.', 7, $this->source); })())))) {
            // line 8
            echo "        ";
            $context["country_field"] = twig_replace_filter((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 8, $this->source); })()), ["region" => "country"]);
            // line 9
            echo "    ";
        }
        // line 10
        echo "    ";
        $context["country_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "parent", [], "any", false, false, false, 10), (isset($context["country_field"]) || array_key_exists("country_field", $context) ? $context["country_field"] : (function () { throw new RuntimeError('Variable "country_field" does not exist.', 10, $this->source); })()), [], "array", false, false, false, 10);
        // line 11
        echo "
    ";
        // line 12
        if (( !array_key_exists("region_text_field", $context) || twig_test_empty((isset($context["region_text_field"]) || array_key_exists("region_text_field", $context) ? $context["region_text_field"] : (function () { throw new RuntimeError('Variable "region_text_field" does not exist.', 12, $this->source); })())))) {
            // line 13
            echo "        ";
            $context["region_text_field"] = ((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 13, $this->source); })()) . "_text");
            // line 14
            echo "    ";
        }
        // line 15
        echo "    ";
        $context["region_text_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "parent", [], "any", false, false, false, 15), (isset($context["region_text_field"]) || array_key_exists("region_text_field", $context) ? $context["region_text_field"] : (function () { throw new RuntimeError('Variable "region_text_field" does not exist.', 15, $this->source); })()), [], "array", false, false, false, 15);
        // line 16
        echo "
    ";
        // line 17
        $context["attr"] = [];
        // line 18
        echo "
    ";
        // line 19
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 20, $this->source); })()), ["attr" => ["data-validation" => json_encode(["NotBlank" => null])]]);
            // line 21
            echo "    ";
        }
        // line 22
        echo "
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'widget', (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 23, $this->source); })()));
        echo "
    ";
        // line 24
        $context["showSelect"] = ( !twig_test_empty((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 24, $this->source); })())) && twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["region_text_field"]) || array_key_exists("region_text_field", $context) ? $context["region_text_field"] : (function () { throw new RuntimeError('Variable "region_text_field" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "value", [], "any", false, false, false, 24)));
        // line 25
        echo "    ";
        $context["regionView"] = ((array_key_exists("regionView", $context)) ? (_twig_default_filter((isset($context["regionView"]) || array_key_exists("regionView", $context) ? $context["regionView"] : (function () { throw new RuntimeError('Variable "regionView" does not exist.', 25, $this->source); })()), "oroaddress/js/region/view")) : ("oroaddress/js/region/view"));
        // line 26
        echo "
    ";
        // line 27
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroAddress/Include/fields.html.twig", 27)->unwrap();
        // line 28
        echo "
    <div ";
        // line 29
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" =>         // line 30
(isset($context["regionView"]) || array_key_exists("regionView", $context) ? $context["regionView"] : (function () { throw new RuntimeError('Variable "regionView" does not exist.', 30, $this->source); })()), "options" => ["_sourceElement" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
(isset($context["country_field"]) || array_key_exists("country_field", $context) ? $context["country_field"] : (function () { throw new RuntimeError('Variable "country_field" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)), "target" => ("#" .         // line 33
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 33, $this->source); })())), "simpleEl" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["region_text_field"]) || array_key_exists("region_text_field", $context) ? $context["region_text_field"] : (function () { throw new RuntimeError('Variable "region_text_field" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)), "collectionRoute" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
($context["form"] ?? null), "parent", [], "any", false, true, false, 35), "vars", [], "any", false, true, false, 35), "region_route", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 35), "vars", [], "any", false, true, false, 35), "region_route", [], "any", false, false, false, 35), "oro_api_country_get_regions")) : ("oro_api_country_get_regions")), "showSelect" =>         // line 36
(isset($context["showSelect"]) || array_key_exists("showSelect", $context) ? $context["showSelect"] : (function () { throw new RuntimeError('Variable "showSelect" does not exist.', 36, $this->source); })()), "regionRequired" =>         // line 37
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 37, $this->source); })())]]], 29, $context, $this->getSourceContext());
        // line 39
        echo "></div>

    <style>
        ";
        // line 42
        if ((isset($context["showSelect"]) || array_key_exists("showSelect", $context) ? $context["showSelect"] : (function () { throw new RuntimeError('Variable "showSelect" does not exist.', 42, $this->source); })())) {
            // line 43
            echo "            #";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 43, $this->source); })()), "html", null, true);
            echo " {
                display: block;
            }

            #";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["region_text_field"]) || array_key_exists("region_text_field", $context) ? $context["region_text_field"] : (function () { throw new RuntimeError('Variable "region_text_field" does not exist.', 47, $this->source); })()), "vars", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
            echo " {
                display: none;
            }
        ";
        } else {
            // line 51
            echo "            #";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 51, $this->source); })()), "html", null, true);
            echo " {
                display: none;
            }

            #";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["region_text_field"]) || array_key_exists("region_text_field", $context) ? $context["region_text_field"] : (function () { throw new RuntimeError('Variable "region_text_field" does not exist.', 55, $this->source); })()), "vars", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "html", null, true);
            echo " {
                display: block;
            }
        ";
        }
        // line 59
        echo "    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 62
    public function block_oro_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_email_widget", $this->getTemplateName(), 62));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_widget"));

        // line 63
        echo "    <div class=\"float-holder ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "errors", [], "any", false, false, false, 63)) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append collection-element-primary\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), 'widget');
        echo "<label class=\"add-on\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Primary"), "html", null, true);
        echo "\">
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "primary", [], "any", false, false, false, 66), 'widget');
        echo "
            </label>
        </div>
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), 'errors');
        echo "
        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "children", [], "any", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 71
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 71), "extra_field", [], "any", true, true, false, 71) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 71), "extra_field", [], "any", false, false, false, 71))) {
                // line 72
                echo "                <div class=\"collection-element-other clearfix\">
                    ";
                // line 73
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 73), "label", [], "any", false, false, false, 73)]]);
                echo "
                </div>
                ";
                // line 75
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
            ";
            }
            // line 77
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    </div>
    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'rest');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 82
    public function block_oro_phone_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_phone_widget", $this->getTemplateName(), 82));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_phone_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_phone_widget"));

        // line 83
        echo "    <div class=\"float-holder ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "phone", [], "any", false, false, false, 83), "vars", [], "any", false, false, false, 83), "errors", [], "any", false, false, false, 83)) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append collection-element-primary\">
            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "phone", [], "any", false, false, false, 85), 'widget');
        echo "<label class=\"add-on\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Primary"), "html", null, true);
        echo "\">
                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "primary", [], "any", false, false, false, 86), 'widget');
        echo "
            </label>
        </div>
        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "phone", [], "any", false, false, false, 89), 'errors');
        echo "
        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "children", [], "any", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 91
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 91), "extra_field", [], "any", true, true, false, 91) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 91), "extra_field", [], "any", false, false, false, 91))) {
                // line 92
                echo "                <div class=\"collection-element-other clearfix\">
                    ";
                // line 93
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 93), "label", [], "any", false, false, false, 93)]]);
                echo "
                </div>
                ";
                // line 95
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
            ";
            }
            // line 97
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    </div>
    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'rest');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 102
    public function block_oro_address_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_address_widget", $this->getTemplateName(), 102));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_address_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_address_widget"));

        // line 103
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "parent", [], "any", false, false, false, 103))) {
            // line 104
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 105
            $this->displayBlock("oro_address_rows", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 108
            echo "        ";
            $this->displayBlock("oro_address_rows", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 112
    public function block_oro_address_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_address_rows", $this->getTemplateName(), 112));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_address_rows"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_address_rows"));

        // line 113
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113), 'row');
        echo "
    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "label", [], "any", false, false, false, 114), 'row');
        echo "
    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "namePrefix", [], "any", false, false, false, 115), 'row');
        echo "
    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "firstName", [], "any", false, false, false, 116), 'row');
        echo "
    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "middleName", [], "any", false, false, false, 117), 'row');
        echo "
    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "lastName", [], "any", false, false, false, 118), 'row');
        echo "
    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "nameSuffix", [], "any", false, false, false, 119), 'row');
        echo "
    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "organization", [], "any", false, false, false, 120), 'row');
        echo "
    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "country", [], "any", false, false, false, 121), 'row');
        echo "
    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "street", [], "any", false, false, false, 122), 'row');
        echo "
    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "street2", [], "any", false, false, false, 123), 'row');
        echo "
    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "city", [], "any", false, false, false, 124), 'row');
        echo "
    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "region_text", [], "any", false, false, false, 125), 'row');
        echo "
    ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "region", [], "any", false, false, false, 126), 'row');
        echo "
    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "postalCode", [], "any", false, false, false, 127), 'row');
        echo "
    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'rest');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 131
    public function block_oro_typed_address_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_typed_address_widget", $this->getTemplateName(), 131));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_typed_address_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_typed_address_widget"));

        // line 132
        echo "    ";
        $this->displayBlock("oro_typed_address_rows", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 135
    public function block_oro_typed_address_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_typed_address_rows", $this->getTemplateName(), 135));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_typed_address_rows"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_typed_address_rows"));

        // line 136
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "types", [], "any", false, false, false, 136), 'row');
        echo "
    ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "primary", [], "any", false, false, false, 137), 'row');
        echo "
    ";
        // line 138
        $this->displayBlock("oro_address_rows", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 141
    public function block_oro_address_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_address_collection_widget", $this->getTemplateName(), 141));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_address_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_address_collection_widget"));

        // line 142
        echo "    ";
        $macros["addressIncludeFields"] = $this;
        // line 143
        echo "
    ";
        // line 144
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 144, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 144)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 144, $this->source); })()), "class", [], "any", false, false, false, 144) . " ")) : ("")) . "collection-fields-list-bg oro-address-collection")]);
        // line 145
        echo "    ";
        $this->displayBlock("oro_collection_widget", $context, $blocks);
        echo "
    ";
        // line 146
        $context["id"] = ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 146, $this->source); })()) . "_collection");
        // line 147
        echo "    ";
        echo twig_call_macro($macros["addressIncludeFields"], "macro_oro_collection_validate_types_js", [$context], 147, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 150
    public function macro_oro_collection_validate_types_js($__context__ = null, ...$__varargs__)
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
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "oro_collection_validate_types_js"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "oro_collection_validate_types_js"));

            // line 151
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "form", [], "any", false, true, false, 151), "vars", [], "any", false, true, false, 151), "prototype", [], "any", false, true, false, 151), "types", [], "any", true, true, false, 151)) {
                // line 152
                echo "        ";
                $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroAddress/Include/fields.html.twig", 152)->unwrap();
                // line 153
                echo "
        <div ";
                // line 154
                echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroaddress/js/app/views/address-collection-view", "options" => ["_sourceElement" => ("#" . twig_get_attribute($this->env, $this->source,                 // line 157
(isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 157, $this->source); })()), "id", [], "any", false, false, false, 157))]]], 154, $context, $this->getSourceContext());
                // line 159
                echo "></div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroAddress/Include/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  689 => 159,  687 => 157,  686 => 154,  683 => 153,  680 => 152,  677 => 151,  658 => 150,  642 => 147,  640 => 146,  635 => 145,  633 => 144,  630 => 143,  627 => 142,  614 => 141,  599 => 138,  595 => 137,  590 => 136,  577 => 135,  561 => 132,  548 => 131,  533 => 128,  529 => 127,  525 => 126,  521 => 125,  517 => 124,  513 => 123,  509 => 122,  505 => 121,  501 => 120,  497 => 119,  493 => 118,  489 => 117,  485 => 116,  481 => 115,  477 => 114,  472 => 113,  459 => 112,  442 => 108,  436 => 105,  431 => 104,  428 => 103,  415 => 102,  400 => 99,  397 => 98,  391 => 97,  386 => 95,  381 => 93,  378 => 92,  375 => 91,  371 => 90,  367 => 89,  361 => 86,  355 => 85,  347 => 83,  334 => 82,  319 => 79,  316 => 78,  310 => 77,  305 => 75,  300 => 73,  297 => 72,  294 => 71,  290 => 70,  286 => 69,  280 => 66,  274 => 65,  266 => 63,  253 => 62,  239 => 59,  232 => 55,  224 => 51,  217 => 47,  209 => 43,  207 => 42,  202 => 39,  200 => 37,  199 => 36,  198 => 35,  197 => 34,  196 => 33,  195 => 32,  194 => 30,  193 => 29,  190 => 28,  188 => 27,  185 => 26,  182 => 25,  180 => 24,  176 => 23,  173 => 22,  170 => 21,  167 => 20,  165 => 19,  162 => 18,  160 => 17,  157 => 16,  154 => 15,  151 => 14,  148 => 13,  146 => 12,  143 => 11,  140 => 10,  137 => 9,  134 => 8,  132 => 7,  129 => 6,  123 => 4,  120 => 3,  118 => 2,  105 => 1,  91 => 149,  89 => 141,  86 => 140,  84 => 135,  81 => 134,  79 => 131,  76 => 130,  74 => 112,  71 => 111,  69 => 102,  66 => 101,  64 => 82,  61 => 81,  59 => 62,  56 => 61,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_region_widget %}
    {# // check if block was not included yet #}
    {% if block('oro_region_updater_js') is not defined %}
        {{ block('oro_region_updater_js', '@OroAddress/Include/javascript.html.twig')|raw }}
    {% endif %}

    {% if country_field is not defined or country_field is empty %}
        {% set country_field = name|replace({'region': 'country'}) %}
    {% endif %}
    {% set country_field = form.parent[country_field] %}

    {% if region_text_field is not defined or region_text_field is empty %}
        {% set region_text_field = name ~ \"_text\" %}
    {% endif %}
    {% set region_text_field = form.parent[region_text_field] %}

    {% set attr = {} %}

    {% if required %}
        {% set attr = attr|merge({'attr': {'data-validation': { NotBlank: null}|json_encode} }) %}
    {% endif %}

    {{ form_widget(form, attr) }}
    {% set showSelect = (choices is not empty and region_text_field.vars.value is empty) %}
    {% set regionView = regionView|default('oroaddress/js/region/view') %}

    {% import '@OroUI/macros.html.twig' as UI %}

    <div {{ UI.renderPageComponentAttributes({
        view: regionView,
        options: {
            _sourceElement: '#' ~ country_field.vars.id,
            target: '#' ~ id ,
            simpleEl: '#' ~ region_text_field.vars.id,
            collectionRoute: form.parent.vars.region_route|default('oro_api_country_get_regions'),
            showSelect: showSelect,
            regionRequired: required
        }
    }) }}></div>

    <style>
        {% if showSelect %}
            #{{ id }} {
                display: block;
            }

            #{{ region_text_field.vars.id }} {
                display: none;
            }
        {% else %}
            #{{ id }} {
                display: none;
            }

            #{{ region_text_field.vars.id }} {
                display: block;
            }
        {% endif %}
    </style>
{% endblock oro_region_widget %}

{% block oro_email_widget %}
    <div class=\"float-holder {% if form.email.vars.errors|length > 0 %} validation-error{% endif %}\">
        <div class=\"input-append collection-element-primary\">
            {{ form_widget(form.email) }}<label class=\"add-on\" title=\"{{ 'Primary'|trans }}\">
                {{ form_widget(form.primary) }}
            </label>
        </div>
        {{ form_errors(form.email) }}
        {% for child in form.children %}
            {% if child.vars.extra_field is defined and child.vars.extra_field %}
                <div class=\"collection-element-other clearfix\">
                    {{ form_widget(child, {'attr': {'title': child.vars.label}}) }}
                </div>
                {{ form_errors(child) }}
            {% endif %}
        {% endfor %}
    </div>
    {{ form_rest(form) }}
{%  endblock %}

{% block oro_phone_widget %}
    <div class=\"float-holder {% if form.phone.vars.errors|length > 0 %} validation-error{% endif %}\">
        <div class=\"input-append collection-element-primary\">
            {{ form_widget(form.phone) }}<label class=\"add-on\" title=\"{{ 'Primary'|trans }}\">
                {{ form_widget(form.primary) }}
            </label>
        </div>
        {{ form_errors(form.phone) }}
        {% for child in form.children %}
            {% if child.vars.extra_field is defined and child.vars.extra_field %}
                <div class=\"collection-element-other clearfix\">
                    {{ form_widget(child, {'attr': {'title': child.vars.label}}) }}
                </div>
                {{ form_errors(child) }}
            {% endif %}
        {% endfor %}
    </div>
    {{ form_rest(form) }}
{%  endblock %}

{% block oro_address_widget %}
    {% if form.parent is not empty %}
        <div {{ block('widget_container_attributes') }}>
            {{ block('oro_address_rows') }}
        </div>
    {% else %}
        {{ block('oro_address_rows') }}
    {% endif %}
{% endblock %}

{% block oro_address_rows %}
    {{ form_row(form.id) }}
    {{ form_row(form.label) }}
    {{ form_row(form.namePrefix) }}
    {{ form_row(form.firstName) }}
    {{ form_row(form.middleName) }}
    {{ form_row(form.lastName) }}
    {{ form_row(form.nameSuffix) }}
    {{ form_row(form.organization) }}
    {{ form_row(form.country) }}
    {{ form_row(form.street) }}
    {{ form_row(form.street2) }}
    {{ form_row(form.city) }}
    {{ form_row(form.region_text) }}
    {{ form_row(form.region) }}
    {{ form_row(form.postalCode) }}
    {{ form_rest(form) }}
{%  endblock %}

{% block oro_typed_address_widget %}
    {{ block('oro_typed_address_rows') }}
{%  endblock %}

{% block oro_typed_address_rows %}
    {{ form_row(form.types) }}
    {{ form_row(form.primary) }}
    {{ block('oro_address_rows') }}
{%  endblock %}

{% block oro_address_collection_widget %}
    {% import _self as addressIncludeFields %}

    {% set attr = attr|merge({'class': (attr.class is defined ? attr.class ~ ' ' : '') ~ 'collection-fields-list-bg oro-address-collection' }) %}
    {{ block('oro_collection_widget') }}
    {% set id = id ~ '_collection' %}
    {{ addressIncludeFields.oro_collection_validate_types_js(_context) }}
{% endblock %}

{% macro oro_collection_validate_types_js(context) %}
    {% if context.form.vars.prototype.types is defined %}
        {% import '@OroUI/macros.html.twig' as UI %}

        <div {{ UI.renderPageComponentAttributes({
            view: 'oroaddress/js/app/views/address-collection-view',
            options: {
                _sourceElement: '#' ~ context.id,
            }
        }) }}></div>
    {% endif %}
{% endmacro %}
", "@OroAddress/Include/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/AddressBundle/Resources/views/Include/fields.html.twig");
    }
}
