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

/* @OroUI/Form/fields.html.twig */
class __TwigTemplate_915ece1b06a00b6d0ce3fd3429228213 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_row' => [$this, 'block_form_row'],
            'group_attributes' => [$this, 'block_group_attributes'],
            'hint_attributes' => [$this, 'block_hint_attributes'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'form_errors' => [$this, 'block_form_errors'],
            'date_widget' => [$this, 'block_date_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'choice_widget_option_attributes' => [$this, 'block_choice_widget_option_attributes'],
            'collection_render' => [$this, 'block_collection_render'],
            '_oro_entity_config_config_field_type_widget' => [$this, 'block__oro_entity_config_config_field_type_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/Form/fields.html.twig"));

        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@OroUI/Form/fields.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("form_row", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"control-group";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 5)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 5, $this->source); })()), "class", [], "any", false, false, false, 5), "html", null, true);
        }
        if (array_key_exists("block_prefixes", $context)) {
            echo " control-group-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 5, $this->source); })()), 1, [], "array", false, false, false, 5), "html", null, true);
        }
        if (twig_get_attribute($this->env, $this->source, ($context["group_attr"] ?? null), "class", [], "any", true, true, false, 5)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["group_attr"]) || array_key_exists("group_attr", $context) ? $context["group_attr"] : (function () { throw new RuntimeError('Variable "group_attr" does not exist.', 5, $this->source); })()), "class", [], "any", false, false, false, 5), "html", null, true);
        }
        echo "\"";
        if (array_key_exists("group_attr", $context)) {
            $this->displayBlock("group_attributes", $context, $blocks);
        }
        echo ">
            ";
        // line 6
        if ((((array_key_exists("hint", $context)) ? (_twig_default_filter((isset($context["hint"]) || array_key_exists("hint", $context) ? $context["hint"] : (function () { throw new RuntimeError('Variable "hint" does not exist.', 6, $this->source); })()))) : ("")) && (((array_key_exists("hint_position", $context)) ? (_twig_default_filter((isset($context["hint_position"]) || array_key_exists("hint_position", $context) ? $context["hint_position"] : (function () { throw new RuntimeError('Variable "hint_position" does not exist.', 6, $this->source); })()))) : ("")) == "above"))) {
            // line 7
            echo "                <div";
            $this->displayBlock("hint_attributes", $context, $blocks);
            echo ">";
            echo (isset($context["hint"]) || array_key_exists("hint", $context) ? $context["hint"] : (function () { throw new RuntimeError('Variable "hint" does not exist.', 7, $this->source); })());
            echo "</div>
            ";
        }
        // line 9
        echo "            ";
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 9, $this->source); })()) === false)) {
            // line 10
            echo "                <div class=\"control-label wrap\">
                    ";
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'label', ["label_attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 11, $this->source); })())]);
            echo "
                </div>
            ";
        }
        // line 14
        echo "            <div class=\"controls";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 14, $this->source); })())) > 0)) {
            echo " validation-error";
        }
        echo "\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'widget');
        echo "
                ";
        // line 16
        if ((((array_key_exists("hint", $context)) ? (_twig_default_filter((isset($context["hint"]) || array_key_exists("hint", $context) ? $context["hint"] : (function () { throw new RuntimeError('Variable "hint" does not exist.', 16, $this->source); })()))) : ("")) && (((array_key_exists("hint_position", $context)) ? (_twig_default_filter((isset($context["hint_position"]) || array_key_exists("hint_position", $context) ? $context["hint_position"] : (function () { throw new RuntimeError('Variable "hint_position" does not exist.', 16, $this->source); })()))) : ("")) == "after_input"))) {
            // line 17
            echo "                    <div";
            $this->displayBlock("hint_attributes", $context, $blocks);
            echo ">";
            echo (isset($context["hint"]) || array_key_exists("hint", $context) ? $context["hint"] : (function () { throw new RuntimeError('Variable "hint" does not exist.', 17, $this->source); })());
            echo "</div>
                ";
        }
        // line 19
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'errors');
        echo "
            </div>
            ";
        // line 21
        if ((((array_key_exists("hint", $context)) ? (_twig_default_filter((isset($context["hint"]) || array_key_exists("hint", $context) ? $context["hint"] : (function () { throw new RuntimeError('Variable "hint" does not exist.', 21, $this->source); })()))) : ("")) && (((array_key_exists("hint_position", $context)) ? (_twig_default_filter((isset($context["hint_position"]) || array_key_exists("hint_position", $context) ? $context["hint_position"] : (function () { throw new RuntimeError('Variable "hint_position" does not exist.', 21, $this->source); })()))) : ("")) == "below"))) {
            // line 22
            echo "                <div";
            $this->displayBlock("hint_attributes", $context, $blocks);
            echo ">";
            echo (isset($context["hint"]) || array_key_exists("hint", $context) ? $context["hint"] : (function () { throw new RuntimeError('Variable "hint" does not exist.', 22, $this->source); })());
            echo "</div>
            ";
        }
        // line 24
        echo "        </div>
    ";
        $___internal_parse_11_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo twig_spaceless($___internal_parse_11_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 28
    public function block_group_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("group_attributes", $this->getTemplateName(), 28));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "group_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "group_attributes"));

        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["group_attr"]) || array_key_exists("group_attr", $context) ? $context["group_attr"] : (function () { throw new RuntimeError('Variable "group_attr" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["n"] => $context["v"]) {
            // line 30
            if (($context["v"] === true)) {
                echo " ";
                echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                echo "\"";
            } elseif (( !(            // line 31
$context["n"] === "class") &&  !($context["v"] === false))) {
                echo " ";
                echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['n'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 36
    public function block_hint_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("hint_attributes", $this->getTemplateName(), 36));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hint_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hint_attributes"));

        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hint_attr"]) || array_key_exists("hint_attr", $context) ? $context["hint_attr"] : (function () { throw new RuntimeError('Variable "hint_attr" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["n"] => $context["v"]) {
            // line 38
            if (($context["v"] === true)) {
                echo " ";
                echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 39
$context["v"] === false)) {
                echo " ";
                echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['n'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 44
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widget_attributes", $this->getTemplateName(), 44));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 45
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 45, $this->source); })())) > 0)) {
            // line 46
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 46, $this->source); })()), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 46)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 46, $this->source); })()), "class", [], "any", false, false, false, 46) . " error")) : ("error"))]);
            // line 47
            echo "    ";
        }
        // line 48
        echo "    ";
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 51
    public function block_widget_container_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widget_container_attributes", $this->getTemplateName(), 51));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 52
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 52, $this->source); })())) > 0)) {
            // line 53
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 53, $this->source); })()), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 53)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 53, $this->source); })()), "class", [], "any", false, false, false, 53) . " error")) : ("error"))]);
            // line 54
            echo "    ";
        }
        // line 55
        echo "    ";
        $this->displayParentBlock("widget_container_attributes", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 58
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("form_errors", $this->getTemplateName(), 58));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 59
        ob_start();
        // line 60
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 60, $this->source); })())) > 0)) {
            // line 61
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "parent", [], "any", false, false, false, 61)) {
                // line 62
                echo "                ";
                $context["combinedError"] = "";
                // line 63
                echo "                ";
                $context["newErrors"] = [];
                // line 64
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 64, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 65
                    echo "                    ";
                    if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 65), (isset($context["newErrors"]) || array_key_exists("newErrors", $context) ? $context["newErrors"] : (function () { throw new RuntimeError('Variable "newErrors" does not exist.', 65, $this->source); })()))) {
                        // line 66
                        echo "                        ";
                        $context["newErrors"] = twig_array_merge((isset($context["newErrors"]) || array_key_exists("newErrors", $context) ? $context["newErrors"] : (function () { throw new RuntimeError('Variable "newErrors" does not exist.', 66, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 66)]);
                        // line 67
                        echo "                    ";
                    }
                    // line 68
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                ";
                $context["combinedError"] = twig_join_filter((isset($context["newErrors"]) || array_key_exists("newErrors", $context) ? $context["newErrors"] : (function () { throw new RuntimeError('Variable "newErrors" does not exist.', 69, $this->source); })()), "; ");
                // line 70
                echo "                <span class=\"validation-failed\"><span><span>";
                echo twig_escape_filter($this->env, (isset($context["combinedError"]) || array_key_exists("combinedError", $context) ? $context["combinedError"] : (function () { throw new RuntimeError('Variable "combinedError" does not exist.', 70, $this->source); })()), "html", null, true);
                echo "</span></span></span>
            ";
            } else {
                // line 72
                echo "                ";
                $this->displayParentBlock("form_errors", $context, $blocks);
                echo "
            ";
            }
            // line 74
            echo "        ";
        }
        // line 75
        echo "    ";
        $___internal_parse_12_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo twig_spaceless($___internal_parse_12_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 78
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("date_widget", $this->getTemplateName(), 78));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 79
        echo "    ";
        ob_start();
        // line 80
        echo "        ";
        $context["type"] = "text";
        // line 81
        echo "        ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 81, $this->source); })()) == "single_text")) {
            // line 82
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 84
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 85
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 85, $this->source); })()), ["{{ year }}" =>             // line 86
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "year", [], "any", false, false, false, 86), 'widget'), "{{ month }}" =>             // line 87
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "month", [], "any", false, false, false, 87), 'widget'), "{{ day }}" =>             // line 88
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "day", [], "any", false, false, false, 88), 'widget')]);
            // line 89
            echo "
            </div>
        ";
        }
        // line 92
        echo "    ";
        $___internal_parse_13_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo twig_spaceless($___internal_parse_13_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 95
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("choice_widget_expanded", $this->getTemplateName(), 95));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 96
        echo "    ";
        ob_start();
        // line 97
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 97, $this->source); })()), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 97)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 97, $this->source); })()), "class", [], "any", false, false, false, 97) . " horizontal choice-widget-expanded")) : ("horizontal choice-widget-expanded"))]);
        // line 98
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 98, $this->source); })()), ["class" => (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 98, $this->source); })()), "class", [], "any", false, false, false, 98) . " validate-group")]);
        // line 99
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 101
            echo "                <div class=\"choice-widget-expanded__item\">
                    ";
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "
                    ";
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["raw_label" => ((array_key_exists("raw_label", $context)) ? ((isset($context["raw_label"]) || array_key_exists("raw_label", $context) ? $context["raw_label"] : (function () { throw new RuntimeError('Variable "raw_label" does not exist.', 103, $this->source); })())) : (false)), "translatable_label" => ((array_key_exists("translatable_options", $context)) ? ((isset($context["translatable_options"]) || array_key_exists("translatable_options", $context) ? $context["translatable_options"] : (function () { throw new RuntimeError('Variable "translatable_options" does not exist.', 103, $this->source); })())) : (true))]);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        </div>
    ";
        $___internal_parse_14_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        echo twig_spaceless($___internal_parse_14_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 110
    public function block_choice_widget_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("choice_widget_options", $this->getTemplateName(), 110));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 111
        echo "    ";
        ob_start();
        // line 112
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 112, $this->source); })()));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 113
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 114
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, (((array_key_exists("translatable_groups", $context) &&  !(isset($context["translatable_groups"]) || array_key_exists("translatable_groups", $context) ? $context["translatable_groups"] : (function () { throw new RuntimeError('Variable "translatable_groups" does not exist.', 114, $this->source); })()))) ? ($context["group_label"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 114, $this->source); })())))), "html", null, true);
                echo "\">
                    ";
                // line 115
                $context["options"] = $context["choice"];
                // line 116
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 119
                echo "                ";
                $context["label"] = (((array_key_exists("translatable_options", $context) &&  !(isset($context["translatable_options"]) || array_key_exists("translatable_options", $context) ? $context["translatable_options"] : (function () { throw new RuntimeError('Variable "translatable_options" does not exist.', 119, $this->source); })()))) ? (twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 119)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 119), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 119, $this->source); })()))));
                // line 120
                echo "                <option ";
                $this->displayBlock("choice_widget_option_attributes", $context, $blocks);
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 120), "html", null, true);
                echo "\"";
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 120, $this->source); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if ((twig_get_attribute($this->env, $this->source, ($context["configs"] ?? null), "is_safe", [], "any", true, true, false, 120) && twig_get_attribute($this->env, $this->source, (isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 120, $this->source); })()), "is_safe", [], "any", false, false, false, 120))) {
                    echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 120, $this->source); })());
                } else {
                    echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 120, $this->source); })()), "html", null, true);
                }
                echo "</option>
            ";
            }
            // line 122
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "    ";
        $___internal_parse_15_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 111
        echo twig_spaceless($___internal_parse_15_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 126
    public function block_choice_widget_option_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("choice_widget_option_attributes", $this->getTemplateName(), 126));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_option_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_option_attributes"));

        // line 127
        ob_start();
        // line 128
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["choice"] ?? null), "attr", [], "any", true, true, false, 128) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 128, $this->source); })()), "attr", [], "any", false, false, false, 128)) > 0))) {
            // line 129
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 129, $this->source); })()), "attr", [], "any", false, false, false, 129));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "    ";
        }
        $___internal_parse_16_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        echo twig_spaceless($___internal_parse_16_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 134
    public function block_collection_render($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("collection_render", $this->getTemplateName(), 134));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_render"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_render"));

        // line 135
        echo "    ";
        ob_start();
        // line 136
        echo "        ";
        $macros["__internal_parse_18"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/Form/fields.html.twig", 136)->unwrap();
        // line 137
        echo "        <div class=\"row-oro\">
            <div class=\"collection-fields-list\" data-prototype=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_call_macro($macros["__internal_parse_18"], "macro_collection_prototype", [(isset($context["subform"]) || array_key_exists("subform", $context) ? $context["subform"] : (function () { throw new RuntimeError('Variable "subform" does not exist.', 138, $this->source); })())], 138, $context, $this->getSourceContext()));
        echo "\">
                ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["subform"]) || array_key_exists("subform", $context) ? $context["subform"] : (function () { throw new RuntimeError('Variable "subform" does not exist.', 139, $this->source); })()), "children", [], "any", false, false, false, 139));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 140
            echo "                    ";
            echo twig_call_macro($macros["__internal_parse_18"], "macro_collection_prototype", [$context["field"]], 140, $context, $this->getSourceContext());
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "            </div>
            <a class=\"btn add-list-item\" href=\"#\"><i class=\"fa-plus\"></i>";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add"), "html", null, true);
        echo "</a>
        </div>
    ";
        $___internal_parse_17_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        echo twig_spaceless($___internal_parse_17_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 148
    public function block__oro_entity_config_config_field_type_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_oro_entity_config_config_field_type_widget", $this->getTemplateName(), 148));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_entity_config_config_field_type_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_entity_config_config_field_type_widget"));

        // line 149
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "children", [], "any", false, false, false, 149));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 150
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroUI/Form/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  789 => 150,  784 => 149,  771 => 148,  758 => 135,  752 => 143,  749 => 142,  740 => 140,  736 => 139,  732 => 138,  729 => 137,  726 => 136,  723 => 135,  710 => 134,  697 => 127,  693 => 130,  680 => 129,  677 => 128,  675 => 127,  662 => 126,  649 => 111,  646 => 123,  632 => 122,  614 => 120,  611 => 119,  604 => 116,  602 => 115,  597 => 114,  594 => 113,  576 => 112,  573 => 111,  560 => 110,  547 => 96,  543 => 106,  534 => 103,  530 => 102,  527 => 101,  523 => 100,  518 => 99,  515 => 98,  512 => 97,  509 => 96,  496 => 95,  483 => 79,  480 => 92,  475 => 89,  473 => 88,  472 => 87,  471 => 86,  470 => 85,  465 => 84,  459 => 82,  456 => 81,  453 => 80,  450 => 79,  437 => 78,  424 => 59,  421 => 75,  418 => 74,  412 => 72,  406 => 70,  403 => 69,  397 => 68,  394 => 67,  391 => 66,  388 => 65,  383 => 64,  380 => 63,  377 => 62,  374 => 61,  372 => 60,  370 => 59,  357 => 58,  341 => 55,  338 => 54,  335 => 53,  332 => 52,  319 => 51,  303 => 48,  300 => 47,  297 => 46,  294 => 45,  281 => 44,  258 => 39,  251 => 38,  247 => 37,  234 => 36,  211 => 31,  204 => 30,  200 => 29,  187 => 28,  174 => 4,  170 => 24,  162 => 22,  160 => 21,  154 => 19,  146 => 17,  144 => 16,  140 => 15,  133 => 14,  127 => 11,  124 => 10,  121 => 9,  113 => 7,  111 => 6,  91 => 5,  88 => 4,  75 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'form_div_layout.html.twig' %}

