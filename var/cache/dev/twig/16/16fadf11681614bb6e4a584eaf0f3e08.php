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

/* @OroWorkflow/WorkflowDefinition/widget/activateForm.html.twig */
class __TwigTemplate_fff54e5051be871c06a7d8fd87c3bed1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/WorkflowDefinition/widget/activateForm.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/WorkflowDefinition/widget/activateForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/WorkflowDefinition/widget/activateForm.html.twig"));

        // line 1
        echo "<div class=\"widget-content\"
     data-page-component-module=\"oroworkflow/js/app/components/activate-form-widget-component\"
     data-page-component-options=\"";
        // line 3
        echo twig_escape_filter($this->env, json_encode(["_wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "get", [0 => "_wid"], "method", false, false, false, 4), "success" =>         // line 5
array_key_exists("savedId", $context), "deactivated" => ((        // line 6
array_key_exists("deactivated", $context)) ? (twig_join_filter((isset($context["deactivated"]) || array_key_exists("deactivated", $context) ? $context["deactivated"] : (function () { throw new RuntimeError('Variable "deactivated" does not exist.', 6, $this->source); })()), ", ")) : (null)), "selectors" => ["form" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7))], "error" => ((        // line 8
array_key_exists("error", $context)) ? ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })())) : (null))]), "html", null, true);
        // line 9
        echo "\">

     ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'row');
        echo "
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroWorkflow/WorkflowDefinition/widget/activateForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  57 => 9,  55 => 8,  54 => 7,  53 => 6,  52 => 5,  51 => 4,  50 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget-content\"
     data-page-component-module=\"oroworkflow/js/app/components/activate-form-widget-component\"
     data-page-component-options=\"{{ {
         '_wid': app.request.get('_wid'),
         'success': savedId is defined,
         'deactivated': deactivated is defined ? deactivated|join(', ') : null,
         'selectors': {'form': '#' ~ form.vars.id},
         'error': error is defined ? error : null
     }|json_encode }}\">

     {{ form_row(form) }}
</div>
", "@OroWorkflow/WorkflowDefinition/widget/activateForm.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/WorkflowDefinition/widget/activateForm.html.twig");
    }
}
