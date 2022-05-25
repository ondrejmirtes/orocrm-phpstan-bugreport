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

/* @OroApi/ApiDoc/warning.svg */
class __TwigTemplate_22a6f86ccc0134f3ae57d52dc4350845 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroApi/ApiDoc/warning.svg", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroApi/ApiDoc/warning.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroApi/ApiDoc/warning.svg"));

        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 32\" width=\"24px\" height=\"24px\"><g fill=\"none\" fill-rule=\"evenodd\" stroke=\"none\" stroke-width=\"1\"><g fill=\"#000000\"><path d=\"M15.4242327,5.14839275 C16.2942987,3.74072976 17.707028,3.74408442 18.5750205,5.14839275 L29.3601099,22.59738 C30.5216388,24.4765951 29.6755462,26 27.4714068,26 L6.5278464,26 C4.32321557,26 3.47386317,24.4826642 4.63914331,22.59738 L15.4242327,5.14839275 L15.4242327,5.14839275 Z M16.353181,5.5229211 C16.7005152,4.96165163 17.2647678,4.9634187 17.6110318,5.52292108 L28.6162937,23.3055078 C29.1954663,24.2413498 28.7622271,24.9999996 27.6746349,24.9999996 L6.29039231,25 C5.19115596,25 4.76644971,24.2463265 5.34866262,23.3055082 L16.353181,5.5229211 L16.353181,5.5229211 Z M17,11 C16.4477153,11 16,11.4530363 16,11.9970301 L16,18.0029699 C16,18.5536144 16.4438648,19 17,19 C17.5522847,19 18,18.5469637 18,18.0029699 L18,11.9970301 C18,11.4463856 17.5561352,11 17,11 L17,11 Z M17,23 C17.5522848,23 18,22.5522848 18,22 C18,21.4477152 17.5522848,21 17,21 C16.4477152,21 16,21.4477152 16,22 C16,22.5522848 16.4477152,23 17,23 L17,23 Z\" id=\"warning\"/></g></g></svg>";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroApi/ApiDoc/warning.svg";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 32\" width=\"24px\" height=\"24px\"><g fill=\"none\" fill-rule=\"evenodd\" stroke=\"none\" stroke-width=\"1\"><g fill=\"#000000\"><path d=\"M15.4242327,5.14839275 C16.2942987,3.74072976 17.707028,3.74408442 18.5750205,5.14839275 L29.3601099,22.59738 C30.5216388,24.4765951 29.6755462,26 27.4714068,26 L6.5278464,26 C4.32321557,26 3.47386317,24.4826642 4.63914331,22.59738 L15.4242327,5.14839275 L15.4242327,5.14839275 Z M16.353181,5.5229211 C16.7005152,4.96165163 17.2647678,4.9634187 17.6110318,5.52292108 L28.6162937,23.3055078 C29.1954663,24.2413498 28.7622271,24.9999996 27.6746349,24.9999996 L6.29039231,25 C5.19115596,25 4.76644971,24.2463265 5.34866262,23.3055082 L16.353181,5.5229211 L16.353181,5.5229211 Z M17,11 C16.4477153,11 16,11.4530363 16,11.9970301 L16,18.0029699 C16,18.5536144 16.4438648,19 17,19 C17.5522847,19 18,18.5469637 18,18.0029699 L18,11.9970301 C18,11.4463856 17.5561352,11 17,11 L17,11 Z M17,23 C17.5522848,23 18,22.5522848 18,22 C18,21.4477152 17.5522848,21 17,21 C16.4477152,21 16,21.4477152 16,22 C16,22.5522848 16.4477152,23 17,23 L17,23 Z\" id=\"warning\"/></g></g></svg>", "@OroApi/ApiDoc/warning.svg", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ApiBundle/Resources/views/ApiDoc/warning.svg");
    }
}
