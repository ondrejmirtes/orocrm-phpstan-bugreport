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

/* @OroPlatform/have_request.html.twig */
class __TwigTemplate_3fc2bda5816cb1ff0a2bbb10892a32d1 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroPlatform/have_request.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroPlatform/have_request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroPlatform/have_request.html.twig"));

        // line 1
        echo "<script>
    loadModules(['jquery', 'oroui/js/error'], function (\$, error) {
        \$(function () {
            var options = {
                dataType: 'script',
                cache:     true,
                url:       '";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), (twig_constant("Oro\\Bundle\\PlatformBundle\\Form\\UrlGenerator::URL") . twig_constant("Oro\\Bundle\\PlatformBundle\\Form\\UrlGenerator::FORM_JS")))) : ((twig_constant("Oro\\Bundle\\PlatformBundle\\Form\\UrlGenerator::URL") . twig_constant("Oro\\Bundle\\PlatformBundle\\Form\\UrlGenerator::FORM_JS")))), "html", null, true);
        echo "',
                timeout:   2000,
                errorHandlerMessage: false
            };

            \$.ajax(options).then(function() {
                new ORO.EmbedRequestForm(options);
            }, function() {
                error.showErrorInConsole('Unable to load external script.');
            });
        });
    });
</script>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroPlatform/have_request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    loadModules(['jquery', 'oroui/js/error'], function (\$, error) {
        \$(function () {
            var options = {
                dataType: 'script',
                cache:     true,
                url:       '{{ data|default(constant('Oro\\\\Bundle\\\\PlatformBundle\\\\Form\\\\UrlGenerator::URL') ~ constant('Oro\\\\Bundle\\\\PlatformBundle\\\\Form\\\\UrlGenerator::FORM_JS')) }}',
                timeout:   2000,
                errorHandlerMessage: false
            };

            \$.ajax(options).then(function() {
                new ORO.EmbedRequestForm(options);
            }, function() {
                error.showErrorInConsole('Unable to load external script.');
            });
        });
    });
</script>
", "@OroPlatform/have_request.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/PlatformBundle/Resources/views/have_request.html.twig");
    }
}
