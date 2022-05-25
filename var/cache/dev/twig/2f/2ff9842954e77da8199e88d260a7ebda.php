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

/* @OroNavigation/Menu/shortcuts.html.twig */
class __TwigTemplate_7cf0f3ec21b9c03c0735113442b750d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'list' => [$this, 'block_list'],
            'item' => [$this, 'block_item'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroNavigation/Menu/menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/Menu/shortcuts.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/shortcuts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/shortcuts.html.twig"));

        $this->parent = $this->loadTemplate("@OroNavigation/Menu/menu.html.twig", "@OroNavigation/Menu/shortcuts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("list", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 4
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/Menu/shortcuts.html.twig", 4)->unwrap();
        // line 5
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "hasChildren", [], "any", false, false, false, 5) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 5, $this->source); })()), "depth", [], "any", false, false, false, 5) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "displayChildren", [], "any", false, false, false, 5))) {
            // line 6
            echo "            ";
            $context["togglerId"] = uniqid("dropdown-");
            // line 7
            echo "            <div class=\"dropdown header-dropdown-shortcut\" data-layout=\"separate\"
                ";
            // line 8
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oronavigation/js/app/views/shortcuts-view"]], 8, $context, $this->getSourceContext());
            echo ">
                <button class=\"dropdown-toggle dropdown-toggle--no-caret\" data-toggle=\"dropdown\" id=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\"
                    aria-haspopup=\"true\" aria-expanded=\"false\" aria-label=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.shortcuts.title"), "html", null, true);
            echo "\"
                    title=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.shortcuts.title"), "html", null, true);
            echo "\"
                    data-prevent-close-on-menu-click=\"true\">
                    <span class=\"fa-share-square\" aria-hidden=\"true\"></span>
                </button>
                <ul class=\"dropdown-menu\" aria-labelledby=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\">
                    <li class=\"nav-header nav-header-title\">";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.shortcuts.title"), "html", null, true);
            echo "
                    ";
            // line 17
            if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
                // line 18
                echo "                        <button class=\"btn-link btn-close fa-close hide-text\" data-role=\"close\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
                echo "</button>
                    ";
            }
            // line 20
            echo "                    </li>
                    <li class=\"nav-content\">
                        <form>
                            <input type=\"text\"
                                   class=\"header-dropdown-shortcut__search\"
                                   placeholder=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.shortcuts.placeholder"), "html", null, true);
            echo "\"
                                   data-source-url=";
            // line 26
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 26, $this->source); })()), "source", [], "any", false, false, false, 26));
            echo "
                                   data-role=\"shortcut-search\"
                                   data-clearable
                                   data-placeholder-icon=\"fa-search\"
                                   data-entity-class=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), true), "html", null, true);
            echo "\"
                                   data-entity-id=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\"
                            >
                            <div class=\"clearfix\">
                                <div class=\"extra-small\">";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.shortcuts.example"), "html", null, true);
            echo "
                                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 35, $this->source); })()), "details", [], "any", false, false, false, 35), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.shortcuts.see_all"), "html", null, true);
            echo "</a>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li class=\"nav-header\">";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.navigation.shortcuts.most_used"), "html", null, true);
            echo "</li>
                    ";
            // line 41
            $this->displayBlock("children", $context, $blocks);
            echo "
                </ul>
            </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 47
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("item", $this->getTemplateName(), 47));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        // line 48
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 48), "is_custom_action", [], "any", true, true, false, 48)) {
            // line 49
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 49, $this->source); })()), [0 => "dropdown-item"]);
            // line 50
            echo "        ";
            $this->displayBlock("item_renderer", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/Menu/shortcuts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 50,  205 => 49,  202 => 48,  189 => 47,  171 => 41,  167 => 40,  157 => 35,  153 => 34,  147 => 31,  143 => 30,  136 => 26,  132 => 25,  125 => 20,  119 => 18,  117 => 17,  113 => 16,  109 => 15,  102 => 11,  98 => 10,  94 => 9,  90 => 8,  87 => 7,  84 => 6,  81 => 5,  78 => 4,  65 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroNavigation/Menu/menu.html.twig' %}

{% block list %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
            {% set togglerId = 'dropdown-'|uniqid %}
            <div class=\"dropdown header-dropdown-shortcut\" data-layout=\"separate\"
                {{ UI.renderPageComponentAttributes({view: 'oronavigation/js/app/views/shortcuts-view'}) }}>
                <button class=\"dropdown-toggle dropdown-toggle--no-caret\" data-toggle=\"dropdown\" id=\"{{ togglerId }}\"
                    aria-haspopup=\"true\" aria-expanded=\"false\" aria-label=\"{{ 'oro.navigation.shortcuts.title'|trans }}\"
                    title=\"{{ 'oro.navigation.shortcuts.title'|trans }}\"
                    data-prevent-close-on-menu-click=\"true\">
                    <span class=\"fa-share-square\" aria-hidden=\"true\"></span>
                </button>
                <ul class=\"dropdown-menu\" aria-labelledby=\"{{ togglerId }}\">
                    <li class=\"nav-header nav-header-title\">{{ 'oro.navigation.shortcuts.title'|trans }}
                    {% if isMobileVersion() %}
                        <button class=\"btn-link btn-close fa-close hide-text\" data-role=\"close\">{{ 'Close'|trans }}</button>
                    {% endif %}
                    </li>
                    <li class=\"nav-content\">
                        <form>
                            <input type=\"text\"
                                   class=\"header-dropdown-shortcut__search\"
                                   placeholder=\"{{ 'oro.navigation.shortcuts.placeholder'|trans }}\"
                                   data-source-url={{ options.source|json_encode|raw }}
                                   data-role=\"shortcut-search\"
                                   data-clearable
                                   data-placeholder-icon=\"fa-search\"
                                   data-entity-class=\"{{ oro_class_name(app.user, true) }}\"
                                   data-entity-id=\"{{ app.user.id }}\"
                            >
                            <div class=\"clearfix\">
                                <div class=\"extra-small\">{{ 'oro.navigation.shortcuts.example'|trans }}
                                    <a href=\"{{ options.details }}\">{{ 'oro.navigation.shortcuts.see_all'|trans }}</a>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li class=\"nav-header\">{{ 'oro.navigation.shortcuts.most_used'|trans }}</li>
                    {{ block('children') }}
                </ul>
            </div>
    {% endif %}
{% endblock %}

{% block item %}
    {% if item.extras.is_custom_action is defined %}
        {%- set classes = classes|merge(['dropdown-item']) %}
        {{ block('item_renderer') }}
    {% endif %}
{% endblock %}
", "@OroNavigation/Menu/shortcuts.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/shortcuts.html.twig");
    }
}
