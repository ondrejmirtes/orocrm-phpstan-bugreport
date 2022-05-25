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

/* @OroSales/Form/fields.html.twig */
class __TwigTemplate_bc43b00d86cd5fa5d4b89791b64efc6c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_sales_opportunity_widget' => [$this, 'block_oro_sales_opportunity_widget'],
            'oro_sales_lead_widget' => [$this, 'block_oro_sales_lead_widget'],
            'oro_sales_opportunity_status_enum_value_widget' => [$this, 'block_oro_sales_opportunity_status_enum_value_widget'],
            'oro_sales_lead_address_widget' => [$this, 'block_oro_sales_lead_address_widget'],
            'oro_sales_lead_address_rows' => [$this, 'block_oro_sales_lead_address_rows'],
            '_oro_sales_lead_form_address_collection_widget' => [$this, 'block__oro_sales_lead_form_address_collection_widget'],
            'oro_sales_customer_widget' => [$this, 'block_oro_sales_customer_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSales/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_sales_opportunity_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('oro_sales_lead_widget', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('oro_sales_opportunity_status_enum_value_widget', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('oro_sales_lead_address_widget', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('oro_sales_lead_address_rows', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('_oro_sales_lead_form_address_collection_widget', $context, $blocks);
        // line 157
        echo "
";
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('oro_sales_customer_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_sales_opportunity_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_sales_opportunity_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_sales_opportunity_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_sales_opportunity_widget"));

        // line 2
        echo "    <div class=\"row-fluid\">
        <fieldset class=\"form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "owner", [], "any", true, true, false, 5)) {
            // line 6
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "owner", [], "any", false, false, false, 6), 'row');
            echo "
                ";
        }
        // line 8
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), 'row');
        echo "
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "contact", [], "any", false, false, false, 9), 'row');
        echo "
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "customerAssociation", [], "any", false, false, false, 10), 'row');
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "probability", [], "any", false, false, false, 11), 'row');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "budgetAmount", [], "any", false, false, false, 12), 'row');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "customerNeed", [], "any", false, false, false, 13), 'row');
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "proposedSolution", [], "any", false, false, false, 14), 'row');
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "closeReason", [], "any", false, false, false, 15), 'row');
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "closeRevenue", [], "any", false, false, false, 16), 'row');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "closeDate", [], "any", false, false, false, 17), 'row');
        echo "
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "notes", [], "any", false, false, false, 18), 'row');
        echo "

                ";
        // line 20
        $context["additionalData"] = [];
        // line 21
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "children", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 22
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 22), "extra_field", [], "any", true, true, false, 22) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 22), "extra_field", [], "any", false, false, false, 22))) {
                // line 23
                echo "                        ";
                $context["additionalData"] = twig_array_merge((isset($context["additionalData"]) || array_key_exists("additionalData", $context) ? $context["additionalData"] : (function () { throw new RuntimeError('Variable "additionalData" does not exist.', 23, $this->source); })()), [0 => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row')]);
                // line 24
                echo "                    ";
            }
            // line 25
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                ";
        if ( !twig_test_empty((isset($context["additionalData"]) || array_key_exists("additionalData", $context) ? $context["additionalData"] : (function () { throw new RuntimeError('Variable "additionalData" does not exist.', 26, $this->source); })()))) {
            // line 27
            echo "                    <h5 class=\"user-fieldset\">
                        <span>";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional"), "html", null, true);
            echo "</span>
                    </h5>

                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["additionalData"]) || array_key_exists("additionalData", $context) ? $context["additionalData"] : (function () { throw new RuntimeError('Variable "additionalData" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 32
                echo "                        ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                ";
        }
        // line 35
        echo "            </div>
        </fieldset>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 40
    public function block_oro_sales_lead_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_sales_lead_widget", $this->getTemplateName(), 40));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_sales_lead_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_sales_lead_widget"));

        // line 41
        echo "    <div class=\"row-fluid row-fluid-divider\">
        <fieldset class=\"form-horizontal\">
            <div class=\"responsive-block\">
                <h5 class=\"user-fieldset\">
                    <span>";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.details.label"), "html", null, true);
        echo "</span>
                </h5>
                ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "owner", [], "any", true, true, false, 47)) {
            // line 48
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "owner", [], "any", false, false, false, 48), 'row');
            echo "
                ";
        }
        // line 50
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), 'row');
        echo "
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "namePrefix", [], "any", false, false, false, 51), 'row');
        echo "
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "firstName", [], "any", false, false, false, 52), 'row');
        echo "
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "middleName", [], "any", false, false, false, 53), 'row');
        echo "
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "lastName", [], "any", false, false, false, 54), 'row');
        echo "
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "nameSuffix", [], "any", false, false, false, 55), 'row');
        echo "
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "contact", [], "any", false, false, false, 56), 'row');
        echo "
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "jobTitle", [], "any", false, false, false, 57), 'row');
        echo "
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "phones", [], "any", false, false, false, 58), 'row');
        echo "
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "emails", [], "any", false, false, false, 59), 'row');
        echo "
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "customerAssociation", [], "any", false, false, false, 60), 'row');
        echo "
                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "companyName", [], "any", false, false, false, 61), 'row');
        echo "
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "website", [], "any", false, false, false, 62), 'row');
        echo "
                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "numberOfEmployees", [], "any", false, false, false, 63), 'row');
        echo "
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "industry", [], "any", false, false, false, 64), 'row');
        echo "
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "source", [], "any", false, false, false, 65), 'row');
        echo "
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "notes", [], "any", false, false, false, 66), 'row');
        echo "

                ";
        // line 68
        $context["additionalData"] = [];
        // line 69
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "children", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 70
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 70), "extra_field", [], "any", true, true, false, 70) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 70), "extra_field", [], "any", false, false, false, 70))) {
                // line 71
                echo "                        ";
                $context["additionalData"] = twig_array_merge((isset($context["additionalData"]) || array_key_exists("additionalData", $context) ? $context["additionalData"] : (function () { throw new RuntimeError('Variable "additionalData" does not exist.', 71, $this->source); })()), [0 => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row')]);
                // line 72
                echo "                    ";
            }
            // line 73
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                ";
        if ( !twig_test_empty((isset($context["additionalData"]) || array_key_exists("additionalData", $context) ? $context["additionalData"] : (function () { throw new RuntimeError('Variable "additionalData" does not exist.', 74, $this->source); })()))) {
            // line 75
            echo "                    <h5 class=\"user-fieldset\">
                        <span>";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional"), "html", null, true);
            echo "</span>
                    </h5>

                    ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["additionalData"]) || array_key_exists("additionalData", $context) ? $context["additionalData"] : (function () { throw new RuntimeError('Variable "additionalData" does not exist.', 79, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 80
                echo "                        ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                ";
        }
        // line 83
        echo "            </div>
            <div class=\"responsive-cell\">
                <h5 class=\"user-fieldset\">
                    <span>";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.addresses.label"), "html", null, true);
        echo "</span>
                </h5>
                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "addresses", [], "any", false, false, false, 88), 'widget');
        echo "
            </div>
        </fieldset>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 94
    public function block_oro_sales_opportunity_status_enum_value_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_sales_opportunity_status_enum_value_widget", $this->getTemplateName(), 94));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_sales_opportunity_status_enum_value_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_sales_opportunity_status_enum_value_widget"));

        // line 95
        echo "    <div class=\"float-holder ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "label", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "errors", [], "any", false, false, false, 95)) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append input-append-sortable collection-element-primary\">
            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "label", [], "any", false, false, false, 97), 'widget', ["disabled" => (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 97, $this->source); })())]);
        echo "
            ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "probability", [], "any", false, false, false, 98), 'widget', ["disabled" => (        // line 99
(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 99, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "probability", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "disabled", [], "any", false, false, false, 99)), "attr" => ["class" => "add-on-input", "title" => "oro.sales.system_configuration.fields.opportunity_status_probabilities.probability.tooltip"]]);
        // line 104
        echo "
            <span class=\"add-on ui-sortable-handle";
        // line 105
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 105, $this->source); })())) {
            echo " disabled";
        }
        echo "\"
                  data-name=\"sortable-handle\"
                  title=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_extend.enum_options.priority.tooltip"), "html", null, true);
        echo "\">
                <i class=\"fa-arrows-v ";
        // line 108
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 108, $this->source); })())) {
            echo " disabled";
        }
        echo "\"></i>
                ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "priority", [], "any", false, false, false, 109), 'widget', ["disabled" => (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 109, $this->source); })())]);
        echo "
            </span>
            <label class=\"add-on";
        // line 111
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 111, $this->source); })())) {
            echo " disabled";
        }
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_extend.enum_options.default.tooltip"), "html", null, true);
        echo "\">
                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "is_default", [], "any", false, false, false, 112), 'widget', ["disabled" => (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 112, $this->source); })())]);
        echo "
            </label>
        </div>
        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "label", [], "any", false, false, false, 115), 'errors');
        echo "
    </div>
    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'rest');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 120
    public function block_oro_sales_lead_address_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_sales_lead_address_widget", $this->getTemplateName(), 120));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_sales_lead_address_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_sales_lead_address_widget"));

        // line 121
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "parent", [], "any", false, false, false, 121))) {
            // line 122
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 123
            $this->displayBlock("oro_sales_lead_address_rows", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 126
            echo "        ";
            $this->displayBlock("oro_sales_lead_address_rows", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 130
    public function block_oro_sales_lead_address_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_sales_lead_address_rows", $this->getTemplateName(), 130));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_sales_lead_address_rows"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_sales_lead_address_rows"));

        // line 131
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131), 'row');
        echo "
    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "primary", [], "any", false, false, false, 132), 'row', ["label" => "oro.sales.leadaddress.primary.label"]);
        echo "
    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "label", [], "any", false, false, false, 133), 'row', ["label" => "oro.sales.leadaddress.label.label"]);
        echo "
    ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "namePrefix", [], "any", false, false, false, 134), 'row', ["label" => "oro.sales.leadaddress.name_prefix.label"]);
        echo "
    ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "firstName", [], "any", false, false, false, 135), 'row', ["label" => "oro.sales.leadaddress.first_name.label"]);
        echo "
    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "middleName", [], "any", false, false, false, 136), 'row', ["label" => "oro.sales.leadaddress.middle_name.label"]);
        echo "
    ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "lastName", [], "any", false, false, false, 137), 'row', ["label" => "oro.sales.leadaddress.last_name.label"]);
        echo "
    ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "nameSuffix", [], "any", false, false, false, 138), 'row', ["label" => "oro.sales.leadaddress.name_suffix.label"]);
        echo "
    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "organization", [], "any", false, false, false, 139), 'row', ["label" => "oro.sales.leadaddress.organization.label"]);
        echo "
    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "country", [], "any", false, false, false, 140), 'row', ["label" => "oro.sales.leadaddress.country.label"]);
        echo "
    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "street", [], "any", false, false, false, 141), 'row', ["label" => "oro.sales.leadaddress.street.label"]);
        echo "
    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "street2", [], "any", false, false, false, 142), 'row', ["label" => "oro.sales.leadaddress.street2.label"]);
        echo "
    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "city", [], "any", false, false, false, 143), 'row', ["label" => "oro.sales.leadaddress.city.label"]);
        echo "
    ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "region_text", [], "any", false, false, false, 144), 'row', ["label" => "oro.sales.leadaddress.region_text.label"]);
        echo "
    ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "region", [], "any", false, false, false, 145), 'row', ["label" => "oro.sales.leadaddress.region.label"]);
        echo "
    ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "postalCode", [], "any", false, false, false, 146), 'row', ["label" => "oro.sales.leadaddress.postal_code.label"]);
        echo "
    ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), 'rest');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 150
    public function block__oro_sales_lead_form_address_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_oro_sales_lead_form_address_collection_widget", $this->getTemplateName(), 150));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_sales_lead_form_address_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_sales_lead_form_address_collection_widget"));

        // line 151
        echo "    ";
        $macros["fields"] = $this;
        // line 152
        echo "
    ";
        // line 153
        $this->displayBlock("oro_address_collection_widget", $context, $blocks);
        echo "
    ";
        // line 154
        $context["id"] = ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 154, $this->source); })()) . "_collection");
        // line 155
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_oro_adddress_collection_prefill_names", [$context], 155, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 184
    public function block_oro_sales_customer_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_sales_customer_widget", $this->getTemplateName(), 184));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_sales_customer_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_sales_customer_widget"));

        // line 185
        echo "    ";
        if (( !(isset($context["hasGridData"]) || array_key_exists("hasGridData", $context) ? $context["hasGridData"] : (function () { throw new RuntimeError('Variable "hasGridData" does not exist.', 185, $this->source); })()) &&  !(isset($context["createCustomersData"]) || array_key_exists("createCustomersData", $context) ? $context["createCustomersData"] : (function () { throw new RuntimeError('Variable "createCustomersData" does not exist.', 185, $this->source); })()))) {
            // line 186
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), 'widget');
            echo "
    ";
        } else {
            // line 188
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 188, $this->source); })()), "html", null, true);
            echo "-el\"
             ";
            // line 189
            if (twig_length_filter($this->env, (isset($context["createCustomersData"]) || array_key_exists("createCustomersData", $context) ? $context["createCustomersData"] : (function () { throw new RuntimeError('Variable "createCustomersData" does not exist.', 189, $this->source); })()))) {
                echo "class=\"entity-create-or-select-container entity-create-multi-enabled\"";
            }
            // line 190
            echo "             data-page-component-module=\"orosales/js/app/components/customer-component\"
             data-page-component-options=\"";
            // line 191
            echo twig_escape_filter($this->env, json_encode(["inputSelector" => ("#" .             // line 192
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 192, $this->source); })())), "customerSelector" => ".dropdown-menu li"]), "html", null, true);
            // line 194
            echo "\">
            <div class=\"input-append\">
                ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), 'widget');
            echo "
                ";
            // line 197
            if ((isset($context["hasGridData"]) || array_key_exists("hasGridData", $context) ? $context["hasGridData"] : (function () { throw new RuntimeError('Variable "hasGridData" does not exist.', 197, $this->source); })())) {
                // line 198
                echo "                    ";
                $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSales/Form/fields.html.twig", 198)->unwrap();
                // line 199
                echo "                    ";
                echo twig_call_macro($macros["UI"], "macro_clientLink", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_sales_customer_grid_dialog", ["entityClass" =>                 // line 202
(isset($context["parentClass"]) || array_key_exists("parentClass", $context) ? $context["parentClass"] : (function () { throw new RuntimeError('Variable "parentClass" does not exist.', 202, $this->source); })())]), "aCss" => "btn btn-icon btn-square-default entity-select-btn", "iCss" => "fa-bars", "dataAttributes" => ["purpose" => "open-dialog-widget"], "widget" => ["type" => "dialog", "multiple" => true, "options" => ["alias" => "customer-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 213
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 213, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 213, $this->source); })())), "allowMaximize" => true, "allowMinimize" => true, "modal" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000, "height" => 600]]]]], 199, $context, $this->getSourceContext());
                // line 224
                echo "
                ";
            }
            // line 226
            echo "                ";
            if (twig_length_filter($this->env, (isset($context["createCustomersData"]) || array_key_exists("createCustomersData", $context) ? $context["createCustomersData"] : (function () { throw new RuntimeError('Variable "createCustomersData" does not exist.', 226, $this->source); })()))) {
                // line 227
                echo "                    ";
                $context["togglerId"] = uniqid("dropdown-");
                // line 228
                echo "                    <div class=\"dropdown btn-group entity-create-dropdown\">
                        <button id=\"";
                // line 229
                echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 229, $this->source); })()), "html", null, true);
                echo "\" type=\"button\" data-toggle=\"dropdown\"
                                class=\"dropdown-toggle btn btn-icon btn-square-default entity-create-btn\"
                                aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"fa-plus\" aria-hidden=\"true\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"";
                // line 234
                echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 234, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 235
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["createCustomersData"]) || array_key_exists("createCustomersData", $context) ? $context["createCustomersData"] : (function () { throw new RuntimeError('Variable "createCustomersData" does not exist.', 235, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                    // line 236
                    echo "                                <li>
                                    <button type=\"button\" data-customer=\"";
                    // line 237
                    echo twig_escape_filter($this->env, json_encode($context["customer"]), "html", null, true);
                    echo "\">
                                        <span class=\"";
                    // line 238
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "icon", [], "any", false, false, false, 238), "html", null, true);
                    echo "\" aria-hidden=\"true\"></span>
                                        ";
                    // line 239
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["customer"], "label", [], "any", false, false, false, 239)), "html", null, true);
                    echo "
                                    </button>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 243
                echo "                        </ul>
                    </div>
                ";
            }
            // line 246
            echo "            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 158
    public function macro_oro_adddress_collection_prefill_names($__context__ = null, ...$__varargs__)
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
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "oro_adddress_collection_prefill_names"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "oro_adddress_collection_prefill_names"));

            // line 159
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "form", [], "any", false, true, false, 159), "parent", [], "any", true, true, false, 159)) {
                // line 160
                echo "        ";
                $context["parentId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 160, $this->source); })()), "form", [], "any", false, false, false, 160), "parent", [], "any", false, false, false, 160), "vars", [], "any", false, false, false, 160), "id", [], "any", false, false, false, 160);
                // line 161
                echo "        ";
                $context["parentName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 161, $this->source); })()), "form", [], "any", false, false, false, 161), "parent", [], "any", false, false, false, 161), "vars", [], "any", false, false, false, 161), "full_name", [], "any", false, false, false, 161);
                // line 162
                echo "        <script>
            loadModules(['jquery'],
            function(\$){
                \$(function() {
                    var container = \$('#";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 166, $this->source); })()), "id", [], "any", false, false, false, 166), "html", null, true);
                echo "');
                    var parentContainer = \$('#";
                // line 167
                echo twig_escape_filter($this->env, (isset($context["parentId"]) || array_key_exists("parentId", $context) ? $context["parentId"] : (function () { throw new RuntimeError('Variable "parentId" does not exist.', 167, $this->source); })()), "html", null, true);
                echo "');
                    var nameFields = ['firstName', 'lastName', 'namePrefix', 'middleName', 'nameSuffix'];
                    container.on('content:changed', function() {
                        nameFields.forEach(function (field, index) {
                            container.find('[name\$=\"[' + field +']\"]').each(function (idx, el) {
                                if (!\$(el).val()) {
                                    \$(el).val(parentContainer.find('[name\$=\"";
                // line 173
                echo twig_escape_filter($this->env, (isset($context["parentName"]) || array_key_exists("parentName", $context) ? $context["parentName"] : (function () { throw new RuntimeError('Variable "parentName" does not exist.', 173, $this->source); })()), "html", null, true);
                echo "[' + field +']\"]').val());
                                }
                            });
                        })
                    })
                });
            });
        </script>
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
        return "@OroSales/Form/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  855 => 173,  846 => 167,  842 => 166,  836 => 162,  833 => 161,  830 => 160,  827 => 159,  808 => 158,  792 => 246,  787 => 243,  777 => 239,  773 => 238,  769 => 237,  766 => 236,  762 => 235,  758 => 234,  750 => 229,  747 => 228,  744 => 227,  741 => 226,  737 => 224,  735 => 213,  734 => 202,  732 => 199,  729 => 198,  727 => 197,  723 => 196,  719 => 194,  717 => 192,  716 => 191,  713 => 190,  709 => 189,  704 => 188,  698 => 186,  695 => 185,  682 => 184,  666 => 155,  664 => 154,  660 => 153,  657 => 152,  654 => 151,  641 => 150,  626 => 147,  622 => 146,  618 => 145,  614 => 144,  610 => 143,  606 => 142,  602 => 141,  598 => 140,  594 => 139,  590 => 138,  586 => 137,  582 => 136,  578 => 135,  574 => 134,  570 => 133,  566 => 132,  561 => 131,  548 => 130,  531 => 126,  525 => 123,  520 => 122,  517 => 121,  504 => 120,  489 => 117,  484 => 115,  478 => 112,  470 => 111,  465 => 109,  459 => 108,  455 => 107,  448 => 105,  445 => 104,  443 => 99,  442 => 98,  438 => 97,  430 => 95,  417 => 94,  399 => 88,  394 => 86,  389 => 83,  386 => 82,  377 => 80,  373 => 79,  367 => 76,  364 => 75,  361 => 74,  355 => 73,  352 => 72,  349 => 71,  346 => 70,  341 => 69,  339 => 68,  334 => 66,  330 => 65,  326 => 64,  322 => 63,  318 => 62,  314 => 61,  310 => 60,  306 => 59,  302 => 58,  298 => 57,  294 => 56,  290 => 55,  286 => 54,  282 => 53,  278 => 52,  274 => 51,  269 => 50,  263 => 48,  261 => 47,  256 => 45,  250 => 41,  237 => 40,  221 => 35,  218 => 34,  209 => 32,  205 => 31,  199 => 28,  196 => 27,  193 => 26,  187 => 25,  184 => 24,  181 => 23,  178 => 22,  173 => 21,  171 => 20,  166 => 18,  162 => 17,  158 => 16,  154 => 15,  150 => 14,  146 => 13,  142 => 12,  138 => 11,  134 => 10,  130 => 9,  125 => 8,  119 => 6,  117 => 5,  112 => 2,  99 => 1,  86 => 184,  83 => 183,  80 => 157,  78 => 150,  75 => 149,  73 => 130,  70 => 129,  68 => 120,  65 => 119,  63 => 94,  60 => 93,  58 => 40,  55 => 39,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_sales_opportunity_widget %}
    <div class=\"row-fluid\">
        <fieldset class=\"form-horizontal\">
            <div class=\"responsive-block\">
                {% if form.owner is defined %}
                    {{ form_row(form.owner) }}
                {% endif %}
                {{ form_row(form.name) }}
                {{ form_row(form.contact) }}
                {{ form_row(form.customerAssociation) }}
                {{ form_row(form.probability) }}
                {{ form_row(form.budgetAmount) }}
                {{ form_row(form.customerNeed) }}
                {{ form_row(form.proposedSolution) }}
                {{ form_row(form.closeReason) }}
                {{ form_row(form.closeRevenue) }}
                {{ form_row(form.closeDate) }}
                {{ form_row(form.notes) }}

                {% set additionalData = [] %}
                {% for child in form.children %}
                    {% if child.vars.extra_field is defined and child.vars.extra_field %}
                        {% set additionalData = additionalData|merge([form_row(child)]) %}
                    {% endif %}
                {% endfor %}
                {% if additionalData is not empty %}
                    <h5 class=\"user-fieldset\">
                        <span>{{ 'Additional'|trans }}</span>
                    </h5>

                    {% for value in additionalData %}
                        {{ value }}
                    {% endfor %}
                {% endif %}
            </div>
        </fieldset>
    </div>
{% endblock oro_sales_opportunity_widget %}

{% block oro_sales_lead_widget %}
    <div class=\"row-fluid row-fluid-divider\">
        <fieldset class=\"form-horizontal\">
            <div class=\"responsive-block\">
                <h5 class=\"user-fieldset\">
                    <span>{{ 'oro.sales.lead.details.label'|trans }}</span>
                </h5>
                {% if form.owner is defined %}
                    {{ form_row(form.owner) }}
                {% endif %}
                {{ form_row(form.name) }}
                {{ form_row(form.namePrefix) }}
                {{ form_row(form.firstName) }}
                {{ form_row(form.middleName) }}
                {{ form_row(form.lastName) }}
                {{ form_row(form.nameSuffix) }}
                {{ form_row(form.contact) }}
                {{ form_row(form.jobTitle) }}
                {{ form_row(form.phones) }}
                {{ form_row(form.emails) }}
                {{ form_row(form.customerAssociation) }}
                {{ form_row(form.companyName) }}
                {{ form_row(form.website) }}
                {{ form_row(form.numberOfEmployees) }}
                {{ form_row(form.industry) }}
                {{ form_row(form.source) }}
                {{ form_row(form.notes) }}

                {% set additionalData = [] %}
                {% for child in form.children %}
                    {% if child.vars.extra_field is defined and child.vars.extra_field %}
                        {% set additionalData = additionalData|merge([form_row(child)]) %}
                    {% endif %}
                {% endfor %}
                {% if additionalData is not empty %}
                    <h5 class=\"user-fieldset\">
                        <span>{{ 'Additional'|trans }}</span>
                    </h5>

                    {% for value in additionalData %}
                        {{ value }}
                    {% endfor %}
                {% endif %}
            </div>
            <div class=\"responsive-cell\">
                <h5 class=\"user-fieldset\">
                    <span>{{ 'oro.sales.lead.addresses.label'|trans }}</span>
                </h5>
                {{ form_widget(form.addresses) }}
            </div>
        </fieldset>
    </div>
{% endblock oro_sales_lead_widget %}

{% block oro_sales_opportunity_status_enum_value_widget %}
    <div class=\"float-holder {% if form.label.vars.errors|length > 0 %} validation-error{% endif %}\">
        <div class=\"input-append input-append-sortable collection-element-primary\">
            {{ form_widget(form.label, {disabled: disabled}) }}
            {{ form_widget(form.probability, {
                disabled: disabled or form.probability.vars.disabled,
                attr: {
                    class: 'add-on-input',
                    title: 'oro.sales.system_configuration.fields.opportunity_status_probabilities.probability.tooltip'
                }
            }) }}
            <span class=\"add-on ui-sortable-handle{% if disabled %} disabled{% endif %}\"
                  data-name=\"sortable-handle\"
                  title=\"{{ 'oro.entity_extend.enum_options.priority.tooltip'|trans }}\">
                <i class=\"fa-arrows-v {% if disabled %} disabled{% endif %}\"></i>
                {{ form_widget(form.priority, {disabled: disabled}) }}
            </span>
            <label class=\"add-on{% if disabled %} disabled{% endif %}\" title=\"{{ 'oro.entity_extend.enum_options.default.tooltip'|trans }}\">
                {{ form_widget(form.is_default, {disabled: disabled}) }}
            </label>
        </div>
        {{ form_errors(form.label) }}
    </div>
    {{ form_rest(form) }}
{% endblock %}

{% block oro_sales_lead_address_widget %}
    {% if form.parent is not empty %}
        <div {{ block('widget_container_attributes') }}>
            {{ block('oro_sales_lead_address_rows') }}
        </div>
    {% else %}
        {{ block('oro_sales_lead_address_rows') }}
    {% endif %}
{% endblock oro_sales_lead_address_widget %}

{% block oro_sales_lead_address_rows %}
    {{ form_row(form.id) }}
    {{ form_row(form.primary, {label: 'oro.sales.leadaddress.primary.label'}) }}
    {{ form_row(form.label, {label: 'oro.sales.leadaddress.label.label'}) }}
    {{ form_row(form.namePrefix, {label: 'oro.sales.leadaddress.name_prefix.label'}) }}
    {{ form_row(form.firstName, {label: 'oro.sales.leadaddress.first_name.label'}) }}
    {{ form_row(form.middleName, {label: 'oro.sales.leadaddress.middle_name.label'}) }}
    {{ form_row(form.lastName, {label: 'oro.sales.leadaddress.last_name.label'}) }}
    {{ form_row(form.nameSuffix, {label: 'oro.sales.leadaddress.name_suffix.label'}) }}
    {{ form_row(form.organization, {label: 'oro.sales.leadaddress.organization.label'}) }}
    {{ form_row(form.country, {label: 'oro.sales.leadaddress.country.label'}) }}
    {{ form_row(form.street, {label: 'oro.sales.leadaddress.street.label'}) }}
    {{ form_row(form.street2, {label: 'oro.sales.leadaddress.street2.label'}) }}
    {{ form_row(form.city, {label: 'oro.sales.leadaddress.city.label'}) }}
    {{ form_row(form.region_text, {label: 'oro.sales.leadaddress.region_text.label'}) }}
    {{ form_row(form.region, {label: 'oro.sales.leadaddress.region.label'}) }}
    {{ form_row(form.postalCode, {label: 'oro.sales.leadaddress.postal_code.label'}) }}
    {{ form_rest(form) }}
{%  endblock %}

{% block _oro_sales_lead_form_address_collection_widget %}
    {% import _self as fields %}

    {{ block('oro_address_collection_widget') }}
    {% set id = id ~ '_collection' %}
    {{ fields.oro_adddress_collection_prefill_names(_context) }}
{% endblock %}

{% macro oro_adddress_collection_prefill_names(context) %}
    {% if context.form.parent is defined %}
        {% set parentId = context.form.parent.vars.id %}
        {% set parentName = context.form.parent.vars.full_name %}
        <script>
            loadModules(['jquery'],
            function(\$){
                \$(function() {
                    var container = \$('#{{ context.id }}');
                    var parentContainer = \$('#{{ parentId }}');
                    var nameFields = ['firstName', 'lastName', 'namePrefix', 'middleName', 'nameSuffix'];
                    container.on('content:changed', function() {
                        nameFields.forEach(function (field, index) {
                            container.find('[name\$=\"[' + field +']\"]').each(function (idx, el) {
                                if (!\$(el).val()) {
                                    \$(el).val(parentContainer.find('[name\$=\"{{ parentName }}[' + field +']\"]').val());
                                }
                            });
                        })
                    })
                });
            });
        </script>
    {% endif %}
{% endmacro %}

{% block oro_sales_customer_widget %}
    {% if not hasGridData and not createCustomersData %}
        {{ form_widget(form) }}
    {% else %}
        <div id=\"{{ id }}-el\"
             {% if createCustomersData|length %}class=\"entity-create-or-select-container entity-create-multi-enabled\"{% endif %}
             data-page-component-module=\"orosales/js/app/components/customer-component\"
             data-page-component-options=\"{{ {
                 inputSelector: '#'~id,
                 customerSelector: '.dropdown-menu li',
             }|json_encode }}\">
            <div class=\"input-append\">
                {{ form_widget(form) }}
                {% if hasGridData %}
                    {% import '@OroUI/macros.html.twig' as UI %}
                    {{ UI.clientLink({
                        'dataUrl': path(
                        'oro_sales_customer_grid_dialog', {
                            entityClass: parentClass,
                        }),
                        'aCss': 'btn btn-icon btn-square-default entity-select-btn',
                        'iCss': 'fa-bars',
                        'dataAttributes': { 'purpose': 'open-dialog-widget'},
                        'widget' : {
                            'type' : 'dialog',
                            'multiple' : true,
                            'options' : {
                                'alias': 'customer-dialog',
                                'dialogOptions' : {
                                    'title' : label|trans({}, translation_domain),
                                    'allowMaximize': true,
                                    'allowMinimize': true,
                                    'modal': true,
                                    'dblclick': 'maximize',
                                    'maximizedHeightDecreaseBy': 'minimize-bar',
                                    'width': 1000,
                                    'height': 600
                                }
                            }
                        }
                    }) }}
                {% endif %}
                {% if createCustomersData|length %}
                    {% set togglerId = 'dropdown-'|uniqid %}
                    <div class=\"dropdown btn-group entity-create-dropdown\">
                        <button id=\"{{ togglerId }}\" type=\"button\" data-toggle=\"dropdown\"
                                class=\"dropdown-toggle btn btn-icon btn-square-default entity-create-btn\"
                                aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"fa-plus\" aria-hidden=\"true\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"{{ togglerId }}\">
                            {% for customer in createCustomersData %}
                                <li>
                                    <button type=\"button\" data-customer=\"{{ customer|json_encode }}\">
                                        <span class=\"{{ customer.icon }}\" aria-hidden=\"true\"></span>
                                        {{ customer.label|trans }}
                                    </button>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                {% endif %}
            </div>
        </div>
    {% endif %}
{% endblock %}
", "@OroSales/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/SalesBundle/Resources/views/Form/fields.html.twig");
    }
}
