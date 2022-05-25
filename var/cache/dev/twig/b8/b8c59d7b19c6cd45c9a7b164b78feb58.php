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

/* @OroLayout/Collector/layout-icon.svg */
class __TwigTemplate_0beb066bbc6957864f4616118811c12a extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroLayout/Collector/layout-icon.svg", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroLayout/Collector/layout-icon.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroLayout/Collector/layout-icon.svg"));

        // line 1
        echo "<svg id=\"oro-layout-icon\" viewBox=\"0 -1 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
     xmlns:xlink=\"http://www.w3.org/1999/xlink\">
    <path transform=\"translate(-15.000000, -537.000000)\" fill=\"#FFFFFF\"
          d=\"M17,537 L35,537 C36.1045695,537 37,537.895431 37,539 C37,540.104569 36.1045695,541 35,541 L17,541 C15.8954305,541 15,540.104569 15,539 C15,537.895431 15.8954305,537 17,537 Z M17,544 L22,544 C23.1045695,544 24,544.895431 24,546 L24,557 C24,558.104569 23.1045695,559 22,559 L17,559 C15.8954305,559 15,558.104569 15,557 L15,546 C15,544.895431 15.8954305,544 17,544 Z M28,544 L36,544 C36.5522847,544 37,544.447715 37,545 C37,545.552285 36.5522847,546 36,546 L28,546 C27.4477153,546 27,545.552285 27,545 C27,544.447715 27.4477153,544 28,544 Z M28,553 L36,553 C36.5522847,553 37,553.447715 37,554 C37,554.552285 36.5522847,555 36,555 L28,555 C27.4477153,555 27,554.552285 27,554 C27,553.447715 27.4477153,553 28,553 Z M28,548 L33,548 C33.5522847,548 34,548.447715 34,549 C34,549.552285 33.5522847,550 33,550 L28,550 C27.4477153,550 27,549.552285 27,549 C27,548.447715 27.4477153,548 28,548 Z M28,557 L33,557 C33.5522847,557 34,557.447715 34,558 C34,558.552285 33.5522847,559 33,559 L28,559 C27.4477153,559 27,558.552285 27,558 C27,557.447715 27.4477153,557 28,557 Z\"></path>
</svg>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroLayout/Collector/layout-icon.svg";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg id=\"oro-layout-icon\" viewBox=\"0 -1 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
     xmlns:xlink=\"http://www.w3.org/1999/xlink\">
    <path transform=\"translate(-15.000000, -537.000000)\" fill=\"#FFFFFF\"
          d=\"M17,537 L35,537 C36.1045695,537 37,537.895431 37,539 C37,540.104569 36.1045695,541 35,541 L17,541 C15.8954305,541 15,540.104569 15,539 C15,537.895431 15.8954305,537 17,537 Z M17,544 L22,544 C23.1045695,544 24,544.895431 24,546 L24,557 C24,558.104569 23.1045695,559 22,559 L17,559 C15.8954305,559 15,558.104569 15,557 L15,546 C15,544.895431 15.8954305,544 17,544 Z M28,544 L36,544 C36.5522847,544 37,544.447715 37,545 C37,545.552285 36.5522847,546 36,546 L28,546 C27.4477153,546 27,545.552285 27,545 C27,544.447715 27.4477153,544 28,544 Z M28,553 L36,553 C36.5522847,553 37,553.447715 37,554 C37,554.552285 36.5522847,555 36,555 L28,555 C27.4477153,555 27,554.552285 27,554 C27,553.447715 27.4477153,553 28,553 Z M28,548 L33,548 C33.5522847,548 34,548.447715 34,549 C34,549.552285 33.5522847,550 33,550 L28,550 C27.4477153,550 27,549.552285 27,549 C27,548.447715 27.4477153,548 28,548 Z M28,557 L33,557 C33.5522847,557 34,557.447715 34,558 C34,558.552285 33.5522847,559 33,559 L28,559 C27.4477153,559 27,558.552285 27,558 C27,557.447715 27.4477153,557 28,557 Z\"></path>
</svg>
", "@OroLayout/Collector/layout-icon.svg", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Collector/layout-icon.svg");
    }
}
