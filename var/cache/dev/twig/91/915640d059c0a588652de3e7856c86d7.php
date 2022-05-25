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

/* @OroTwigInspector/assets/src/style.css */
class __TwigTemplate_73b75aba153ea14a73481f6939f41627 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTwigInspector/assets/src/style.css", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTwigInspector/assets/src/style.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTwigInspector/assets/src/style.css"));

        // line 1
        echo "#_twig_inspector__icon .sf-toolbar-icon {
    padding: 0 7px;
}

#_twig_inspector__icon {
    cursor: pointer;
}

#_twig_inspector__icon .icon {
    font-size: 20px;
    line-height: 36px;
}

#_twig_inspector__status {
    margin-right: 5px;
}

._twig_inspector__visible {
    display: flex !important;
}

#_twig_inspector__overlay__block {
    position: absolute;
    display: none;
    background-color: blue;
    opacity: 0.3;
    z-index: 1000001;
    height: 40px;
    cursor: pointer;
}

#_twig_inspector__overlay__block._twig_inspector__overlay__block_static {
    color: #0a0a0a;
    opacity: 1;
    background: #fffac9;
    /*width: 300px !important;*/
    /*height: 50px !important;*/
    /*overflow: hidden;*/
    border: 1px solid #7f94a1;
    width: auto !important;
    height: auto !important;
    padding: 5px 10px;
    cursor: auto;
    display: block !important;
}

._twig_inspector__overlay__block_static > div {
    cursor: pointer;
    display: block;
    clear: both;
    float: left;
    color: #0000EE;
}

._twig_inspector__overlay__block_static > div:hover {
    color: #551A8B;
    text-decoration: underline;
}

#_twig_inspector__overlay__info {
    display: none;
    position: absolute;
    justify-content: center;
    margin: 0;
    font-size: 12px;
    min-width: 12px;
    line-height: 16px;
    color: #0a0a0a;
    z-index: 1000000;
    padding: 0 5px;
    background: #fffac9;
    border: 1px solid #7f94a1;
}

#_twig_inspector__icon:hover .sf-toolbar-icon {
    background-color: transparent;
    cursor: pointer;
}
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroTwigInspector/assets/src/style.css";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#_twig_inspector__icon .sf-toolbar-icon {
    padding: 0 7px;
}

#_twig_inspector__icon {
    cursor: pointer;
}

#_twig_inspector__icon .icon {
    font-size: 20px;
    line-height: 36px;
}

#_twig_inspector__status {
    margin-right: 5px;
}

._twig_inspector__visible {
    display: flex !important;
}

#_twig_inspector__overlay__block {
    position: absolute;
    display: none;
    background-color: blue;
    opacity: 0.3;
    z-index: 1000001;
    height: 40px;
    cursor: pointer;
}

#_twig_inspector__overlay__block._twig_inspector__overlay__block_static {
    color: #0a0a0a;
    opacity: 1;
    background: #fffac9;
    /*width: 300px !important;*/
    /*height: 50px !important;*/
    /*overflow: hidden;*/
    border: 1px solid #7f94a1;
    width: auto !important;
    height: auto !important;
    padding: 5px 10px;
    cursor: auto;
    display: block !important;
}

._twig_inspector__overlay__block_static > div {
    cursor: pointer;
    display: block;
    clear: both;
    float: left;
    color: #0000EE;
}

._twig_inspector__overlay__block_static > div:hover {
    color: #551A8B;
    text-decoration: underline;
}

#_twig_inspector__overlay__info {
    display: none;
    position: absolute;
    justify-content: center;
    margin: 0;
    font-size: 12px;
    min-width: 12px;
    line-height: 16px;
    color: #0a0a0a;
    z-index: 1000000;
    padding: 0 5px;
    background: #fffac9;
    border: 1px solid #7f94a1;
}

#_twig_inspector__icon:hover .sf-toolbar-icon {
    background-color: transparent;
    cursor: pointer;
}
", "@OroTwigInspector/assets/src/style.css", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/twig-inspector/Bundle/Resources/views/assets/src/style.css");
    }
}
