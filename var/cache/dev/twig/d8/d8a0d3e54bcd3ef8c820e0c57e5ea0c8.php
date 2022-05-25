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

/* @OroPlatform/Icon/white_logo.svg */
class __TwigTemplate_f132befc93335d32ef95b9522f4366af extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroPlatform/Icon/white_logo.svg", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroPlatform/Icon/white_logo.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroPlatform/Icon/white_logo.svg"));

        // line 1
        echo "<svg id=\"oro-platform-icon\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 94.56 94.5\">
    <defs>
        <style>.cls-1, .cls-2, .cls-3, .cls-4 {
            fill: #fff;
            }
        </style>
    </defs>
    <title>orocrm_icon</title>
    <path class=\"cls-1\"
          d=\"M270.65,433.66l38.56-37.81a10.5,10.5,0,0,1,14.85.15h0l-17.5-17.85a10.5,10.5,0,0,0-14.85-.15h0l-38.56,37.81a10.5,10.5,0,0,0-.15,14.85h0l17.5,17.85a10.5,10.5,0,0,1,.15-14.85Z\"
          transform=\"translate(-250 -375)\"/>
    <path class=\"cls-2\"
          d=\"M285.35,448.65l38.56-37.81a10.5,10.5,0,0,0,.15-14.85h0l17.5,17.85a10.5,10.5,0,0,1-.15,14.85h0L302.85,466.5a10.5,10.5,0,0,1-14.85-.15h0L270.5,448.5a10.5,10.5,0,0,0,14.85.15Z\"
          transform=\"translate(-250 -375)\"/>
    <path class=\"cls-3\"
          d=\"M341.56,413.85,324.06,396a10.5,10.5,0,0,1-.15,14.85h0l-1.07,1L333,422.2a10.5,10.5,0,0,1-.15,14.85h0l8.57-8.4A10.5,10.5,0,0,0,341.56,413.85Z\"
          transform=\"translate(-250 -375)\"/>
    <path class=\"cls-4\"
          d=\"M298,386.55l10.15,10.35,1.07-1a10.5,10.5,0,0,1,14.85.15h0l-17.5-17.85A10.5,10.5,0,0,0,291.7,378h0l-1.07,1Z\"
          transform=\"translate(-250 -375)\"/>
</svg>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroPlatform/Icon/white_logo.svg";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg id=\"oro-platform-icon\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 94.56 94.5\">
    <defs>
        <style>.cls-1, .cls-2, .cls-3, .cls-4 {
            fill: #fff;
            }
        </style>
    </defs>
    <title>orocrm_icon</title>
    <path class=\"cls-1\"
          d=\"M270.65,433.66l38.56-37.81a10.5,10.5,0,0,1,14.85.15h0l-17.5-17.85a10.5,10.5,0,0,0-14.85-.15h0l-38.56,37.81a10.5,10.5,0,0,0-.15,14.85h0l17.5,17.85a10.5,10.5,0,0,1,.15-14.85Z\"
          transform=\"translate(-250 -375)\"/>
    <path class=\"cls-2\"
          d=\"M285.35,448.65l38.56-37.81a10.5,10.5,0,0,0,.15-14.85h0l17.5,17.85a10.5,10.5,0,0,1-.15,14.85h0L302.85,466.5a10.5,10.5,0,0,1-14.85-.15h0L270.5,448.5a10.5,10.5,0,0,0,14.85.15Z\"
          transform=\"translate(-250 -375)\"/>
    <path class=\"cls-3\"
          d=\"M341.56,413.85,324.06,396a10.5,10.5,0,0,1-.15,14.85h0l-1.07,1L333,422.2a10.5,10.5,0,0,1-.15,14.85h0l8.57-8.4A10.5,10.5,0,0,0,341.56,413.85Z\"
          transform=\"translate(-250 -375)\"/>
    <path class=\"cls-4\"
          d=\"M298,386.55l10.15,10.35,1.07-1a10.5,10.5,0,0,1,14.85.15h0l-17.5-17.85A10.5,10.5,0,0,0,291.7,378h0l-1.07,1Z\"
          transform=\"translate(-250 -375)\"/>
</svg>
", "@OroPlatform/Icon/white_logo.svg", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/PlatformBundle/Resources/views/Icon/white_logo.svg");
    }
}
