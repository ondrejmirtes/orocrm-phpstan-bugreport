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

/* @OroUI/Default/navbar/sided.html.twig */
class __TwigTemplate_e851f257e4c77a9e6cede29c8b20c507 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("@OroUI/Default/navbar/blocks.html.twig", "@OroUI/Default/navbar/sided.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@OroUI/Default/navbar/blocks.html.twig".'" cannot be used as a trait.', 2, $this->source);
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/Default/navbar/sided.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/Default/navbar/sided.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/Default/navbar/sided.html.twig"));

        // line 1
        if (($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop() && ($this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_ui.navbar_position") == "left"))) {
            // line 2
            echo "    ";
            // line 3
            echo "    ";
            $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/Default/navbar/sided.html.twig", 3)->unwrap();
            // line 4
            echo "
    <div id=\"side-menu\" class=\"main-menu-sided minimized\"
        ";
            // line 6
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/jquery-widget-component", "options" => ["widgetModule" => "oroui/js/desktop/side-menu", "toggleSelector" => "#main-menu-toggler"]]], 6, $context, $this->getSourceContext());
            // line 12
            echo ">
        <header class=\"main-menu__header\">
            ";
            // line 14
            ob_start();
            // line 15
            echo "                ";
            ob_start();
            // line 16
            echo "                    ";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("organization_name", $context)) ? (_twig_default_filter((isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 16, $this->source); })()), "organization_name")) : ("organization_name")), array());
            // line 17
            echo "                ";
            $___internal_parse_22_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 15
            echo twig_spaceless($___internal_parse_22_);
            // line 18
            echo "            ";
            $context["organization_name"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 19
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_app_logo", [(isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 19, $this->source); })())], 19, $context, $this->getSourceContext());
            echo "
        </header>

        <nav class=\"scroller\" id=\"main-menu\"
                ";
            // line 23
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroui/js/app/views/page/main-menu-view"]], 23, $context, $this->getSourceContext());
            echo ">
            ";
            // line 24
            $this->displayBlock("application_menu", $context, $blocks);
            echo "
        </nav>

        <button id=\"main-menu-toggler\" class=\"main-menu-toggler\" aria-label=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.navbar.toggler_label"), "html", null, true);
            echo "\"></button>
    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroUI/Default/navbar/sided.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  103 => 24,  99 => 23,  91 => 19,  88 => 18,  86 => 15,  83 => 17,  80 => 16,  77 => 15,  75 => 14,  71 => 12,  69 => 6,  65 => 4,  62 => 3,  60 => 2,  58 => 1,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% if isDesktopVersion() and oro_config_value('oro_ui.navbar_position') == 'left' %}
    {% use '@OroUI/Default/navbar/blocks.html.twig' %}
    {% import '@OroUI/macros.html.twig' as UI %}

    <div id=\"side-menu\" class=\"main-menu-sided minimized\"
        {{ UI.renderPageComponentAttributes({
            module: 'oroui/js/app/components/jquery-widget-component',
            options: {
                widgetModule: 'oroui/js/desktop/side-menu',
                toggleSelector: '#main-menu-toggler'
            }
        }) }}>
        <header class=\"main-menu__header\">
            {% set organization_name %}
                {% apply spaceless %}
                    {% placeholder organization_name %}
                {% endapply %}
            {% endset %}
            {{ UI.app_logo(organization_name) }}
        </header>

        <nav class=\"scroller\" id=\"main-menu\"
                {{ UI.renderPageComponentAttributes({view: 'oroui/js/app/views/page/main-menu-view'}) }}>
            {{ block('application_menu') }}
        </nav>

        <button id=\"main-menu-toggler\" class=\"main-menu-toggler\" aria-label=\"{{ 'oro.ui.navbar.toggler_label'|trans }}\"></button>
    </div>
{% endif %}
", "@OroUI/Default/navbar/sided.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/Default/navbar/sided.html.twig");
    }
}
