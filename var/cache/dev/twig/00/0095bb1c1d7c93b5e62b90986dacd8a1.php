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

/* @OroDashboard/Dashboard/launchpad.html.twig */
class __TwigTemplate_adde278c85885b5622c0a6142873caec extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDashboard/Dashboard/launchpad.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Dashboard/launchpad.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Dashboard/launchpad.html.twig"));

        // line 1
        if ((array_key_exists("widgetAcl", $context) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["widgetAcl"]) || array_key_exists("widgetAcl", $context) ? $context["widgetAcl"] : (function () { throw new RuntimeError('Variable "widgetAcl" does not exist.', 1, $this->source); })())))) {
            // line 2
            echo "    <div class=\"widget-content launchpad-widget-content";
            if ((array_key_exists("widgetClass", $context) && (isset($context["widgetClass"]) || array_key_exists("widgetClass", $context) ? $context["widgetClass"] : (function () { throw new RuntimeError('Variable "widgetClass" does not exist.', 2, $this->source); })()))) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["widgetClass"]) || array_key_exists("widgetClass", $context) ? $context["widgetClass"] : (function () { throw new RuntimeError('Variable "widgetClass" does not exist.', 2, $this->source); })()), "html", null, true);
                echo "-widget-content";
            }
            echo "\">
        <div class=\"launchpad-widget-content__title\"
            ";
            // line 4
            if (array_key_exists("item", $context)) {
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "label", [], "any", false, false, false, 4)), "html", null, true);
                echo "\" ";
            }
            echo ">
            ";
            // line 5
            if ((array_key_exists("widgetIcon", $context) && (isset($context["widgetIcon"]) || array_key_exists("widgetIcon", $context) ? $context["widgetIcon"] : (function () { throw new RuntimeError('Variable "widgetIcon" does not exist.', 5, $this->source); })()))) {
                // line 6
                echo "                <span class=\"fa-";
                echo twig_escape_filter($this->env, (isset($context["widgetIcon"]) || array_key_exists("widgetIcon", $context) ? $context["widgetIcon"] : (function () { throw new RuntimeError('Variable "widgetIcon" does not exist.', 6, $this->source); })()), "html", null, true);
                echo " launchpad-widget-content__icon\" aria-hidden=\"true\"></span>
            ";
            }
            // line 8
            echo "            <div class=\"launchpad-widget-content__label-wrapper\">
                <span class=\"launchpad-widget-content__label\">";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widgetLabel"]) || array_key_exists("widgetLabel", $context) ? $context["widgetLabel"] : (function () { throw new RuntimeError('Variable "widgetLabel" does not exist.', 9, $this->source); })())), "html", null, true);
            echo "</span>
            </div>
        </div>
        <ul class=\"launchpad-widget-content__list\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 14
                echo "                ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, $context["item"], "acl", [], "any", false, false, false, 14))) {
                    // line 15
                    echo "                    <li class=\"launchpad-widget-content__list-item\">
                        <a href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["item"], "route", [], "any", false, false, false, 16), ((twig_get_attribute($this->env, $this->source, $context["item"], "route_parameters", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "route_parameters", [], "any", false, false, false, 16), [])) : ([]))), "html", null, true);
                    echo "\"  class=\"launchpad-widget-content__link\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 16)), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                // line 19
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </ul>
    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroDashboard/Dashboard/launchpad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 20,  102 => 19,  94 => 16,  91 => 15,  88 => 14,  84 => 13,  77 => 9,  74 => 8,  68 => 6,  66 => 5,  58 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if widgetAcl is defined and is_granted(widgetAcl) %}
    <div class=\"widget-content launchpad-widget-content{% if widgetClass is defined and widgetClass %} {{ widgetClass }}-widget-content{% endif %}\">
        <div class=\"launchpad-widget-content__title\"
            {% if item is defined %} title=\"{{ item.label|trans }}\" {% endif %}>
            {% if widgetIcon is defined and widgetIcon %}
                <span class=\"fa-{{ widgetIcon }} launchpad-widget-content__icon\" aria-hidden=\"true\"></span>
            {% endif %}
            <div class=\"launchpad-widget-content__label-wrapper\">
                <span class=\"launchpad-widget-content__label\">{{ widgetLabel|trans }}</span>
            </div>
        </div>
        <ul class=\"launchpad-widget-content__list\">
            {% for item in items %}
                {% if is_granted(item.acl) %}
                    <li class=\"launchpad-widget-content__list-item\">
                        <a href=\"{{ path(item.route, item.route_parameters|default({})) }}\"  class=\"launchpad-widget-content__link\">{{ item.label|trans }}</a>
                    </li>
                {% endif %}
            {% endfor %}
        </ul>
    </div>
{% endif %}
", "@OroDashboard/Dashboard/launchpad.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Dashboard/launchpad.html.twig");
    }
}
