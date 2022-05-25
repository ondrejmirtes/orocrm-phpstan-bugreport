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

/* @OroUI/Default/navbar/top.html.twig */
class __TwigTemplate_bffd134a402d17a1241e2e41cf61ece9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 3
        $_trait_0 = $this->loadTemplate("@OroUI/Default/navbar/blocks.html.twig", "@OroUI/Default/navbar/top.html.twig", 3);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@OroUI/Default/navbar/blocks.html.twig".'" cannot be used as a trait.', 3, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/Default/navbar/top.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/Default/navbar/top.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/Default/navbar/top.html.twig"));

        // line 1
        if (($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile() || ($this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_ui.navbar_position") == "top"))) {
            // line 2
            $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/Default/navbar/top.html.twig", 2)->unwrap();
            // line 4
            echo "<nav id=\"main-menu\" class=\"main-menu-top\"
    ";
            // line 5
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroui/js/app/views/page/main-menu-view"]], 5, $context, $this->getSourceContext());
            echo ">
    ";
            // line 6
            $this->displayBlock("application_menu", $context, $blocks);
            echo "
</nav>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroUI/Default/navbar/top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 6,  65 => 5,  62 => 4,  60 => 2,  58 => 1,  30 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% if isMobileVersion() or oro_config_value('oro_ui.navbar_position') == 'top' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% use '@OroUI/Default/navbar/blocks.html.twig' %}
<nav id=\"main-menu\" class=\"main-menu-top\"
    {{ UI.renderPageComponentAttributes({view: 'oroui/js/app/views/page/main-menu-view'}) }}>
    {{ block('application_menu') }}
</nav>
{% endif %}
", "@OroUI/Default/navbar/top.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/Default/navbar/top.html.twig");
    }
}
