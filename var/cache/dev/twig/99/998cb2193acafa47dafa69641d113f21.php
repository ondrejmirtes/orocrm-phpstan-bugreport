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

/* @OroOrganization/Form/fields.html.twig */
class __TwigTemplate_7ab39eddc3c9551c6a7384bfe7e1acd8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_business_unit_tree_widget' => [$this, 'block_oro_business_unit_tree_widget'],
            'oro_organizations_select_widget' => [$this, 'block_oro_organizations_select_widget'],
            'oro_type_choice_ownership_type_widget' => [$this, 'block_oro_type_choice_ownership_type_widget'],
            'oro_business_unit_tree_select_widget' => [$this, 'block_oro_business_unit_tree_select_widget'],
            'choice_bu_widget_collapsed' => [$this, 'block_choice_bu_widget_collapsed'],
            'choice_bu_widget_options' => [$this, 'block_choice_bu_widget_options'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroOrganization/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOrganization/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOrganization/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_business_unit_tree_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('oro_organizations_select_widget', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('oro_type_choice_ownership_type_widget', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('oro_business_unit_tree_select_widget', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('choice_bu_widget_collapsed', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('choice_bu_widget_options', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_business_unit_tree_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_business_unit_tree_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_business_unit_tree_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_business_unit_tree_widget"));

        // line 2
        echo "    ";
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 3, $this->source); })()), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 3)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 3, $this->source); })()), "class", [], "any", false, false, false, 3) . " horizontal")) : ("horizontal"))]);
            // line 4
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 4, $this->source); })()), ["class" => (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 4, $this->source); })()), "class", [], "any", false, false, false, 4) . " validate-group")]);
            // line 5
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["id"] => $context["child"]) {
                // line 7
                echo "                <div class=\"oro-clearfix\">
                    ";
                // line 8
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
                    ";
                // line 9
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["raw_label" => true]);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </div>
    ";
        } else {
            // line 14
            echo "        ";
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 18
    public function block_oro_organizations_select_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_organizations_select_widget", $this->getTemplateName(), 18));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_organizations_select_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_organizations_select_widget"));

        // line 19
        echo "    ";
        ob_start();
        // line 20
        echo "        <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "organizations", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "full_name", [], "any", false, false, false, 20), "html", null, true);
        echo "\"
               value=\"";
        // line 21
        echo twig_escape_filter($this->env, json_encode(["organizations" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "selected_organizations", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "businessUnits", [], "any", false, false, false, 22), 'widget');
        echo "
    ";
        $___internal_parse_33_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        echo twig_spaceless($___internal_parse_33_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 26
    public function block_oro_type_choice_ownership_type_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_type_choice_ownership_type_widget", $this->getTemplateName(), 26));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_choice_ownership_type_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_choice_ownership_type_widget"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 28, $this->source); })()) || (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 30
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 30) == ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 30, $this->source); })()), "NONE")) : ("NONE")))) {
                    // line 31
                    echo "                    <div class=\"control-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 31), "html", null, true);
                    echo "</div>
                ";
                }
                // line 33
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        ";
        } else {
            // line 36
            echo "            ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
        ";
        }
        // line 38
        echo "    ";
        $___internal_parse_34_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo twig_spaceless($___internal_parse_34_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 41
    public function block_oro_business_unit_tree_select_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_business_unit_tree_select_widget", $this->getTemplateName(), 41));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_business_unit_tree_select_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_business_unit_tree_select_widget"));

        // line 42
        echo "    ";
        $context["entityId"] = false;
        // line 43
        echo "    ";
        if (("oro_business_unit_form" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "parent", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43))) {
            // line 44
            echo "        ";
            $context["entityId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "parent", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44);
            // line 45
            echo "    ";
        }
        // line 46
        echo "    ";
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 46, $this->source); })())) {
            // line 47
            echo "        ";
            // line 48
            echo "        ";
            $context["raw_label"] = true;
            // line 49
            echo "        ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            $this->displayBlock("choice_bu_widget_collapsed", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 55
    public function block_choice_bu_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("choice_bu_widget_collapsed", $this->getTemplateName(), 55));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_bu_widget_collapsed"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_bu_widget_collapsed"));

        // line 56
        echo "    ";
        ob_start();
        // line 57
        echo "        <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 57, $this->source); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">
            ";
        // line 58
        if ( !(null === (isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 58, $this->source); })()))) {
            // line 59
            echo "                <option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 59, $this->source); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 59, $this->source); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new RuntimeError('Variable "empty_value" does not exist.', 59, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 59, $this->source); })())), "html", null, true);
            echo "</option>
            ";
        }
        // line 61
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new RuntimeError('Variable "preferred_choices" does not exist.', 61, $this->source); })())) > 0)) {
            // line 62
            echo "                ";
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new RuntimeError('Variable "preferred_choices" does not exist.', 62, $this->source); })());
            // line 63
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                ";
            // line 64
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 64, $this->source); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 64, $this->source); })())))) {
                // line 65
                echo "                    <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 65, $this->source); })()), "html", null, true);
                echo "</option>
                ";
            }
            // line 67
            echo "            ";
        }
        // line 68
        echo "            ";
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 68, $this->source); })());
        // line 69
        echo "            ";
        $this->displayBlock("choice_bu_widget_options", $context, $blocks);
        echo "
        </select>
    ";
        $___internal_parse_35_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        echo twig_spaceless($___internal_parse_35_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 74
    public function block_choice_bu_widget_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("choice_bu_widget_options", $this->getTemplateName(), 74));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_bu_widget_options"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_bu_widget_options"));

        // line 75
        echo "    ";
        ob_start();
        // line 76
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 76, $this->source); })()));
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
            // line 77
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 78
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 78, $this->source); })())), "html", null, true);
                echo "\">
                    ";
                // line 79
                $context["options"] = $context["choice"];
                // line 80
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 83
                echo "                ";
                $context["disable"] = "";
                // line 84
                echo "                ";
                if ((array_key_exists("forbidden_business_unit_ids", $context) && twig_length_filter($this->env, (isset($context["forbidden_business_unit_ids"]) || array_key_exists("forbidden_business_unit_ids", $context) ? $context["forbidden_business_unit_ids"] : (function () { throw new RuntimeError('Variable "forbidden_business_unit_ids" does not exist.', 84, $this->source); })())))) {
                    // line 85
                    echo "                    ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 85), (isset($context["forbidden_business_unit_ids"]) || array_key_exists("forbidden_business_unit_ids", $context) ? $context["forbidden_business_unit_ids"] : (function () { throw new RuntimeError('Variable "forbidden_business_unit_ids" does not exist.', 85, $this->source); })()))) {
                        // line 86
                        echo "                        ";
                        $context["disable"] = "disabled=\"disabled\"";
                        // line 87
                        echo "                    ";
                    }
                    // line 88
                    echo "                ";
                } else {
                    // line 89
                    echo "                    ";
                    if (( !twig_get_attribute($this->env, $this->source, ($context["business_unit_ids"] ?? null), twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 89), [], "array", true, true, false, 89) || ((isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 89, $this->source); })()) && ((isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 89, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 89))))) {
                        // line 90
                        echo "                        ";
                        $context["disable"] = "disabled=\"disabled\"";
                        // line 91
                        echo "                    ";
                    }
                    // line 92
                    echo "                ";
                }
                // line 93
                echo "                <option ";
                echo twig_escape_filter($this->env, (isset($context["disable"]) || array_key_exists("disable", $context) ? $context["disable"] : (function () { throw new RuntimeError('Variable "disable" does not exist.', 93, $this->source); })()), "html", null, true);
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 93), "html", null, true);
                echo "\"
                ";
                // line 94
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 94, $this->source); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                // line 95
                ob_start();
                // line 96
                $context["label"] = (((array_key_exists("translatable_options", $context) &&  !(isset($context["translatable_options"]) || array_key_exists("translatable_options", $context) ? $context["translatable_options"] : (function () { throw new RuntimeError('Variable "translatable_options" does not exist.', 96, $this->source); })()))) ? (twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 96)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 96), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 96, $this->source); })()))));
                // line 97
                echo "                        ";
                // line 98
                echo "                        ";
                echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 98, $this->source); })());
                $___internal_parse_37_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 95
                echo twig_spaceless($___internal_parse_37_);
                // line 100
                echo "</option>
            ";
            }
            // line 102
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
        // line 103
        echo "    ";
        $___internal_parse_36_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo twig_spaceless($___internal_parse_36_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroOrganization/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  531 => 75,  528 => 103,  514 => 102,  510 => 100,  508 => 95,  504 => 98,  502 => 97,  500 => 96,  498 => 95,  493 => 94,  486 => 93,  483 => 92,  480 => 91,  477 => 90,  474 => 89,  471 => 88,  468 => 87,  465 => 86,  462 => 85,  459 => 84,  456 => 83,  449 => 80,  447 => 79,  442 => 78,  439 => 77,  421 => 76,  418 => 75,  405 => 74,  392 => 56,  385 => 69,  382 => 68,  379 => 67,  373 => 65,  371 => 64,  366 => 63,  363 => 62,  360 => 61,  350 => 59,  348 => 58,  340 => 57,  337 => 56,  324 => 55,  307 => 51,  301 => 49,  298 => 48,  296 => 47,  293 => 46,  290 => 45,  287 => 44,  284 => 43,  281 => 42,  268 => 41,  255 => 27,  252 => 38,  246 => 36,  240 => 34,  234 => 33,  228 => 31,  225 => 30,  220 => 29,  217 => 28,  214 => 27,  201 => 26,  188 => 19,  183 => 22,  179 => 21,  174 => 20,  171 => 19,  158 => 18,  141 => 14,  137 => 12,  128 => 9,  124 => 8,  121 => 7,  117 => 6,  112 => 5,  109 => 4,  106 => 3,  103 => 2,  90 => 1,  77 => 74,  74 => 73,  72 => 55,  69 => 54,  67 => 41,  64 => 40,  62 => 26,  59 => 25,  57 => 18,  54 => 17,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_business_unit_tree_widget %}
    {% if expanded %}
        {% set attr = attr|merge({'class': attr.class is defined ? attr.class ~ ' horizontal' : 'horizontal'}) %}
        {% set attr = attr|merge({'class': attr.class ~ ' validate-group'}) %}
        <div {{ block('widget_container_attributes') }}>
            {% for id, child in form %}
                <div class=\"oro-clearfix\">
                    {{ form_widget(child) }}
                    {{ form_label(child, null , {'raw_label': true}) }}
                </div>
            {% endfor %}
        </div>
    {% else %}
        {{ block('choice_widget_collapsed') }}
    {% endif %}
{% endblock %}

