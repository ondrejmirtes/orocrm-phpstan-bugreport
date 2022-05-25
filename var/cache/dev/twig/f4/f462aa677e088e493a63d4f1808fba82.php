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

/* @OroNavigation/Shortcut/actionslist.html.twig */
class __TwigTemplate_ebd979621b922f93303853093d2671c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["bap"]) || array_key_exists("bap", $context) ? $context["bap"] : (function () { throw new RuntimeError('Variable "bap" does not exist.', 1, $this->source); })()), "layout", [], "any", false, false, false, 1), "@OroNavigation/Shortcut/actionslist.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/Shortcut/actionslist.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Shortcut/actionslist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Shortcut/actionslist.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/Shortcut/actionslist.html.twig", 2)->unwrap();
        // line 3
        $macros["Navigation"] = $this->macros["Navigation"] = $this->loadTemplate("@OroNavigation/macros.html.twig", "@OroNavigation/Shortcut/actionslist.html.twig", 3)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("title", $this->getTemplateName(), 5));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shortcut Actions List", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 6));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<div class=\"container-fluid\">
    <div class=\"clearfix\">
        <h3>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shortcut Actions List", [], "messages");
        echo "</h3>

        ";
        // line 11
        if ((twig_length_filter($this->env, (isset($context["actionsList"]) || array_key_exists("actionsList", $context) ? $context["actionsList"] : (function () { throw new RuntimeError('Variable "actionsList" does not exist.', 11, $this->source); })())) > 0)) {
            // line 12
            echo "            <table class=\"table table-bordered table-striped\">
                <thead>
                    <tr>
                        <th>";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action Name", [], "messages");
            echo "</th>
                        <th>";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "messages");
            echo "</th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actionsList"]) || array_key_exists("actionsList", $context) ? $context["actionsList"] : (function () { throw new RuntimeError('Variable "actionsList" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 21
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                        <tr>
                            ";
                    // line 23
                    if ((twig_get_attribute($this->env, $this->source, $context["action"], "dialog", [], "any", true, true, false, 23) && twig_get_attribute($this->env, $this->source, $context["action"], "dialog", [], "any", false, false, false, 23))) {
                        // line 24
                        echo "                                <td>
                                    ";
                        // line 25
                        echo twig_call_macro($macros["Navigation"], "macro_renderClientLink", [twig_get_attribute($this->env, $this->source, $context["action"], "dialog_config", [], "any", false, false, false, 25), ["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(twig_get_attribute($this->env, $this->source,                         // line 26
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), true), "entityId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 27
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]], 25, $context, $this->getSourceContext());
                        // line 28
                        echo "
                                </td>
                                <td>";
                        // line 30
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "description", [], "any", false, false, false, 30)), "html", null, true);
                        echo "</td>
                            ";
                    } else {
                        // line 32
                        echo "                                <td><a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 32), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 32)), "html", null, true);
                        echo "</a></td>
                                <td>";
                        // line 33
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "description", [], "any", false, false, false, 33)), "html", null, true);
                        echo "</td>
                            ";
                    }
                    // line 35
                    echo "
                        </tr>
                    ";
                }
                // line 38
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                </tbody>
            </table>
        ";
        } else {
            // line 42
            echo "            <h2>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sorry, you don't have any action", [], "messages");
            echo "</h2>
        ";
        }
        // line 44
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/Shortcut/actionslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 44,  190 => 42,  185 => 39,  179 => 38,  174 => 35,  169 => 33,  162 => 32,  157 => 30,  153 => 28,  151 => 27,  150 => 26,  149 => 25,  146 => 24,  144 => 23,  141 => 22,  138 => 21,  134 => 20,  127 => 16,  123 => 15,  118 => 12,  116 => 11,  111 => 9,  107 => 7,  94 => 6,  69 => 5,  56 => 1,  54 => 3,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends bap.layout %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroNavigation/macros.html.twig' as Navigation %}

{% block title %}{% trans %}Shortcut Actions List{% endtrans %}{% endblock %}
{% block content %}
<div class=\"container-fluid\">
    <div class=\"clearfix\">
        <h3>{% trans %}Shortcut Actions List{% endtrans %}</h3>

        {% if actionsList|length > 0 %}
            <table class=\"table table-bordered table-striped\">
                <thead>
                    <tr>
                        <th>{% trans %}Action Name{% endtrans %}</th>
                        <th>{% trans %}Description{% endtrans %}</th>
                    </tr>
                </thead>
                <tbody>
                {% for action in actionsList %}
                    {% if action.url %}
                        <tr>
                            {% if action.dialog is defined and action.dialog %}
                                <td>
                                    {{ Navigation.renderClientLink(action.dialog_config, {
                                        entityClass: oro_class_name(app.user, true),
                                        entityId: app.user.id
                                    }) }}
                                </td>
                                <td>{{ action.description|trans }}</td>
                            {% else %}
                                <td><a href=\"{{ action.url }}\">{{ action.label|trans }}</a></td>
                                <td>{{ action.description|trans }}</td>
                            {% endif %}

                        </tr>
                    {% endif %}
                {% endfor %}
                </tbody>
            </table>
        {% else %}
            <h2>{% trans %}Sorry, you don't have any action{% endtrans %}</h2>
        {% endif %}
    </div>
</div>
{% endblock %}
", "@OroNavigation/Shortcut/actionslist.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Shortcut/actionslist.html.twig");
    }
}