{% block form_row %}
    {% apply spaceless %}
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
                {{ form_widget(form) }}
                {% if hint|default() and hint_position|default() == 'after_input' %}
                    <div{{ block('hint_attributes') }}>{{ hint|raw }}</div>
                {% endif %}
                {{ form_errors(form) }}
            </div>
            {% if hint|default() and hint_position|default() == 'below' %}
                <div{{ block('hint_attributes') }}>{{ hint|raw }}</div>
            {% endif %}
        </div>
    {% endapply %}
{% endblock form_row %}

{% block group_attributes %}
    {%- for n, v in group_attr %}
        {%- if v is same as(true) %} {{ n }}=\"{{ n }}\"
        {%- elseif n is not same as('class') and v is not same as(false) %} {{ n }}=\"{{ v }}\"
        {%- endif %}
    {%- endfor -%}
{% endblock group_attributes %}

{% block hint_attributes %}
    {%- for n, v in hint_attr %}
        {%- if v is same as(true) %} {{ n }}=\"{{ n }}\"
        {%- elseif v is not same as(false) %} {{ n }}=\"{{ v }}\"
        {%- endif %}
    {%- endfor -%}
{% endblock hint_attributes %}

{% block widget_attributes %}
    {% if errors|length > 0 %}
        {% set attr = attr|merge({'class': attr.class is defined ? attr.class ~ ' error' : 'error'}) %}
    {% endif %}
    {{ parent() }}
{% endblock widget_attributes %}