{% block oro_organizations_select_widget %}
    {% apply spaceless %}
        <input type=\"hidden\" name=\"{{ form.organizations.vars.full_name }}\"
               value=\"{{ {organizations: form.vars.selected_organizations}|json_encode }}\">
        {{ form_widget(form.businessUnits) }}
    {% endapply %}
{% endblock %}

{% block oro_type_choice_ownership_type_widget %}
    {% apply spaceless %}
        {% if value or disabled %}
            {% for choice in choices %}
                {% if choice.value == value|default('NONE') %}
                    <div class=\"control-label\">{{ choice.label }}</div>
                {% endif %}
            {% endfor %}
            {{ block('hidden_widget') }}
        {% else %}
            {{ block('choice_widget') }}
        {% endif %}
    {% endapply %}
{% endblock %}

{% block oro_business_unit_tree_select_widget %}
    {% set entityId = false %}
    {% if \"oro_business_unit_form\" == form.parent.vars.name%}
        {% set entityId = form.parent.vars.value.id %}
    {% endif %}
    {% if expanded %}
        {# prevent escaping label because it's done in form type \"oro_business_unit_tree\" #}
        {% set raw_label = true %}
        {{ block('choice_widget_expanded') }}
    {% else %}
        {{ block('choice_bu_widget_collapsed') }}
    {% endif %}
{% endblock %}

{% block choice_bu_widget_collapsed %}
    {% apply spaceless %}
        <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
            {% if empty_value is not none %}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ empty_value|trans({}, translation_domain) }}</option>
            {% endif %}
            {% if preferred_choices|length > 0 %}
                {% set options = preferred_choices %}
                {{ block('choice_widget_options') }}
                {% if choices|length > 0 and separator is not none %}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {% endif %}
            {% endif %}
            {% set options = choices %}
            {{ block('choice_bu_widget_options') }}
        </select>
    {% endapply %}
{% endblock choice_bu_widget_collapsed %}

