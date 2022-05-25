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

/* @OroScope/macros.html.twig */
class __TwigTemplate_41e0c956b8d41a75fcd1af7e0f63aa8d extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroScope/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroScope/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroScope/macros.html.twig"));

        // line 10
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_renderRestrictionsView($__scopeEntities__ = null, $__scopes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "scopeEntities" => $__scopeEntities__,
            "scopes" => $__scopes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderRestrictionsView"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderRestrictionsView"));

            // line 2
            echo "    ";
            $macros["self"] = $this;
            // line 3
            echo "    ";
            if ((twig_test_empty((isset($context["scopes"]) || array_key_exists("scopes", $context) ? $context["scopes"] : (function () { throw new RuntimeError('Variable "scopes" does not exist.', 3, $this->source); })())) || $this->extensions['Oro\Bundle\ScopeBundle\Twig\ScopeExtension']->isScopesEmpty((isset($context["scopeEntities"]) || array_key_exists("scopeEntities", $context) ? $context["scopeEntities"] : (function () { throw new RuntimeError('Variable "scopeEntities" does not exist.', 3, $this->source); })()), (isset($context["scopes"]) || array_key_exists("scopes", $context) ? $context["scopes"] : (function () { throw new RuntimeError('Variable "scopes" does not exist.', 3, $this->source); })())))) {
                // line 4
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
                echo "
    ";
            } else {
                // line 6
                echo "        ";
                $context["gridHtml"] = twig_call_macro($macros["self"], "macro_renderRestrictionsViewGrid", [(isset($context["scopeEntities"]) || array_key_exists("scopeEntities", $context) ? $context["scopeEntities"] : (function () { throw new RuntimeError('Variable "scopeEntities" does not exist.', 6, $this->source); })()), (isset($context["scopes"]) || array_key_exists("scopes", $context) ? $context["scopes"] : (function () { throw new RuntimeError('Variable "scopes" does not exist.', 6, $this->source); })())], 6, $context, $this->getSourceContext());
                // line 7
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["gridHtml"]) || array_key_exists("gridHtml", $context) ? $context["gridHtml"] : (function () { throw new RuntimeError('Variable "gridHtml" does not exist.', 7, $this->source); })()), "html", null, true);
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 11
    public function macro_renderRestrictionsViewGrid($__scopeEntities__ = null, $__scopes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "scopeEntities" => $__scopeEntities__,
            "scopes" => $__scopes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderRestrictionsViewGrid"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderRestrictionsViewGrid"));

            // line 12
            echo "    <div class=\"grid-container\">
        <table class=\"grid table table-bordered table-condensed table-fixed table-hover\">
            <thead>
                <tr>
                    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["scopeEntities"]) || array_key_exists("scopeEntities", $context) ? $context["scopeEntities"] : (function () { throw new RuntimeError('Variable "scopeEntities" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entityClass"]) {
                // line 17
                echo "                        <th><span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue($context["entityClass"], "label")), "html", null, true);
                echo "</span></th>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityClass'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                </tr>
            </thead>
            <tbody>
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["scopes"]) || array_key_exists("scopes", $context) ? $context["scopes"] : (function () { throw new RuntimeError('Variable "scopes" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["scope"]) {
                // line 23
                echo "                <tr>
                    ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["scopeEntities"]) || array_key_exists("scopeEntities", $context) ? $context["scopeEntities"] : (function () { throw new RuntimeError('Variable "scopeEntities" does not exist.', 24, $this->source); })()));
                foreach ($context['_seq'] as $context["fieldName"] => $context["entityClass"]) {
                    // line 25
                    echo "                        <td>
                            ";
                    // line 26
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["scope"], $context["fieldName"], [], "any", false, false, false, 26)) ? (twig_get_attribute($this->env, $this->source, $context["scope"], $context["fieldName"], [], "any", false, false, false, 26)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Any"))), "html", null, true);
                    echo "
                        </td>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['entityClass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scope'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            </tbody>
        </table>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroScope/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 31,  181 => 29,  172 => 26,  169 => 25,  165 => 24,  162 => 23,  158 => 22,  153 => 19,  144 => 17,  140 => 16,  134 => 12,  114 => 11,  95 => 7,  92 => 6,  86 => 4,  83 => 3,  80 => 2,  60 => 1,  46 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro renderRestrictionsView(scopeEntities, scopes) %}
    {% import _self as self %}
    {% if scopes is empty or oro_scope_is_empty(scopeEntities, scopes) %}
        {{ 'N/A'|trans }}
    {% else %}
        {% set gridHtml = self.renderRestrictionsViewGrid(scopeEntities, scopes) %}
        {{ gridHtml }}
    {% endif %}
{% endmacro %}

{% macro renderRestrictionsViewGrid(scopeEntities, scopes) %}
    <div class=\"grid-container\">
        <table class=\"grid table table-bordered table-condensed table-fixed table-hover\">
            <thead>
                <tr>
                    {% for entityClass in scopeEntities %}
                        <th><span>{{ oro_entity_config_value(entityClass, 'label')|trans }}</span></th>
                    {% endfor %}
                </tr>
            </thead>
            <tbody>
            {% for scope in scopes %}
                <tr>
                    {% for fieldName, entityClass in scopeEntities %}
                        <td>
                            {{ attribute(scope, fieldName) ? : 'Any'|trans }}
                        </td>
                    {% endfor %}
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endmacro %}
", "@OroScope/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ScopeBundle/Resources/views/macros.html.twig");
    }
}