{% block widget_container_attributes %}
    {% if errors|length > 0 %}
        {% set attr = attr|merge({'class': attr.class is defined ? attr.class ~ ' error' : 'error'}) %}
    {% endif %}
    {{ parent() }}
{% endblock widget_container_attributes %}

{% block form_errors %}
    {%- apply spaceless -%}
        {% if errors|length > 0 %}
            {% if form.parent %}
                {% set combinedError = '' %}
                {% set newErrors = [] %}
                {% for error in errors %}
                    {% if error.message not in newErrors %}
                        {% set newErrors = newErrors|merge([error.message]) %}
                    {% endif %}
                {% endfor %}
                {% set combinedError = newErrors|join('; ') %}
                <span class=\"validation-failed\"><span><span>{{ combinedError }}</span></span></span>
            {% else %}
                {{ parent() }}
            {% endif %}
        {% endif %}
    {% endapply %}
{% endblock form_errors %}

{% block date_widget %}
    {% apply spaceless %}
        {% set type = 'text' %}
        {% if widget == 'single_text' %}
            {{ block('form_widget_simple')|raw }}
        {% else %}
            <div {{ block('widget_container_attributes') }}>
                {{ date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
                })|raw }}
            </div>
        {% endif %}
    {% endapply %}
{% endblock date_widget %}