{% block choice_bu_widget_options %}
    {% apply spaceless %}
        {% for group_label, choice in options %}
            {% if choice is iterable %}
                <optgroup label=\"{{ group_label|trans({}, translation_domain) }}\">
                    {% set options = choice %}
                    {{ block('choice_widget_options') }}
                </optgroup>
            {% else %}
                {% set disable = '' %}
                {% if forbidden_business_unit_ids is defined and forbidden_business_unit_ids|length %}
                    {% if choice.value in forbidden_business_unit_ids %}
                        {% set disable = 'disabled=\"disabled\"' %}
                    {% endif %}
                {% else %}
                    {% if not (business_unit_ids[choice.value] is defined) or (entityId and entityId == choice.value) %}
                        {% set disable = 'disabled=\"disabled\"' %}
                    {% endif %}
                {% endif %}
                <option {{ disable }} value=\"{{ choice.value }}\"
                {% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>
                    {%- apply spaceless -%}
                        {% set label = translatable_options is defined and not translatable_options ? choice.label : choice.label|trans({}, translation_domain) %}
                        {# output is not escaped because it's done form in type \"oro_business_unit_tree\" #}
                        {{ label|raw }}
                    {%- endapply -%}
                </option>
            {% endif %}
        {% endfor %}
    {% endapply %}
{% endblock choice_bu_widget_options %}
", "@OroOrganization/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/OrganizationBundle/Resources/views/Form/fields.html.twig");
    }
}
