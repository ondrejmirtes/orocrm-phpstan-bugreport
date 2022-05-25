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

/* @OroUser/User/widget/apiKeyGen.html.twig */
class __TwigTemplate_2cd5626f0f2f4366a9aba71a799d1f56 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/User/widget/apiKeyGen.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/User/widget/apiKeyGen.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/User/widget/apiKeyGen.html.twig"));

        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/User/widget/apiKeyGen.html.twig", 1)->unwrap();
        // line 2
        $context["userId"] = twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2);
        // line 3
        $context["formId"] = ("user-apikey-gen-form-" . (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 3, $this->source); })()));
        // line 4
        $context["apiKeyElementId"] = ("user-apikey-gen-elem-" . (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 4, $this->source); })()));
        // line 5
        $context["options"] = ["view" => "orouser/js/views/user-apikey-gen-view", "apiKeyElementSelector" => ("#" .         // line 7
(isset($context["apiKeyElementId"]) || array_key_exists("apiKeyElementId", $context) ? $context["apiKeyElementId"] : (function () { throw new RuntimeError('Variable "apiKeyElementId" does not exist.', 7, $this->source); })())), "formSelector" => ("#" .         // line 8
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 8, $this->source); })())), "responseMessage" => "oro.user.apikey_gen.new_key.success"];
        // line 11
        $context["apiKeyHTML"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(        // line 12
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'row', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_apigen", ["id" =>         // line 15
(isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 15, $this->source); })())]), "attr" => ["id" =>         // line 16
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 16, $this->source); })())], "apiKeyElementId" =>         // line 17
(isset($context["apiKeyElementId"]) || array_key_exists("apiKeyElementId", $context) ? $context["apiKeyElementId"] : (function () { throw new RuntimeError('Variable "apiKeyElementId" does not exist.', 17, $this->source); })())]);
        // line 20
        $context["attributeOptions"] = ["rootClass" => "api-block", "tooltipHTML" => twig_call_macro($macros["ui"], "macro_tooltip", ["oro.user.api.tooltip_text", [], "bottom"], 22, $context, $this->getSourceContext())];
        // line 24
        echo "<div data-nohash=\"true\"
     data-page-component-module=\"oroui/js/app/components/view-component\"
     data-page-component-options=\"";
        // line 26
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 26, $this->source); })())), "html", null, true);
        echo "\"
     data-layout=\"separate\">
    ";
        // line 28
        echo twig_call_macro($macros["ui"], "macro_renderAttribute", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.api.label"), (isset($context["apiKeyHTML"]) || array_key_exists("apiKeyHTML", $context) ? $context["apiKeyHTML"] : (function () { throw new RuntimeError('Variable "apiKeyHTML" does not exist.', 28, $this->source); })()), (isset($context["attributeOptions"]) || array_key_exists("attributeOptions", $context) ? $context["attributeOptions"] : (function () { throw new RuntimeError('Variable "attributeOptions" does not exist.', 28, $this->source); })())], 28, $context, $this->getSourceContext());
        echo "
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroUser/User/widget/apiKeyGen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  70 => 26,  66 => 24,  64 => 20,  62 => 17,  61 => 16,  60 => 15,  59 => 12,  58 => 11,  56 => 8,  55 => 7,  54 => 5,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as ui %}
{% set userId = user.id %}
{% set formId = 'user-apikey-gen-form-' ~ userId %}
{% set apiKeyElementId = 'user-apikey-gen-elem-' ~ userId %}
{% set options  = {
    'view': 'orouser/js/views/user-apikey-gen-view',
    'apiKeyElementSelector': '#' ~ apiKeyElementId,
    'formSelector': '#' ~ formId,
    'responseMessage': 'oro.user.apikey_gen.new_key.success'
} %}
{% set apiKeyHTML = form_row(
    form,
    {
        method: 'POST',
        action: path('oro_user_apigen', {'id': userId}),
        attr: {'id': formId},
        apiKeyElementId: apiKeyElementId
    }
) %}
{% set attributeOptions = {
    rootClass: 'api-block',
    tooltipHTML: ui.tooltip('oro.user.api.tooltip_text', {}, 'bottom'),
} %}
<div data-nohash=\"true\"
     data-page-component-module=\"oroui/js/app/components/view-component\"
     data-page-component-options=\"{{ options|json_encode }}\"
     data-layout=\"separate\">
    {{ ui.renderAttribute('oro.user.api.label'|trans, apiKeyHTML, attributeOptions) }}
</div>
", "@OroUser/User/widget/apiKeyGen.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/User/widget/apiKeyGen.html.twig");
    }
}