{% block choice_widget_expanded %}
    {% apply spaceless %}
        {% set attr = attr|merge({'class': attr.class is defined ? attr.class ~ ' horizontal choice-widget-expanded' : 'horizontal choice-widget-expanded'}) %}
        {% set attr = attr|merge({'class': attr.class ~ ' validate-group'}) %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                <div class=\"choice-widget-expanded__item\">
                    {{ form_widget(child) }}
                    {{ form_label(child, null, {'raw_label' : raw_label is defined ? raw_label : false, 'translatable_label' : translatable_options is defined ? translatable_options : true }) }}
                </div>
            {% endfor %}
        </div>
    {% endapply %}
{% endblock choice_widget_expanded %}

{% block choice_widget_options %}
    {% apply spaceless %}
        {% for group_label, choice in options %}
            {% if choice is iterable %}
                <optgroup label=\"{{ translatable_groups is defined and not translatable_groups ? group_label : group_label|trans({}, translation_domain) }}\">
                    {% set options = choice %}
                    {{ block('choice_widget_options') }}
                </optgroup>
            {% else %}
                {% set label = translatable_options is defined and not translatable_options ? choice.label : choice.label|trans({}, translation_domain) %}
                <option {{ block('choice_widget_option_attributes') }} value=\"{{ choice.value }}\"{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{% if (configs.is_safe is defined and configs.is_safe) %}{{ label|raw }}{% else %}{{ label }}{% endif %}</option>
            {% endif %}
        {% endfor %}
    {% endapply %}
{% endblock choice_widget_options %}

{% block choice_widget_option_attributes %}
{% apply spaceless %}
    {% if choice.attr is defined and choice.attr|length > 0 %}
        {% for attrname, attrvalue in choice.attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %}
    {% endif %}
{% endapply %}
{% endblock choice_widget_option_attributes %}

{% block collection_render %}
    {% apply spaceless %}
        {% from '@OroUI/macros.html.twig' import collection_prototype as collection  %}
        <div class=\"row-oro\">
            <div class=\"collection-fields-list\" data-prototype=\"{{ collection(subform)|escape }}\">
                {% for field in subform.children %}
                    {{ collection(field) }}
                {% endfor %}
            </div>
            <a class=\"btn add-list-item\" href=\"#\"><i class=\"fa-plus\"></i>{{ 'Add'|trans }}</a>
        </div>
    {% endapply %}
{% endblock %}

{% block _oro_entity_config_config_field_type_widget %}
    {% for field in form.children %}
        {{ form_widget(field) }}
    {% endfor %}
{% endblock %}
", "@OroUI/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/Form/fields.html.twig");
    }
}
